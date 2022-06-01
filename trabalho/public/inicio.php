<?php
    use Database\Database;
    require_once "../src/model/Database.php";

if(  isset($_POST['email']) ) {
    $email = $_POST['email'];
} else {
    $email = null;
}

if(  isset($_POST['pass']) ) {
    $pass = $_POST['pass'];
} else {
    $pass = null;
}


if ($email != null && $pass != null) {
    $db = new Database();  
    $resultDb = $db->select(
        "SELECT * FROM usuarios WHERE email = '$email';"
    );

     if($resultDb) {
         $emailDb = $resultDb[0]->email;
         $passDb = $resultDb[0]->senha;
     } else {
        $emailDb = null;
        $passDb = null;
     }

    if($email == $emailDb && $pass == $passDb) : 
        session_start();
        $_SESSION['user'] = $resultDb[0]; ?>
        <script>
            window.location.replace("tela_inicial.php");
        </script>
    <?php else : ?> 
        <script>
            alert("Acesso negado!");
            window.location.href("inicio.php");
        </script>
    <?php endif;
}

//var_dump($db);

require_once "../src/views/header.php";
?>

<div class="login-center">
        <img class="imagemfoda" src="../public/assets/img/logo.png">
        <form method="post" action="inicio.php">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                        <input type="email" class="form-control" name="email" placeholder="Digite seu email" required />
                        <br>
                        <input type="password" class="form-control" name="pass" placeholder="Digite sua senha" required />
                        <br><br>
                    </div>
                </div>
                <div class="d-flex">
                    <input type="submit" class="btn btn-dark col-lg-4 offset-lg-2 col-sm-12" value="Entrar" />
                    &nbsp;
                    <input type="reset" class="btn btn-secondary col-lg-4 col-sm-12" value="Limpar" />
                    <br><br>
                </div>
            </div>
            <br>
            <a href="cadastro.php"> clique para cadastrar</a>
        </form>
    </div>

<?php require_once "../src/views/footer.php"; ?>