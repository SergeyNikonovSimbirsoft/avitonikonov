@extends('layouts.main')
@section("content")
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login</h2>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <!-- Session Status -->
                            <x-session-status :status="session('status')" />
                            <x-validation-errors :errors="$errors" />
                            <div class="group-input">
                                <label for="email">Email *</label>
                                <x-input type="email" id="email" name="email" :value="old('email')" required autofocus placeholder="Email *" />
                            </div>
                            <div class="group-input">
                                <label for="password">Password *</label>
                                <input type="password" id="password" name="password" required autocomplete="current-password" placeholder="Password *">
                            </div>
                            <div class="group-input">
                                <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="remember_me">
                                        Remember me
                                        <input type="checkbox" id="remember_me" name="remember">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="{{ route('password.request') }}" class="forget-pass">Forget your Password</a>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn">Sign In</button>
                        </form>
                        <div class="switch-login">
                            <a href="{{ route('register') }}" class="or-login">Or Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
