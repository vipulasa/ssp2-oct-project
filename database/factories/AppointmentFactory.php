<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;

    public function definition(): array
    {
        return [
            'date_time' => Carbon::now(),
            'hospital_id' => $this->faker->randomNumber(),
            'doctor_id' => $this->faker->randomNumber(),
            'customer_id' => $this->faker->randomNumber(),
            'specialisation_id' => $this->faker->randomNumber(),
            'appointment_fee' => $this->faker->randomFloat(),
            'status' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
