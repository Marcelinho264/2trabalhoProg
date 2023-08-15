<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginsController extends Controller
{
    public function showLoginForm()
    {
        return view('');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'senha');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->permissoes === 0) {
                return redirect()->intended(route(''));
            } else {
                return redirect()->intended(route(''));
            }
        }

        return redirect()->back()->withErrors(['login' => 'Credenciais inválidas']);
    }
}
