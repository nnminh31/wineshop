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
        $brands = Brand::paginate(5);
        return view('admin.pages.brand.index', compact('brands'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $brands = Brand::all();
            return view('admin.pages.brand.add', compact('brands'));
        }
        Brand::create([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'slug' => STR::slug($request->name),
            'status' => $request->status,
            'user_id' => Auth::guard('admin')->user()->id,
        ]);

        return redirect()->route('admin.brands.index')->with('message', 'Create a category successfully');

    }

    public function update(Request $request, $slug) {
        if ($request->getMethod() == 'GET') {
            $brand = Brand::where('slug', $slug)->first();
            return view('admin.pages.brand.edit', compact('brand'));
        }
        $brand = Brand::where('id', $slug)->take(1)->update([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'status' => $request->status,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('admin.brands.edit', Brand::find($slug)->slug)->with('message', 'Create a user successfully');
    }

}
