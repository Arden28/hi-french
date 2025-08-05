<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'status',
        // 'published_at',
        'cover'
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];

    // 🟡 Find blog by slug
    public static function findBySlug(string $slug): ?self
    {
        return static::where('slug', $slug)->firstOrFail();
    }

    // 🟢 Human-readable publish date (e.g., "3 days ago")
    public function getPublishedAgoAttribute(): string
    {
        return $this->published_at
            ? $this->published_at->diffForHumans()
            : 'Draft';
    }

    // 🟢 Shortened content preview (first 250 chars, no HTML)
    public function getContentPreviewAttribute(): string
    {
        return Str::limit(strip_tags($this->content), 250);
    }

    // 🟡 Link to blog post
    public function getUrlAttribute(): string
    {
        return route('blog.detail', ['slug' => $this->slug]);
    }

    public function category(){
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }

    public function author(){
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
}
