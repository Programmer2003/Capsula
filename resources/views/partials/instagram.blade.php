@php
    use \App\Services\InstagramService;
    $posts = (new InstagramService())->getPosts(6);
@endphp
<ul class="tm-instaphotos">
    @foreach ($posts as $post)
        <li>
            <a href="{{$post->permalink}}" target="_blank">
                <img src="{{$post->image}}" />
                <ul class="tm-instaphotos-counter">
                    <li><i class="ion-heart"></i> {{$post->likes_count}} </li>
                    <li><i class="ion-chatbubbles"></i> {{$post->comments_count}} </li>
                </ul>
            </a>
        </li>
    @endforeach
</ul>