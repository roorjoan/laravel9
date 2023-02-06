<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        //Auth::attempt($credentials, $request->boolean('remember')))
        //Auth::attempt($credentials ...  intenta hacer login con las credenciales proporcionadas
        //... , $request->boolean('remember'))) se le pasa true o false para que recuerde o no la sesion
        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            //se le envia la excepcion al usuario en caso de fallar
            throw ValidationException::withMessages([
                'email' => __('auth.failed') //enviar mensaje traducible
            ]);
        }

        //cargar la session
        $request->session()->regenerate();

        //redirecciona a la url a la que el usuario intento acceder sin estar logeado
        //por defecto es la raiz
        return redirect()->intended()->with('status', 'You are logged in!');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login')->with('status', 'You are logged out');
    }
}
