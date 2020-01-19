<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

   public function login()
   {
        $credentials = $this->validate(request(), [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials))
        {
            return redirect()->route('home')
            ->with('info', 'Bienvenido al sistema usuario ');
        }

        return back()
            ->with('error', 'Las credenciales ingresadas no existen');
   }

   public function logout(){
    Auth::logout();

    return redirect()->route('showLogin')
        ->with('info', 'Tu sesión finalizó correctamente');
   }
}
