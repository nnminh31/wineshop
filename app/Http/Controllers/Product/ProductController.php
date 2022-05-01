<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::latest()->paginate(10);
        return view('admin.pages.product.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($slug="")
    {
        // $product = Product::where('slug', $slug)->first();
        // if ($product) {
        return view('website.pages.product.index'); 
        // }
        // return abort(404);
    }

    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $list_cat = app(\App\Http\Controllers\Category\CategoryController::class)->getCategory();
            $brands = Brand::all();
            return view('admin.pages.product.add', compact('list_cat', 'brands'));
        }
        $dataProductCreate = [
            'name' => $request->product_name,
            'price' => $request->product_prỉce,
            'capacity' => $request->product_capacity,
            'concentration' =>  $request->product_concentration,
            'country' =>  $request->product_country,
            'area' =>  $request->product_area,
            'description' => $request->product_description,
            'slug' => STR::slug($request->product_name),
            'status' => $request->product_status,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'user_id' => Auth::guard('admin')->user()->id,
        ];

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $fileName = $file->getClientOriginalName();
            $pathName =  STR::random(5) . '-' . date('his') . '-' . STR::random(3) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/images/products/', $pathName);

            $dataProductCreate['image'] = $pathName;

            $product = Product::create($dataProductCreate);

            return redirect()->route('admin.products.index')->with('message', 'Create a product successfully');
        } else {
            $dataProductCreate['image'] = 'default.svg';
            $product = Product::create($dataProductCreate);
        }
    }

    public function update(Request $request, $slug)
    {
        if ($request->getMethod() == 'GET') {
            $id = 0;
            $product = Product::where('slug', $slug)->first();
            if (!$product) {
                abort(404);
            }
            $list_cat = app(\App\Http\Controllers\Category\CategoryController::class)->getCategory();
            $brands = Brand::all();
            $id = $product->id;

            $prev = Product::Where('id', '>', $id)->orderBy('id', 'DESC')->limit(1)->get();
            $next = Product::Where('id', '<', $id)->orderBy('id', 'DESC')->limit(1)->get();
            return view('admin.pages.product.edit', compact('list_cat', 'brands', 'product', 'prev', 'next'));
        }
        $dataProductUpdate = [
            'name' => $request->product_name,
            'price' => $request->product_prỉce,
            'capacity' => $request->product_capacity,
            'concentration' =>  $request->product_concentration,
            'country' =>  $request->product_country,
            'area' =>  $request->product_area,
            'description' => $request->product_description,
            'slug' => STR::slug($request->product_name),
            'status' => $request->product_status,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'user_id' => Auth::guard('admin')->user()->id,
        ];

        if ($request->hasFile('product_image')) {
            $product = Product::findOrFail($slug);
            $file = $request->file('product_image');
            $fileName = $file->getClientOriginalName();
            $pathName =  STR::random(5) . '-' . date('his') . '-' . STR::random(3) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/images/products/', $pathName);

            $dataProductUpdate['image'] = $pathName;
            if($product->image !=''){
                $destinationPath = 'images/products/'.$product->image;
                if(file_exists($destinationPath)){
                    unlink($destinationPath);
                }
            }
        }
        Product::find($slug)->update($dataProductUpdate);
        return redirect()->route('admin.products.edit', Product::find($slug)->slug)->with('message', 'Create a user successfully');
    }
}
