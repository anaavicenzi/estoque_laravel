<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function create()
    {
        return view("produto.login");
    }


    public function store(LoginRequest $request)
    {
        if (Auth::attempt($request->only("email","password"))) {
            return redirect()->intended('/home');
    }


        return back()->withErrors([
            'email' => 'Email ou senha incorretos.',
        ]);
    }
}
