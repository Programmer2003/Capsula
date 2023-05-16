<div class="tm-comment">
    <div class="tm-comment-thumb">
        <img src="{{ asset('images/author-image-1.jpg') }}" alt="{{ $review->author()->name }}">
    </div>
    <div class="tm-comment-content w-100">
        <h6 class="tm-comment-authorname">
            <a href="#">
                {{ $review->author()->name }}
            </a>
        </h6>
        <span class="tm-comment-date">{{ $review->date() }} </span>
        <div class="tm-ratingbox">
            @for ($i = 0; $i < 5; $i++)
                @if ($i < $review->rating)
                    <span class="is-active"><i class="ion-android-star-outline"></i></span>
                @else
                    <span><i class="ion-android-star-outline"></i></span>
                @endif
            @endfor
        </div>
        <p>{{ $review->body }}</p>
    </div>
</div>
