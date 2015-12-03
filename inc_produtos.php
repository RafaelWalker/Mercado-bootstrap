<?php
include 'inc_titulo.php';
include 'inc_menu.php';
?>

<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-12">
            <h2> Inclusão de Produtos </h2>
        </div>

        <form role="form" method="post" action="inc_produtos2.php" enctype="multipart/form-data">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="descricao">Descrição do Produto:</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" required>
                </div>
            </div>

            <div class="col-sm-6">    
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca" required>
                </div>
            </div>

            <div class="col-sm-6">    
                <div class="form-group">
                    <label for="preco">Preço R$:</label>
                    <input type="text" class="form-control" id="preco" name="preco" required>
                </div>
            </div>                

            <div class="col-sm-12">    
                <div class="form-group">
                    <label for="imagem">Imagem do Produto:</label>
                    <input type="file" class="form-control" id="imagem" name="imagem" required>
                </div>
            </div>                

            <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="submit" class="btn btn-warning">Limpar</button>   
            </div>
        </form>       