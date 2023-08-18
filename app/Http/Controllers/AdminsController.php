<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;


class AdminsController extends Controller
{
    public function indexUsuario(Usuario $usuarios)
    {
        $usuarios = Usuario::all();

        return view('adm.indexUsuario', [
            'usuarios' => $usuarios
        ]);
    }

    public function indexFilme(Filme $filmes)
    {
        $filmes = Filme::all();

        return view('adm.indexFilme', ['filmes' => $filmes]);
    }


    public function addUsuario()
    {
        return view('adm.addUsuario');
    }

    public function addUsuarioSave(Request $form)
    {
        $dados = $form->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'permissao' => 'required',
        ]);

        $dados['password'] = Hash::make($dados['password']);

        $usuario = Usuario::create($dados);

        event(new Registered($usuario));

        return redirect()->route('adm.indexUsuario')->with('sucesso', 'Usuario cadastrado com sucesso');
    }

    public function editUsuario(Usuario $usuario)
    {
        return view('adm.editUsuario', compact('usuario'));
    }

    public function editUsuarioSave(Request $request, Usuario $usuario)
    {
        $dados = $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'permissao' => 'required',
        ]);

        $usuario->fill($dados);

        $usuario->save();

        return redirect()->route('adm.indexUsuario')->with('sucesso', 'Usuário alterado com sucesso');
    }

    public function deleteUsuario(Usuario $usuario)
    {
        return view('adm.deleteUsuario', [
            'usuario' => $usuario
        ]);
    }

    public function deleteUsuarioForReal(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('adm.indexUsuario')->with('sucesso', 'Usuario excluido com sucesso');
    }

    public function addFilme()
    {
        return view('adm.addFilme');
    }

    public function addFilmeSave(Request $form)
    {
        $dados = $form->validate([
            'nome' => 'required',
            'sinopse' => 'required',
            'ano' => 'required',
            'categoria' => 'required',
            'imagem_capa' => 'required',
            'link_trailer' => 'required',
        ]);

        $filme = Filme::create($dados);

        event(new Registered($filme));

        return redirect()->route('adm.indexFilme')->with('sucesso', 'Filme cadastrado com sucesso');
    }

    public function editFilme(Filme $filme)
    {
        return view('adm.editFilme', compact('filme'));
    }

    public function editFilmeSave(Request $form, Filme $filme)
    {
        $dados = $form->validate([
            'nome' => 'required',
            'sinopse' => 'required',
            'ano' => 'required',
            'categoria' => 'required',
            'imagem_capa' => 'required',
            'link_trailer' => 'required',
        ]);

        $filme->fill($dados);

        $filme->save();

        return redirect()->route('adm.indexFilme')->with('sucesso', 'Filme alterado com sucesso');
    }

    public function deleteFilme(Filme $filme)
    {
        return view('adm.deleteFilme', [
            'filme' => $filme
        ]);
    }

    public function deleteFilmeForReal(Filme $filme)
    {
        $filme->delete();

        return redirect()->route('adm.indexFilme')->with('success', 'Filme excluido com sucesso');
    }
}
