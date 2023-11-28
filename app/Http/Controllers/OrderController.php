<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function order_history() {
        return view('admin.order-history');
    }

    public function pending_orders() {
        return view('admin.pending-orders');
    }

}
