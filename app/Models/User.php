<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $casts = [
        'is_mentor' => 'boolean',
    ];
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'is_mentor'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function courses(): belongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_user');
    }

    public function canAccessPanel(Panel $panel): bool
    {
//        dd(str_ends_with($this->email, '@admin.com'));
        return str_ends_with($this->email, '@admin.com') or $this->is_mentor;
    }

    public function mentor(): HasOne
    {
        return $this->hasOne(Mentor::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function courseComments(): HasMany
    {
        return $this->hasMany(CourseComment::class);
    }
}
