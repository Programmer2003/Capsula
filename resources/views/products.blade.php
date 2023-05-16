@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    @include('partials.breadcrumb', [
        'title' => __('Products'),
        'text' => __('Shop'),
    ])

    <!-- Page Content -->
    <main class="page-content">

        <!-- Products Wrapper -->
        <div class="tm-products-area tm-section tm-padding-section bg-white">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-12">
                        <form action="#" class="tm-shop-header">
                            <div class="tm-shop-productview">
                                <span>{{ __('View') }}:</span>
                                <button data-view="grid" class="active"><i class="ion-android-apps"></i></button>
                                <button data-view="list"><i class="ion-android-menu"></i></button>
                            </div>
                            <p class="tm-shop-countview">Showing 1 to 9 of 16 </p>
                            <select>
                                <option value="value">{{ __('Default Sorting') }}</option>
                                <option value="value">{{ __('Name A-Z') }}</option>
                                <option value="value">{{ __('Date') }}</option>
                                <option value="value">{{ __('Best Sellers') }}</option>
                                <option value="value">{{ __('Trending') }}</option>
                            </select>
                        </form>

                        <div class="tm-shop-products">
                            <div class="row mt-30-reverse">
                                @foreach ($products as $product)
                                    @include('partials.products.product-card', [
                                        'product' => $product,
                                        'class' => 'col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 mt-50',
                                    ])
                                @endforeach
                            </div>
                        </div>

                        {{ $products->links() }}
                    </div>

                    <!-- Widgets -->
                    <div class="col-lg-3 col-12">
                        <form class="widgets">
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

    </main>
    <!--// Page Content -->
@endsection

@push('scripts')
@endpush
