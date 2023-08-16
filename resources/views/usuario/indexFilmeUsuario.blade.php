<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Título</th>
            <th>Sinopse</th>
            <th>Ano</th>
            <th>Categoria</th>
        </tr>
        <tr>
            <td>{{ $filme ->nome }}</td>
            <td>{{ $filme ->sinopse }}</td>
            <td>{{ $filme ->ano }}</td>
            <td>{{ $filme ->categoria }}</td>
        </tr>
    </table>
</body>
</html>
