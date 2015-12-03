<?php
session_start();

$mensagem = "";

// verifica se exi"ste a variavel $_post["email"]
// se existe: o formulário foi preenchido
if (isset($_POST["email"])) {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    include "inc_conecta.php";
    $sql = "SELECT * FROM usuarios where email='$email' and senha=md5('$senha')";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
// output data of each row
        $row = $result->fetch_assoc();

        $_SESSION["usuario"] = $row["nome"];
        $_SESSION["logado"] = 1;

        header("location: index.php");
        $conn->close();
    } else {
        $mensagem = "Login/Senha Incorretos:";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Mercado Avenida - Área Acesso Restrito</title>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="bootstrap/login.css" rel="stylesheet">

    </head>

    <body>

        <div class="container">

            <form class="form-signin" method="post">
                <h2 class="form-signin-heading">Acesso Restrito</h2>
                <label for="inputEmail" class="sr-only">E-mail</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
                <label for="inputPassword"  class="sr-only">Senha</label>
                <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                <a href="index.php" type="submit">Voltar
            </form>
            <h4><?= $mensagem ?></h4>
            <!-- ou echo -->
        </div> <!-- /container -->

    </body>
</html>
