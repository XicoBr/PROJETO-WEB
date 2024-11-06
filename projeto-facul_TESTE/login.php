<!-- login.php -->
<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Realizar o login e redirecionar para a página inicial
        header("Location: index.php");
        exit;
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <a href="emprestimos.php" class="btn btn-primary">Empréstimos</a>
        </div>
    </div>
    <div class="container my-5">
        <h1 class="text-center mb-4">Login</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>
</body>
</html>