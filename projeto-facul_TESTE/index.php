<!-- index.php -->
<?php
require_once 'config.php';

// Implementar a lógica da página inicial aqui
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Sistema de Reserva de Livros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container my-5">
        <h1 class="text-center mb-4">Bem-vindo ao Sistema de Reserva de Livros</h1>
        <div class="text-center">
            <a href="novo_usuario.php" class="btn btn-primary mr-2">Novo Usuário</a>
            <a href="novo_livro.php" class="btn btn-primary mr-2">Novo Livro</a>
            <a href="historico_emprestimos.php" class="btn btn-primary mr-2">Histórico de Empréstimos</a>
            <a href="login.php" class="btn btn-primary">Login</a>
        </div>
    </div>
</body>
</html>