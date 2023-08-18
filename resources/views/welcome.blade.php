<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-Vindas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .welcome-container {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .btn-enter {
            display: inline-block;
            padding: 10px 20px;
            background-color: red;
            color: #fff;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-enter:hover {
            background-color: #ad2a51;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Bem-Vindo ao Nosso Site</h1>
        <p>Descubra nossa incrível seleção de filmes.</p>
        <a href="{{route('login')}}" class="btn-enter">Entrar</a>
    </div>
</body>
</html>
