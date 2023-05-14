<?php

namespace App\Http\Controllers;

use App\Http\Filters\ProductFilter;
use App\Http\Requests\Product\FilterRequest;
use App\Models\Product;
use App\Models\Review;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        //$this->middleware('is_admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function auth()
    {
        return view('auth.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function products(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);
        $products = Product::filter($filter)->paginate(12)->withQueryString();
        $minPrice = floor(Product::min('price'));
        $maxPrice = ceil(Product::max('price'));

        return view('products', compact('products', 'minPrice', 'maxPrice'));
    }

    public function product(FilterRequest $request, Product $product)
    {
        // dd($product);
        return view('product.page', compact('product'));
    }
}
