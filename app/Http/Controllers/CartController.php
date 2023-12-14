<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request, Cart $cart)
    {
        // check if the cart belongs to the current user
        if ($cart->user_id !== $request->user()->id) {
            abort(403);
        }

        return view('cart.index', compact('cart'));
    }
}
