@extends('layouts.profile')
@section('content')
    {{Breadcrumbs::render('personal', 'Profile')}}
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Profile</h2>
                        <form action="{{route('personal.update')}}" method="POST">
                            @csrf

                            <!-- Session Status -->
                            <x-session-status :status="session('status')" />
                            <x-validation-errors :errors="$errors" />

                            <div class="group-input">
                                <label for="name">Name *</label>
                                <input type="text" id="name" name="name" placeholder="Name *" autofocus value="{{ $user->name }}" required>
                            </div>
                            <div class="group-input">
                                <label for="surname">Surname</label>
                                <input type="text" id="surname" name="surname" placeholder="Surname" value="{{ $user->surname }}">
                            </div>
                            <div class="group-input">
                                <label for="patronymic">Patronymic</label>
                                <input type="text" id="patronymic" placeholder="Patronymic" name="patronymic" value="{{ $user->patronymic }}">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Convenient time for calls</label>
                                <input type="text" id="convenient_time_for_calls" placeholder="Convenient time for calls" name="convenient_time_for_calls" value="{{ $user->convenient_time_for_calls }}">
                            </div>
                            <div class="group-input">
                                <label for="phone">Phone *</label>
                                <input type="text" id="phone" placeholder="Phone *" name="phone" value="{{ $user->phone }}" required>
                            </div>
                            <button type="submit" class="site-btn register-btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


