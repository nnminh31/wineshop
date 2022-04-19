<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Components\Recursive;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::paginate(5);
        return view('admin.pages.category.index', compact('categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function getCategory(){
        $data = Category::all(); 
        $recursive = new Recursive($data);
        $list_cat = $recursive->categoryRecursive(); 
        return $list_cat; 
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
            $list_cat = $this->getCategory();
            return view('admin.pages.category.edit', compact('category', 'list_cat'));
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
