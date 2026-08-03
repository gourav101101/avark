<?php

namespace App\Models;

use Illuminate\Support\Str;
use MongoDB\Laravel\Eloquent\Model;

class Testimonial extends Model
{
    /** Store testimonials in the persistent MongoDB connection. */
    protected $connection = 'mongodb';

    protected $fillable = [
        'client_name',
        'client_position',
        'client_company',
        'avatar',
        'content',
        'rating',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'rating' => 'integer',
        'sort_order' => 'integer',
    ];

    /**
     * Keep legacy storage-disk uploads working on hosts without a public/storage link.
     */
    public function getAvatarAttribute($value)
    {
        if (Str::startsWith($value, 'gridfs-testimonial:')) {
            return route('media.testimonial-avatar', ['fileId' => Str::after($value, 'gridfs-testimonial:')]);
        }

        if (Str::startsWith($value, 'storage/testimonials/')) {
            return 'media/testimonials/' . basename($value);
        }

        return $value;
    }

    /**
     * Scope to get only active testimonials.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to order by sort_order.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc');
    }
}
