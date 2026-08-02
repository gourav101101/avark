<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use MongoDB\BSON\ObjectId;

class PublicMediaController extends Controller
{
    /**
     * Serve uploads created before media was moved to the public uploads directory.
     */
    public function legacy(string $folder, string $filename)
    {
        abort_unless(in_array($folder, ['blogs', 'testimonials'], true), 404);
        abort_unless(basename($filename) === $filename, 404);

        $path = $folder . '/' . $filename;
        abort_unless(Storage::disk('public')->exists($path), 404);

        return response()->file(Storage::disk('public')->path($path));
    }

    /** Stream a blog image from MongoDB GridFS. */
    public function blogImage(string $fileId)
    {
        abort_unless(preg_match('/^[a-f0-9]{24}$/i', $fileId) === 1, 404);

        $database = DB::connection('mongodb')->getDatabase();
        $objectId = new ObjectId($fileId);
        $file = $database->selectCollection('blog_images.files')->findOne(['_id' => $objectId]);

        abort_unless($file, 404);

        $contentType = $file['metadata']['contentType'] ?? 'application/octet-stream';
        $stream = $database->selectGridFSBucket(['bucketName' => 'blog_images'])
            ->openDownloadStream($objectId);

        return response()->stream(function () use ($stream) {
            fpassthru($stream);
            fclose($stream);
        }, 200, [
            'Content-Type' => $contentType,
            'Cache-Control' => 'public, max-age=31536000, immutable',
        ]);
    }
}
