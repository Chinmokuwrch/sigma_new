<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../public/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css"/>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Página inicial</title>
</head>
<body>

<!-- Propriedades iniciais (tamanho e cor da barra) -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
<!-- Logo e link do logo -->
    <a class="navbar-brand" href="http://localhost/trabalho/public/inicio.php">
        <img src="../public/assets/img/logo.png" alt="Logo" title="Ir para youtube" height="60px"/>
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="../public/lista.php">Meus Livros</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../public/lista.php">Blibioteca de Livros</a>
        </li>
        
      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="pesquisar livros" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        <button class="btn btn-outline-success" type="submit" action="sessao-end.php">Encerrar sessão</button>
      </form>
    </div>
  </div>
</nav>
