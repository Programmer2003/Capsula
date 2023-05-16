<?php

namespace App\Http\Controllers;

use App\Http\Requests\Review\StoreRequest;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(StoreRequest $request, Product $product)
    {

        $data = $request->validated();
        $info = [
            'product_id' => $product->id,
            'user_id' => auth()->check() ? auth()->user()->id : null,
        ];

        $data = array_merge($info, $data);
        Review::create($data);
        return response()->json([
            'view' => view('product.reviews.index', compact('product'))->render(),
            'count' => $product->reviewsCount(),
        ]);
    }
}
