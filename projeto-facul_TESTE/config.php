<!-- config.php -->
<?php
// Configurações do banco de dados
$servername = 'localhost';
$username = 'root';
$password = '';


// Criar conexão
$conn = new mysqli($servername, $username, $password);

// Verificar conexão
//if ($conn->connect_error) {
//    die("Falha na conexão: " . $conn->connect_error);
//}

$dbname = 'biblioteca';
$sql = "CREATE DATABASE if NOT EXISTS $dbname";

//if ($conn->query($sql) === TRUE) {
//    echo "Base de dados criada com sucesso!</br>";
//} else {
//    echo "Erro ao criar o banco de dados!</br>";
//}

$conn->select_db($dbname);

// Criar tabelas do banco de dados (se ainda não existirem)
$sql_livros = "CREATE TABLE IF NOT EXISTS livros (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    editora VARCHAR(100) NOT NULL,
    ano INT(4) NOT NULL
)";

$sql_usuarios = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL
)";

$sql_reservas = "CREATE TABLE IF NOT EXISTS reservas (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT(6) UNSIGNED NOT NULL,
    livro_id INT(6) UNSIGNED NOT NULL,
    data_retirada DATE NOT NULL,
    data_devolucao DATE NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (livro_id) REFERENCES livros(id) ON DELETE CASCADE
)";

//if ($conn->query($sql_livros) === TRUE &&
//    $conn->query($sql_usuarios) === TRUE &&
//    $conn->query($sql_reservas) === TRUE) {
//    echo "Tabelas criadas com sucesso!";
//} else {
//    echo "Erro ao criar as tabelas: " . $conn->error;
//}


?>
