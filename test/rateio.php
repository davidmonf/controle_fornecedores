<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}
include("conexao.php");
?>
<?php require("../html/htmlStart.php"); ?>


<?php
if (isset($_POST['competencia'])) {
	$competencia = $_POST['competencia'];
	$total = 0;
	$sql = "SELECT VALOR_FAT, LPAD(ID_CLIENTE,5,'00000'), DESCRICAO, SUM(VALOR_FAT) FROM faturamento_simpress WHERE COMPETENCIA = '$competencia' GROUP BY ID_CLIENTE ORDER BY ID_CLIENTE ASC";
	$result = mysql_query($sql, $conecta_banco) or print(mysql_error());
	if (mysql_num_rows($result) == 0){
		echo("Não existem resultados de rateio para o mês selecionado");
	}
	else {
		echo ("<table class='table table-bordered '>");
		echo ("<tr><td>CR</td><td>Descrição CR</td><td>Valor</td></tr>");
		while ($resultado = mysql_fetch_assoc($result)) {
			$valor_fat = $resultado['SUM(VALOR_FAT)'];
			$total = $total + $valor_fat;
			$valor_fat = (str_replace('.', ',', $valor_fat));
			$id_cliente = $resultado['LPAD(ID_CLIENTE,5,\'00000\')'];
			$descricao = $resultado['DESCRICAO'];
			echo("<tr><td>" . $id_cliente . "</td><td>" . $descricao . "</td><td>R$ " . substr($valor_fat, 0, -1) . "</td></tr>");
		}
		$total = (str_replace('.', ',', $total));
		echo("<tr><td colspan='2' align='right'>TOTAL </td><td>R$ " . substr($total, 0, -1) . "</td></tr>");
		echo("</table>");
	}
}
else
{
	echo ("<form method='POST' action='rateio.php' enctype='multipart/form-data' onSubmit='return()'>");
	echo ("<br/>Digite a competência para gerar o rateio: <input type='text' name='competencia' id='competencia'/>");
	echo ("<input type='submit' value='Gerar' />");
	echo ("</form>");
}
?>

<script>

	$(function() {
		$('#competencia').datepicker(
			{
				dateFormat: "mm/yy",
				changeMonth: true,
				changeYear: true,
				showButtonPanel: true,
				onClose: function(dateText, inst) {


					function isDonePressed(){
						return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
					}

					if (isDonePressed()){
						var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
						var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
						$(this).datepicker('setDate', new Date(year, month, 1)).trigger('change');

						$('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
					}
				},
				beforeShow : function(input, inst) {

					inst.dpDiv.addClass('month_year_datepicker')

					if ((datestr = $(this).val()).length > 0) {
						year = datestr.substring(datestr.length-4, datestr.length);
						month = datestr.substring(0, 2);
						$(this).datepicker('option', 'defaultDate', new Date(year, month-1, 1));
						$(this).datepicker('setDate', new Date(year, month-1, 1));
						$(".ui-datepicker-calendar").hide();
					}
				}
			})
	});

</script>

<?php require("../html/htmlEnd.php"); ?>
