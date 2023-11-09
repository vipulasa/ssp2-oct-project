<?php

namespace App\Http\Controllers;

use App\Http\Requests\HospitalRequest;
use App\Http\Resources\HospitalResource;
use App\Models\Hospital;

class HospitalController extends Controller
{
    public function index()
    {
        return view('admin.hospital.index');
    }

    public function store(HospitalRequest $request)
    {
        $this->authorize('create', Hospital::class);

        return new HospitalResource(Hospital::create($request->validated()));
    }

    public function show(Hospital $hospital)
    {
       return view('admin.hospital.show');
    }

    public function create()
    {
        return view('admin.hospital.form');
    }

    public function edit(Hospital $hospital)
    {
        return view('admin.hospital.form');
    }

    public function update(HospitalRequest $request, Hospital $hospital)
    {

    }

    public function destroy(Hospital $hospital)
    {
        $this->authorize('delete', $hospital);

        $hospital->delete();

        return response()->json();
    }
}
