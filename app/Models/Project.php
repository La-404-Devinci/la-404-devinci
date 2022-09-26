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
        'content',
        'thumbnail',
        'website',
        'dribbble',
        'github',
        'instagram',
        'published',
        'status',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'projects_users');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'projects_tags');
    }

    public function thumbnail()
    {
        return $this->belongsTo(File::class, 'thumbnail');
    }
}
