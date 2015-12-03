<?php
include 'inc_titulo.php';
include 'inc_menu.php';
include 'inc_conecta.php';

// variável contendo comando para recuperar os registros cadastrados no banco de dados
$sql = "SELECT marca, COUNT(id) as num from produtos group by marca";
// executa a instrução SQL
$result = $conn->query($sql);

// num_rows: indica o número de registros obtidos
if ($result->num_rows == 0) {
    echo "Não há Produtos Cadastrados";
}
$conn->close();
?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages: ["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {

        var data = new google.visualization.DataTable();

        data.addColumn('string', 'marca');
        data.addColumn('number', 'num');

        <?php while ($row = $result->fetch_assoc()) { ?>
            data.addRows ([['<?= $row["marca"] ?>', <?= $row["num"] ?>]]);
        <?php } ?>

        var options = {
            title: 'Número de Produtos por marca'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>

<div class="col-sm-9">
    <div class="row">
        <div class="col-sm-12">
            <h2> Gráfico de Produtos </h2>
        </div>
        <div class="col-sm-12">
            <div id="piechart" style="width: 900px ; height: 500px">

            </div>
        </div>
    </div>
</div>
