<?php

namespace App\Policies;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppointmentPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Appointment $appointment): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Appointment $appointment): bool
    {
    }

    public function delete(User $user, Appointment $appointment): bool
    {
    }

    public function restore(User $user, Appointment $appointment): bool
    {
    }

    public function forceDelete(User $user, Appointment $appointment): bool
    {
    }
}
