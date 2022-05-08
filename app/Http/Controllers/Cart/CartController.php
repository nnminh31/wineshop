<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        dd(session()->get('cart'));
        // dd(session()->flush());
        $categories = Category::whereNull('parent_id')->with('childCategories')->get();
        return view('website.pages.cart.index', compact('categories'));   
    }

    public function create(Request $request)
    {   
        $id = $request->id;
        $total_items = 0;
        $total_carts = 0;
        // dd($request->all());
        $product = Product::find($id);
        $cart = session()->has('cart') ? session()->get('cart') : null;
        if(isset($cart[$id])){
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + $request->quantity;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'slug' => $product->slug,
                'quantity' => $request->quantity,
                // 'user_id' => Auth::guard('web')->user()->id
            ];
        }
        session()->put('cart', $cart);
        foreach(session()->get('cart') as $id => $cartItem) {
            $total_items++;
            $total_carts += $cartItem['quantity'] * $cartItem['price'];
        }
        
        return response()->json([
            'items' => [
                'id' =>$product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->quantity,
                'brand' => $product->brand->name ?? "No brand",
                'category' => $product->category->name ?? "No category",
            ],
            'message' => "Sản phẩm đã được thêm vào giỏ hàng",
            'total_items' =>  $total_items,
            'total_carts' => number_format($total_carts, 0, ',','.')." ₫"
        ]);

    }
}
