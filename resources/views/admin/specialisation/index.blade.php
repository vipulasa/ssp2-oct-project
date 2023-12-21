@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{ app()->make('HospitalSystem')->getTitle() }}</h1>

        <div class="row justify-content-center bg-white p-2">
            <div class="col-md-12">
                <div class="d-flex justify-content-between mb-4 mt-4">
                    <h1>Specialisations</h1>
                    <a href="{{ route('specialisations.create') }}" class="h-25 btn btn-success">
                        Add Specialisation
                    </a>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Specialisation</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($specialisations as $specialisation)
                        <tr>
                            <td>{{ $specialisation->title }}</td>
                            <td>{{ $specialisation->status ? 'Active' : 'In-Active' }}</td>
                            <td>
                                <a href="{{ route('specialisations.edit', $specialisation->id) }}"
                                   class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('specialisations.destroy', $specialisation->id) }}"
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="">
                    {{ $specialisations->links() }}
                </div>
            </div>
        </div>
    </div>
    <x-analytics type="page_hit"/>
@endsection
