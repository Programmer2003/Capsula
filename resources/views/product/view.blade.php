<div class="tm-prodetails">
    <div class="row">
        @include('product.images')

        <div class="col-lg-7 col-md-6 col-12">
            <div class="tm-prodetails-content">
                <h4 class="tm-prodetails-title">{{ $product->name }}</h4>
                <span class="tm-prodetails-price"><del>${{ $product->price }}</del> $59.99</span>
                <div class="tm-ratingbox">
                    @php
                        // dd($product->averageRating());
                    @endphp
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i < $product->averageRating())
                            <span class="is-active"><i class="ion-android-star-outline"></i></span>
                        @else
                            <span><i class="ion-android-star-outline"></i></span>
                        @endif
                    @endfor
                </div>
                <div class="tm-prodetails-infos">
                    <div class="tm-prodetails-singleinfo">
                        <b>{{ __('Product ID') }} : </b>{{ $product->id }}
                    </div>
                    <div class="tm-prodetails-singleinfo">
                        <b>{{ __('Category') }} : </b><a href="#">{{ $product->category->name }}</a>
                    </div>
                    <div class="tm-prodetails-singleinfo tm-prodetails-tags">
                        <b>Tags : </b>
                        <ul>
                            <li><a href="#">bracelets</a></li>
                            <li><a href="#">diamond</a></li>
                            <li><a href="#">ring</a></li>
                            <li><a href="#">necklaces</a></li>
                        </ul>
                    </div>
                    <div class="tm-prodetails-singleinfo">
                        <b>{{ __('Available') }} : </b>
                        <span class="color-theme">
                            @if ($product->available)
                                {{ __('In Stock') }}
                            @else
                                {{ __('Sold out') }}
                            @endif
                        </span>
                    </div>
                    <div class="tm-prodetails-singleinfo tm-prodetails-share">
                        <b>{{ __('Share') }} : </b>
                        <ul>
                            {!! ShareButtons::currentPage('Buy now!', [
                                'block_prefix' => '',
                                'block_suffix' => '',
                                'class' => 'ion-social-facebook',
                                'id' => 'Linkedin',
                                'title' => 'Linkedin',
                                'rel' => 'nofollow noopener noreferrer',
                            ])->linkedin()->render() !!}
                            {!! ShareButtons::currentPage('Buy now!', [
                                'block_prefix' => '',
                                'block_suffix' => '',
                                'class' => 'ion-social-whatsapp-outline',
                                'id' => 'WhatsApp',
                                'title' => 'WhatsApp',
                                'rel' => 'nofollow noopener noreferrer',
                            ])->whatsapp()->render() !!}
                            {!! ShareButtons::currentPage('Buy now!', [
                                'block_prefix' => '',
                                'block_suffix' => '',
                                'class' => 'ion-social-pinterest-outline',
                                'id' => 'Pinterest',
                                'title' => 'Pinterest',
                                'rel' => 'nofollow noopener noreferrer',
                            ])->pinterest()->render() !!}
                            {!! ShareButtons::currentPage('Buy now!', [
                                'block_prefix' => '',
                                'block_suffix' => '',
                                'class' => 'ion-social-twitter-outline',
                                'id' => 'Twitter',
                                'title' => 'Twitter',
                                'rel' => 'nofollow noopener noreferrer',
                            ])->twitter()->render() !!}
                            {!! ShareButtons::currentPage('Buy now!', [
                                'block_prefix' => '',
                                'block_suffix' => '',
                                'class' => 'ion-social-reddit-outline',
                                'id' => 'Reddit',
                                'title' => 'Reddit',
                            ])->reddit()->render() !!}
                        </ul>
                    </div>
                </div>
                <p>{{ $product->description }}</p>
                <div class="tm-prodetails-quantitycart">
                    <h6>{{ __('Quantity') }} :</h6>
                    <div class="tm-quantitybox">
                        <input type="text" value="1" name="quantity">
                    </div>
                    <a href="#" class="tm-button tm-button-dark">{{ __('Add To Cart') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
