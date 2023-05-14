@php
    use App\Models\Product;
    $products = Product::take(3)->get();
@endphp
<!-- Single Widget -->
<div class="single-widget widget-popularproduct">
    <h6 class="widget-title">Popular Product</h6>
    <ul>
        @foreach ($products as $product)
            @include('partials.products.widgets.popular.item', compact('product'))
        @endforeach
    </ul>
</div>
<!--// Single Widget -->
