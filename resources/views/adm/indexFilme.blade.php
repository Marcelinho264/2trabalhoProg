<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Ano</th>
            <th>Categoria</th>
            <th>Opções</th>
        </tr>

        @foreach ($filmes as $filme)
        <tr>
            <td>{{ $filme->nome}}</td>
            <td>{{ $filme->ano }}</td>
            <td>{{ $filme->categoria }}</td>
            <td><a href="{{ route('adm.deleteFilme', $filme->id) }}">Apagar</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
