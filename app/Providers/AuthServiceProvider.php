<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Appointment;
use App\Models\Hospital;
use App\Policies\AppointmentPolicy;
use App\Policies\HospitalPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Hospital::class => HospitalPolicy::class,
        Appointment::class => AppointmentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
