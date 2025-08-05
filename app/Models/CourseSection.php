<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    protected $fillable = ['course_id', 'title', 'position'];

    public function lectures()
    {
        return $this->hasMany(Lecture::class)->orderBy('position');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
