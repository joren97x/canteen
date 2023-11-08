<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function store(Request $request) {
        $foodToCart = $request->validate([
            'food_id' => 'required',
            'quantity' => 'required'
        ]);
        Cart::create($foodToCart);
        return view('Customer.cart');
    }
}
