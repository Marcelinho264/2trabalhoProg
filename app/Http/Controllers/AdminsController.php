<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class AdminsController extends Controller
{
    public function index()
    {
        return view('adm.index');
    }

    public function add()
    {
        return view('');
    }

    public function addSave(Request $form)
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

        return redirect()->route('')->with('sucesso', 'Usuario cadastrado com sucesso');
    }

    public function edit()
    {
        return view('adm.edit');
    }

    public function editSave(Request $form, Usuario $usuario)
    {

        $dados = $form->validate([
            'nome' => 'required',
            'email' => 'required|email',
        ]);

        unset($dados['password']);

        $usuario->fill($dados);
        $usuario->save();

        return redirect()->route('')->with('sucesso', 'Usuário alterado com sucesso');
    }

    public function delete(Usuario $usuario)
    {
        return view('',[
            'user' => $usuario
        ]);
    }

    public function deleteForReal(Usuario $usuario)
    {
        $usuario -> delete();

        return redirect()->route('')->with('sucesso', 'Usuario excluido com sucesso');
    }

    public function addFilme()
    {
        return view('');
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

        $filme = Filme::created($dados);

        event(new Registered($filme));

        return redirect()->route('')->with('sucesso', 'Filme cadastrado com sucesso');
    }

    public function editFilme()
    {
        return view('adm.editFilme');
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

        return redirect()->route('')->with('sucesso', 'Filme alterado com sucesso');
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

        return redirect()->route('')->with('success', 'Filme excluido com sucesso');
    }
}
