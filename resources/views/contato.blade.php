<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatenos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Entre em Contato</h1>
    <form method="POST" action="{{ route('contato.store') }}">
        @csrf
        <div class="form-group">
            <label>Nome:</label>
            <input value="Lucas" type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu Nome" required>
        </div>

        <div class="form-group">
            <label >E-mail:</label>
            <input value="Lucas123@gmail.com" type="email" name="email" id="email" class="form-control" placeholder="Digite seu Email"required>
        </div>

        <div class="form-group">
            <label>Mensagem:</label>
            <textarea name="detalhes" id="detalhes" rows="3" class="form-control" placeholder="Qual a sua duvida?" required>Ola! teste de laravel com email</textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
    </form>
</div>

</body>
</html>
