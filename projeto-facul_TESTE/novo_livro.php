<!-- novo_livro.php -->
<?php
include 'header.php';
require_once 'config.php';

$showModal = false;
$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $ano = $_POST["ano"];

    $sql = "INSERT INTO livros (titulo, autor, editora, ano) VALUES ('$titulo', '$autor', '$editora', '$ano')";
    if ($conn->query($sql) === TRUE) {
        $mensagem = "Livro cadastrado com sucesso!";
        $showModal = true;
    } else {
        $showModal = true;
        $mensagem =  "Erro ao cadastrar o livro: " . $conn->error;
    }
}
?>


    
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
