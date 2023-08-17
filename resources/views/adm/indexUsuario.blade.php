@extends('includes.base')

@section('content')
<table border="1" style="margin-top: 2vw;" class="table">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Nível de Acesso</th>
        <th>Opções</th>
    </tr>

    @foreach ($usuarios as $usuario)
    <tr>
        <td scope="row">{{ $usuario->nome }}</td>
        <td>{{ $usuario->email }}</td>
        <td>
            @if ($usuario->permissao == 1)
            Usuário
            @else
            Administrador
            @endif
        </td>
        <td><a href="{{ route('adm.deleteUsuario', $usuario->id) }}">Apagar</a> |
            <a href="{{ route('adm.editUsuario', $usuario->id) }}">Editar</a></td>
        </tr>
        @endforeach
    </table>

    <a href="{{ route('adm.indexFilme' )}}"><button>Voltar</button></a>
@endsection
