<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $products = Order::latest()->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.order.index', compact('orders'));
    }
}
