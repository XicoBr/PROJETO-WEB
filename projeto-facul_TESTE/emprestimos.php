<!-- emprestimos.php -->
<?php
include 'header.php';
require_once 'config.php';

$showModal = false;
$mensagem = '';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_POST["usuario_id"];
    $livro_id = $_POST["livro_id"];
    $data_retirada = $_POST["data_retirada"];
    $data_devolucao = $_POST["data_devolucao"];

    $sql = "INSERT INTO reservas (usuario_id, livro_id, data_retirada, data_devolucao) 
            VALUES ('$usuario_id', '$livro_id', '$data_retirada', '$data_devolucao')";

    if ($conn->query($sql) === TRUE) {
        $mensagem = "Empréstimo realizado com sucesso!";
        $showModal = true;
    } else {
        $showModal = true;
        $mensagem = "Não foi possível realizar o empréstimo";
    }
}

// Consultar usuários e livros cadastrados
$sql_usuarios = "SELECT id, nome FROM usuarios";
$result_usuarios = $conn->query($sql_usuarios);

$sql_livros = "SELECT id, titulo FROM livros";
$result_livros = $conn->query($sql_livros);
?>



    <div class="container min-height-content formulario  p-4" style="width: 500px; background-color: #FFFEFA;  border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
        <h1 class="text-center mb-4">Novo Empréstimo</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="usuario_id">Usuário:</label>
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
                <label for="livro_id">Livro:</label>
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
                <label for="data_retirada">Data de Retirada:</label>
                <input type="date" class="form-control" id="data_retirada" name="data_retirada" required>
            </div>
            <div class="form-group">
                <label for="data_devolucao">Data de Devolução:</label>
                <input type="date" class="form-control" id="data_devolucao" name="data_devolucao" required>
                <button type="submit" class="form-btn col-6 col-md-7 btn btn-primary" >Realizar Empréstimo</button>
            </div>
        </form>
    </div>

    <!-- Modal -->
<div class="modal fade" id="resultModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Resultado do Cadastro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo $mensagem; ?>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php if ($showModal): ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = new bootstrap.Modal(document.getElementById('resultModal'));
        myModal.show();
    });
</script>
<?php endif; ?>

<?php 
    include 'footer.php';
?>