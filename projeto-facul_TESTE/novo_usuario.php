<!-- novo_usuario.php -->
<?php
include 'header.php';
require_once 'config.php';

$showModal = false;
$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);  // senha criptografada

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if ($conn->query($sql) === TRUE) {
        $mensagem = "Usuário cadastrado com sucesso!";
        $showModal = true;
    } else {
        $showModal = true;
        $mensagem =  "Erro ao cadastrar o usuário: " . $conn->error;
    }
}
?>



<div class="container min-height-content formulario  p-4" style="width: 500px; background-color: #FFFEFA;  border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
    <h1 class="text-center mb-4">Cadastro de Novo Usuário</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group formulario">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
            <button type="submit" class="form-btn btn col-md-7 btn-primary">Cadastrar usuário</button>
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