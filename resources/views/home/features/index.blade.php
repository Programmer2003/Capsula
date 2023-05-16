<div class="tm-section tm-feature-area bg-grey">
    <div class="container">
        <div class="row mt-30-reverse">

            @include('home.features.item', [
                'caption' => 'Free Shipping',
                'text' => 'We provide free shipping for all order over $200.00',
                'img' => asset('images/icons/icon-free-shipping.png'),
                'alt' => 'free shipping',
            ])
            @include('home.features.item', [
                'caption' => 'Fast Delivery',
                'text' => 'We always deliver our customers very quickly.',
                'img' => asset('images/icons/icon-fast-delivery.png'),
                'alt' => 'fast delivery',
            ])
            @include('home.features.item', [
                'caption' => '24/7 Support',
                'text' => 'We provide support to our customers within 24 hours.',
                'img' => asset('images/icons/icon-247-support.png'),
                'alt' => '24/7 Support',
            ])
        </div>
    </div>
</div>
