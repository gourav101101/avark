<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use MongoDB\BSON\ObjectId;

class AdminTestimonialController extends Controller
{
    /**
     * Display listing of testimonials.
     */
    public function index(Request $request)
    {
        $query = Testimonial::ordered();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('client_name', 'like', "%{$search}%")
                  ->orWhere('client_company', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            if ($request->status === 'active') {
                $query->where('is_active', true);
            } elseif ($request->status === 'inactive') {
                $query->where('is_active', false);
            }
        }

        $testimonials = $query->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show create form.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a new testimonial.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'client_position' => 'nullable|string|max:255',
            'client_company' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'content' => 'required|string',
            'rating' => 'nullable|integer|min:1|max:5',
            'is_active' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $this->storeAvatar($request->file('avatar'));
        }

        $validated['is_active'] = $request->boolean('is_active');
        $validated['rating'] = $validated['rating'] ?? 5;
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully!');
    }

    /**
     * Show edit form.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update testimonial.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'client_position' => 'nullable|string|max:255',
            'client_company' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'content' => 'required|string',
            'rating' => 'nullable|integer|min:1|max:5',
            'is_active' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            $this->deleteAvatar($testimonial->getRawOriginal('avatar'));
            $validated['avatar'] = $this->storeAvatar($request->file('avatar'));
        }

        $validated['is_active'] = $request->boolean('is_active');

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully!');
    }

    /**
     * Delete testimonial.
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->deleteAvatar($testimonial->getRawOriginal('avatar'));
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }

    /**
     * Toggle active status (AJAX).
     */
    public function toggleStatus(Testimonial $testimonial)
    {
        $testimonial->update(['is_active' => !$testimonial->is_active]);
        return back()->with('success', 'Status updated!');
    }

    /** Store testimonial avatars in MongoDB GridFS, not Render's temporary disk. */
    private function storeAvatar($avatar): string
    {
        $stream = fopen($avatar->getRealPath(), 'rb');

        try {
            $fileId = $this->gridFsBucket()->uploadFromStream(
                $avatar->hashName(),
                $stream,
                ['metadata' => ['contentType' => $avatar->getMimeType()]]
            );
        } finally {
            fclose($stream);
        }

        return 'gridfs-testimonial:' . (string) $fileId;
    }

    private function deleteAvatar(?string $avatar): void
    {
        $fileId = Str::after((string) $avatar, 'gridfs-testimonial:');

        if (!Str::startsWith((string) $avatar, 'gridfs-testimonial:') || preg_match('/^[a-f0-9]{24}$/i', $fileId) !== 1) {
            return;
        }

        try {
            $this->gridFsBucket()->delete(new ObjectId($fileId));
        } catch (\Throwable $exception) {
            // A missing old avatar must not prevent an admin from deleting a testimonial.
            report($exception);
        }
    }

    private function gridFsBucket()
    {
        return DB::connection('mongodb')
            ->getDatabase()
            ->selectGridFSBucket(['bucketName' => 'testimonial_avatars']);
    }
}
