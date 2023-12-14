<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enum\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',

        // Profile
        'designation',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',

        // address
        'phone',
        'mobile',
        'address',
        'city',
        'province',
        'postal_code',

        // doctor
        'specialisation_id',
        'license_number',
        'qualifications',

        'hospital_id',

        'consultation_fee',


        'is_active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'qualifications' => 'array',
        'role_id' => UserRole::class
    ];

    public function specialisation()
    {
        return $this->belongsTo(Specialisation::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
