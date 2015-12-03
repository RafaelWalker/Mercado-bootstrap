
<?php
include 'inc_conecta.php';

?>
<meta charset="UTF-8">
<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-10">
        </div>
        <div class="col-sm-2">
        </div>
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descrição do Produto</th>
                        <th>Marca</th>
                        <th>Preço R$</th>
                        <th>Imagem</th>                      
                    </tr>
                </thead>
                <tbody>
                    <?php

$sql = "SELECT id, descricao, marca, preco FROM produtos";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $descricao = $row['descricao'];
                            echo "<tr><td class='text-center'> $id </td>";
                            echo "<td>" . $row['descricao'] . "</td>";
                            echo "<td>" . $row['marca'] . "</td>";
                            echo "<td class='text-left'>" . number_format($row['preco'], 2, ',', '.') . "</td>";
                            echo "<td> <img src='figuras/$id.jpg' style='width: 80px; height: 80px'> </td>";
                            echo "<td> 
                          </td></tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>