<?php
session_start();
if (isset($_SESSION["logado"])){

    $usuario = $_SESSION["usuario"];

}else{
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> E-Commerce </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.css">
        <script src="bootstrap/jquery.js"></script>
        <script src="bootstrap/bootstrap.js"></script>
    </head>
    <body>

        <div class="container-fluid">

            <div class="row bg-primary">
                <div class="col-sm-9">
                    <h1> Mercado Avenida E-Commerce <img src="avenida.jpg" class="img-circle" alt="extra" width="150" height="90" style="float: right> </h1>
                    <h4> Compre aqui o seu Produto! </h4>
                </div>
                <div class="col-sm-3">
                    <h1>&nbsp;</h1>
                    <h4> Usuário: <?php echo $usuario ?> <a class=" btn btn-warning" href="logout.php"> Sair </a> </h4>
                </div>
            </div>