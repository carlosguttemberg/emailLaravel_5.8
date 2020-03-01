<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Seja bem vindo(a), {{$nome}}</h4>

    <p>Voce acabou de acessar o sistema utilizando o seu email: {{$email}}</p>

    <p> Data/Hora de acesso: {{$dataHora}}</p>

    <div>
        <img width="10%" height="10%" src="{{ $message->embed(public_path() . '/img/laravel.png') }}" alt="">
    </div>
</body>
</html>