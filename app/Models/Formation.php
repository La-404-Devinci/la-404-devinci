<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'description',
        'thumbnail',
        'github',
        'published',
        'status',
    ];

    /** ====================================================
     * Relations
     * =================================================== */
    public function tags()
    {
        return $this->hasManyThrough(Tag::class, Course::class);
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, Course::class);
    }
    /** ====================================================
     * Functions
     * =================================================== */
}
