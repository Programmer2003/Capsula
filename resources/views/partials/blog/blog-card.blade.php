@php
    $a = request();
@endphp
<div class="{{ isset($class) ? $class : 'col-lg-4 col-md-6' }}">
    <div class="tm-blog tm-scrollanim">
        <div class="tm-blog-topside">
            <div class="tm-blog-thumb">
                <img src="{{ asset('images/blog/blog-image-1_1.jpg') }}" alt="blog image">
            </div>
            <span class="tm-blog-metahighlight">
                <span>
                    {{ $blog->month() }}
                </span>
                {{ $blog->day() }}
            </span>
        </div>
        <div class="tm-blog-content">
            <h6 class="tm-blog-title">
                <a href="blog-details.html">
                    {{ $blog->caption }}
                </a>
            </h6>
            <ul class="tm-blog-meta">
                <li>
                    <a href="{{ $a->url() . '?' . http_build_query(['author' => $blog->author]) }}">
                        <i class="ion-android-person"></i>
                        {{ $blog->author }}
                    </a>
                </li>
                <li>
                    <a href="blog-details.html">
                        <i class="ion-chatbubbles"></i>
                        {{ $blog->comments_count }} {{ trans_choice('Comment', $blog->comments_count) }}
                    </a>
                </li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incdidunt ut labore et dolore magna aliqua [....]
            </p>
            <a href="blog-details.html" class="tm-readmore">
                {{ __('Read more') }}
            </a>
        </div>
    </div>
</div>
