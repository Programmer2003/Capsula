<div class="tm-section tm-banners-area">
    <div class="container">
        <div class="row mt-30-reverse">

            @include('home.banners.item',[
                'img' => asset('images/banner-image-1.jpg'),
            ])
            @include('home.banners.item',[
                'img' => asset('images/banner-image-2.jpg'),
            ])
            @include('home.banners.item',[
                'img' => asset('images/banner-image-3.jpg'),
            ])
        </div>
    </div>
</div>