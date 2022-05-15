<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        // dd(session()->get('cart'));
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
        try {
            $product = Product::find($id);
            $cart = session()->has('cart') ? session()->get('cart') : null;
            if(isset($cart[$id])){
                $cart[$id]['quantity'] = $cart[$id]['quantity'] + $request->quantity;
            } else {
                $cart[$id] = [
                    'id' => $product->id ?? $product->id,
                    'name' => $product->name ?? $product->name,
                    'image' => $product->image ?? $product->image,
                    'price' => $product->price ?? $product->price,
                    'slug' => $product->slug ?? $product->slug,
                    'quantity' => $request->quantity ?? $product->quantity,
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
                    'price' => number_format($product->price, 0, ',','.')."₫",
                    'quantity' => $request->quantity,
                    'brand' => $product->brand->name ?? "No brand",
                    'category' => $product->category->name ?? "No category",
                ],
                'message' => "Sản phẩm đã được thêm vào giỏ hàng",
                'total_items' =>  $total_items,
                'total_carts' => number_format($total_carts, 0, ',','.')." ₫"
            ]);
        } catch (\Throwable $th) {
            session()->flush();
            // dd($th);
        }
    }

    public function update(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return redirect()->route('cart');
        }
        $total_items = 0;
        $total_carts = 0;
        $id = $request->id;
        try {
            $carts = session()->get('cart');
            $carts[$id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            foreach(session()->get('cart') as $id => $cartItem) {
                $total_items++;
                $total_carts += $cartItem['quantity'] * $cartItem['price'];
            }
            $data = [];
            foreach ($carts as $cart):
                $amount = 0;
                $product = Product::find($cart["id"]);
                $amount = $carts[$cart["id"]]['price'] * $carts[$cart["id"]]['quantity'];
                $item = [
                    'id' =>$product->id,
                    'name' => $product->name,
                    'price' => number_format($product->price, 0, ',','.')."₫",
                    'amount' => number_format($amount, 0, ',','.')."₫",
                    'image' => $product->image,
                    'link' => route('product', $product->slug),
                    'quantity' => $request->quantity,
                    'brand' => $product->brand->name ?? "No brand",
                    'category' => $product->category->name ?? "No category",
                ];
                array_push($data, $item);
            endforeach;
            sleep(1.5);
            return response()->json([
                'total_items' =>  $total_items,
                'items' => $data,
                'message' => "Update product from cart successfully",
                'total_carts' => number_format($total_carts, 0, ',','.')." ₫"
            ]);
        } catch (\Throwable $th) {
            session()->flush();
            // dd($th);
        }
    }

    public function remove(Request $request)
    {   
        try {
            if ($request->getMethod() == 'GET') {
                return redirect()->route('cart');
            }
            if($request->id){
                $total_items = 0;
                $total_carts = 0;
                $carts=session()->get('cart');
                unset($carts[$request->id]);
                session()->put('cart', $carts);
                foreach(session()->get('cart') as $id => $cartItem) {
                    $total_items++;
                    $total_carts += $cartItem['quantity'] * $cartItem['price'];
                }
                $data = [];
                foreach ($carts as $cart):
                    $amount = 0;
                    $product = Product::find($cart["id"]);
                    $amount = $carts[$cart["id"]]['price'] * $carts[$cart["id"]]['quantity'];
                    $item = [
                        'id' => $product->id ?? $product->id,
                        'name' => $product->name ?? $product->name,
                        'price' => number_format($product->price, 0, ',','.')."₫" ?? 0,
                        'amount' => number_format($amount, 0, ',','.')."₫" ?? 0,
                        'image' => $product->image ?? 0,
                        'link' => route('product', $product->slug),
                        'quantity' => $request->quantity ?? 1,
                        'brand' => $product->brand->name ?? "No brand",
                        'category' => $product->category->name ?? "No category",
                    ];
                    array_push($data, $item);
                endforeach;
                sleep(1.5);
                return response()->json([
                    'total_items' =>  $total_items,
                    'items' => $data,
                    'message' => "Update product from cart successfully",
                    'total_carts' => number_format($total_carts, 0, ',','.')." ₫"
                ]);
            }   
        } catch (\Throwable $th) {
            session()->flush();
            // dd($th);
        }
    }
}
