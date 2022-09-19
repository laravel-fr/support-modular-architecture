<?php

namespace App\Modules\Profil\Policies;

use App\Modules\User\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilPolicy
{
    use HandlesAuthorization;

    public function before(?User $user, $ability)
    {
        // return true;
    }

    public function viewAny(?User $user)
    {
        return true;
    }

    public function store(?User $user)
    {
        return false;
    }
}
