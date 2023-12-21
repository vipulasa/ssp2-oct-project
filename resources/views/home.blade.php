@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <x-analytics type="page_hit"/>

                    <div class="card-body row">
                        @foreach($doctors as $doctor)
                            <div class="col-md-4 mb-3">
                                <x-doctor :doctor="$doctor"/>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
