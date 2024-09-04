<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
   public function create() {
    return view("produto.register");
   }

   public function store(RegisterRequest $request) {
    $validatedData = $request -> validated();

    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password'=> bcrypt($validatedData['password']),
    ]);

    Auth::login($user);

    return redirect('/login');
    }

}
