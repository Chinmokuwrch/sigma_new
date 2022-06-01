<?php

use Database\Database;

if( isset($_POST['nome']) ) {
    $nome = $_POST['nome'];
} else {
    $nome = null;
}

if( isset($_POST['email']) ) {
    $email = $_POST['email'];
} else {
    $email = null;
}

if( isset($_POST['fone']) ) {
    $fone = $_POST['fone'];
} else {
    $fone = null;
}

if( isset($_POST['pass']) ) {
    $pass = $_POST['pass'];
} else {
    $pass = null;
}


require_once "../src/model/Database.php";
$db = new Database();

$resultDb = $db->insert(
    "INSERT INTO usuarios(nome, email, senha, fone)
    VALUES('$nome', '$email', '$pass', '$fone'); "
);

//var_dump($resultDb);

if( $resultDb ) {
    ?>
    <script>
        alert("Cadastro realizado com sucesso!");
        window.location.replace('../public/inicio.php');
    </script>
    <?php
    
} else {
    echo "Ocorreu algum erro na atualização ;-; ";
}