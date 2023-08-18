<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsuariosController extends Controller
{

    public function viewFilmeUsuario($id)
    {
        $filme = Filme::find($id);

        if (!$filme) {
            return abort(404);
        }

        return view('usuario.viewFilmeUsuario', compact('filme'));
    }

    public function indexFilmeUsuario(Request $request)
    { {
           
            $categorias = DB::table('filmes')->distinct('categoria')->pluck('categoria');

            // Filtros
            $filtroCategoria = $request->input('categoria');
            $filtroAno = $request->input('ano');
            $filtroNome = $request->input('nome');

            // Query Builder para os filmes
            $filmesQuery = Filme::query();

            if ($filtroCategoria) {
                $filmesQuery->where('categoria', $filtroCategoria);
            }

            if ($filtroAno) {
                $filmesQuery->where('ano', $filtroAno);
            }

            if ($filtroNome) {
                $filmesQuery->where('nome', 'LIKE', '%' . $filtroNome . '%');
            }

            $filmes = $filmesQuery->paginate();

            return view('usuario.indexFilmeUsuario', [
                'filmes' => $filmes,
                'categorias' => $categorias,
            ]);
        }
    }
}
