<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}

?>


<?php require_once("../html/htmlStart.php"); ?>

<h4>Cadastro de Equipamento Simpress</h4>
<br>

<form method="POST" action="input_simpress.php" enctype="multipart/form-data" onSubmit="return()">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#principal">Principal</a></li>
		<li><a data-toggle="tab" href="#gerencial">Informações Gerenciais</a></li>
		<li><a data-toggle="tab" href="#rede">Informações de Rede</a></li>
	</ul>

<div class="tab-content">
<!--  MENU PRINCIPAL  -->
<div id="principal" class="tab-pane fade in active">
<div class="row">
	<div class="form-group col-md-2">
		<label for="serie"
		       class="form-control-label">Série: </label>
		<input type="text"
		       class="form-control"
		       id="serie"
		       name="serie"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="item_contrato"
		       class="form-control-label">Item Contrato: </label>
		<input type="text"
		       class="form-control"
		       id="item_contrato"
		       name="item_contrato"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="nome"
		       class="form-control-label">Atend. Simpress Nome: </label>
		<input type="text"
		       class="form-control"
		       id="nome"
		       name="nome"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="modelo"
		       class="form-control-label">Modelo: </label>
		<input type="text"
		       class="form-control"
		       id="modelo"
		       name="modelo"><br>
	</div>
	
	<div class="form-group col-md-3">
		<label for="endereco"
		       class="form-control-label">Endereço: </label>
		<input type="text"
		       class="form-control"
		       id="endereco"
		       name="endereco"><br>
	</div>
	
	<div class="form-group col-md-3">
		<label for="cidade"
		       class="form-control-label">Cidade: </label>
		<input type="text"
		       class="form-control"
		       id="cidade"
		       name="cidade"><br>
	</div>
	
	<div class="form-group col-md-1">
		<label for="uf"
		       class="form-control-label">UF: </label>
		<input type="text"
		       class="form-control"
		       id="uf"
		       maxlength="2"
		       minlength="2"
		       name="uf"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="cep"
		       class="form-control-label">CEP: </label>
		<input type="text"
		       class="form-control"
		       id="cep"
		       maxlength="9"
		       name="cep"><br>
	</div>
	
	<div class="form-group col-md-2"> <!-- Local interno onde a impressora está -->
		<label for="interno"
		       class="form-control-label">Local. Interna: </label>
		<input type="text"
		       class="form-control"
		       id="interno"
		       name="interno"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="telefone"
		       class="form-control-label">Telefone: </label>
		<input type="text"
		       class="form-control"
		       id="telefone"
		       name="telefone"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="cnpj"
		       class="form-control-label">CNPJ: </label>
		<input type="text"
		       class="form-control"
		       id="cnpj"
		       name="cnpj"<br>
	</div>
</div>
</div>
<!-- MENU INFORMAÇÕES GERENCIAIS -->
<div id="gerencial" class="tab-pane fade">
<div class="row">
	<div class="form-group col-md-1">
		<label for="cr"
		       class="form-control-label">CR: </label>
		<input type="text"
		       class="form-control"
		       id="cr"
		       name="cr"><br>
	</div>
	
	<div class="form-group col-md-3">
		<label for="descricao_cr"
		       class="form-control-label">Descrição CR: </label>
		<input type="text"
		       class="form-control"
		       id="descricao_cr"
		       name="descricao_cr"><br>
	</div>
	
	<div class="form-group col-md-3">
		<label for="gerencia"
		       class="form-control-label">Gerência: </label>
		<input type="text"
		       class="form-control"
		       id="gerencia"
		       name="gerencia"><br>
	</div>
	
	<div class="form-group col-md-3">
		<label for="superint"
		       class="form-control-label">Superintendência: </label>
		<input type="text"
		       class="form-control"
		       id="superint"
		       name="superint"><br>
	</div>
	
	<div class="form-group col-md-1"> <!-- Valor impressão P&B -->
		<label for="vl_pb"
		       class="form-control-label">Unit.PB: </label>
		<input type="text"
		       class="form-control"
		       id="vl_pb"
		       name="vl_pb"><br>
	</div>
	
	<div class="form-group col-md-1"> <!-- Valor impressão P&B -->
		<label for="vl_color"
		       class="form-control-label">Unit.Color: </label>
		<input type="text"
		       class="form-control"
		       id="vl_color"
		       name="vl_color"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="proativo"
		       class="form-control-label">Proativo: </label>
		<select class="form-control"
		        id="proativo"
		        name="proativo">
			<option>Sim</option>
			<option>Não</option>
		</select><br>
	</div>
	
	<div class="form-group col-md-2"> <!-- Proativo conferido na Simpress -->
		<label for="proconf"
		       class="form-control-label">Pro Conf: </label>
		<select class="form-control"
		        id="proconf"
		        name="proconf">
			<option>Sim</option>
			<option>Não</option>
		</select><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="valor"
		       class="form-control-label">Valor: </label>
		<input type="text"
		       class="form-control"
		       id="valor"
		       name="valor"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="instalacao"
		       class="form-control-label">Instalação: </label>
		<input type="text"
		       class="form-control"
		       id="instalacao"
		       name="instalacao"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="desinstalacao"
		       class="form-control-label">Desinstalação: </label>
		<input type="text"
		       class="form-control"
		       id="desinstalacao"
		       name="desinstalacao"><br>
	</div>
</div>
</div>

<!-- MENU INFORMAÇÕES DE REDE -->
<div id="rede" class="tab-pane fade">
<div class="row">
	<div class="form-group col-md-2">
		<label for="ip"
		       class="form-control-label">IP: </label>
		<input type="text"
		       class="form-control"
		       id="ip"
		       name="ip"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="mask"
		       class="form-control-label">Máscara: </label>
		<input type="text"
		       class="form-control"
		       id="mask"
		       name="mask"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="mask"
		       class="form-control-label">Endereço MAC: </label>
		<input type="text"
		       class="form-control"
		       id="mac"
		       name="mac"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="fixo"
		       class="form-control-label">IP Fixo: </label>
		<select class="form-control"
		        id="fixo"
		        name="fixo">
			<option>Sim</option>
			<option>Não</option>
		</select><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="server"
		       class="form-control-label">Servidor: </label>
		<input type="text"
		       class="form-control"
		       id="server"
		       name="server"><br>
	</div>
	
	<div class="form-group col-md-2"> <!-- Digitalização para rede -->
		<label for="digit"
		       class="form-control-label">Digit. Rede: </label>
		<select class="form-control"
		       id="digit"
		       name="digit">
			<option>Sim</option>
			<option>Não</option>
		</select><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="nuvem"
		       class="form-control-label">Nuvem: </label>
		<select class="form-control"
		        id="nuvem"
		        name="nuvem">
			<option>Sim</option>
			<option>Não</option>
		</select><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="compart"
		       class="form-control-label">Compartilhamento: </label>
		<input type="text"
		       class="form-control"
		       id="compart"
		       name="compart"><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="scan"
		       class="form-control-label">Scan: </label>
		<select class="form-control"
		        id="scan"
		        name="scan">
			<option>Sim</option>
			<option>Não</option>
		</select><br>
	</div>
	<div class="col-md-12">
		<button id="incluir" type="submit" class="btn btn-primary">Incluir</button>
		<!--<button id="buscar" type="submit" class="btn btn-primary">Buscar</button>-->
		<button id="limpar" type="submit" class="btn btn-primary">Limpar</button>
	</div>
</div>
</div>
</div>

</form>
<br>
<br>
<button id="anterior" type="button" class="btn btn-default">Registro Anterior</button>
<button id="proximo" type="button" class="btn btn-default">Próximo Registro</button>

<script type="text/javascript">
	jQuery(function($){
		$("#instalacao").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
		$("#desinstalacao").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
		$("#telefone").mask("(99) 9999-9999");
		$("#ip").mask("999.999.999.999");
		$("#mask").mask("999.999.999.999");
		$("#mac").mask("**-**-**-**-**-**");
		$("#cep").mask("99999-999");
		$("#cnpj").mask("99.999.999/9999-99");
	});

	$.getScript( "../src/js/main.js" )
		.done(function( script, textStatus ) {
			console.log( textStatus );
		})
		.fail(function( jqxhr, settings, exception ) {
			$( "div.log" ).text( "Triggered ajaxError handler." );
		});

	
</script>
<?php
	if (isset($_POST['serie'])) {
		include("conexao.php");
		function DataBR2DB($datapega)
		{
			$data = explode('/',$datapega);
			$datacerta = $data[2].'-'.$data[1].'-'.$data[0];
			return $datacerta;
		}
		/* Principal */
		$serie = $_POST['serie'];
		$item_contrato = $_POST['item_contrato'];
		$nome - $_POST['nome'];
		$modelo = $_POST['modelo'];
		$endereco = $_POST['endereco'];
		$cidade = $_POST['cidade'];
		$uf = $_POST['uf'];
		$cep = $_POST['cep'];
		$interno = $_POST['interno'];
		$telefone = $_POST['telefone'];
		$cnpj = $_POST['cnpj'];
		
		/*Informações Gerenciais*/
		$cr = $_POST['cr'];
		$descricao_cr = $_POST['descricao_cr'];
		$gerencia = $_POST['gerencia'];
		$superint = $_POST['superint'];
		$vl_pb = $_POST['vl_pb'];
		$vl_color = $_POST['vl_color'];
		$proativo = $_POST['proativo']; /*(dropdown - sim/nao)*/
		$proconf = $_POST['proconf']; /*(dropdown - sim/nao)*/
		$valor = $_POST['valor'];
		$instalacao = DataBR2DB($_POST['instalacao']);
		$desinstalacao = DataBR2DB($_POST['desinstalacao']);
		
		/*Informações de Rede*/
		$ip = $_POST['ip'];
		$mask = $_POST['mask'];
		$mac = $_POST['mac'];
		$fixo = $_POST['fixo']; /*(dropdown - sim/nao)*/
		$server = $_POST['server'];
		$digit = $_POST['digit']; /*(dropdown - sim/nao)*/
		$nuvem = $_POST['nuvem']; /*(dropdown - sim/nao)*/
		$compart = $_POST['compart'];
		$scan = $_POST['scan']; /*(dropdown - sim/nao)*/
		
	$sql = "INSERT INTO impressoras (PK, SERIE, ITEM_CONTRATO, NOME, MODELO, ENDERECO, CIDADE, UF, CEP, INTERNO, TELEFONE, CNPJ, CR, DESCRICAO_CR, GERENCIA, SUPERINT, VL_PB, VL_COLOR, PROATIVO, PROCONF, VALOR, INSTALACAO, DESINSTALACAO, IP, MASK, MAC, FIXO, SERVER, DIGIT, NUVEM, COMPART, SCAN) VALUES ('NULL', '$serie', '$item_contrato', '$nome', '$modelo', '$endereco', '$cidade', '$uf', '$cep', '$interno', '$telefone', '$cnpj', '$cr', '$descricao_cr', '$gerencia', '$superint', '$vl_pb', '$vl_color', '$proativo', '$proconf', '$valor', '$instalacao', '$desinstalacao', '$ip', '$mask','$mac', '$fixo', '$server', '$digit', '$nuvem', '$compart', '$scan')";
	$result = mysql_query($sql, $conecta_banco) or print(mysql_error());
	echo ("<script>alert('Dados inseridos com sucesso');window.location = 'input_simpress.php'</script>");
	
	}
?>
<?php require_once("../html/htmlEnd.php"); ?>


