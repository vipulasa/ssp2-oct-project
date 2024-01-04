@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1>API Tokens</h1>
                <p>API tokens are used to authenticate with the API. You can create as many tokens as you like. You can
                    also delete tokens that you no longer need.</p>


                @if(isset($token))
                    <div class="alert alert-danger">
                        <strong>Warning!</strong> This is your new API token. You will not be able to see it again. <br>
                    </div>
                    <div class="alert alert-info">
                        {{ $token->plainTextToken }}
                    </div>
                @endif


                <form action="{{ route('api-token.store') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Name">
                    <button type="submit">Create Token</button>
                </form>

                <div class="card">

                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tokens as $token)
                            <tr>
                                <td>{{ $token->id }}</td>
                                <td>{{ $token->name }}</td>
                                <td>
                                    <a href="{{ route('api-token.show', $token->id) }}">Show</a>
                                    <form action="{{ route('api-token.destroy', $token->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <x-analytics type="page_hit"/>
@endsection
