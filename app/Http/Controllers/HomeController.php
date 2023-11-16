<?php

namespace App\Http\Controllers;

use App\Enum\UserRole;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        $doctors = (new User())
            ->where('role_id', UserRole::Doctor)
            ->get();

        return view('home', [
            'doctors' => $doctors,
        ]);
    }
}
