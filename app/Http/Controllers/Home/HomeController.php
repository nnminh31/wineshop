<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::where('status', 'true')->get();
        $categories = Category::whereNull('parent_id')->with('childCategories')->get();
        $tet_holidays = Product::where('status', 'true')->where('category_id', 13)->limit(12)->get();
        $hot_products = Product::latest()->where('status', 'true')->where('hot', 1)->limit(5)->get();
        // Rượu vang
        $category = Category::where('name', 'Rượu vang')->first();
        $ids = [];
        array_push($ids, $category->id);
        foreach ($category->childCategories as $childCategory):
            array_push($ids, $childCategory->id);
            foreach($childCategory->categories as $child):
                array_push($ids, $child->id);
            endforeach;
        endforeach;
        $wines = Product::latest()->whereIn('category_id', $ids)->limit(6)->get();
        $top_wines = Product::whereIn('category_id', $ids)->limit(5)->get();
        // End rượu vang
        // Rượu manh
        $brandy_category = Category::where('name', 'Rượu mạnh')->first();
        $brandy_ids = [];
        array_push($brandy_ids, $brandy_category->id);
        foreach ($brandy_category->childCategories as $childCategory):
            array_push($brandy_ids, $childCategory->id);
            foreach($childCategory->categories as $child):
                array_push($brandy_ids, $child->id);
            endforeach;
        endforeach;
        $brandies = Product::latest()->whereIn('category_id', $brandy_ids)->limit(6)->get();
        $top_brandies = Product::whereIn('category_id', $brandy_ids)->limit(5)->get();
        // End rượu mạnh
        // Rượu pha chế
        $mix_category = Category::where('name', 'Rượu pha chế')->first();
        $mix_ids = [];
        array_push($mix_ids, $mix_category->id);
        foreach ($mix_category->childCategories as $childCategory):
            array_push($mix_ids, $childCategory->id);
            foreach($childCategory->categories as $child):
                array_push($mix_ids, $child->id);
            endforeach;
        endforeach;
        $mixes = Product::latest()->whereIn('category_id', $mix_ids)->limit(6)->get();
        $top_mixes = Product::whereIn('category_id', $mix_ids)->limit(5)->get();
        // End Rượu pha chế
        return view('website.pages.home.index', compact('brands', 'category', 'categories', 'tet_holidays', 'hot_products', 'wines', 'top_wines', 'brandy_category', 'brandies','top_brandies', 'mix_category', 'mixes','top_mixes'));
    }

    public function search(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $categories = Category::whereNull('parent_id')->with('childCategories')->get();
            $brands = Brand::where('status', 'true')->get();
            $keyword = $request->get('s');
            // if (!isset($keyword)) {
            //     return redirect()->route('home');
            // }
            $search = $this->vn_to_str($keyword);
            // dd($search);
            $products = Product::where('name', 'LIKE', "%" . $search . "%")->paginate(12)->withQueryString();

            return view('website.pages.search.index', compact('brands', 'categories', 'products'));
        }
    }

    public function vn_to_str($str)
    {

        $unicode = array(

            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

            'd' => 'đ',

            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

            'i' => 'í|ì|ỉ|ĩ|ị',

            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',

            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

            'D' => 'Đ',

            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',

            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

        );

        foreach ($unicode as $nonUnicode => $uni) {

            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        $str = str_replace(' ', ' ', $str);

        return $str;
    }
}
