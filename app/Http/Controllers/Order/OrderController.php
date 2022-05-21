<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\User;

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
            if(!Auth::guard('web')->check()) {
                return redirect()->route('login', ['returnUrl' => htmlentities(route('checkout'))]);
            }
            $customer = User::find(Auth::guard('web')->user()->id);
            return view('website.pages.checkout.index', compact('customer'));
            // return view('website.pages.checkout.index');
        }
        $shipping_fee = preg_replace('#[^\w()/%\-&]#',"", $request->shipping_fee);
        // dd(intval($shipping_fee) + $request->total);
        $order = Order::create([
            'user_id'=> Auth::guard('web')->user()->id, 
            'amount' => intval($shipping_fee) + $request->total,
            'payment_method' => $request->payment,
            'shipping_method' => $request->shipping,
            'shipping_fee' => $shipping_fee,
            'created_at' => Carbon::now(),
        ]);
        foreach (session()->get('cart') as $item){
            $order->orderDetails()->create([
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }
        $order->deliveryAddress()->create([
            'address' => $request->address,
            'city' => $request->city,
            'district' => $request->district,
            'ward' => $request->ward,
            'phone'=> $request->phone,
        ]);
        // session()->forget('cart');
        return response()->json(['msg' => 'Order successful']);
    }

    public function success(Request $request)
    {
        $customer_id = Auth::guard('web')->user()->id;
        $order = Order::latest()->where('user_id' , $customer_id)->get();
        return view('website.pages.checkout.bill', compact('order'));
    }

}
