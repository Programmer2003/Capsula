<div id="tm-popular-products-area" class="tm-section tm-popular-products-area tm-padding-section bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="tm-sectiontitle text-center">
                    <h3>POPULAR PRODUCTS</h3>
                    <p>Our popular products are so beautiful to see that the shoppers are easily attracted
                        to them.</p>
                </div>
            </div>
        </div>
        @include('partials.products.slider.index', [
            'class' => 'col-lg-3 col-md-4 col-sm-6 col-12',
            'products' => \App\Models\Product::all()->random(8),
        ])
    </div>
</div>
