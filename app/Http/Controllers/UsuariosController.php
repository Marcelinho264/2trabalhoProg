<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;


class UsuariosController extends Controller
{
    public function view() {
        return view('usuario.view');
    }

    public function index() {
        return view('usuario.index');
    }
}
