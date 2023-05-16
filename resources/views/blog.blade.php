@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    @include('partials.breadcrumb', [
        'title' => __('Our Blogs'),
        'text' => __('Blog'),
    ])

    <!-- Page Content -->
    <main class="page-content">

        <!-- Blogs Area -->
        <div class="tm-section tm-blogs-page tm-padding-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 order-1 order-lg-2">
                        <div class="row tm-blog-container mt-50-reverse">
                            @foreach ($blogs as $blog)
                                @include('partials.blog.blog-card', [
                                    'blog' => $blog,
                                    'class' => 'col-lg-6 col-md-6 col-12 mt-50',
                                ])
                            @endforeach
                        </div>

                        {{ $blogs->links() }}
                    </div>
                    <div class="col-lg-4 col-12 order-2 order-lg-1">
                        <form class="widgets widgets-sidebar widgets-sidebar-left">
                            @php
                                $in_form = ['caption'];
                                foreach ($_GET as $key => $value) {
                                    if (in_array($key, $in_form)) {
                                        continue;
                                    }
                                    $key = htmlspecialchars($key);
                                    $value = htmlspecialchars($value);
                                    echo "<input type='hidden' name='$key' value='$value' />";
                                }
                            @endphp
                            @include('partials.blog.widgets.search')

                            @include('partials.blog.widgets.category')

                            <!-- Single Widget -->
                            <div class="single-widget widget-recentpost">
                                <h6 class="widget-title">{{ __('Recent Posts') }}</h6>
                                <ul>
                                    @foreach ($latest as $blog)
                                        <li>
                                            <a href="blog-details.html" class="widget-recentpost-image">
                                                <img src="{{ asset('images/blog/blog-image-1_1.jpg') }}"
                                                    alt="blog thumbnail">
                                            </a>
                                            <div class="widget-recentpost-content">
                                                <h6><a href="blog-details.html">{{ $blog->short_caption }}</a></h6>
                                                <span>{{ $blog->date() }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--// Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget widget-archives">
                                <h6 class="widget-title">Archives</h6>
                                <ul>
                                    <li><a href="#">December 2018</a></li>
                                    <li><a href="#">Septemper 2018</a></li>
                                    <li><a href="#">June 2018</a></li>
                                    <li><a href="#">April 2018</a></li>
                                    <li><a href="#">February 2018</a></li>
                                    <li><a href="#">January 2018</a></li>
                                </ul>
                            </div>
                            <!--// Single Widget -->

                            <!-- Popular Tags -->
                            <div class="single-widget widget-tags">
                                <h6 class="widget-title">Popular Tags</h6>
                                <ul>
                                    @foreach ($tags as $tag)
                                        <li><a href="#">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--// Popular Tags -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--// Blogs Area   -->

    </main>
    <!--// Page Content -->
@endsection

@push('scripts')
@endpush
