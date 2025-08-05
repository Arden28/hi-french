<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = ['course_section_id', 'title', 'duration'];

    public function section()
    {
        return $this->belongsTo(CourseSection::class, 'course_section_id');
    }
}
