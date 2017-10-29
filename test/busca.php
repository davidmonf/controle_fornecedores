<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}
include("conexao.php")
?>

<?php require_once("../html/htmlStart.php"); ?>

<body>
	<h4>Busca</h4>
	<form method="POST" action="result_busca.php" enctype="multipart/form-data" onSubmit="return()">
		<div class="row">
			<div class="col-md-6">
				<label for="busca_serial"
				       class="form-control-label">Série: </label>
				<select class="form-control"
				        id="busca_serial"
				        name="busca_serial">
					<?php
					$sql_serie = "SELECT SERIE FROM impressoras ORDER BY SERIE ASC";
					$result_serie = mysql_query($sql_serie, $conecta_banco) or print(mysql_error());
					echo("<option value='' selected>Selecionar numero de serie</option>");
					while ($resultado_serie = mysql_fetch_assoc($result_serie))
					{
						$serie = $resultado_serie['SERIE'];
						echo("<option value=\"".$serie."\">".$serie."</option>");
					}
					?>
				</select>
			</div>
			<div class="col-md-6">
				<label for="busca_cidade"
				       class="form-control-label">Cidade: </label>
				<select class="form-control"
				        id="busca_cidade"
				        name="busca_cidade">
					<?php
					$sql_cidade = "SELECT CIDADE FROM impressoras GROUP BY CIDADE ORDER BY CIDADE ASC";
					$result_cidade = mysql_query($sql_cidade, $conecta_banco) or print(mysql_error());
					echo("<option value='' selected>Selecionar Cidade</option>");
					while ($resultado_cidade = mysql_fetch_assoc($result_cidade))
					{
						$cidade = $resultado_cidade['CIDADE'];
						echo("<option value=\"".$cidade."\">".$cidade."</option>");
					}
					?>
				</select>
			</div>
			<div class="col-md-6">
				<label for="busca_uf"
				       class="form-control-label">UF: </label>
				<select class="form-control"
				        id="busca_uf"
				        name="busca_uf">
					<?php
					$sql_uf = "SELECT UF FROM impressoras GROUP BY UF ORDER BY UF ASC";
					$result_uf = mysql_query($sql_uf, $conecta_banco) or print(mysql_error());
					echo("<option value='' selected>Selecionar Estado</option>");
					while ($resultado_uf = mysql_fetch_assoc($result_uf))
					{
						$uf = $resultado_uf['UF'];
						echo("<option value=\"".$uf."\">".$uf."</option>");
					}
					?>
				</select>
			</div>
			<div class="col-md-6">
				<label for="busca_cr"
				       class="form-control-label">CR: </label>
				<select class="form-control"
				        id="busca_cr"
				        name="busca_cr">
					<?php
					$sql_cr = "SELECT CR FROM impressoras GROUP BY CR ORDER BY CR ASC";
					$result_cr = mysql_query($sql_cr, $conecta_banco) or print(mysql_error());
					echo("<option value='' selected>Selecionar CR</option>");
					while ($resultado_cr = mysql_fetch_assoc($result_cr))
					{
						$cr = $resultado_cr['CR'];
						echo("<option value=\"".$cr."\">".$cr."</option>");
					}
					?>
				</select>
			</div>
			<div class="col-md-6">
				<label for="busca_desccr"
				       class="form-control-label">Descrição CR: </label>
				<select class="form-control"
				        id="busca_desccr"
				        name="busca_desccr">
					<?php
					$sql_desccr = "SELECT DESCRICAO_CR FROM impressoras GROUP BY DESCRICAO_CR ORDER BY DESCRICAO_CR ASC";
					$result_desccr = mysql_query($sql_desccr, $conecta_banco) or print(mysql_error());
					echo("<option value='' selected>Selecionar Descrição do CR</option>");
					while ($resultado_desccr = mysql_fetch_assoc($result_desccr))
					{
						$desccr = $resultado_desccr['DESCRICAO_CR'];
						echo("<option value=\"".$desccr."\">".$desccr."</option>");
					}
					?>
				</select>
			</div>
			<div class="col-md-6">
				<label for="busca_item"
				       class="form-control-label">Item Contrato: </label>
				<select class="form-control"
				        id="busca_item"
				        name="busca_item">
					<?php
					$sql_item = "SELECT ITEM_CONTRATO FROM impressoras GROUP BY ITEM_CONTRATO ORDER BY ITEM_CONTRATO ASC";
					$result_item = mysql_query($sql_item, $conecta_banco) or print(mysql_error());
					echo("<option value='' selected>Selecionar Item do Contrato</option>");
					while ($resultado_item = mysql_fetch_assoc($result_item))
					{
						$item = $resultado_item['ITEM_CONTRATO'];
						echo("<option value=\"".$item."\">".$item."</option>");
					}
					?>
				</select>
			</div>
			<div class="col-md-6">
				<label for="busca_gerencia"
				       class="form-control-label">Gerencia: </label>
				<select class="form-control"
				        id="busca_gerencia"
				        name="busca_gerencia">
					<?php
					$sql_gerencia = "SELECT DESC_CR_GER FROM crs WHERE DESC_CR_GER != 'CR' GROUP BY DESC_CR_GER ORDER BY DESC_CR_GER ASC";
					$result_gerencia = mysql_query($sql_gerencia, $conecta_banco) or print(mysql_error());
					echo("<option value='' selected>Selecionar Gerencia</option>");
					while ($resultado_gerencia = mysql_fetch_assoc($result_gerencia))
					{
						$gerencia = $resultado_gerencia['DESC_CR_GER'];
						echo("<option value=\"".$gerencia."\">".$gerencia."</option>");
					}
					?>
				</select>
			</div>
			<div class="col-md-6">
				<label for="busca_superint"
				       class="form-control-label">Superintendencia: </label>
				<select class="form-control"
				        id="busca_superint"
				        name="busca_superint">
					<?php
					$sql_superint = "SELECT DESC_CR_SUPERINT FROM crs WHERE DESC_CR_SUPERINT != 'CR' GROUP BY DESC_CR_SUPERINT ORDER BY DESC_CR_SUPERINT ASC";
					$result_superint = mysql_query($sql_superint, $conecta_banco) or print(mysql_error());
					echo("<option value='' selected>Selecionar Superintendencia</option>");
					while ($resultado_superint = mysql_fetch_assoc($result_superint))
					{
						$superint = $resultado_superint['DESC_CR_SUPERINT'];
						echo("<option value=\"".$superint."\">".$superint."</option>");
					}
					?>
				</select>
			</div>
		</div>
		<br>
		<div class="col-md-12">
			<button id="buscar_botao" type="submit" class="btn btn-primary">Buscar</button>
			<button id="limpar" type="reset" class="btn btn-default">Limpar</button>
		</div>
	</form>
</body>


<?php require_once("../html/htmlEnd.php"); ?>
