<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    
    $conn = new mysqli($host, $username, $password);
    
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }

    $database = 'base_dados1';
    $sql = "CREATE DATABASE if NOT EXISTS $database";

    if ($conn->query($sql) === TRUE) {
        echo "Base de dados criada com sucesso!</br>";
    } else {
        echo "Erro ao criar o banco de dados!</br>";
    }

    $conn->select_db($database);

    // VERIFICANDO E CRIANDO A TABELA DE USUÁRIOS
    $tabela_usuarios = 'usuarios';
    $verificaTabela = $conn->query("SHOW TABLES LIKE '$tabela_usuarios'");

    if ($verificaTabela->num_rows == 0) {
        $sql = "CREATE TABLE $tabela_usuarios (
            id INT(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
            nome VARCHAR(128) NOT NULL,
            email VARCHAR(128) UNIQUE NOT NULL,
            senha VARCHAR(255) NOT NULL,
            data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
    
        if ($conn->query($sql) === TRUE) {
            echo "Tabela $tabela_usuarios criada com sucesso!</br>";
        } else {
            echo "Erro ao criar a tabela: " . $conn->error . "</br>";
        }
    
    } else {
        echo "A tabela $tabela_usuarios já existe.</br>";
    }

    // VERIFICANDO E CRIANDO A TABELA DE LIVROS
    $tabela_livros = 'livros';
    $verificatabela_livros = $conn->query("SHOW TABLES LIKE '$tabela_livros'");

    if ($verificatabela_livros->num_rows == 0) {
        $sql = "CREATE TABLE $tabela_livros (
        id INT(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
        titulo VARCHAR(128) NOT NULL,
        autor VARCHAR(128) NOT NULL,
        ano_publicacao INT UNSIGNED NOT NULL)";

        if ($conn->query($sql) === TRUE) {
            echo "Tabela $tabela_livros criada com sucesso!</br>";
        } else {
            echo "Erro ao criar a tabela: ". $conn->error. "</br>";
        }
    } else {
        echo "A tabela $tabela_livros já existe.</br>";
    }


    // VERIFICANDO E CRIANDO A TABELA DE RESERVAS (JUNTAMENTE COM AS FOREIGN KEYS)
    $tabela_reservas = 'reservas';
    $verifica_reservas = $conn->query("SHOW TABLES LIKE '$tabela_reservas'");

    if($verifica_reservas->num_rows == 0) {
        $sql = "CREATE TABLE reservas (
        id INT(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
        usuario_id INT(11) UNSIGNED,
        livro_id INT(11) UNSIGNED,
        data_reserva TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        data_devolucao DATE,
        data_retirada DATE,
        status ENUM('reservado', 'retirado', 'devolvido') DEFAULT 'reservado',
        FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
        FOREIGN KEY (livro_id) REFERENCES livros(id) ON DELETE CASCADE             
        )";

        if($conn->query($sql) === TRUE) {
            echo "Tabela $tabela_reservas criada com sucesso!</br>";
        } else {
            echo "Erro ao criar a tabela: ". $conn->error. "</br>";
        } 
    
    


    } else {
        echo "A tabela $tabela_reservas já existe.</br>";
    }

    
    echo 'Conexão bem sucedida!</br>';

    $conn->close();

