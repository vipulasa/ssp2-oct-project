<?php

namespace App\Policies;

use App\Models\Hospital;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HospitalPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, Hospital $hospital)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, Hospital $hospital)
    {
    }

    public function delete(User $user, Hospital $hospital)
    {
//        return $user->role === 'admin';
    }

    public function restore(User $user, Hospital $hospital)
    {
    }

    public function forceDelete(User $user, Hospital $hospital)
    {
    }
}
