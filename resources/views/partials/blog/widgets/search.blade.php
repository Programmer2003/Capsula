<div class="single-widget widget-search">
    <h6 class="widget-title">{{ __('Search') }}</h6>
    <div action="#" class="widget-search-form">
        <input type="text" placeholder="{{ __('Enter your keyword') }}..." name="caption"
            value="{{ request()->query('caption', '') }}" autofocus>
        <button type="submit"><i class="ion-searchbar"></i></button>
    </div>
</div>
