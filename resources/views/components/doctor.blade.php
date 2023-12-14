@props(['doctor'])

<div class="card card-2 p-4 pt-4">
    <div class=" image d-flex flex-column justify-content-center align-items-center">
        <button class="btn btn-secondary">
            <img src="https://ui-avatars.com/api/?name={{ $doctor->first_name }}+{{ $doctor->last_name }}" height="100"
                 width="100"/>
        </button>
        <span class="name mt-3">{{ $doctor->first_name }} {{ $doctor->last_name }}</span>
        <div class="d-flex flex-row justify-content-center align-items-center gap-2">
            <span
                class="idd1">{{ $doctor->license_number }}</span>
            <span><i class="fa fa-copy"></i></span></div>
        <div class="text mt-3">
            <span>
                {{ $doctor->specialisation->title }}
            </span>
        </div>
        @livewire('consult-now-btn', ['doctor' => $doctor], key($doctor->id))
    </div>
</div>
