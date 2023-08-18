<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

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
        <td>
            <a class="btn btn-danger"  href="{{ route('adm.deleteUsuario', $usuario->id) }}">Apagar</a> |
            <a class="btn btn-danger" href="{{ route('adm.editUsuario', $usuario->id) }}">Editar</a></td>
        </tr>

        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nome }}</td>
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
</body>

</html>
