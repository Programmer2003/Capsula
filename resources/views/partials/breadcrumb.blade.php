<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="{{ asset('images/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="tm-breadcrumb">
            <h2>{{ $title }}</h2>
            <ul>
                <li>
                    <a href="{{ LaravelLocalization::localizeUrl(route('home')) }}">
                        {{ __('Home') }}
                    </a>
                </li>
                @isset($links)

                    @foreach ($links as $link => $caption)
                        <li>
                            <a href="{{ $link }}">
                                {{ __($caption) }}
                            </a>
                        </li>
                    @endforeach
                @endisset
                <li>{{ $text }}</li>
            </ul>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->
