<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()){
            return view('home');
        } else {
            return redirect()->route('login');
        }

    }
}
