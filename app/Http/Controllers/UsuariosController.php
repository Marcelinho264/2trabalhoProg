<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;


class UsuariosController extends Controller
{
    public function viewUsuario() {
        return view('usuario.view');
    }

    public function indexUsuario() {
        return view('usuario.index');
    }
}
