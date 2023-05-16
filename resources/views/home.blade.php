@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <!-- Heroslider Area -->
    <div class="tm-heroslider-area bg-grey">
        <div class="tm-heroslider-slider">
            @include('partials.heroslider', [
                'title' => 'Woman’s Jewellery Collection',
                'text' =>
                    'Jewellery may be made from a wide range of materials. Jewellery has been made to adorn nearly every body part from hairpins to toe.',
                'img' => 'heoslider-image-1.jpg',
            ])
            @include('partials.heroslider', [
                'title' => 'Woman’s Jewellery Collection',
                'text' =>
                    'Jewellery may be made from a wide range of materials. Jewellery has been made to adorn nearly every body part from hairpins to toe.',
                'img' => 'heoslider-image-2.jpg',
            ])
        </div>
    </div>
    <!--// Heroslider Area -->

    <!-- Page Content -->
    <main class="page-content">
        @include('home.features.index')

        @include('home.popular')

        @include('home.banners.index')

        @include('home.new-arrival')

        @include('home.offer')

        @include('home.blog')
    </main>
    <!--// Page Content -->
@endsection

@push('scripts')
@endpush
