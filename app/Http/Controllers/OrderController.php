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
            $order->total = 0;
            foreach($order->orderedFoods as $f) {
                $f->food = Food::find($f->food_id);
                $order->total += $f->food->price * $f->quantity;
            }
            $order->student = User::find($order->student_id);
        }
        return view('student.order-history', ['orders' => $orders]);
    }

    public function order_history()
    {
        $orders = Order::where('status', 'completed')->get();
        // dd($orders);
        foreach ($orders as $order) {
            $order->student = User::find($order->student_id);
            $orderedFoods = OrderedFood::where('order_id', $order->id)->get();
            $foods = [];
            $order->total = 0;
            foreach($orderedFoods as $orderedFood) {
                $food = Food::find($orderedFood->food_id);
                $food->quantity = $orderedFood->quantity;
                $order->total += $orderedFood->quantity * $food->price;
                $foods[] = $food;
            }
            $order->foods = $foods;
        }
        return view('admin.order-history', ['orders' => $orders]);
    }

    public function pending_orders()
    {
        $orders = Order::where('status', 'Processed')->get();
        foreach ($orders as $order) {
            $order->orderedFoods = OrderedFood::where('order_id', $order->id)->get();
            $order->total = 0;

            foreach($order->orderedFoods as $f) {
                $f->food = Food::find($f->food_id);
                $order->total += $f->quantity * $f->food->price;
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
            $order->total = 0;
            foreach($order->orderedFoods as $f) {
                $f->food = Food::find($f->food_id);
                $order->total += $f->quantity * $f->food->price;
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
