<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons';

    protected $fillable = [
        'slug',
        'course_id',
        'title',
        'description',
        'lesson_number',
        'content',
        'video',
        'thumbnail',
        'published',
        'status',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function video()
    {
        return $this->belongsTo(File::class, 'video');
    }

    public function thumbnail()
    {
        return $this->belongsTo(File::class, 'thumbnail');
    }
}
