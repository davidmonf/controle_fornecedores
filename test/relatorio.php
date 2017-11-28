<?php
session_start();
include("conexao.php");
include("gera_relatorio.php");
include("gera_contagens.php");
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}

?>

<?php require("../html/htmlStart.php"); ?>


<h1><?php echo($desc_cr); ?></h1>
	
	<form method="GET" action="relatorio.php" id="relatorio">
		<label for="qtd_geral"
		       class="form-control-label">Competência:</label>
		<input type="hidden" name="id" value="<?php echo $buscar; ?>">
		<select onchange="this.form.submit()"
		        id="compet"
		        name="compet">
			<?php
			$count = 0;
			$sql_select = "SELECT DISTINCT COMPETENCIA FROM faturamento_simpress ORDER BY COMPETENCIA DESC LIMIT 12";
			$result_select = mysql_query($sql_select,$conecta_banco) or print (mysql_error());
			while ($resultado_select = mysql_fetch_assoc($result_select))
			{
				echo ("<option value=".$resultado_select['COMPETENCIA']);
				if(($_GET['compet'] == $resultado_select['COMPETENCIA']) || ($count==0) ) {
					echo(' selected');
					$compet_select = $resultado_select['COMPETENCIA'];
					$count++;
				}
				echo (">".$resultado_select['COMPETENCIA']."</option>");
			}
			?>
		</select>
	</form>

<div class="row mtbox">
	<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
		<div class="box1">
			<i class="fa fa-print fa-3x"></i>
			<h3><?php
				if ($buscar=='00048'){
					echo utf8_encode($suger);
				}
				else {
					echo utf8_encode($conta_impressora);
				}
				?></h3>
		</div>
		<p>Quantidade</p>
	</div>
	<div class="col-md-2 col-sm-2 box0">
		<div class="box1">
			<span class="fa fa-usd fa-3x"></span>
			<h3>R$<?php
				if ($buscar=='00048'){
					echo utf8_encode($v_suger);
				}
				else {
					echo utf8_encode($valor_total);
				}
				?></h3>
		</div>
		<p>Valor Total</p>
	</div>

</div>

<div class="row">
	<div id="canvas-holder-ger" style="width:100%" class="col-md-6">
		<canvas id="chart-custo"/>
	</div>
<br>
	<div id="canvas-holder-qtd" style="width:100%" class="col-md-6">
		<canvas id="chart-qtd"/>
	</div>
<br>
	<div id="canvas-holder-custoger" style="width:100%" class="col-md-6">
		<canvas id="chart-custoger"/>
	</div>
<br>
	<div id="canvas-holder-pb" style="width: 100%" class="col-md-6">
		<canvas id="chart-pbcolor"></canvas>
	</div>
</div>

<script>

	/*INICIO SCRIPT DE CONF CHART.JS CUSTO MENSAL*/
	var configCusto = {
		type: 'line',
		data: {
			datasets: [{
				data: [
					/*'0',*/
					<?php
					$soma_hist = mysql_query($query_hist, $conecta_banco) or print(mysql_error());
					while ($resultado_hist = mysql_fetch_assoc($soma_hist)) {
						$conta_hist = number_format($resultado_hist['SOMA_HIST'],'2','.','');
						//$conta_hist = number_format($conta_hist_format,2);
						echo "'".$conta_hist ."',";
					}
					?>
					
				],
				fill: false,
				borderColor: "#aaaaaa",
				backgroundColor: [
					window.chartColors.blue,
					
				],
				label: 'Custo em R$'
			}],
			labels: [
				/*'0',*/
				<?php
				$soma_hist = mysql_query($query_hist, $conecta_banco) or print(mysql_error());
				while ($resultado_hist = mysql_fetch_assoc($soma_hist)) {
					$conta = $resultado_hist['COMPETENCIA'];
					echo "'".$conta ."',";
				}
				?>
			]
		},
		options: {
			responsive: true,
			legend: {
				position: 'top'
			},
			title: {
				display: true,
				text: 'Custo Mensal nos últimos meses',
				fontSize: 30,
			},
			animation: {
				animateScale: true,
				animateRotate: true
			},
			scales: {
				yAxes: [{
					display: true,
					ticks: {
						beginAtZero: true,
					}
				}]
			}
		}
		
		
		
	};
	/*FIM SCRIPT DE CONF CHART.JS CUSTO MENSAL*/
	
	/*INICIO SCRIPT DE CONF CHART.JS QTD IMPPRESSORA*/
	var configQtd = {
		type: 'bar',
		data: {
			datasets: [{
				label: 'Quantidade de Impressoras',
				data: [
					<?php
					$soma_setores = mysql_query($query_setores, $conecta_banco) or print(mysql_error());
					while ($resultado_somasetores = mysql_fetch_assoc($soma_setores)) {
						$conta = str_replace(',','',$resultado_somasetores['SOMA']);
						echo "'".$conta ."',";
					}
					?>
				],
				backgroundColor: [
					<?php
					$soma_setores = mysql_query($query_setores, $conecta_banco) or print(mysql_error());
					while ($resultado_somasetores = mysql_fetch_assoc($soma_setores)) {
						echo "window.chartColors.blue,";
					}
					?>
				]
				
			}],
			labels: [
				<?php
				$traz_setores = mysql_query($query_setores, $conecta_banco) or print(mysql_error());
				while ($resultado_setores = mysql_fetch_assoc($traz_setores)) {
					$setor = utf8_encode($resultado_setores['DESC_CR']);
					echo "'".$setor ."',";
				}
				?>
			]
		},
		options: {
			responsive: true,
			legend: {
				position: 'top',
			},
			title: {
				display: true,
				text: 'Quantidade de Impressoras',
				fontSize: 30,
			},
			animation: {
				animateScale: true,
				animateRotate: true
			},
			scales: {
				xAxes: [{
					stacked: false,
					beginAtZero: true,
					scaleLabel: {
						labelString: 'QtdImp'
					},
					ticks: {
						stepSize: 1,
						min: 0,
						autoSkip: false
					}
				}],
				yAxes: [{
					ticks: {
						beginAtZero: true,
						stepSize: 1,
						min: 0,
					}
				}]
			}
			}
		
	};
	/*FIM SCRIPT DE CONF CHART.JS QTD IMPRESSORA*/

	/*INICIO SCRIPT DE CONF CHART.JS CUSTO GER*/
	var configCustoGer = {
		type: 'bar',
		data: {
			datasets: [{
				data: [
					<?php
					$soma_setores = mysql_query($query_setores, $conecta_banco) or print(mysql_error());
					while ($resultado_somasetores = mysql_fetch_assoc($soma_setores)) {
						$valor_convertido = number_format($resultado_somasetores['VALOR_FAT'],2,'.','');
						echo "'".$valor_convertido."',";
						//echo "'".$resultado_somasetores['VALOR_FAT']."',";
					}
					?>
				],
				backgroundColor: [
					<?php
					$soma_setores = mysql_query($query_setores, $conecta_banco) or print(mysql_error());
					while ($resultado_somasetores = mysql_fetch_assoc($soma_setores)) {
						echo "window.chartColors.blue,";
					}
					?>
				],
				label: 'Custo em R$'
			}],
			labels: [
				<?php
				$traz_setores = mysql_query($query_setores, $conecta_banco) or print(mysql_error());
				while ($resultado_setores = mysql_fetch_assoc($traz_setores)) {
					$setor = utf8_encode($resultado_setores['DESC_CR']);
					echo "'".$setor ."',";
				}
				?>
			]
		},
		options: {
			responsive: true,
			legend: {
				position: 'top'
			},
			title: {
				display: true,
				text: 'Custo por Setor',
				fontSize: 30
			},
			animation: {
				animateScale: true,
				animateRotate: true
			},
            scales: {
                xAxes: [{
                    stacked: false,
                    beginAtZero: true,
                    scaleLabel: {
                        labelString: 'Month1'
                    },
                    ticks: {
                        stepSize: 1,
                        min: 0,
                        autoSkip: false
                    }
                }],
	            yAxes: [{
		            ticks: {

			            suggestedMin: 0,
			            beginAtZero: true,
			            min: 0,
			            
			            
		            }
	            }]
            }
		}
	};
	/*FIM SCRIPT DE CONF CHART.JS CUSTO GER*/

	/*INICIO SCRIPT DE CONF CHART.JS CUSTO PB COLOR*/
	var barChartDataPbColor = {
		labels: [
			<?php
			$traz_setores = mysql_query($query_setores, $conecta_banco) or print(mysql_error());
			while ($resultado_setores = mysql_fetch_assoc($traz_setores)) {
				$setor = utf8_encode($resultado_setores['DESC_CR']);
				echo "'".$setor ."',";
			}
			?>
		],
		datasets: [{
			label: 'PB',
			backgroundColor: window.chartColors.blue,
			data: [
				<?php
				$traz_setores = mysql_query($query_setores, $conecta_banco) or print(mysql_error());
				while ($resultado_setores = mysql_fetch_assoc($traz_setores)) {
					$total_pb = ($resultado_setores['FINAL_PB'] - $resultado_setores['INICIAL_PB']) ;
					echo "'".$total_pb ."',";
				}
				?>
			]
		}, {
			label: 'Color',
			backgroundColor: window.chartColors.red,
			data: [
				<?php
				$traz_setores = mysql_query($query_setores, $conecta_banco) or print(mysql_error());
				while ($resultado_setores = mysql_fetch_assoc($traz_setores)) {
					$total_color = ($resultado_setores['FINAL_COLOR'] - $resultado_setores['INICIAL_COLOR']) ;
					echo "'".$total_color ."',";
				}
				?>
			]
		} ]
		
		
	};
	/*FIM SCRIPT DE CONF CHART.JS CUSTO PB COLOR*/
	
	/*INICIALIZADOR DO SCRIPT DE CONF CHART.JS DASHBOARD SIMPRESS*/
	
	window.onload = function() {
		var ctxCusto = document.getElementById("chart-custo").getContext("2d");
		window.myLine = new Chart(ctxCusto, configCusto);
		
		
		var ctxQtd = document.getElementById("chart-qtd").getContext("2d");
		window.myBar = new Chart(ctxQtd, configQtd);

		var ctxCustoGer = document.getElementById("chart-custoger").getContext("2d");
		window.myBar = new Chart(ctxCustoGer, configCustoGer);

		var ctxPbColor = document.getElementById("chart-pbcolor").getContext("2d");
		window.myBar = new Chart(ctxPbColor, {
			type: 'bar',
			data: barChartDataPbColor,
			options: {
				title:{
					display:true,
					text:"Impressões PB e Color",
					fontSize: 30,
				},
				tooltips: {
					mode: 'index',
					intersect: false
				},
				responsive: true,
				scales: {
					xAxes: [{
						stacked: true,
						ticks: {
							autoSkip: false,
						}
						
					}],
					yAxes: [{
						stacked: true,
						ticks: {
							beginAtZero: true,
							min: 0
						}
					}]
				}
			}
		});
	};

		

	

</script>
<br/>
<div id="tabela_impressoras">
	<table border="1" align="center">
		<tr><td>Série</td><td>Modelo</td><td>Localidade</td><td>Gerência</td><td>CR</td><td>Endereço</td><td>Valor</td></tr>
		<?php
		$result = mysql_query($query, $conecta_banco) or print(mysql_error());
		while ($resultado = mysql_fetch_assoc($result)) {
			$valor_faturamento = number_format($resultado['VALOR_FAT'],2,',','.');
			echo("<tr><td><a href='input_simpress.php?num_serie=".$resultado['SERIE']."'>" . $resultado['SERIE'] . " </a></td><td>" . $resultado['MODELO'] . " </td><td>". $resultado['DESC_CR'] ."</td><td>".$resultado['DESC_CR_GER']."</td><td>".$resultado['CR']."</td><td>" . utf8_encode($resultado['ENDERECO']) . " </td><td>R$ " . $valor_faturamento . " </td></tr>");
		}
		?>
	</table>
</div>

<?php require("../html/htmlEnd.php"); ?>