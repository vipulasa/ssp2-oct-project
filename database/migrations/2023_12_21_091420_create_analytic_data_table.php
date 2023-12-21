<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('analytic_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('session_id');
            $table->string('analytic_type');
            $table->string('page');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('analytic_data');
    }
};
