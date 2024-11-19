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
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        .content-wrapper {
            flex: 1 0 auto;
            width: 100%;
            padding-bottom: 60px; /* Altura do footer + espaço extra */
        }

        .logo {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 1rem;
        }
        
        .footer {
            transition: 0.4s;
        }

        .footer:hover {
            color: #d6e3f8;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;
            width: 50%;
            margin: auto;
            text-align: left;
            margin-bottom: 5px;
        }
        
        .form-btn {
            display: flex;
            flex-direction: row;
            justify-content: center;
            justify-items: auto;
            width: fit-content;
            margin-top: 5px;
        }

        footer {
            display: flex;
            flex-direction: row;
            flex-shrink: 0;
            width: 100%;
            bottom: 0;
            background-color: black;
            color: white;
        }

        .main-content {
            padding: 2rem 0;
        }

        /* Nova classe para garantir que o conteúdo principal tenha altura mínima */
        .min-height-content {
            min-height: calc(100vh - 200px); /* 60px é a altura aproximada do footer */
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-black">
                <div class="container-fluid">
                    <i class="bi bi-book text-white me-2"></i>
                    <a class="navbar-brand" href="#">LocaLivro</a>
                
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto text-center">
                            <li class="nav-item"><a class="nav-link" href="livros.php">Livros</a></li>
                            <li class="nav-item"><a class="nav-link" href="historico_emprestimos.php">Reservas</a></li>
                            <li class="nav-item"><a class="nav-link" href="emprestimos.php">Nova Reserva</a></li>
                            <li class="nav-item"><a class="nav-link" href="novo_livro.php">Novo livro</a></li>
                            <li class="nav-item"><a class="nav-link" href="novo_usuario.php">Novo usuário</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>