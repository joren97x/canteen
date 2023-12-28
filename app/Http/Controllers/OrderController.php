<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderedFood;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function order()
    {
        $orders = Order::where('student_id', auth()->user()->id)->get();
        foreach ($orders as $order) {
            $order->orderedFoods = OrderedFood::where('order_id', $order->id)->get();
            foreach($order->orderedFoods as $f) {
                $f->food = Food::find($f->food_id);
            }
            $order->student = User::find($order->student_id);
        }
        return view('student.order-history', ['orders' => $orders]);
    }

    public function order_history()
    {
        $orders = Order::where('status', 'completed')->get();
        foreach ($orders as $order) {
            $order->orderedFoods = OrderedFood::where('order_id', $order->id)->get();
            foreach($order->orderedFoods as $f) {
                $f->food = Food::find($f->food_id);
            }
            $order->student = User::find($order->student_id);
        }
        return view('admin.order-history', ['orders' => $orders]);
    }

    public function pending_orders()
    {
        $orders = Order::where('status', 'Processed')->get();
        foreach ($orders as $order) {
            $order->orderedFoods = OrderedFood::where('order_id', $order->id)->get();
            foreach($order->orderedFoods as $f) {
                $f->food = Food::find($f->food_id);
            }
            $order->student = User::find($order->student_id);
        }
        return view('admin.pending-orders', ['orders' => $orders]);
    }

    public function ready_orders()
    {
        $orders = Order::where('status', 'ready to pick up')->get();
        foreach ($orders as $order) {
            $order->orderedFoods = OrderedFood::where('order_id', $order->id)->get();
            foreach($order->orderedFoods as $f) {
                $f->food = Food::find($f->food_id);
            }
            $order->student = User::find($order->student_id);
        }
        return view('admin.ready-orders', ['orders' => $orders]);
    }


    public function update(Order $order, Request $request)
    {
        $order->status = $request->status;
        $order->update();
        return back();
    }

    public function destroy(Order $order) {
        $order->delete();
        return back();
    }

}
