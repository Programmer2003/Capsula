@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    @include('partials.breadcrumb', [
        'title' => 'Product Details',
        'links' => [
            LaravelLocalization::localizeUrl(route('products')) => 'Products',
        ],
        'text' => $product->name,
    ])

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
                                        role="tab" aria-controls="prodetails-area2" aria-selected="false">
                                        {{ __('Reviews') }}
                                        (
                                        <span id="review-count">
                                            {{ $product->reviewsCount() }}
                                        </span>
                                        )
                                    </a>
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
                            @include('partials.products.slider.index', [
                                'products' => \App\Models\Product::take(6)->get(),
                                'number' => 3,
                            ])
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
