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
        $orders = Order::where('student_id', auth()->user()->id)->get();
        foreach($orders as $order) {
            $order->food = Food::find($order->food_id);
        }
        return view('student.order-history', ['orders' => $orders]);
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

    public function pending_orders()
    {
        $orders = Order::where('status', '!=', 'Completed')->get();
        foreach ($orders as $order) {
            $order->food = Food::find($order->food_id);
            $order->student = User::find($order->student_id);
        }
        return view('admin.pending-orders', ['orders' => $orders]);
    }

    public function update_order_status(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->status = $request->status;
        $order->update();
        return back();
    }

    public function generate_sales(Request $request) {
        dd($request);
    }



}
