@extends('layouts.main')
@section("content")
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Reset password</h2>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <x-validation-errors :errors="$errors" />

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="group-input">
                                <label for="email">Email *</label>
                                <x-input type="email" id="email" name="email" :value="old('email', $request->email)" required autofocus placeholder="Email *"/>
                            </div>
                            <div class="group-input">
                                <label for="password">Password *</label>
                                <input type="password" id="password" name="password" required placeholder="Password *">
                            </div>
                            <div class="group-input">
                                <label for="password_confirmation">Confirm password *</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm password *">
                            </div>

                            <button type="submit" class="site-btn login-btn">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
