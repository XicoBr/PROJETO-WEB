<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Sistema de Reserva de Livros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
         .logo {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <div class="card">
            <div class="card-body p-4">
                <!-- Logo e Título -->
                <div class="text-center mb-4">
                    <div class="logo">
                        <i class="bi bi-book"></i>
                    </div>
                    <h2 class="mb-3">LOCALIVRO</h2>
                </div>        
        <div class="text-center mb-4">
            
            <a href="novo_usuario.php" class="btn btn-primary mr-2">Novo Usuário</a>
            <a href="novo_livro.php" class="btn btn-primary mr-2">Novo Livro</a>
            <a href="historico_emprestimos.php" class="btn btn-primary mr-2">Histórico de Empréstimos</a>
            <a href="emprestimos.php" class="btn btn-primary mr-2">Empréstimos</a>
            <a href="livros.php" class="btn btn-primary mr-2">Gerenciar Livros</a>
        </div>
    </div>