@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body row" x-data="jsHome">

                        <template x-for="doctor in doctors">
                            <div>
                                <h2 x-text="doctor.name"></h2>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function jsHome() {
            return {
                doctors: [],
                init() {
                    this.getDoctors();
                },
                getDoctors() {
                    axios.get('/api/doctors')
                        .then(response => {
                            this.doctors = response.data.doctors;
                        })
                        .catch(error => {
                            console.log(error);
                        });
                }
            }
        }

    </script>
@endpush
