@extends('includes.base')

@section('content')

<body>
    <table style="margin-top: 2vw;" class="table">
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Ano</th>
            <th scope="col">Categoria</th>
            <th scope="col">Opções</th>
        </tr>

        @foreach ($filmes as $filme)
        <tr>
            <td scope="row">{{ $filme->nome}}</td>
            <td>{{ $filme->ano }}</td>
            <td>{{ $filme->categoria }}</td>
            <td><a href="{{ route('adm.deleteFilme', $filme->id) }}">Apagar</a>
                <a href="{{ route('adm.editFilme', $filme->id) }}">Editar</a></td>
        </tr>
        @endforeach
    </table>

    <a href="{{ route('adm.addFilme' )}}"><button>Adicionar Filme</button></a>
@endsection
