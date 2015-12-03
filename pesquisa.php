<?php

include 'inc_conecta.php';
$nome = $_GET['busca'];
$sql = "SELECT descricao FROM produtos WHERE descricao LIKE '%".$nome."%' ";
$result = $conn->query($sql);
if ($result != "") {
    echo "Registro encontrado!";
} else {
    echo "Registros nao encontrados:";
}
