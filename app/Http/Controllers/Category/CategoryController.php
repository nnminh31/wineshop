<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Components\Recursive;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::latest()->paginate(5);
        return view('admin.pages.category.index', compact('categories'));
    }

    
    public function getCategory(){
        $data = Category::all(); 
        $recursive = new Recursive($data);
        $list_cat = $recursive->categoryRecursive(); 
        return $list_cat; 
    }

    public function show($slug="")
    {
        $category = Category::where('slug', $slug)->first();
        if ($category) {
            $categories = Category::whereNull('parent_id')->with('childCategories')->get();
            $ids = [];
            array_push($ids, $category->id);
            foreach ($category->childCategories as $childCategory):
                array_push($ids, $childCategory->id);
                foreach($childCategory->categories as $child):
                    array_push($ids, $child->id);
                endforeach;
            endforeach;
            $products = Product::latest()->whereIn('category_id', $ids)->paginate(5);
            $brands = Brand::latest()->get();
            return view('website.pages.category.index', compact('category', 'categories', 'brands', 'products')); 
        }
        return abort(404);
    }

    public function create(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $list_cat = $this->getCategory();
            return view('admin.pages.category.add', compact('list_cat'));
        }
        Category::create([
            'name' => $request->name,
            // 'description' => $request->description,
            'parent_id' => $request->parent_id,
            'slug' => STR::slug($request->name),
            'status' => $request->status,
            'user_id' => Auth::guard('admin')->user()->id,
        ]);

        return redirect()->route('admin.categories.index')->with('message', 'Create a category successfully');

    }

    public function update(Request $request, $slug) {
        if ($request->getMethod() == 'GET') {
            $category = Category::where('slug', $slug)->first();
            if (!$category) {
                abort(404);
            }
            $list_cat = $this->getCategory();
            $id = $category->id;
            $prev = Category::Where('id', '>', $id)->orderBy('id', 'DESC')->limit(1)->get();
            $next = Category::Where('id', '<', $id)->orderBy('id', 'DESC')->limit(1)->get();
            $type = "category";
            return view('admin.pages.category.edit', compact('category', 'list_cat', 'prev', 'next', 'type'));
        }
        Category::where('id', $slug)->take(1)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'status' => $request->status,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('admin.categories.index')->with('message', 'Create a user successfully');
    }
}
