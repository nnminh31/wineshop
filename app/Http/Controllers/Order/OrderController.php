<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::latest()->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.order.index', compact('orders'));
    }

    public function checkout(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            // if(!session()->has('auth')){
            //     return redirect()->route('login', ['return' => 'thanh-toan']);
            // }
            // else{
            //     $customer = Customer::find(session()->get('auth_id'));
            // }
            return view('website.pages.checkout.index');
        }
    }
}
