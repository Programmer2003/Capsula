<div class="tm-header tm-header-sticky">
    <div class="tm-header-toparea bg-black">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <ul class="tm-header-info">
                        <li><a href="tel:18883456789"><i class="ion-ios-telephone"></i>1-888-345-6789</a></li>
                        <li><a href="mailto:contact@example.com"><i class="ion-android-mail"></i>contact@example.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="tm-header-options">
                        <div class="tm-dropdown tm-header-links">
                            <button>{{ __('My Account') }}</button>
                            <ul>
                                <li>
                                    <a href="{{ LaravelLocalization::localizeUrl(route('account')) }}">
                                        {{ __('My Account') }}
                                    </a>
                                </li>
                                @guest
                                    <li>
                                        <a href="{{ LaravelLocalization::localizeUrl(route('login-resiter')) }}">
                                            {{ __('Login/Register') }}
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                @endguest
                                <li>
                                    <a href="cart.html">
                                        {{ __('Shopping Cart') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        {{ __('Wishlist') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="tm-dropdown tm-header-currency">
                            <button>USD</button>
                            <ul>
                                <li><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">JPY</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </div> --}}
                        <div class="tm-dropdown tm-header-language">
                            <button>
                                <img src="{{ asset('images/flag-' . strtolower(LaravelLocalization::getCurrentLocaleName()) . '.png') }}"
                                    alt="language">
                                {{ LaravelLocalization::getCurrentLocaleNative() }}
                            </button>
                            <ul aria-labelledby="lang">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" class="is-active"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            <img src="{{ asset('images/flag-' . strtolower($properties['name']) . '.png') }}"
                                                alt="language">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-header-middlearea bg-white">
        <div class="container">
            <div class="tm-mobilenav"></div>
            <div class="row align-items-center">
                <div class="col-lg-3 col-6 order-1 order-lg-1">
                    <a href="{{ LaravelLocalization::localizeUrl(route('home')) }}" class="tm-header-logo">
                        <img src="{{ asset('images/logo.png') }}" alt="capsula">
                    </a>
                </div>
                <div class="col-lg-6 col-12 order-3 order-lg-2">
                    <form class="tm-header-search">
                        <input type="text" placeholder="Search product...">
                        <button><i class="ion-android-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-3 col-6 order-2 order-lg-3">
                    <ul class="tm-header-icons">
                        <li>
                            <a href="{{ LaravelLocalization::localizeUrl(route('wishlist')) }}">
                                <i class="ion-android-favorite-outline"></i>
                                <span>
                                    0
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ LaravelLocalization::localizeUrl(route('cart')) }}">
                                <i class="ion-bag"></i>
                                <span>
                                    0
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="tm-header-bottomarea bg-white">
        <div class="container">
            <nav class="tm-header-nav">
                <ul>
                    <li>

                        <a href="{{ LaravelLocalization::localizeUrl(route('home')) }}">
                            {{ __('Home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ LaravelLocalization::localizeUrl(route('about')) }}">
                            {{ __('About') }}
                        </a>
                    </li>
                    <li class="tm-header-nav-dropdown"><a href="products.html">Shop</a>
                        <ul>
                            <li><a href="products.html">Products</a></li>
                            <li><a href="products-leftsidebar.html">Products Left Sidebar</a></li>
                            <li><a href="products-nosidebar.html">Products Without Sidebar</a></li>
                            <li><a href="products-4-column.html">Products 4 Column</a></li>
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="product-details-leftsidebar.html">Product Details Left Sidebar</a>
                            </li>
                            <li><a href="product-details-nosidebar.html">Product Details Without Sidebar</a>
                            </li>
                            <li><a href="#">Others</a>
                                <ul>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login-register.html">Login / Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="tm-header-nav-megamenu"><a href="index.html">Pages</a>

                        <ul>
                            <li><a href="shop.html">Common Pages</a>
                                <ul>
                                    <li><a href="index.html">Homepage</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="portfolios.html">Portfolios</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog Pages</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-details-leftsidebar.html">Blog Details Left Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Shop Pages</a>
                                <ul>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="products-leftsidebar.html">Products Left Sidebar</a></li>
                                    <li><a href="products-nosidebar.html">Products Without Sidebar</a></li>
                                    <li><a href="products-4-column.html">Products 4 Column</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="product-details-leftsidebar.html">Product Details Left
                                            Sidebar</a></li>
                                    <li><a href="product-details-nosidebar.html">Product Details Without
                                            Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Shop Related Pages</a>
                                <ul>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login-register.html">Login / Register</a></li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                    <li class="tm-header-nav-dropdown"><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="blog-details-leftsidebar.html">Blog Details Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
