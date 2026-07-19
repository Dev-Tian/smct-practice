<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Staff-facing list of every order on record.
     */
    public function index()
    {
        $orders = Order::latest('placed_at')->get();

        return view('orders.index', ['orders' => $orders]);
    }
}
