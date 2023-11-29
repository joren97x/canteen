<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function store(Request $request) {
        $foodToCart = $request->validate([
            'user_id' => 'required',
            'food_id' => 'required',
            'quantity' => 'required'
        ]);
        Cart::create($foodToCart);
        return redirect('/student/cart');
    }

    public function index() {

        $orders = Cart::where('user_id', auth()->user()->id)->get();
        $total = 0;
        foreach($orders as $order) {
            $order->food = Food::find($order['food_id']);
            $total += $order->food['price'] * $order['quantity'];
        }
        return view('student.cart', ['orders' => $orders, 'total' => $total]);
    }

    public function payment(Request $request) {
        return view('student.payment', ['total' => $request->total]);
    }

    public function confirm_payment() {
        $orders = Cart::where('user_id', auth()->user()->id)->get();
        foreach($orders as $order) {
            $o = [
                'food_id' => $order->food_id,
                'student_id' => $order->user_id,
                'quantity' => $order->quantity,
                'status' => 'pending'
            ];
            Order::create($o);
        }
        Cart::where('user_id' ,auth()->user()->id)->delete();
        // $orders->delete();
        return redirect('/student/cart');
    }

}
