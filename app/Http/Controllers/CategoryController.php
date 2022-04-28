<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $categories = Category::all();
        $products = Product::with(['galleries'])->paginate(10);

        Paginator::useBootstrap();

        return view('pages.category',[
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function detail(Request $request, $slug)
    {

        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::with(['galleries'])->where('categories_id', $category->id)->paginate(10);

        Paginator::useBootstrap();

        return view('pages.category',[
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
