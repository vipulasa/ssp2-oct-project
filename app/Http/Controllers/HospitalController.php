<?php

namespace App\Http\Controllers;

use App\Http\Requests\HospitalRequest;
use App\Http\Resources\HospitalResource;
use App\Models\Hospital;

class HospitalController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Hospital::class);

        return HospitalResource::collection(Hospital::all());
    }

    public function store(HospitalRequest $request)
    {
        $this->authorize('create', Hospital::class);

        return new HospitalResource(Hospital::create($request->validated()));
    }

    public function show(Hospital $hospital)
    {
        $this->authorize('view', $hospital);

        return new HospitalResource($hospital);
    }

    public function update(HospitalRequest $request, Hospital $hospital)
    {
        $this->authorize('update', $hospital);

        $hospital->update($request->validated());

        return new HospitalResource($hospital);
    }

    public function destroy(Hospital $hospital)
    {
        $this->authorize('delete', $hospital);

        $hospital->delete();

        return response()->json();
    }
}
