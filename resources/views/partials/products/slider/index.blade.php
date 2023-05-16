<div class="row tm-products-slider{{ isset($number) ? $number : '' }}">
    @foreach ($products as $product)
        @include('partials.products.product-card', [
            'product' => $product,
            isset($class) ? 'class' : '' => isset($class) ? $class : '',
        ])
    @endforeach
</div>
