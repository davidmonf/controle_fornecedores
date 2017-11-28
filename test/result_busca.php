<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}
include("conexao.php")
?>

<?php require("../html/htmlStart.php"); ?>

<!--SELECT COUNT(crs.DESC_CR_SUPERINT)/66, crs.DESC_CR_SUPERINT FROM `crs`, (SELECT impressoras.*, crs.DESC_CR_GER, crs.DESC_CR_SUPERINT FROM impressoras INNER JOIN crs ON LPAD(impressoras.CR,5,'00000') = crs.CR WHERE $query) AS SELECIONADO GROUP BY DESC_CR_SUPERINT-->

<div id="canvas-holder" style="width:50%">
	<canvas id="chart-area" />
</div>

<script id="chartSuperintendencias">
	var config = {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [
					<?php ?>'10',
					<?php ?>'10',
					<?php ?>'10',
					<?php ?>'10',
					<?php ?>'10',
					<?php ?>'10'
					
				],
				backgroundColor: [
					window.chartColors.red,
					window.chartColors.orange,
					window.chartColors.yellow,
					window.chartColors.green,
					window.chartColors.blue,
					window.chartColors.purple
				],
				label: 'Superintendências'
			}],
			labels: [
				"SUP1",
				"SUP2",
				"SUP3",
				"SUP4",
				"SUP5",
				"SUP6"
			]
		},
		options: {
			responsive: true,
			legend: {
				position: 'top',
			},
			title: {
				display: true,
				text: 'Superintendencias'
			},
			animation: {
				animateScale: true,
				animateRotate: true
			}
		}
	};
	window.onload = function() {
		var ctx = document.getElementById("chart-area").getContext("2d");
		window.myDoughnut = new Chart(ctx, config);
	};
	
</script>

<?php
if ((!isset($_POST['busca_serial'])) || (!isset($_POST['busca_cidade'])) || (!isset($_POST['busca_uf'])) || (!isset($_POST['busca_cr'])) || (!isset($_POST['busca_item'])) || (!isset($_POST['busca_desccr'])) || (!isset($_POST['busca_gerencia'])) || (!isset($_POST['busca_superint']))) {
	$sql = "SELECT impressoras.*, crs.DESC_CR_GER, crs.DESC_CR_SUPERINT FROM impressoras INNER JOIN crs ON LPAD(impressoras.CR,5,'00000') = crs.CR WHERE 1 ORDER BY ITEM_CONTRATO";
}
else {
	$query = '';
	if ($_POST['busca_serial'] != NULL) {
		$serial = $_POST['busca_serial'];
		$query .= "SERIE = '" . $serial . "' AND ";
	}
	if ($_POST['busca_cidade'] != NULL) {
		$cidade = $_POST['busca_cidade'];
		//$cidade = iconv('UTF-8', 'ASCII//TRANSLIT', $cidade);
		//$cidade = str_replace('\'','',$cidade);
		//$cidade = trim($cidade);
		$query .= "CIDADE = '" . $cidade . "' AND ";
	}
	if ($_POST['busca_uf'] != NULL) {
		$uf = $_POST['busca_uf'];
		$query .= "UF = '" . $uf . "' AND ";
	}
	if ($_POST['busca_cr'] != NULL) {
		$cr = $_POST['busca_cr'];
		$query .= "LPAD(impressoras.CR,5,'00000') AS impressoras.CR = '" . $cr . "' AND ";
	}
	if ($_POST['busca_item'] != NULL) {
		$item = $_POST['busca_item'];
		$query .= "ITEM_CONTRATO = '" . $item . "' AND ";
	}
	if ($_POST['busca_desccr'] != NULL) {
		$desc_cr = $_POST['busca_desccr'];
		$query .= "DESCRICAO_CR = '" . $desc_cr . "' AND ";
	}
	if ($_POST['busca_gerencia'] != NULL) {
		$gerencia = $_POST['busca_gerencia'];
		$query .= "crs.DESC_CR_GER = '" . $gerencia . "' AND ";
	}
	if ($_POST['busca_superint'] != NULL) {
		$superint = $_POST['busca_superint'];
		$query .= "crs.DESC_CR_SUPERINT = '" . $superint . "'";
	}
	
	$sql = "SELECT impressoras.*, crs.DESC_CR_GER, crs.DESC_CR_SUPERINT FROM impressoras INNER JOIN crs ON LPAD(impressoras.CR,5,'00000') = crs.CR WHERE $query";
	$sql = rtrim($sql, " AND ");
	$sql = ($sql . " ORDER BY ITEM_CONTRATO");
	echo $sql;
}
	$result = mysql_query($sql, $conecta_banco) or print(mysql_error());
echo ("<br>");
echo ("<table class='table table-bordered table-responsive'>");
		echo ("<tr><td>Número de série</td><td>Modelo</td><td>IP</td><td>Cidade</td><td>UF</td><td>CR</td><td>Setor</td><td>Item Contrato</td><td>Gerência</td><td>Superintendência</td></tr>");
		while ($resultado = mysql_fetch_assoc($result)) {
			echo("<tr><td><a href='input_simpress.php?num_serie=".$resultado['SERIE'] . "'>".$resultado['SERIE'] . "</a></td>");
			echo("<td>".$resultado['MODELO'] . "</td>");
			echo("<td>".$resultado['IP'] . "</td>");
			echo utf8_encode("<td>".$resultado['CIDADE'] . "</td>");
			echo("<td>".$resultado['UF'] . "</td>");
			echo("<td>".$resultado['CR'] . "</td>");
			echo("<td>".$resultado['DESCRICAO_CR'] . "</td>");
			echo("<td>".$resultado['ITEM_CONTRATO'] . "</td>");
			echo("<td>".$resultado['DESC_CR_GER'] . "</td>");
			echo("<td>".$resultado['DESC_CR_SUPERINT'] . "</td></tr>");
		}
	//elseif (mysql_num_rows($result) > 1){
		//echo ("<tr><td>Número de série</td><td>Modelo</td><td>IP</td><td>Cidade</td><td>UF</td><td>CR</td><td>Setor</td><td>Item Contrato</td><td>Gerência</td><td>Superintendência</td></tr>");
		//while ($resultado = mysql_fetch_assoc($result)) {
			//echo utf8_encode("<tr class='table'><td>".$resultado['SERIE']."</td><td>".$resultado['MODELO']."</td><td>".$resultado['IP']."</td><td>".$resultado['CIDADE']."</td><td>".$resultado['UF']."</td><td>".$resultado['CR']."</td><td>".$resultado['DESCRICAO_CR']."</td><td>".$resultado['ITEM_CONTRATO']."</td><td>".$resultado['DESC_CR_GER']."</td><td>".$resultado['DESC_CR_SUPERINT']."</td></tr>");
		//}
		//echo("</table>");
	//}
	//else{
		//echo ('Não foi encontrado nenhum item');
	//}
echo ("</table>");
?>
<?php require("../html/htmlEnd.php"); ?>
