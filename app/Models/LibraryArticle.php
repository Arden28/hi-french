<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibraryArticle extends Model
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
        'description',
        'content',
        'status',
        'published_at',
        'cover',
        'author',
        'price'
    ];
}
