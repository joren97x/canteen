<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderedFood;
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

    public function clear_cart() {
        $orders = Cart::where('user_id', auth()->user()->id)->get();
        $orders->delete();
        return back();
    }

    public function destroy(Cart $food) {
        $food->delete();
        return back();
    }

    public function confirm_payment() {
        $foodFromCart = Cart::where('user_id', auth()->user()->id)->get();

        $totalQuantity = 0;
        $totalPrice = 0;

        dd($foodFromCart);
        foreach($foodFromCart as $f) {
            $food = Food::find($f->food_id);
            $totalQuantity += $f->quantity;
            $totalPrice += ($f->quantity * $food->price);
        }

        $o = [
            'student_id' => auth()->user()->id,
            'quantity' => $totalQuantity,
            'status' => 'Processed',
            'total_price' => $totalPrice,
        ];
        $order = Order::create($o);
        $orderId = $order->id;
        foreach ($foodFromCart as $food) {
            $price = $food->price * $food->quantity;
            OrderedFood::create([
                'order_id' => $orderId,
                'food_id' => $food->food_id,
                'quantity' => $food->quantity,
                'price' => $price,
            ]);
        }
        Cart::where('user_id' ,auth()->user()->id)->delete();
        return response('confirmed');
    }

}
