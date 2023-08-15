<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\Aluno;

class UsuariosController extends Controller
{
    public function add(){
        return view('');
    }

    public function addSave(Request $form){
        $dados = $form->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'permissao' => 'required',
        ]);

        $dados['password'] = Hash::make($dados['password']);

        $usuario = Usuario::create($dados);

        event(new Registered($usuario));

        return redirect()->route('')->with('success', 'Usuario cadastrado com sucesso')
    }
}
