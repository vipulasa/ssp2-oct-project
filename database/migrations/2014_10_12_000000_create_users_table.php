<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->tinyInteger('role_id')->default(3);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');


            // Profile
            $table->string('designation')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();

            // address
            $table->integer('phone')->nullable();
            $table->integer('mobile')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('postal_code')->nullable();

            // doctor
            $table->foreignId('specialisation_id')
                ->nullable()
                ->constrained('specialisations');


            $table->string('license_number')->nullable();
            $table->json('qualifications')->nullable();

            $table->foreignId('hospital_id')
                ->nullable()
                ->constrained('hospitals');

            $table->float('consultation_fee')->nullable();

            $table->boolean('is_active')->default(1);


            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
