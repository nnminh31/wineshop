<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $brands = Brand::latest()->orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.pages.brand.index', compact('brands'));
    }
    
    public function show($slug="")
    {
        $brand = Brand::where('slug', $slug)->first();
        if ($brand) {
            $categories = Category::whereNull('parent_id')->with('childCategories')->get();
            $products = Product::latest()->where('brand_id', $brand->id)->paginate(5);
            $brands = Brand::latest()->get();
            return view('website.pages.brand.index', compact('brand', 'categories', 'brands', 'products')); 
        }
        return abort(404);
    }

    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $brands = Brand::all();
            return view('admin.pages.brand.add', compact('brands'));
        }
        try {
            $dataBrandCreate = [
                'name' => $request->name,
                'description' => $request->description,
                'type' => $request->type,
                'slug' => STR::slug($request->name),
                'status' => $request->status,
                'user_id' => Auth::guard('admin')->user()->id,
            ];
            if ($request->hasFile('icon')) {
                $file = $request->file('icon');
                $fileName = $file->getClientOriginalName();
                $pathName =  STR::random(5) . '-' . date('his') . '-' . STR::random(3) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/images/brands/', $pathName);

                $dataBrandCreate['icon'] = $pathName; 

                $brand = Brand::create($dataBrandCreate);

            } else {
                $dataBrandCreate['icon'] = 'default.png';
                $brand = Brand::create($dataBrandCreate);
            }
            return redirect()->route('admin.brands.index')->with('message', 'Create a brand successfully');
        } catch (\Exception $exception) {
            return redirect()->route('admin.brands.add')->with('message', 'This brand already exists');
        }
    
    }

    public function update(Request $request, $slug) {
        if ($request->getMethod() == 'GET') {
            $brand = Brand::where('slug', $slug)->first();
            if (!$brand) {
                abort(404);
            }
            $id = $brand->id;
            // $prev = Brand::Where('id', '>', $id)->orderBy('id', 'DESC')->limit(1)->get();
            // $next = Brand::Where('id', '<', $id)->orderBy('id', 'DESC')->limit(1)->get();
            $type = "brand";
            return view('admin.pages.brand.edit', compact('brand', 'type'));
        }
        try {
            $dataBrandUpdate = [
                'name' => $request->name,
                'description' => $request->description,
                'type' => $request->type,
                'slug' => STR::slug($request->name),
                'status' => $request->status,
                'user_id' => Auth::guard('admin')->user()->id,
            ];

            if ($request->hasFile('icon')) {
                $brand = Brand::findOrFail($slug);
                $file = $request->file('icon');
                $fileName = $file->getClientOriginalName();
                $pathName =  STR::random(5) . '-' . date('his') . '-' . STR::random(3) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/images/brands/', $pathName);

                $dataBrandUpdate['icon'] = $pathName;
                if($brand->icon !='' && $brand->icon != "default.png"){
                    $destinationPath = 'images/brands/'.$brand->icon;
                    if(file_exists($destinationPath)){
                        unlink($destinationPath);
                    }
                }
            }

            Brand::find($slug)->update($dataBrandUpdate);

            return redirect()->route('admin.brands.edit', Brand::find($slug)->slug)->with('message', 'Update a brand successfully');
        } catch (\Exception $exception) {
            return redirect()->route('admin.brands.edit', Brand::find($slug)->slug)->with('message', 'Brand name cannot be the same');
        }
    }

    public function destroy(Request $request, $id)
    {
        if ($request->getMethod() == 'GET') {
            return redirect()->route('admin.brands.index');
        }
        $brand = Brand::findOrFail($id);
        if($brand->icon !='' && $brand->icon != "default.png"){
            $destinationPath = 'images/brands/'.$brand->icon;
            if(file_exists($destinationPath)){
                unlink($destinationPath);
            }
        }
        $brand->delete();
        return response()->json(['msg' => 'Delete Brand successfully']);
    }
}
