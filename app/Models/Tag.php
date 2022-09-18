<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'label'
    ];

    /** ====================================================
     * Relations
     * =================================================== */
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function formations()
    {
        return $this->hasManyThrough(Formation::class, Course::class);
    }

    /** ====================================================
     * Functions
     * =================================================== */
}
