<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'date_time',
        'hospital_id',
        'doctor_id',
        'customer_id',
        'specialisation_id',
        'appointment_fee',
        'status',
    ];

    protected $casts = [
        'date_time' => 'datetime',
    ];
}
