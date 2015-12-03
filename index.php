<?php
include 'inc_menu.php';
include 'mercado.php';
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title> Mercado Avenida </title>
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
            <h1> Mercado Avenida E-Commerce <img src="avenida.jpg" class="img-circle" alt="logo" width="150" height="90" style="float: right"> </h1>
            <h3> Compre aqui o seu Produto! </h3>
        </div>
        <div class="col-sm-3">
            <h1>&nbsp;</h1>
        </div>
    </div>

<div class="col-sm-6">
    <h2> Produtos Disponíveis: </h2>
</div>
    <div class="col-sm-4">
        <form method="GET" name="formulario" action="pesquisa.php">
            <input type="text"  class="form-control" name="busca">
            <input class="btn btn-success" type="submit" value="Pesquisar" style="float: left">
        </form>
    </div>
    </div>
</body>

<?php
include 'inc_rodape.php';
