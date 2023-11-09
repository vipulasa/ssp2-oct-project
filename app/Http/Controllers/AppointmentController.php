<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Http\Resources\AppointmentResource;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('admin.appointment.index');
    }

    public function store(AppointmentRequest $request)
    {
        $this->authorize('create', Appointment::class);

        return new AppointmentResource(Appointment::create($request->validated()));
    }

    public function show(Appointment $appointment)
    {
        return view('admin.appointment.show');
    }

    public function create()
    {
        return view('admin.appointment.form');
    }

    public function edit(Appointment $appointment)
    {
        return view('admin.appointment.form');
    }

    public function update(AppointmentRequest $request, Appointment $appointment)
    {
        $this->authorize('update', $appointment);

        $appointment->update($request->validated());

        return new AppointmentResource($appointment);
    }

    public function destroy(Appointment $appointment)
    {
        $this->authorize('delete', $appointment);

        $appointment->delete();

        return response()->json();
    }
}
