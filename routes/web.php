<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/dev', function () {
    dd(\App\Models\Hospital::all());
});

Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function(){

        /*
         * Users
         *
         * Manage users and their profiles
         */
        Route::resource('/users', \App\Http\Controllers\UserController::class);

        /*
         * Hospitals
         *
         * Manage hospitals and their profiles
         */
        Route::resource('/hospitals', \App\Http\Controllers\HospitalController::class);

        /*
         * Appointments
         *
         * Manage appointments and their profiles
         */
        Route::resource('/appointments', \App\Http\Controllers\AppointmentController::class);

        /*
         * Specializations
         *
         * Manage specializations and their profiles
         */
        Route::resource('/specialisations', \App\Http\Controllers\SpecializationController::class);


});






Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');


