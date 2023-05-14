<h5>{{ __('Add a review') }}</h5>
<form action="#" class="tm-form">
    <div class="tm-form-inner">
        <div class="tm-form-field">
            @php
                $defaultRating = 4;
            @endphp
            <input type="hidden" id="rating" name="rating" value="{{ $defaultRating }}">
            <div class="tm-ratingbox tm-ratingbox-input">
                @for ($i = 0; $i < 5; $i++)
                    @if ($i < $defaultRating)
                        <span class="is-active">
                            <i class="ion-android-star-outline"></i>
                        </span>
                    @else
                        <span>
                            <i class="ion-android-star-outline"></i>
                        </span>
                    @endif
                @endfor
            </div>
        </div>
        @guest
            <div class="tm-form-field tm-form-fieldhalf">
                <input type="text" placeholder="{{ __('Your Name') }}*" required="required" name="name">
            </div>
            <div class="tm-form-field tm-form-fieldhalf">
                <input type="Email" placeholder="{{ __('Your Email') }}*" required="required" name="email">
            </div>
        @endguest

        <div class="tm-form-field">
            <textarea name="product-review" cols="30" rows="5" placeholder="{{__('Your Review')}}" name="body"></textarea>
        </div>
        <div class="tm-form-field">
            <button type="submit" class="tm-button">{{ __('Submit') }}</button>
        </div>
    </div>
</form>
