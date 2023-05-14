<div class="tm-footer">
    @include('partials.instagram')

    <div class="tm-footer-toparea tm-padding-section">
        <div class="container">
            <div class="widgets widgets-footer row">

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-info">
                        <a class="widget-info-logo" href="index.html"><img src="{{ asset('images/logo.png') }}"
                                alt="logo"></a>
                        <p>{{ __('Capsula is a fashion online clothing store. All rights reserved.') }}</p>
                        <ul>
                            <li><b>{{ __('Address') }} :</b>2726 Avenue Papineau Montreal, QC, Canada</li>
                            <li><b>{{ __('Phone') }}:</b><a href="tel:+18009156270">1-800-915-6270</a></li>
                            <li><b>{{ __('Email') }} :</b><a href="mailto:info@example.com">info@example.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-quicklinks">
                        <h6 class="widget-title">{{ __('Useful Links') }}</h6>
                        <ul>
                            <li><a href="about.html">{{ __('About Us') }}</a></li>
                            <li><a href="#">{{ __('Delivery Info') }}</a></li>
                            <li><a href="#">{{ __('Privacy & Policy') }}</a></li>
                            <li><a href="#">{{ __('Returns & Refunds') }}</a></li>
                            <li><a href="#">{{ __('Terms & Conditions') }}</a></li>
                            <li><a href="contact.html">{{ __('Contact Us') }}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-quicklinks">
                        <h6 class="widget-title">{{ __('My Account') }}</h6>
                        <ul>
                            <li><a href="my-account.html">{{ __('My account') }}</a></li>
                            <li><a href="cart.html">{{ __('Cart') }}</a></li>
                            <li><a href="wishlist.html">{{ __('Wishlist') }}</a></li>
                            <li><a href="#">{{ __('Newsletter') }}</a></li>
                            <li><a href="#">{{ __('FAQ') }}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-newsletter">
                        <h6 class="widget-title">{{ __('Join Our Newsletter') }}</h6>
                        <p>{{ __('Subscribe to be the first to know about new discounts, products and news.') }}</p>
                        <form id="tm-mailchimp-form" class="widget-newsletter-form">
                            <input id="mc-email" type="text" placeholder="{{ __('Enter email address') }}">
                            <button id="mc-submit" type="submit" class="tm-button">{{ __('Subscribe Now') }}
                                <b></b></button>
                        </form>
                        <div class="tm-mailchimp-alerts">
                            <div class="tm-mailchimp-submitting"></div>
                            <div class="mailchimp-success"></div>
                            <div class="tm-mailchimp-error"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tm-footer-bottomarea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <p class="tm-footer-copyright">©
                        2019. Designed by <a href="https://thememarch.com">ThemeMarch</a></p>
                </div>
                <div class="col-md-5">
                    <div class="tm-footer-payment">
                        <img src="{{ asset('images/payment-methods.png') }}" alt="payment methods">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
