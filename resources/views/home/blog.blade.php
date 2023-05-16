<!-- Latest Blogs Area -->
<div id="tm-news-area" class="tm-section tm-blog-area tm-padding-section bg-pattern-transparent">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="tm-sectiontitle text-center">
                    <h3>LATEST BLOGS</h3>
                    <p>A blog is a discussion or informational website published on the World Wide Web
                        consisting of discrete</p>
                </div>
            </div>
        </div>
        <div class="row tm-blog-slider">
            @foreach ($blogs as $blog)
                @include('partials.blog.blog-card', [
                    'blog' => $blog,
                ])
            @endforeach

        </div>
    </div>
</div>
<!--// Latest Blogs Area -->
