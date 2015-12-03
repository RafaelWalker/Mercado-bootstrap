<?php
include 'inc_titulo.php';
include 'inc_menu.php';

// obtém o id do registro a ser excluído
$id = $_GET["id"];
?>

<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-10">
            <h2> Exclusão de Produtos </h2>
            <h3> Produto a ser excluído: <?= $id ?> </h3>
<?php
include 'inc_conecta.php';

// sql to delete a record
$sql = "DELETE FROM produtos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<h3> Ok! Registro Excluído Corretamente </h3>";
} else {
    echo "<h3> Erro... Registro não foi excluído </h3> " . $conn->error;
}

$conn->close();

?>
        </div>
    </div>
</div>

<?php
include 'inc_rodape.php';        