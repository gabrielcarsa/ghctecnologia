<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Mensagem de Contato</title>
</head>
<body>
    <h1>Nova Mensagem de Contato</h1>

    <p><strong>Nome:</strong> {{ $data['nome'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Celular:</strong> {{ $data['celular'] }}</p>
    <p><strong>Mensagem:</strong> {{ $data['mensagem'] }}</p>

    <p>Obrigado,</p>
    {{ config('app.name') }}
</body>
</html>