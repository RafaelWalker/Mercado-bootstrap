<?php
include 'inc_titulo.php';
include 'inc_menu.php';
?>

<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-12">
            <h2> Inclusão de Produtos </h2>
<?php
        // obtém os campos do formulário 
        $descricao = $_POST["descricao"];
        $marca = $_POST["marca"];
        $preco = $_POST["preco"];
        $imagem = $_FILES["imagem"]["name"];
        $imagem_tmp = $_FILES["imagem"]["tmp_name"];
        
        // exibe as informações do produto
        echo "<h3> Descrição: $descricao </h3>";
        echo "<h3> Marca: $marca </h3>";
        echo "<h3> Preço R$: $preco </h3>";
        echo "<h3> Imagem: $imagem </h3>";

        include 'inc_conecta.php';

        $sql = "INSERT INTO produtos(descricao, marca, preco)
                VALUES ('$descricao', '$marca', '$preco')";

        if ($conn->query($sql) === TRUE) {
            // obtém o id do último registro inserido
            $last_id = $conn->insert_id;
            echo "<h3> Ok! Produto Corretamente Cadastrado - Código: $last_id </h3>";
            
            // indica o destino e nome do arquivo da imagem 
            $destino = "figuras/" . $last_id . ".jpg";
            
            // copia a imagem do local temporário para a pasta destino
            move_uploaded_file($imagem_tmp, $destino);
            
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
?>
        </div>
    </div>
</div>
<?php
include 'inc_rodape.php';