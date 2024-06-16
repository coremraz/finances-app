<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationData;
use Illuminate\Validation\ValidationException;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'username' => 'Sorry, incorrect login or password'
            ]);
        }

        request()->session()->regenerate();
        session()->put('username', "$request->username");

        return redirect('/');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('login');
    }
}
