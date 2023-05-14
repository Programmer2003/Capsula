@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="{{ asset('images/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>{{ __('Products') }}</h2>
                <ul>
                    <li><a href="{{ LaravelLocalization::localizeUrl(route('home')) }}">{{ __('Home') }}</a></li>
                    <li>{{ __('Shop') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Page Content -->
    <main class="page-content">

        <!-- Products Wrapper -->
        <div class="tm-products-area tm-section tm-padding-section bg-white">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-12">
                        <form action="#" class="tm-shop-header">
                            <div class="tm-shop-productview">
                                <span>View:</span>
                                <button data-view="grid" class="active"><i class="ion-android-apps"></i></button>
                                <button data-view="list"><i class="ion-android-menu"></i></button>
                            </div>
                            <p class="tm-shop-countview">Showing 1 to 9 of 16 </p>
                            <select>
                                <option value="value">Default Sorting</option>
                                <option value="value">Name A-Z</option>
                                <option value="value">Date</option>
                                <option value="value">Best Sellers</option>
                                <option value="value">Trending</option>
                            </select>
                        </form>

                        <div class="tm-shop-products">
                            <div class="row mt-30-reverse">
                                @foreach ($products as $product)
                                @include('partials.products.product-card', [
                                    'product' => $product,
                                ])
                                @endforeach
                            </div>
                        </div>

                        {{$products->links()}}
                    </div>

                    <!-- Widgets -->
                    <div class="col-lg-3 col-12">
                        <form class="widgets" >
                            @include('partials.products.widgets.category')

                            @include('partials.products.widgets.price-filter')

                            @include('partials.products.widgets.size')
                            
                            @include('partials.products.widgets.popular.index')
                        </form>
                    </div>
                    <!--// Widgets -->

                </div>
            </div>
        </div>
        <!--// Products Wrapper -->

    </main>
    <!--// Page Content -->
@endsection

@push('scripts')
@endpush
