<!-- emprestimos.php -->
<?php
require_once 'config.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_POST["usuario_id"];
    $livro_id = $_POST["livro_id"];
    $data_retirada = $_POST["data_retirada"];
    $data_devolucao = $_POST["data_devolucao"];

    $sql = "INSERT INTO reservas (usuario_id, livro_id, data_retirada, data_devolucao) 
            VALUES ('$usuario_id', '$livro_id', '$data_retirada', '$data_devolucao')";

    if ($conn->query($sql) === TRUE) {
        echo "Empréstimo realizado com sucesso!";
    } else {
        echo "Erro ao realizar o empréstimo: " . $conn->error;
    }
}

// Consultar usuários e livros cadastrados
$sql_usuarios = "SELECT id, nome FROM usuarios";
$result_usuarios = $conn->query($sql_usuarios);

$sql_livros = "SELECT id, titulo FROM livros";
$result_livros = $conn->query($sql_livros);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Empréstimo</title>
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
        <h1 class="text-center mb-4">Novo Empréstimo</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="usuario_id">Usuário</label>
                <select class="form-control" id="usuario_id" name="usuario_id" required>
                    <option value="">Selecione o usuário</option>
                    <?php
                    if ($result_usuarios->num_rows > 0) {
                        while($row = $result_usuarios->fetch_assoc()) {
                            echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="livro_id">Livro</label>
                <select class="form-control" id="livro_id" name="livro_id" required>
                    <option value="">Selecione o livro</option>
                    <?php
                    if ($result_livros->num_rows > 0) {
                        while($row = $result_livros->fetch_assoc()) {
                            echo "<option value='" . $row["id"] . "'>" . $row["titulo"] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="data_retirada">Data de Retirada</label>
                <input type="date" class="form-control" id="data_retirada" name="data_retirada" required>
            </div>
            <div class="form-group">
                <label for="data_devolucao">Data de Devolução</label>
                <input type="date" class="form-control" id="data_devolucao" name="data_devolucao" required>
            </div>
            <button type="submit" class="btn btn-primary">Realizar Empréstimo</button>
        </form>
    </div>
</body>
</html>