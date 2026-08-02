<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use MongoDB\Client;
use MongoDB\BSON\ObjectId;

class AdminBlogController extends Controller
{
    /**
     * Display listing of blogs.
     */
    public function index(Request $request)
    {
        $query = Blog::latest();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%")
                  ->orWhere('tag', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            if ($request->status === 'published') {
                $query->where('is_published', true);
            } elseif ($request->status === 'draft') {
                $query->where('is_published', false);
            }
        }

        $blogs = $query->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show create form.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a new blog.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => [
                'nullable', 'string', 'max:255',
                function ($attribute, $value, $fail) {
                    if ($value && Blog::where('slug', $value)->exists()) {
                        $fail('This slug is already in use.');
                    }
                },
            ],
            'author' => 'required|string|max:255',
            'tag' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:5120',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
            'is_published' => 'nullable|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $this->storeBlogImage($request->file('image'));
        }

        $validated['is_published'] = $request->boolean('is_published');
        $validated['published_at'] = $validated['published_at'] ?? ($validated['is_published'] ? now() : null);

        Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    /**
     * Show edit form.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update blog.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => [
                'nullable', 'string', 'max:255',
                function ($attribute, $value, $fail) use ($blog) {
                    if ($value && Blog::where('slug', $value)->where('_id', '!=', $blog->getKey())->exists()) {
                        $fail('This slug is already in use.');
                    }
                },
            ],
            'author' => 'required|string|max:255',
            'tag' => 'nullable|string|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:5120',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
            'is_published' => 'nullable|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $this->deleteBlogImage($blog->getRawOriginal('image'));
            $validated['image'] = $this->storeBlogImage($request->file('image'));
        }

        $validated['is_published'] = $request->boolean('is_published');

        if ($validated['is_published'] && !$blog->published_at) {
            $validated['published_at'] = $validated['published_at'] ?? now();
        }

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

    /**
     * Delete blog.
     */
    public function destroy(Blog $blog)
    {
        $this->deleteBlogImage($blog->getRawOriginal('image'));
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully!');
    }

    /** Store an uploaded blog image in MongoDB GridFS, not Render's temporary disk. */
    private function storeBlogImage($image): string
    {
        $stream = fopen($image->getRealPath(), 'rb');

        try {
            $fileId = $this->gridFsBucket()->uploadFromStream(
                $image->hashName(),
                $stream,
                ['metadata' => ['contentType' => $image->getMimeType()]]
            );
        } finally {
            fclose($stream);
        }

        return 'gridfs:' . (string) $fileId;
    }

    /** Remove a replaced or deleted GridFS image so it does not consume storage. */
    private function deleteBlogImage(?string $image): void
    {
        $fileId = Str::after((string) $image, 'gridfs:');

        if (Str::startsWith((string) $image, 'gridfs:') && ObjectId::isValid($fileId)) {
            $this->gridFsBucket()->delete(new ObjectId($fileId));
        }
    }

    private function gridFsBucket()
    {
        return (new Client(config('database.connections.mongodb.dsn')))
            ->selectDatabase(config('database.connections.mongodb.database'))
            ->selectGridFSBucket(['bucketName' => 'blog_images']);
    }
}
