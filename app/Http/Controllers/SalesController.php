<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderedFood;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    //
    public function sales_report(Request $request) {
        $total = 0;
        if ($request->start_date && $request->end_date) {
            $start_date = $request->start_date;
            $end_date = $request->end_date;
    
            $orders = Order::where('status', 'completed')
                ->whereBetween('created_at', [$start_date, $end_date])
                ->get();

                foreach ($orders as $order) {
                    $order->student = User::find($order->student_id);
                    $orderedFoods = OrderedFood::where('order_id', $order->id)->get();
                    $foods = [];
                    $order->total = 0;
                    foreach($orderedFoods as $orderedFood) {
                        $food = Food::find($orderedFood->food_id);
                        $order->total += $orderedFood->quantity * $food->price;
                        $total += $orderedFood->quantity * $food->price;
                        $foods[] = $food;
                    }
                    $order->foods = $foods;
                }
    
            return view('admin.sales-report', ['orders' => $orders, 'total' => $total]);
        }
    
        $orders = Order::where('status', 'completed')->get();
        // dd($orders);
        foreach ($orders as $order) {
            $order->student = User::find($order->student_id);
            $orderedFoods = OrderedFood::where('order_id', $order->id)->get();
            $foods = [];
            $order->total = 0;
            foreach($orderedFoods as $orderedFood) {
                $food = Food::find($orderedFood->food_id);
                $order->total += $orderedFood->quantity * $food->price;
                $foods[] = $food;
                $total += $orderedFood->quantity * $food->price;
            }
            $order->foods = $foods;
        }
        return view('admin.sales-report', ['orders' => $orders, 'total' => $total]);
    }
}
