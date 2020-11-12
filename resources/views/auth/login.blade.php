@extends("layouts.auth")

@section("content")

    <div class="kt-grid kt-grid--ver kt-grid--root kt-page">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
                <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                    <div class="kt-login__wrapper">
                        <div class="kt-login__container">
                            <div class="kt-login__body">
                                <div class="kt-login__logo">
                                    <a href="#">
                                        <img style="width: 70%;" src="{{asset("assets/media/company-logos/uestco.png")}}">
                                    </a>
                                </div>

                                <div class="kt-login__signin">
                                    <div class="kt-login__head">
                                        <h3 class="kt-login__title">Sign In</h3>
                                    </div>
                                    <div class="kt-login__form">
                                        <form class="kt-form" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required="" autocomplete="email" autofocus />
                                            </div>
                                            <div class="form-group">
                                                <input id="password" type="password" class="form-control form-control-last @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            </div>
                                            <div class="kt-login__extra">
                                                <label class="kt-checkbox">
                                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                                                    <span></span>
                                                </label>
                                                <a href="{{ route('password.request') }}" >Forget Password ?</a>
                                            </div>
                                            <div class="kt-login__actions">
                                                <button id="" type="submit" class="btn btn-brand btn-pill btn-elevate">Sign In</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-login__account">
                            <span class="kt-login__account-msg">
                                Don't have an account yet ?
                            </span>&nbsp;&nbsp;
                            <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Sign Up!</a>
                        </div>
                        @error('email')
                        <div class="alert alert-warning alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            {{ $message }}
                        </div>
                        @enderror
                        @error('password')
                        <div class="alert alert-warning alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url({{asset("assets/media/bg/bg-9.jpg")}})">
                    <div class="kt-login__section">
                        <div class="kt-login__block">
                            <h3 class="kt-login__title left"></h3>
                            <div class="kt-login__desc">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("customCss")
@endsection
@section("customJs")
@endsection
