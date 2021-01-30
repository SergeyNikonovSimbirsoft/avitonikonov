<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\Status;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\Captcha;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'max:255',
            'patronymic' => 'max:255',
            'convenient_time_for_calls' => 'max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'phone' => 'required|string|max:255|unique:users',
            'g-recaptcha-response' => new Captcha()
        ]);

        $user = User::create([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'status_id' => (int)Status::where('slug', 'waiting')->first()['id'],
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'convenient_time_for_calls' => $request->convenient_time_for_calls,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $roleUser = Role::where('slug', 'user')->first();
        $user->roles()->attach($roleUser);

        Auth::login($user);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
