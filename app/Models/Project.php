<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'description',
        'thumbnail',
        'website',
        'dribbble',
        'github',
        'instagram',
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
