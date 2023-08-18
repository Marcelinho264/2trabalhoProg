<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginsController extends Controller
{
    public function showLoginForm()
    {
        return view('formUser');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->permissao === 0) {
                return redirect()->route('adm.indexFilme');
            } else {
                return redirect()->route('usuarios.indexFilmeUsuario');
            }
        }

        return redirect()->back()->withErrors(['login' => 'Credenciais inválidas']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
