<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|min:6',
        ]);

        $user = User::create($validated);
        Auth::login($user);

        request()->session()->regenerate();

        session()->put('username', $request->username);
        session()->put('id', User::where('username', session()->get('username'))->first()->id);

        return redirect('/');
    }
}
