<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {   
        $brands = Brand::where('status', 'true')->get();
        $categories = Category::whereNull('parent_id')->with('childCategories')->get();
        return view('website.pages.home.index', compact('brands', 'categories')); 
    }
}
