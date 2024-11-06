<!-- novo_livro.php -->
<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $ano = $_POST["ano"];

    $sql = "INSERT INTO livros (titulo, autor, editora, ano) VALUES ('$titulo', '$autor', '$editora', '$ano')";
    if ($conn->query($sql) === TRUE) {
        echo "Livro cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o livro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Livro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Cadastro de Novo Livro</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" required>
            </div>
            <div class="form-group">
                <label for="editora">Editora</label>
                <input type="text" class="form-control" id="editora" name="editora" required>
            </div>
            <div class="form-group">
                <label for="ano">Ano</label>
                <input type="number" class="form-control" id="ano" name="ano" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>