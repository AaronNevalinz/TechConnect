<?php

namespace App\Policies;

use App\Models\Startup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StartupPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Startup $startup)
    {
        return $user->id === $startup->founder_id;
    }

    public function delete(User $user, Startup $startup)
    {
        return $user->id === $startup->founder_id;
    }
} 