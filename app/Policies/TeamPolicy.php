<?php

namespace App\Policies;

use App\Models\Team;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->is_staff;
    }

    public function view(User $user, Team $team): bool
    {
        return $user->is_staff;
    }

    public function create(User $user): bool
    {
        return $user->is_staff;
    }

    public function update(User $user, Team $team): bool
    {
        return $user->is_staff;
    }

    public function delete(User $user, Team $team): bool
    {
        return $user->is_staff;
    }

    public function restore(User $user, Team $team): bool
    {
        return $user->is_staff;
    }

    public function forceDelete(User $user, Team $team): bool
    {
        return $user->is_superuser;
    }
}
