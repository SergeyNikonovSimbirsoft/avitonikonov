@extends('layouts.main')
@section("content")
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Forgot your password?</h2>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <x-session-status :status="session('status')" />
                            <x-validation-errors :errors="$errors" />

                            <div class="group-input">
                                <label>No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</label>
                            </div>

                            <div class="group-input">
                                <label for="email">Email *</label>
                                <x-input type="email" id="email" name="email" :value="old('email')" required autofocus placeholder="Email *" />
                            </div>

                            <button type="submit" class="site-btn login-btn">Email Password Reset Link</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
