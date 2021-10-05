<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if(!auth()->user()){
            return view('auth.login');
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function handleLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|max:255|min:8'
        ]);

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('status', 'Invalid login details');
        };

        return redirect()->route('dashboard');
    }
}
