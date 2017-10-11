<?php
session_start();

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
			<h3>176</h3>
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
			<span class="fa fa-wrench fa-3x"></span>
			<h3>23</h3>
		</div>
		<p>Equipamentos parados para manutenção</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-wrench fa-3x"></span>
			<h3>23</h3>
		</div>
		<p>Equipamentos parados para manutenção</p>
	</div>

</div><!-- /row mt -->
<!--<div id="barChart">
<div id="container" style="width: 100%;">
	<canvas id="canvas"></canvas>
</div>
<button class="btn btn-default" id="randomizeData">Random</button>
<button class="btn btn-default" id="addDataset">Adicionar Set</button>
<button class="btn btn-default" id="removeDataset">Remover Set</button>
<button class="btn btn-default" id="addData">Adicionar Data</button>
<button class="btn btn-default" id="removeData">Remover Data</button>

<script>
	var MONTHS = ["Janeiro", "Fevereiro", "Março", "Abril", "Março", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
	var color = Chart.helpers.color;
	var barChartData = {
		labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Março", "Junho", "Julho"],
		datasets: [{
			label: 'Dataset 1',
			backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
			borderColor: window.chartColors.red,
			borderWidth: 1,
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
			backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
			borderColor: window.chartColors.blue,
			borderWidth: 1,
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
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: '2017'
				}
			}
		});
	};
	document.getElementById('randomizeData').addEventListener('click', function() {
		var zero = Math.random() < 0.2 ? true : false;
		barChartData.datasets.forEach(function(dataset) {
			dataset.data = dataset.data.map(function() {
				return zero ? 0.0 : randomScalingFactor();
			});
		});
		window.myBar.update();
	});
	var colorNames = Object.keys(window.chartColors);
	document.getElementById('addDataset').addEventListener('click', function() {
		var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
		var dsColor = window.chartColors[colorName];
		var newDataset = {
			label: 'Dataset ' + barChartData.datasets.length,
			backgroundColor: color(dsColor).alpha(0.5).rgbString(),
			borderColor: dsColor,
			borderWidth: 1,
			data: []
		};
		for (var index = 0; index < barChartData.labels.length; ++index) {
			newDataset.data.push(randomScalingFactor());
		}
		barChartData.datasets.push(newDataset);
		window.myBar.update();
	});
	document.getElementById('addData').addEventListener('click', function() {
		if (barChartData.datasets.length > 0) {
			var month = MONTHS[barChartData.labels.length % MONTHS.length];
			barChartData.labels.push(month);
			for (var index = 0; index < barChartData.datasets.length; ++index) {
				//window.myBar.addData(randomScalingFactor(), index);
				barChartData.datasets[index].data.push(randomScalingFactor());
			}
			window.myBar.update();
		}
	});
	document.getElementById('removeDataset').addEventListener('click', function() {
		barChartData.datasets.splice(0, 1);
		window.myBar.update();
	});
	document.getElementById('removeData').addEventListener('click', function() {
		barChartData.labels.splice(-1, 1); // remove the label first
		barChartData.datasets.forEach(function(dataset, datasetIndex) {
			dataset.data.pop();
		});
		window.myBar.update();
	});
</script>

<script type="text/javascript">
	

	$.getScript( "../src/js/main.js" )
		.done(function( script, textStatus ) {
			console.log( textStatus );
		})
		.fail(function( jqxhr, settings, exception ) {
			$( "div.log" ).text( "Triggered ajaxError handler." );
		});


</script>
</div>-->

      <!--doughnut-->
<div id="canvas-holder" style="width:100%">
	<canvas id="chart-area" />
</div>
<button id="randomizeData">Random</button>
<button id="addDataset">Adicionar Dataset</button>
<button id="removeDataset">Remover Dataset</button>
<button id="addData">Adicionar Data</button>
<button id="removeData">Remover Data</button>
<script>
	var randomScalingFactor = function() {
		return Math.round(Math.random() * 100);
	};
	var config = {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
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
				"Red",
				"Orange",
				"Yellow",
				"Green",
				"Blue"
			]
		},
		options: {
			responsive: true,
			legend: {
				position: 'top',
			},
			title: {
				display: true,
				text: 'Chart.js Doughnut Chart'
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
	document.getElementById('randomizeData').addEventListener('click', function() {
		config.data.datasets.forEach(function(dataset) {
			dataset.data = dataset.data.map(function() {
				return randomScalingFactor();
			});
		});
		window.myDoughnut.update();
	});
	var colorNames = Object.keys(window.chartColors);
	document.getElementById('addDataset').addEventListener('click', function() {
		var newDataset = {
			backgroundColor: [],
			data: [],
			label: 'New dataset ' + config.data.datasets.length,
		};
		for (var index = 0; index < config.data.labels.length; ++index) {
			newDataset.data.push(randomScalingFactor());
			var colorName = colorNames[index % colorNames.length];;
			var newColor = window.chartColors[colorName];
			newDataset.backgroundColor.push(newColor);
		}
		config.data.datasets.push(newDataset);
		window.myDoughnut.update();
	});
	document.getElementById('addData').addEventListener('click', function() {
		if (config.data.datasets.length > 0) {
			config.data.labels.push('data #' + config.data.labels.length);
			var colorName = colorNames[config.data.datasets[0].data.length % colorNames.length];;
			var newColor = window.chartColors[colorName];
			config.data.datasets.forEach(function(dataset) {
				dataset.data.push(randomScalingFactor());
				dataset.backgroundColor.push(newColor);
			});
			window.myDoughnut.update();
		}
	});
	document.getElementById('removeDataset').addEventListener('click', function() {
		config.data.datasets.splice(0, 1);
		window.myDoughnut.update();
	});
	document.getElementById('removeData').addEventListener('click', function() {
		config.data.labels.splice(-1, 1); // remove the label first
		config.data.datasets.forEach(function(dataset) {
			dataset.data.pop();
			dataset.backgroundColor.pop();
		});
		window.myDoughnut.update();
	});
</script>


<?php require("../html/htmlEnd.php"); ?>

