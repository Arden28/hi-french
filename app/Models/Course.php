<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'what_you_learn',
        'video_hours',
        'instructor_id',
        'rating',
        'review_count',
        'student_count',
        'price',
        'original_price',
        'discount_percent',
        'certificate',
        'resource_count',
        'thumbnail',
        'type',
        'level',
        'language',
        'status',
    ];

    protected $casts = [
        'what_you_learn' => 'array',
    ];

    // 🟡 Find course by slug
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

    // 🟡 Link to course post
    public function getUrlAttribute(): string
    {
        return route('course.show', ['slug' => $this->slug]);
    }

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function sections()
    {
        return $this->hasMany(CourseSection::class)->orderBy('position');
    }
    public function lectures()
    {
        return $this->hasManyThrough(Lecture::class, CourseSection::class);
    }

}
