<div class="tm-prodetails-review">
    <h5>
        {{ $product->reviewsCount() }} {{ trans_choice('Review', $product->reviewsCount()) }} {{ __('For') }}
        "{{ $product->name }}"
    </h5>
    <div class="tm-comment-wrapper mb-50">
        @foreach ($product->getAllReviews() as $review)
            @include('product.reviews.review', compact('review'))
        @endforeach
    </div>

    @include('product.reviews.user-review')

</div>
