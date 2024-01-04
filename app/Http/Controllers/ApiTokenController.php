<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiTokenController extends Controller
{
    public function index()
    {
        return view('admin.tokens.index', [
            'tokens' => auth()->user()->tokens,
        ]);
    }


    public function store(Request $request)
    {
        $user = auth()->user();

        $token = $user->createToken($request->name);

        return view('admin.tokens.index', [
            'token' => $token,
            'tokens' => auth()->user()->tokens,
        ]);
    }

    public function show($id)
    {
        return view('admin.tokens.show', [
            'token' => auth()->user()->tokens()->where('id', $id)->firstOrFail(),
        ]);
    }


    public function destroy($id)
    {
        $user = auth()->user();

        $user->tokens()->where('id', $id)->delete();

        return redirect()->route('api-token.index');
    }
}
