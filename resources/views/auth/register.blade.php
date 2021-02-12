@extends('layouts.main')
@section('content')
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Registration</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <x-validation-errors :errors="$errors" />

                            <div class="group-input">
                                <label for="name">Name *</label>
                                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Name *" />
                            </div>

                            <div class="group-input">
                                <label for="surname">Surname</label>
                                <x-input id="surname" type="text" name="surname" :value="old('surname')" placeholder="Surname" />
                            </div>

                            <div class="group-input">
                                <label for="patronymic">Patronymic</label>
                                <x-input id="patronymic" type="text" name="patronymic" :value="old('patronymic')" placeholder="Patronymic" />
                            </div>

                            <div class="group-input">
                                <label for="convenient_time_for_calls">Convenient time for calls</label>
                                <x-input id="convenient_time_for_calls" type="text" name="convenient_time_for_calls" :value="old('convenient_time_for_calls')" placeholder="Convenient time for calls" />
                            </div>

                            <div class="group-input">
                                <label for="email">Email *</label>
                                <x-input id="email" type="email" name="email" :value="old('email')" required placeholder="Email *" />
                            </div>

                            <div class="group-input">
                                <label for="phone">Phone *</label>
                                <x-input id="phone" type="text" name="phone" :value="old('phone')" required placeholder="Phone *" />
                            </div>

                            <div class="group-input">
                                <label for="password">Password *</label>
                                <input type="password" id="password" name="password" required autocomplete="new-password" placeholder="Password *">
                            </div>

                            <div class="group-input">
                                <label for="password_confirmation">Password confirmation *</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Password confirmation *">
                            </div>

                            <div class="group-input">
                                <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                            </div>

                            <button type="submit" class="site-btn login-btn">Register</button>
                        </form>
                        <div class="switch-login">
                            <a href="{{ route('login') }}" class="or-login">Already registered?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

