<div class="col-lg-5 col-md-6 col-sm-10 col-12">
    <div class="tm-prodetails-images">
        <div class="tm-prodetails-largeimages">
            @foreach ($product->images as $image)
                <div class="tm-prodetails-largeimage">
                    <a data-fancybox="tm-prodetails-imagegallery" href="{{ $image }}"
                        data-caption="{{ __('Product Zoom') }}">
                        <img src="{{ $image }}" alt="product image">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="tm-prodetails-thumbnails">
            @foreach ($product->images as $image)
                <div class="tm-prodetails-thumbnail">
                    <img src="{{ $image }}" alt="{{ basename($image) }}">
                </div>
            @endforeach
        </div>
    </div>
</div>
