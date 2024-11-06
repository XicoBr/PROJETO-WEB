<!-- historico_emprestimos.php -->
<?php
require_once 'config.php';

$sql = "SELECT 
         r.id,
         u.nome AS usuario,
         l.titulo AS livro,
         r.data_retirada,
         r.data_devolucao
       FROM reservas r
       JOIN usuarios u ON r.usuario_id = u.id
       JOIN livros l ON r.livro_id = l.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Empréstimos</title>
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
        <h1 class="text-center mb-4">Histórico de Empréstimos</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuário</th>
                        <th>Livro</th>
                        <th>Data Retirada</th>
                        <th>Data Devolução</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"]. "</td>";
                            echo "<td>" . $row["usuario"]. "</td>";
                            echo "<td>" . $row["livro"]. "</td>";
                            echo "<td>" . $row["data_retirada"]. "</td>";
                            echo "<td>" . $row["data_devolucao"]. "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Nenhum empréstimo encontrado.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html> 