@extends('layouts.main')
@section('content')
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Confirm password</h2>
                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <x-validation-errors :errors="$errors" />

                            <div class="group-input">
                                <label>This is a secure area of the application. Please confirm your password before continuing.</label>
                            </div>

                            <div class="group-input">
                                <label for="password">Password *</label>
                                <input type="password" id="password" name="password" required autofocus autocomplete="current-password" placeholder="Password *">
                            </div>

                            <button type="submit" class="site-btn login-btn">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
