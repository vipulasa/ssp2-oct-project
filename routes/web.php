<?php

use App\Models\User;
use Illuminate\Http\Request;
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

// 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

Auth::routes();

$hospitalSystem = app()->make('HospitalSystem');

$hospitalSystem->setTitle('HOSPITAL-001');


Route::get('/analytic-hit', function (Request $request) {

    $request->validate([
        'analytic_type' => 'required',
    ]);

    $user_id = auth()->id();

    $session_id = request()->session()->getId();

    $analytic_type = request()->get('analytic_type');

    $page = request()->get('page');

    \App\Models\AnalyticData::create([
        'user_id' => $user_id,
        'session_id' => $session_id,
        'analytic_type' => $analytic_type,
        'page' => $page,
    ]);

    return response()->json([
        'message' => 'Analytic data created successfully'
    ]);

});

Route::get('/dev', function () {

//    $user = auth()->user();
//
//    dd($user->createToken('api_token'));
////    dd($user->createToken('test'));



//    $user_id = auth()->id();
//
//    $session_id = request()->session()->getId();
//
//
//    dd($user_id, $session_id, request()->all());


//    echo date('H:i:s') . '<br>';
//
//    // set the memory limit to 0
//    ini_set('memory_limit', '-1');
//
//    // set the maximum execution time to 0
//    set_time_limit(0);
//
//    foreach(range(0, 10) as $i){
//
//        // dispatch the job
////        \App\Jobs\CreateUser::dispatch($i);
//
////        \App\Jobs\SendWelcomeMailJob::dispatch($i);
//
//        // create the user
////        (new User())->create([
////            'name' => 'User ' . $i,
////            'email' => 'user' . $i . '@gmail.com',
////            'password' => bcrypt('password'),
////            'email_verified_at' => now(),
////            'remember_token' => Str::random(10),
////        ]);
//    }
//
//    echo date('H:i:s') . '<br>';

});

Route::get('cart/{cart}', [
    \App\Http\Controllers\CartController::class,
    'index'
])->name('cart.index');

Route::get('analytics', [
    \App\Http\Controllers\AnalyticsController::class,
    'index'
])->name('analytics.index');


Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function () {

        Route::resource('/api-token', \App\Http\Controllers\ApiTokenController::class);

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


Route::get('/js-home', function(){

        return view('js_home');

    })->name('js-home');

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
