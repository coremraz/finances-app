<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $user = new User;
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|min:6',
        ]);

        $user->fill([
            'username' => $request->username,
            'password' => $request->password,
        ]);

        $user->save();
        return redirect('/');
    }
}
