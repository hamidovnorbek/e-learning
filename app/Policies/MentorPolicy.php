<?php

namespace App\Policies;

use App\Models\Mentor;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MentorPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->email == 'admin@admin.com';;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Mentor $mentor): bool
    {
        return $user->email == 'admin@admin.com';;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->email == 'admin@admin.com';;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Mentor $mentor): bool
    {
        return $user->email == 'admin@admin.com';;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Mentor $mentor): bool
    {
        return $user->email == 'admin@admin.com';lse;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Mentor $mentor): bool
    {
        return $user->email == 'admin@admin.com';;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Mentor $mentor): bool
    {
        return $user->email == 'admin@admin.com';;
    }
}
