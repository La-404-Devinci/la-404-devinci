<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $table = 'topics';

    protected $fillable = [
        'slug',
        'name',
        'description',
        'icon',
        'category',
        'published',
        'status',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'topic_id');
    }

    public function icon()
    {
        return $this->belongsTo(File::class, 'icon');
    }
}
