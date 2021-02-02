@extends('layouts.main')
@section("content")
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Verify email</h2>
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <x-validation-errors :errors="$errors" />

                            <div class="group-input">
                                <label>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</label>
                            </div>

                            @if (session('status') == 'verification-link-sent')
                                <div class="group-input">
                                    <label class="success">
                                        A new verification link has been sent to the email address you provided during registration.
                                    </label>
                                </div>
                            @endif


                            <button type="submit" class="site-btn login-btn">Resend Verification Email</button>
                        </form>
                        <form method="POST" action="{{ route('logout') }}" class="switch-login">
                            @csrf

                            <a onclick="event.preventDefault(); this.closest('form').submit();" href="{{ route('login') }}" class="or-login">Logout</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
