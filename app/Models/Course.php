<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'user_id',
        'topic_id',
        'title',
        'description',
        'thumbnail',
        'published',
        'status',
    ];

    // Course writer
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function thumbnail()
    {
        return $this->belongsTo(File::class, 'thumbnail');
    }
}
