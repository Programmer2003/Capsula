<li>
    <a href="product-details.html" class="widget-popularproduct-image">
        <img src="{{$product->images[0]}}"
            alt="product thumbnail">
    </a>
    <div class="widget-popularproduct-content">
        <h6><a href="product-details.html">{{$product->name}}</a></h6>
        <span>${{$product->price}}</span>
    </div>
</li>