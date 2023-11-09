<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_time');
            $table->unsignedBigInteger('hospital_id');
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('specialisation_id')->nullable();
            $table->float('appointment_fee');
            $table->tinyInteger('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
