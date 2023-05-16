<div id="tm-latest-products-area" class="tm-section tm-latest-products-area tm-padding-section bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="tm-sectiontitle text-center">
                    <h3>NEW ARRIVAL PRODUCTS</h3>
                    <p>Our popular products are so beautyful to see that the shoppers are easily attracted
                        to them.</p>
                </div>
            </div>
        </div>
        <div class="row mt-50-reverse">
            @foreach (\App\Models\Product::all()->random(8) as $product)
                @include('partials.products.product-card', [
                    'product' => $product,
                    'class' => 'col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mt-50',
                ])
            @endforeach
        </div>
        <div class="tm-product-loadmore text-center mt-50">
            <a href="products.html" class="tm-button">All Products</a>
        </div>
    </div>
</div>
