<?php
include 'inc_titulo.php';
include 'inc_menu.php';
?>

<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-10">
            <h2> Cadastro de Produtos </h2>
        </div>
        <div class="col-sm-2">
            <h2> <a href="inc_produtos.php" class="btn btn-info btn-block" role="button"> Novo </a> </h2>
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
                        <th>Ações</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'inc_conecta.php';

// variável contendo comando para recuperar os registros cadastrados no banco de dados
                    $sql = "SELECT id, descricao, marca, preco FROM produtos ORDER BY id";
// executa a instrução SQL
                    $result = $conn->query($sql);

// num_rows: indica o número de registros obtidos
                    if ($result->num_rows > 0) {

                        $total = 0;
                        $num = $result->num_rows;
// output data of each row
                        while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $descricao = $row['descricao'];
                            $preco = $row['preco'];
                            $total = $total + $preco;
                            echo "<tr><td class='text-center'>  $id </td>";
                            echo "<td>" . $row['descricao'] . "</td>";
                            echo "<td>" . $row['marca'] . "</td>";
                            echo "<td class='text-right'>" . number_format($row['preco'], 2, ',', '.') . "</td>";
                            echo "<td> <img src='figuras/$id.jpg' style='width: 80px; height: 80px'> </td>";
                            echo "<td> <a href='alt_produtos.php' class='btn btn-warning' role='button'> Alterar </a>
                               <a href='exc_produtos.php?id=$id' onclick='return confirm(\"Confirma Exclusão de $descricao?\")' class='btn btn-danger' role='button'> Excluir </a>
                          </td></tr>";
                        }
                    } else {
                        echo "Não há produtos cadastrados";
                    }

                    echo "<tr> <td colspan=6> <strong> Número de Produtos: $num - Total em Estoque R$: " . number_format($total, 2, ',', ','). "</strong> </td> </tr>";
                    $conn->close();
                    ?>            
                </tbody>
            </table>
        </div>        
    </div>         
</div> 

