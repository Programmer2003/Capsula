@extends('layouts.app')

@push('styles')
@endpush

@section('content')
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="{{ asset('images/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>{{ __('Login & Register') }}</h2>
                <ul>
                    <li><a href="index.html">{{ __('Home') }}</a></li>
                    <li>{{ __('Login & Register') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Page Content -->
    <main class="page-content">

        <!-- Login Register Area -->
        <div class="tm-section tm-login-register-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <form method="POST" action="{{ route('login') }}" class="tm-form tm-login-form">
                            @csrf
                            <h4>{{ __('Login') }}</h4>
                            <p>{{ __('Become a part of our community!') }}</p>
                            <div class="tm-form-inner">
                                <div class="tm-form-field">
                                    <label for="login-email">{{ __('Email Address') }}*</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="login-email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="tm-form-field">
                                    <label for="login-password">{{ __('Password') }}*</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="login-password" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="tm-form-field">
                                    <input type="checkbox" name="remember" id="login-remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="login-remember">{{ __('Remember Me') }}</label>
                                    <p class="mb-0"><a href="#">{{ __('Forgot your password?') }}</a></p>
                                </div>
                                <div class="tm-form-field">
                                    <button type="submit" class="tm-button">{{ __('Login') }}</button>
                                </div>
                                <div class="tm-form-field">
                                    <div class="tm-form-sociallogin">
                                        <h6>{{__('Or')}}, {{__('Login with')}} :</h6>
                                        <ul>
                                            <li>
                                                <a title="github" href="{{ route('github-auth') }}"class="github-btn">
                                                    <i class="icon ion-social-github-outline" style="font-size: 26px"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="google" href="{{ route('google-auth') }}" class="google-btn">
                                                    <i class="icon ion-social-google" style="font-size: 26px"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6">
                        <form method="POST" action="{{ route('register') }}" class="tm-form tm-register-form">
                            @csrf
                            <h4>{{ __('Create an account') }}</h4>
                            <p>{{ __('Welcome!') }} {{ __('Register for an account') }}</p>
                            <div class="tm-form-inner">
                                <div class="tm-form-field">
                                    <label for="register-username">{{ __('Full name') }}</label>
                                    <input type="text" name="register_name" value="{{ old('register_name') }}"
                                        class="form-control @error('register_name') is-invalid @enderror"
                                        id="register-username" required autocomplete="name">
                                    @error('register_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="tm-form-field">
                                    <label for="register-email">{{ __('Email Address') }}</label>
                                    <input type="email" name="email" value="{{ old('email') }}" id="register-email"
                                        required autocomplete="email">
                                    @error('register_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="tm-form-field">
                                    <label for="register-password">{{ __('Password') }}</label>
                                    <input class="form-control @error('register_password') is-invalid @enderror"
                                        type="password" name="register_password" id="register-password" name="register-pass"
                                        required autocomplete="new-password">
                                    @error('register_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="tm-form-field">
                                    <label for="register-password">{{ __('Confirm Password') }}</label>
                                    <input class="form-control" type="password" name="register_password_confirmation"
                                        id="register-password-confirm" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>

                                <div class="tm-form-field">
                                    <div>
                                        <input type="checkbox" id="register-pass-show" name="register-pass-show">
                                        <label for="register-pass-show">{{ __('Show Password') }}</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="register-terms" name="register-terms" required>
                                        <label for="register-terms">
                                            {!! __('I agree to the :href terms and conditions :href_end', [
                                                'href' => '<a href="' . route('privacy') . '">',
                                                'href_end' => '</a>',
                                            ]) !!}
                                        </label>
                                    </div>
                                </div>
                                <div class="tm-form-field">
                                    <button type="submit" class="tm-button"
                                        onclick="console.log($('register-terms'))">{{ __('Register') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--// Login Register Area -->

    </main>
    <!--// Page Content -->
@endsection

@push('scripts')
@endpush
