<?php
session_start();
include("conexao.php");
include("gera_contagens.php");
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}
$buscar = $_GET['id'];
$sql = ("SELECT impressoras.ITEM_CONTRATO,
LPAD( impressoras.CR, 5,  '00000' ) AS ID_CLIENTE,
crs.DESC_CR,
crs.CR_GER,
crs.DESC_CR_GER,
crs.CR_SUPERINT,
crs.DESC_CR_SUPERINT
FROM  `impressoras`
INNER JOIN  `crs` ON LPAD(impressoras.CR, 5,  '00000') = crs.CR
WHERE
ORDER BY impressoras.ITEM_CONTRATO ASC");

?>

<?php require("../html/htmlStart.php"); ?>


<h1>NOME DO RELATORIO</h1>

<div class="row mtbox">
	<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
		<div class="box1">
			<i class="fa fa-print fa-3x"></i>
			<h3>0000</h3>
		</div>
		<p>Quantidade</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-usd fa-3x"></span>
			<h3>R$00.000,00</h3>
		</div>
		<p>Valor Total</p>
	</div>

</div>

<div class="row">
	<div id="canvas-holder-ger" style="width:100%" class="col-md-6">
		<canvas id="chart-custo"/>
	</div>
</div>

<script>

	/*INICIO SCRIPT DE CONF CHART.JS CUSTO MENSAL*/
	var configCusto = {
		type: 'bar',
		data: {
			datasets: [{
				data: [
					'46000',
					'45000',
					'45000',
					'45000',
					'45000',
					'45000',
					'46000',
					'50000',
					'51000',
					'41000',
					'40010',
					'45010',
				],
				backgroundColor: [
					window.chartColors.blue,
					window.chartColors.blue,
					window.chartColors.blue,
					window.chartColors.blue,
					window.chartColors.blue,
					window.chartColors.blue,
					window.chartColors.blue,
					window.chartColors.blue,
					window.chartColors.blue,
					window.chartColors.blue,
					window.chartColors.blue,
					window.chartColors.blue
				],
				label: 'Custo em R$'
			}],
			labels: [
				"Janeiro",
				"Fevereiro",
				"Março",
				"Abril",
				"Maio",
				"Junho",
				"Julho",
				"Agosto",
				"Setembro",
				"Outubro",
				"Novembro",
				"Dezembro"
			]
		},
		options: {
			responsive: true,
			legend: {
				position: 'top',
			},
			title: {
				display: true,
				text: 'Custo Mensal na Competência 2017'
			},
			animation: {
				animateScale: true,
				animateRotate: true
			}
		}
	};
	/*FIM SCRIPT DE CONF CHART.JS CUSTO MENSAL*/

	/*INICIALIZADOR DO SCRIPT DE CONF CHART.JS DASHBOARD SIMPRESS*/
	
	window.onload = function() {
		var ctx = document.getElementById("chart-custo").getContext("2d");
		window.myBar = new Chart(ctx, configCusto);

	};

</script>


<?php require("../html/htmlEnd.php"); ?>

