<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Order;
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
                $order->food = Food::find($order->food_id);
                $order->student = User::find($order->student_id);
                $total += $order->food->price * $order->quantity;
            }
    
            return view('admin.sales-report', ['orders' => $orders, 'total' => $total]);
        }
    
        $orders = Order::where('status', 'completed')->get();
        
        foreach ($orders as $order) {
            $order->food = Food::find($order->food_id);
            $order->student = User::find($order->student_id);
            $total += $order->food->price * $order->quantity;
        }
    
        return view('admin.sales-report', ['orders' => $orders, 'total' => $total]);
    }
}
