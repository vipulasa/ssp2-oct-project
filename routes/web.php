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

    echo date('H:i:s') . '<br>';

    // set the memory limit to 0
    ini_set('memory_limit', '-1');

    // set the maximum execution time to 0
    set_time_limit(0);

    foreach(range(0, 10) as $i){

        // dispatch the job
//        \App\Jobs\CreateUser::dispatch($i);

//        \App\Jobs\SendWelcomeMailJob::dispatch($i);

        // create the user
//        (new User())->create([
//            'name' => 'User ' . $i,
//            'email' => 'user' . $i . '@gmail.com',
//            'password' => bcrypt('password'),
//            'email_verified_at' => now(),
//            'remember_token' => Str::random(10),
//        ]);
    }

    echo date('H:i:s') . '<br>';

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
