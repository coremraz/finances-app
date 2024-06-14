<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|min:6',
        ]);

        User::create($validated);

        return redirect('/');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('login');
    }
}
