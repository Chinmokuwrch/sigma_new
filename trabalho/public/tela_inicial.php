<?php 
session_start();

// if($_SESSION['user'] == null) {
//     header("index.php");
// }

require_once "../src/views/header.php"; ?>
<?php require_once "../src/views/header_nav.php"; ?>


 
<div class="container">
  <div class="row">
      <h1 class="nomefoda">Seja bem vindo <?= $_SESSION['user']->nome ?></h1>
    <div class="col"><a><img class="bananinhafoda" src="../public/assets/img/bananinha.jpg"></a>Diario de um banana</div>
    <div class="col">Coluna</div>
    <div class="w-100"></div>
    <div class="col">Coluna</div>
    <div class="col">Coluna</div>
  </div>
</div>
    