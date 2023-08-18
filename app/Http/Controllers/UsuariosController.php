<?php
namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;


class UsuariosController extends Controller
{

    public function viewFilmeUsuario($id) {
        $filme = Filme::find($id);

        if (!$filme) {
            return abort(404);
        }

        return view('usuario.viewFilmeUsuario', compact('filme'));
    }

    public function indexFilmeUsuario(Request $request) {
        if ($request->isMethod('POST')) {
            $busca = $request->busca;

            $ord = $request->ord == 'asc';

            $filmes = Filme::where('nome', 'LIKE', "%{%busca}%")
                ->orderBy('name', $ord)
                ->paginate();
        } else {

            $filmes = Filme::paginate();
        }

        return view('usuario.indexFilmeUsuario', [
            'filmes' => $filmes,
        ]);
    }
}
