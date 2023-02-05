<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()]
        ]);

        //Autenticar automaticamente y luego redireccionar al dashboard
        /*$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        Auth::login($user);
        //luego redireccionar
        return view('posts.index');
        */

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password) //encriptar la contraseña
        ]);

        return to_route('login')->with('status', 'Account created!');
    }
}
