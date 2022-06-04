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
        $products = Product::latest()->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.product.index', compact('products'));
    }

    public function show($slug="")
    {
        // session()->flush();
        $product = Product::where('slug', $slug)->first();
        if ($product) {
            $categories = Category::whereNull('parent_id')->with('childCategories')->get();
            $related_products = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(6)->get();
            // $categories = $product->category_id;
            // $category_id = Category::find($product->category_id)->parent_id;
            return view('website.pages.product.index', compact('product', 'categories', 'related_products')); 
        }
        return abort(404);
    }

    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $list_cat = app(\App\Http\Controllers\Category\CategoryController::class)->getCategory();
            $brands = Brand::all();
            return view('admin.pages.product.add', compact('list_cat', 'brands'));
        }

        $product_name = Product::where('name', '=', $request->product_name)->exists();
        if ($product_name) { 
            return redirect()->back()->with('message', 'Product name cannot be the same');
        }

        $dataProductCreate = [
            'name' => $request->product_name,
            'price' => str_replace( ',', '', $request->product_prỉce),
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

        } else {
            $dataProductCreate['image'] = 'no-image.jpg';
            $product = Product::create($dataProductCreate);
        }

        return redirect()->route('admin.products.index')->with('message', 'Create a product successfully');
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
            $type = "product";
            return view('admin.pages.product.edit', compact('list_cat', 'brands', 'product', 'prev', 'next', 'type'));
        }

        $dataProductUpdate = [
            'name' => $request->product_name,
            'price' => str_replace( ',', '', $request->product_prỉce),
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
            if($product->image !='' && $product->image != "no-image.jpg"){
                $destinationPath = 'images/products/'.$product->image;
                if(file_exists($destinationPath)){
                    unlink($destinationPath);
                }
            }
        }
        Product::find($slug)->update($dataProductUpdate);
        return redirect()->route('admin.products.edit', Product::find($slug)->slug)->with('message', 'Update a product successfully');
    }

    public function destroy(Request $request, $id)
    {
        if ($request->getMethod() == 'GET') {
            return redirect()->route('admin.products.index');
        }
        $product = Product::findOrFail($id);
        if($product->image !='' && $product->image != "no-image.jpg"){
            $destinationPath = 'images/products/'.$product->image;
            if(file_exists($destinationPath)){
                unlink($destinationPath);
            }
        }
        $product->delete();
        return response()->json(['msg' => 'Delete Product successfully']);
    }
}
