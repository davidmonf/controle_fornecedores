<?php
session_start();
include("conexao.php");
include("gera_relatorio.php");
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}

?>

<?php require("../html/htmlStart.php"); ?>


<h1><?php echo($desc_cr); ?></h1>

<div class="row mtbox">
	<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
		<div class="box1">
			<i class="fa fa-print fa-3x"></i>
			<h3><?php echo utf8_encode($conta_impressora); ?></h3>
		</div>
		<p>Quantidade</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-usd fa-3x"></span>
			<h3>R$<?php echo utf8_encode($valor_total); ?></h3>
		</div>
		<p>Valor Total</p>
	</div>

</div>

<div style="width: 75%">
	<canvas id="canvas"></canvas>
</div>

<button id="randomizeData">Randomize Data</button>

<script>
	var barChartData = {
		labels: ["January", "February", "March", "April", "May", "June", "July"],
		datasets: [{
			label: 'Dataset 1',
			backgroundColor: window.chartColors.red,
			data: [
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor()
			]
		}, {
			label: 'Dataset 2',
			backgroundColor: window.chartColors.blue,
			data: [
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor()
			]
		}, {
			label: 'Dataset 3',
			backgroundColor: window.chartColors.green,
			data: [
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor()
			]
		}]
	};
	window.onload = function() {
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx, {
			type: 'bar',
			data: barChartData,
			options: {
				title:{
					display:true,
					text:"Chart.js Bar Chart - Stacked"
				},
				tooltips: {
					mode: 'index',
					intersect: false
				},
				responsive: true,
				scales: {
					xAxes: [{
						stacked: true,
					}],
					yAxes: [{
						stacked: true
					}]
				}
			}
		});
	};
	document.getElementById('randomizeData').addEventListener('click', function() {
		barChartData.datasets.forEach(function(dataset, i) {
			dataset.data = dataset.data.map(function() {
				return randomScalingFactor();
			});
		});
		window.myBar.update();
	});
</script>


<?php require("../html/htmlEnd.php"); ?>

