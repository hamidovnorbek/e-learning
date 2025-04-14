<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mentor_id',
        'title',
        'slug',
        'description',
        'image_path',
        'intro_video',
        'price',
        'is_published',
        'published_at',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'is_published' => 'boolean',
        'published_at' => 'timestamp',
    ];

    public function lessons(): hasMany
    {
        return $this->hasMany(Lesson::class);
    }
    public function students(): belongsToMany
    {
        return $this->belongsToMany(User::class, 'course_user');
    }

    public function mentor(): belongsTo
    {
        return $this->belongsTo(Mentor::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(CourseComment::class);
    }
}
