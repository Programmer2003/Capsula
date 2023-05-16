<div class="{{ isset($class) ? $class : 'col-12' }}">
    <div class="tm-product tm-scrollanim">
        <div class="tm-product-topside">
            <div class="tm-product-images">
                @foreach (array_slice($product->images, 0, 2) as $img)
                    <img src="{{ $img }}" alt="{{ basename($product->img) }}">
                @endforeach
            </div>
            <ul class="tm-product-actions">
                <li>
                    <a href="#">
                        <i class="ion-android-cart"></i>
                        Add to cart
                    </a>
                </li>
                <li>
                    <button data-fancybox data-src="#tm-product-quickview"><i class="ion-eye"></i></button>
                </li>
                <li>
                    <a href="#"><i class="ion-heart"></i></a>
                </li>
            </ul>
            @if ($product->tags)
                <div class="tm-product-badges">
                    @foreach ($product->tags as $tag)
                        <span class="tm-product-badges-{{ strtolower($tag->name) }}">{{ $tag->name }}</span>
                    @endforeach
                </div>
            @endif


        </div>
        <div class="tm-product-bottomside">
            <h6 class="tm-product-title"><a
                    href="{{ LaravelLocalization::localizeUrl(route('product', $product)) }}">{{ $product->name }}</a>
            </h6>
            <div class="tm-ratingbox">
                @php
                    $average = $product->averageRating();
                @endphp
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $average)
                        <span class="is-active"><i class="ion-android-star-outline"></i></span>
                    @else
                        <span><i class="ion-android-star-outline"></i></span>
                    @endif
                @endfor
            </div>
            <span class="tm-product-price">
                ${{ $product->price }}
            </span>
            <div class="tm-product-content">
                <p>
                    {{ $product->description }}
                </p>
                <ul class="tm-product-actions">
                    <li>
                        <a href="#">
                            <i class="ion-android-cart"></i>
                            Add to cart
                        </a>
                    </li>
                    <li>
                        <button data-fancybox data-src="#tm-product-quickview">
                            <i class="ion-eye"></i>
                        </button>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ion-heart"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
