<?php

namespace App\Http\Controllers;

use App\Models\Specialisation;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    public function index()
    {
        return view('admin.specialisation.index', [
            'specializations' => Specialisation::all()
        ]);
    }

    public function create()
    {
        return view('admin.specialisation.form');
    }

    public function store(Request $request)
    {
    }

    public function show(Specialisation $specialisation)
    {
        return view('admin.specialisation.show');
    }

    public function edit(Specialisation $specialisation)
    {
        return view('admin.specialisation.form');
    }

    public function update(Request $request, Specialisation $specialisation)
    {
    }

    public function destroy(Specialisation $specialisation)
    {
    }
}
