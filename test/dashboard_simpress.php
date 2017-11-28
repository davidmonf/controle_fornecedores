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


<div class="row mtbox">
	<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
		<div class="box1">
			<i class="fa fa-print fa-3x"></i>
			<h3><?php include("conta_impressoras.php");?></h3>
		</div>
		<p>Impressoras Cadastradas</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-windows fa-3x" ></span>
			<h3>353</h3>
		</div>
		<p>Lorem Ipsum</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-wrench fa-3x"></span>
			<h3>23</h3>
		</div>
		<p>Lorem Ipsum</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-pencil-square-o fa-3x"></span>
			<h3>16</h3>
		</div>
		<p>Lorem Ipsum</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-usd fa-3x"></span>
			<h3>R$<?php echo($valortotal); ?></h3>
		</div>
		<p>Valor do último faturamento</p>
	</div>

</div>

<div class="row">
	<div class="col-md-10 col-md-offset-2">
		<div id="canvas-holder-sup" style="width:80%">
			<canvas id="chart-sup"/>
		</div>
	</div>
</div>
<br>
<br>
<div class="row">
	<div class="col-md-10 col-md-offset-2">
	<div id="canvas-holder-ger" style="width:80%">
		<canvas id="chart-custo"/>
	</div>
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
					'<?php echo ($g_sis_proc); ?>',
					'<?php echo($g_rh); ?>',
					'<?php echo($g_tec_sup); ?>',
					'<?php echo($safin); ?>',
					'<?php echo($sijuc); ?>',
					'<?php echo($sunat); ?>',
					'<?php echo($sunop); ?>',
					'<?php echo($suasf); ?>',
				],
				backgroundColor: [
					'#00b300',
					'#6666ff',
					'#666633',
					'#000066',
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
				'Ger. Sistemas e Processos',
				'Ger. Recursos Humanos',
				'Ger. Tecnologia e Suporte',
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
	

	/*INICIO SCRIPT DE CONF CHART.JS CUSTO MENSAL*/
	var configCusto = {
		type: 'bar',
		data: {
			datasets: [{
				data: [
					'49002',
					'47000',
					'51700',
					'52050',
					'45000',
					'46110',
					'48090',
					'50000',
					'51000',
					'41000',
					'44010',
					'46666',
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

		var ctx = document.getElementById("chart-custo").getContext("2d");
		window.myBar = new Chart(ctx, configCusto);

	};
	
</script>


<?php require("../html/htmlEnd.php"); ?>

