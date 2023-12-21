@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Cart') }}</div>
                    <div class="card-body row">
                        @livewire('cart', ['cart' => $cart])
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-analytics type="page_hit"/>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
