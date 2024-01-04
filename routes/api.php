<?php

use App\Enum\UserRole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {

        $user = auth()->user();

    return $user->email;
});

Route::get('/hospitals', function (Request $request) {
    return response()->json([
        'hospitals' => \App\Models\Hospital::all(),
    ]);
});

Route::get('doctors', function (Request $request) {

    $doctors = (new User())
        ->where('role_id', UserRole::Doctor)
        ->get();

    return response()->json([
        'doctors' => $doctors
    ]);
});

