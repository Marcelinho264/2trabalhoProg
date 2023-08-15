<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class FilmesController extends Controller
{
    public function index() {
        return view('adm.index');
    }

    public function add() {
        return view('');
    }

    public function addSave(Request $form) {
        $dados = $form->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'permissao' => 'required',
        ]);

        $dados['password'] = Hash::make($dados['password']);

        $usuario = Usuario::create($dados);

        event(new Registered($usuario));

        return redirect()->route('')->with('success', 'Usuario cadastrado com sucesso');
    }

    public function edit() {
        return view('adm.edit');
    }

    public function editSave() {
    }

    public function delete() {
    }

    public function deleteTrue() {
    }

    public function addFilme() {
        return view('');
    }

    public function addFilmeSave(Request $form) {
        $dados = $form->validate([

        ]);

        $filme = Filme::created($dados);
    }

    public function editFilme() {
        return view('adm.editFilme');
    }

    public function editSaveFilme() {
    }

    public function deleteFilme() {
        return view('adm.deleteFilme');
    }

    public function deleteTrueFilme() {
    }
}
