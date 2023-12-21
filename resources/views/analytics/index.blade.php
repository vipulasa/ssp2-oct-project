@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Page</th>
                            <th>Visits</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($analytics as $analytic)
                        <tr>
                            <td>
                                {{ $analytic->user_id }}
                                {{ $analytic->session_id }}
                            </td>
                            <td>{{ $analytic->analytic_type }}</td>
                            <td>{{ $analytic->page }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $analytics->links() }}
            </div>
        </div>
    </div>
</div>
<x-analytics type="page_hit"/>
@endsection
