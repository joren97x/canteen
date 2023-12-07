<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function order()
    {
        return view('student.order-history', ['orders' => Order::where('student_id', auth()->user()->id)->get()]);
    }

    public function order_history()
    {
        $orders = Order::where('status', 'completed')->get();
        foreach ($orders as $order) {
            $order->food = Food::find($order->food_id);
            $order->student = User::find($order->student_id);
        }
        return view('admin.order-history', ['orders' => $orders]);
    }

    public function pending_orders()
    {
        $orders = Order::where('status', 'pending')->get();
        foreach ($orders as $order) {
            $order->food = Food::find($order->food_id);
            $order->student = User::find($order->student_id);
        }
        return view('admin.pending-orders', ['orders' => $orders]);
    }

    public function update(Order $order)
    {
        $order->status = "completed";
        $order->update();
        return back();
    }
}
