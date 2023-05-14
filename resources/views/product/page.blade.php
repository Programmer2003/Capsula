@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="{{ asset('images/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>Product Details</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Page Content -->
    <main class="page-content">

        <!-- Product Details Wrapper -->
        <div class="tm-product-details-area tm-section tm-padding-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        @include('product.view', compact('product'))

                        <!-- Product Details Description & Review -->
                        <div class="tm-prodetails-desreview tm-padding-section-sm-top">
                            <ul class="nav tm-tabgroup2" id="prodetails" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="prodetails-area1-tab" data-toggle="tab"
                                        href="#prodetails-area1" role="tab" aria-controls="prodetails-area1"
                                        aria-selected="true">{{ __('Description') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="prodetails-area2-tab" data-toggle="tab" href="#prodetails-area2"
                                        role="tab" aria-controls="prodetails-area2"
                                        aria-selected="false">{{ __('Reviews') }}
                                        ({{ $product->reviewsCount() }})</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="prodetails-content">
                                <div class="tab-pane fade show active" id="prodetails-area1" role="tabpanel"
                                    aria-labelledby="prodetails-area1-tab">
                                    <div class="tm-prodetails-description">
                                        <h4>{{ __('Product Description') }}</h4>
                                        <p>{{ $product->description }}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="prodetails-area2" role="tabpanel"
                                    aria-labelledby="prodetails-area2-tab">
                                    @include('product.reviews.index')
                                </div>
                            </div>
                        </div>
                        <!--// Product Details Description & Review -->

                        <div class="tm-similliar-products tm-padding-section-sm-top">
                            <h4 class="small-title">{{ __('Similliar Products') }}</h4>
                            <div class="row tm-products-slider3">

                                <!-- Single Product -->
                                <div class="col-12">
                                    <div class="tm-product tm-scrollanim">
                                        <div class="tm-product-topside">
                                            <div class="tm-product-images">
                                                <img src="{{asset('/images/products/product-image-1.jpg')}}" alt="product image">
                                                <img src="{{asset('/images/products/product-image-2.jpg')}}" alt="product image">
                                            </div>
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                                <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                            class="ion-eye"></i></button></li>
                                                <li><a href="#"><i class="ion-heart"></i></a></li>
                                            </ul>
                                            <div class="tm-product-badges">
                                                <span class="tm-product-badges-new">New</span>
                                                <span class="tm-product-badges-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="tm-product-bottomside">
                                            <h6 class="tm-product-title"><a href="product-details.html">Stylist
                                                    daimond
                                                    earring</a></h6>
                                            <div class="tm-ratingbox">
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span><i class="ion-android-star-outline"></i></span>
                                            </div>
                                            <span class="tm-product-price">$29.99</span>
                                            <div class="tm-product-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    when an unknown printer took a galley of type and scrambled it
                                                    to make a
                                                    type specimen book. It has survived not only five centuries, but
                                                    also the
                                                    leap into electronic typesetting.</p>
                                                <ul class="tm-product-actions">
                                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                    </li>
                                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                                class="ion-eye"></i></button></li>
                                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-12">
                                    <div class="tm-product tm-scrollanim">
                                        <div class="tm-product-topside">
                                            <div class="tm-product-images">
                                                <img src="{{asset('/images/products/product-image-3.jpg')}}" alt="product image">
                                            </div>
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                                <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                            class="ion-eye"></i></button></li>
                                                <li><a href="#"><i class="ion-heart"></i></a></li>
                                            </ul>
                                            <div class="tm-product-badges">
                                                <span class="tm-product-badges-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="tm-product-bottomside">
                                            <h6 class="tm-product-title"><a href="product-details.html">Stylist
                                                    daimond
                                                    earring</a></h6>
                                            <div class="tm-ratingbox">
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span><i class="ion-android-star-outline"></i></span>
                                            </div>
                                            <span class="tm-product-price">$29.99</span>
                                            <div class="tm-product-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    when an unknown printer took a galley of type and scrambled it
                                                    to make a
                                                    type specimen book. It has survived not only five centuries, but
                                                    also the
                                                    leap into electronic typesetting.</p>
                                                <ul class="tm-product-actions">
                                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                    </li>
                                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                                class="ion-eye"></i></button></li>
                                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-12">
                                    <div class="tm-product tm-scrollanim">
                                        <div class="tm-product-topside">
                                            <div class="tm-product-images">
                                                <img src="{{asset('/images/products/product-image-4.jpg')}}" alt="product image">
                                                <img src="{{asset('/images/products/product-image-5.jpg')}}" alt="product image">
                                            </div>
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                                <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                            class="ion-eye"></i></button></li>
                                                <li><a href="#"><i class="ion-heart"></i></a></li>
                                            </ul>
                                            <div class="tm-product-badges">
                                                <span class="tm-product-badges-soldout">Sold out</span>
                                            </div>
                                        </div>
                                        <div class="tm-product-bottomside">
                                            <h6 class="tm-product-title"><a href="product-details.html">Stylist
                                                    daimond
                                                    earring</a></h6>
                                            <div class="tm-ratingbox">
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span><i class="ion-android-star-outline"></i></span>
                                            </div>
                                            <span class="tm-product-price">$29.99</span>
                                            <div class="tm-product-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    when an unknown printer took a galley of type and scrambled it
                                                    to make a
                                                    type specimen book. It has survived not only five centuries, but
                                                    also the
                                                    leap into electronic typesetting.</p>
                                                <ul class="tm-product-actions">
                                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                    </li>
                                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                                class="ion-eye"></i></button></li>
                                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-12">
                                    <div class="tm-product tm-scrollanim">
                                        <div class="tm-product-topside">
                                            <div class="tm-product-images">
                                                <img src="{{asset('/images/products/product-image-1.jpg')}}" alt="product image">
                                                <img src="{{asset('/images/products/product-image-2.jpg')}}" alt="product image">
                                            </div>
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                                <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                            class="ion-eye"></i></button></li>
                                                <li><a href="#"><i class="ion-heart"></i></a></li>
                                            </ul>
                                            <div class="tm-product-badges">
                                                <span class="tm-product-badges-new">New</span>
                                                <span class="tm-product-badges-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="tm-product-bottomside">
                                            <h6 class="tm-product-title"><a href="product-details.html">Stylist
                                                    daimond
                                                    earring</a></h6>
                                            <div class="tm-ratingbox">
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span><i class="ion-android-star-outline"></i></span>
                                            </div>
                                            <span class="tm-product-price">$29.99</span>
                                            <div class="tm-product-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    when an unknown printer took a galley of type and scrambled it
                                                    to make a
                                                    type specimen book. It has survived not only five centuries, but
                                                    also the
                                                    leap into electronic typesetting.</p>
                                                <ul class="tm-product-actions">
                                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                    </li>
                                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                                class="ion-eye"></i></button></li>
                                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-12">
                                    <div class="tm-product tm-scrollanim">
                                        <div class="tm-product-topside">
                                            <div class="tm-product-images">
                                                <img src="{{asset('/images/products/product-image-3.jpg')}}" alt="product image">
                                            </div>
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                                <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                            class="ion-eye"></i></button></li>
                                                <li><a href="#"><i class="ion-heart"></i></a></li>
                                            </ul>
                                            <div class="tm-product-badges">
                                                <span class="tm-product-badges-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="tm-product-bottomside">
                                            <h6 class="tm-product-title"><a href="product-details.html">Stylist
                                                    daimond
                                                    earring</a></h6>
                                            <div class="tm-ratingbox">
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span><i class="ion-android-star-outline"></i></span>
                                            </div>
                                            <span class="tm-product-price">$29.99</span>
                                            <div class="tm-product-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    when an unknown printer took a galley of type and scrambled it
                                                    to make a
                                                    type specimen book. It has survived not only five centuries, but
                                                    also the
                                                    leap into electronic typesetting.</p>
                                                <ul class="tm-product-actions">
                                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                    </li>
                                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                                class="ion-eye"></i></button></li>
                                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-12">
                                    <div class="tm-product tm-scrollanim">
                                        <div class="tm-product-topside">
                                            <div class="tm-product-images">
                                                <img src="{{asset('/images/products/product-image-4.jpg')}}" alt="product image">
                                                <img src="{{asset('/images/products/product-image-5.jpg')}}" alt="product image">
                                            </div>
                                            <ul class="tm-product-actions">
                                                <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                </li>
                                                <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                            class="ion-eye"></i></button></li>
                                                <li><a href="#"><i class="ion-heart"></i></a></li>
                                            </ul>
                                            <div class="tm-product-badges">
                                                <span class="tm-product-badges-soldout">Sold out</span>
                                            </div>
                                        </div>
                                        <div class="tm-product-bottomside">
                                            <h6 class="tm-product-title"><a href="product-details.html">Stylist
                                                    daimond
                                                    earring</a></h6>
                                            <div class="tm-ratingbox">
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span class="is-active"><i class="ion-android-star-outline"></i></span>
                                                <span><i class="ion-android-star-outline"></i></span>
                                            </div>
                                            <span class="tm-product-price">$29.99</span>
                                            <div class="tm-product-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.
                                                    Lorem
                                                    Ipsum has been the industry's standard dummy text ever since the
                                                    when an unknown printer took a galley of type and scrambled it
                                                    to make a
                                                    type specimen book. It has survived not only five centuries, but
                                                    also the
                                                    leap into electronic typesetting.</p>
                                                <ul class="tm-product-actions">
                                                    <li><a href="#"><i class="ion-android-cart"></i> Add to cart</a>
                                                    </li>
                                                    <li><button data-fancybox data-src="#tm-product-quickview"><i
                                                                class="ion-eye"></i></button></li>
                                                    <li><a href="#"><i class="ion-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!--// Page Content -->
@endsection

@push('scripts')
@endpush
