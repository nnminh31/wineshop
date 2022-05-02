<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $brands = Brand::latest()->orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.pages.brand.index', compact('brands'));
    }
    
    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $brands = Brand::all();
            return view('admin.pages.brand.add', compact('brands'));
        }
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
            $dataBrandCreate['icon'] = 'default.svg';
            $brand = Brand::create($dataBrandCreate);
        }
    
        return redirect()->route('admin.brands.index')->with('message', 'Create a brand successfully');
    }

    public function update(Request $request, $slug) {
        if ($request->getMethod() == 'GET') {
            $brand = Brand::where('slug', $slug)->first();
            if (!$brand) {
                abort(404);
            }
            return view('admin.pages.brand.edit', compact('brand'));
        }
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
            if($brand->icon !=''){
                $destinationPath = 'images/brands/'.$brand->icon;
                if(file_exists($destinationPath)){
                    unlink($destinationPath);
                }
            }
        }

        Brand::find($slug)->update($dataBrandUpdate);

        return redirect()->route('admin.brands.edit', Brand::find($slug)->slug)->with('message', 'Create a brand successfully');
    }

}
