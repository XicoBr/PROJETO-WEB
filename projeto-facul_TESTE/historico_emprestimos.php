<!-- historico_emprestimos.php -->
<?php
include 'header.php';
require_once 'config.php';

$sql = "SELECT 
         r.id,
         u.nome AS usuario,  /* usuario.nome */
         l.titulo AS livro,  /* livro.titulo */
         r.data_retirada,  /* reserva.data_retirada */
         r.data_devolucao  
       FROM reservas r
       JOIN usuarios u ON r.usuario_id = u.id
       JOIN livros l ON r.livro_id = l.id";
$result = $conn->query($sql);
?>


    
    <div class="container  min-height-content">
        <h1 class="text-center">Histórico de Empréstimos</h1>
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

<?php 
    include 'footer.php';
?>