<?php
session_start();
include("conexao.php");
include("gera_contagens.php");
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}

?>

<?php require("../html/htmlStart.php"); ?>


<body>


<div class="row mtbox">
	<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
		<div class="box1">
			<i class="fa fa-print fa-3x"></i>
			<h3><?php include("conta_impressoras.php");?></h3>
		</div>
		<p>Impressoras Simpress Cadastradas</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-windows fa-3x" ></span>
			<h3>353</h3>
		</div>
		<p>Micros AS Cadastrados</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-wrench fa-3x"></span>
			<h3>23</h3>
		</div>
		<p>Equipamentos parados para manutenção</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-pencil-square-o fa-3x"></span>
			<h3>16</h3>
		</div>
		<p>Pedidos AS em Aberto</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-usd fa-3x"></span>
			<h3>R$50.000,00</h3>
		</div>
		<p>Custo Total de Aluguel</p>
	</div>

</div>

<div class="row">
	<div id="canvas-holder-sup" style="width:50%" class="col-md-6">
		<canvas id="chart-sup"/>
	</div>
	
	<div id="canvas-holder-ger" style="width:50%" class="col-md-6">
		<canvas id="chart-ger"/>
	</div>
</div>
<br>
<br>
<div class="row">
	<div id="canvas-holder-ger" style="width:100%" class="col-md-6">
		<canvas id="chart-custo"/>
	</div>
</div>

<script>
	/*INICIO SCRIPT DE CONF CHART.JS SUPERINTENDENCIA*/
	var configSup = {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [
					'<?php echo($suger); ?>',
					'<?php echo($safin); ?>',
					'<?php echo($sijuc); ?>',
					'<?php echo($sunat); ?>',
					'<?php echo($sunop); ?>',
					'<?php echo($suasf); ?>',
				],
				backgroundColor: [
					window.chartColors.red,
					window.chartColors.orange,
					window.chartColors.yellow,
					window.chartColors.green,
					window.chartColors.blue,
					window.chartColors.purple
				],
				label: 'Dataset 1'
			}],
			labels: [
				'SUGER',
				'SAFIN',
				'SIJUC',
				'SUNAT',
				'SUNOP',
				'SUASF',
			]
		},
		options: {
			responsive: true,
			legend: {
				position: 'top',
			},
			title: {
				display: true,
				text: 'Equipamentos por Superintendencia'
			},
			animation: {
				animateScale: true,
				animateRotate: true
			}
		}
	};
	/*FIM SCRIPT DE CONF CHART.JS SUPERINTENDENCIA*/

	/*INICIO SCRIPT DE CONF CHART.JS GERENCIA*/
	var configGer = {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [
					'10',
					'10',
					'10',
					'10',
					'10',
				],
				backgroundColor: [
					window.chartColors.red,
					window.chartColors.orange,
					window.chartColors.yellow,
					window.chartColors.green,
					window.chartColors.blue,
				],
				label: 'Dataset 1'
			}],
			labels: [
				"Norte",
				"Nordeste",
				"Nordeste-Sul",
				"Centro-Oeste",
				"São Paulo"
			]
		},
		options: {
			responsive: true,
			legend: {
				position: 'top',
			},
			title: {
				display: true,
				text: 'Equipamentos por Gerência Regional'
			},
			animation: {
				animateScale: true,
				animateRotate: true
			}
		}
	};
	/*FIM SCRIPT DE CONF CHART.JS GERENCIA*/

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
		var ctxSup = document.getElementById("chart-sup").getContext("2d");
		window.myDoughnut = new Chart(ctxSup, configSup);

		var ctxGer = document.getElementById("chart-ger").getContext("2d");
		window.myDoughnut = new Chart(ctxGer, configGer);

		var ctx = document.getElementById("chart-custo").getContext("2d");
		window.myBar = new Chart(ctx, configCusto);

	};
	
</script>


<?php require("../html/htmlEnd.php"); ?>

