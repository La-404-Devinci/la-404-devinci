<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'formation_id',
        'slug',
        'title',
        'text',
        'thumbnail',
        'published',
        'status',
    ];

    /** ====================================================
     * Relations
     * =================================================== */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /** ====================================================
     * Functions
     * =================================================== */
}
