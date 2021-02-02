<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showView()
    {
        return view('profile', [
            'user' => User::find(Auth::user()->id)
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'max:255',
            'patronymic' => 'max:255',
            'convenient_time_for_calls' => 'max:255',
            'phone' => 'required|string|max:255|unique:users',
        ]);

        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'convenient_time_for_calls' => $request->convenient_time_for_calls,
            'phone' => $request->phone
        ]);
        $user->save();

        session()->flash('success', 'User updated successfully');

        return redirect()->back();
    }
}
