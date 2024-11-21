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
            --btn-prim-cor01: #236C3B;
            --btn-prim-cor02: #1b512d;
            --btn-dng-cor01: #bd2038;
            --btn-dng-cor02: #96182B;
            --body-cor: #f6f0de;
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
            background-color: var(--body-cor);
        }
       
        .content-wrapper {
            flex: 1 0 auto;
            width: 100%;
            padding-bottom: 0; /* Altura do footer + espaço extra */
        }

        .logo {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 1rem;
        }
        
        .footer {
            transition: 0.4s;
            margin-top: 20px;
        }

        .footer i:hover {
            color: var(--btn-prim-cor01);
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;
            width: 80%;
            margin: auto;
            text-align: left;
            padding: 20px;
        }
        .formulario {
            margin-top: 20px;
        }
        
        .form-btn {
            display: flex;
            flex-direction: row;
            justify-content: center;
            justify-items: auto;
            width: auto;
            margin-top: 10px;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: var(--btn-prim-cor01);
        }
        .btn-primary:hover {
            background-color: var(--btn-prim-cor02);
        }
        .btn-danger {
            background-color: var(--btn-dng-cor01);
        }
        .btn-danger:hover {
            background-color: var(--btn-dng-cor02);
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

        

        /* Nova classe para garantir que o conteúdo principal tenha altura mínima */
        .min-height-content {
            min-height: calc(100vh - 180px); /* 60px é a altura aproximada do footer */
        }
        #corlogin {
            background-color: #000000;
        }
    </style>
</head>
<body>
    <div class="content-wrapper sticky-top">
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