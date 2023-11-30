<?php

namespace App\Http\Controllers;

use App\Models\Specialisation;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    public function index()
    {
        app()
            ->make('HospitalSystem')
            ->setTitle('This is the page title');

        $name = 'This is the active page name';

        return view('admin.specialisation.index', [
            'specialisations' => Specialisation::paginate(10),
            'active_page' => $name
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
