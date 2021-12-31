<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(Request $request)
    {   
        $products = Product::select("products.*");
        $category = $request->input('category');
        $terms = $request->input('terms');

        if($category){
            $products->join("categories","categories.id","=","products.category_id");
            $products->where("categories.slug", "=", $category);
        }

        if($terms) {
            $products->where('name','LIKE','%'.$terms.'%');
        }

        $products = $products->paginate(10);
        return view('store.product.index', compact('products'));
    }

    public function details($slug)
    {
        $product = Product::where(['status' => 1, 'slug' => $slug])->firstOrFail();
        return view('store.product.details', compact('product'));
    }
}
