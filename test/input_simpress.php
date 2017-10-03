<?php require_once("../html/htmlStart.php"); ?>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<form method="POST" action="input_simpress.php" enctype="multipart/form-data" onSubmit="return()">
<div class="row">
	<div class="form-group col-md-2">
		<label for="serie"
		       class="form-control-label">Série: </label>
		<input type="text"
		       class="form-control"
		       id="serie"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="nome"
		       class="form-control-label">Atend. Simpress Nome: </label>
		<input type="text"
		       class="form-control"
		       id="nome"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="ip"
		       class="form-control-label">IP: </label>
		<input type="text"
		       class="form-control"
		       id="ip"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="mask"
		       class="form-control-label">Máscara: </label>
		<input type="text"
		       class="form-control"
		       id="mask"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="mask"
		       class="form-control-label">Endereço MAC: </label>
		<input type="text"
		       class="form-control"
		       id="mac"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="fixo"
		       class="form-control-label">IP Fixo: </label>
		<select class="form-control"
		        id="fixo"
		        name="">
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
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2"> <!-- Digitalização para rede -->
		<label for="digit"
		       class="form-control-label">Digit. Rede: </label>
		<select class="form-control"
		       id="digit"
		       name="">
			<option>Sim</option>
			<option>Não</option>
		</select><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="nuvem"
		       class="form-control-label">Nuvem: </label>
		<select class="form-control"
		        id="nuvem"
		        name="">
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
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="item_contrato"
		       class="form-control-label">Item Contrato: </label>
		<input type="text"
		       class="form-control"
		       id="item_contrato"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="modelo"
		       class="form-control-label">Modelo: </label>
		<input type="text"
		       class="form-control"
		       id="modelo"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="proativo"
		       class="form-control-label">Proativo: </label>
		<select class="form-control"
		        id="proativo"
		        name="">
			<option>Sim</option>
			<option>Não</option>
		</select><br>
	</div>
	
	<div class="form-group col-md-2"> <!-- Proativo conferido na Simpress -->
		<label for="proconf"
		       class="form-control-label">Pro Conf: </label>
		<select class="form-control"
		        id="proconf"
		        name="">
			<option>Sim</option>
			<option>Não</option>
		</select><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="color"
		       class="form-control-label">Color: </label>
		<select class="form-control"
		        id="color"
		        name="">
			<option>Sim</option>
			<option>Não</option>
		</select><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="scan"
		       class="form-control-label">Scan: </label>
		<select class="form-control"
		        id="scan"
		        name="">
			<option>Sim</option>
			<option>Não</option>
		</select><br>
	</div>
	
	<div class="form-group col-md-1"> <!-- Valor impressão P&B -->
		<label for="vl_pb"
		       class="form-control-label">Unit.PB: </label>
		<input type="text"
		       class="form-control"
		       id="vl_pb"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-1"> <!-- Valor impressão P&B -->
		<label for="vl_color"
		       class="form-control-label">Unit.Color: </label>
		<input type="text"
		       class="form-control"
		       id="vl_color"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="instalacao"
		       class="form-control-label">Instalação: </label>
		<input type="text"
		       class="form-control"
		       id="instalacao"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="desinstalacao"
		       class="form-control-label">Desinstalação: </label>
		<input type="text"
		       class="form-control"
		       id="desinstalacao"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="valor"
		       class="form-control-label">Valor: </label>
		<input type="text"
		       class="form-control"
		       id="valor"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-1">
		<label for="cr"
		       class="form-control-label">CR: </label>
		<input type="text"
		       class="form-control"
		       id="cr"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-3">
		<label for="descricao_cr"
		       class="form-control-label">Descrição CR: </label>
		<input type="text"
		       class="form-control"
		       id="descricao_cr"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-3">
		<label for="superint"
		       class="form-control-label">Superintendência: </label>
		<input type="text"
		       class="form-control"
		       id="superint"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-3">
		<label for="gerencia"
		       class="form-control-label">Gerência: </label>
		<input type="text"
		       class="form-control"
		       id="gerencia"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-3">
		<label for="endereco"
		       class="form-control-label">Endereço: </label>
		<input type="text"
		       class="form-control"
		       id="endereco"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-3">
		<label for="cidade"
		       class="form-control-label">Cidade: </label>
		<input type="text"
		       class="form-control"
		       id="cidade"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-1">
		<label for="uf"
		       class="form-control-label">UF: </label>
		<input type="text"
		       class="form-control"
		       id="uf"
		       maxlength="2"
		       minlength="2"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="cep"
		       class="form-control-label">CEP: </label>
		<input type="text"
		       class="form-control"
		       id="cep"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2"> <!-- Local interno onde a impressora está -->
		<label for="interno"
		       class="form-control-label">Local. Interna: </label>
		<input type="text"
		       class="form-control"
		       id="interno"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="telefone"
		       class="form-control-label">Telefone: </label>
		<input type="text"
		       class="form-control"
		       id="telefone"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-2">
		<label for="cnpj"
		       class="form-control-label">CNPJ: </label>
		<input type="text"
		       class="form-control"
		       id="cnpj"
		       name=""><br>
	</div>
	
	<div class="col-md-12">
		<button id="incluir" type="submit" class="btn btn-primary">Incluir</button>
		<button id="buscar" type="submit" class="btn btn-primary">Buscar</button>
		<button id="limpar" type="submit" class="btn btn-primary">Limpar</button>
	</div>
</div>
</form>
<script type="text/javascript">
	jQuery(function($){
		$("#instalacao").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
		$("#desinstalacao").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
		$("#telefone").mask("(99) 9999-9999");
		$("#ip").mask("999.999.999.999");
		$("#cep").mask("99999-99");
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
		$serie = $_POST['serie'];
		$nome = $_POST['nome'];
		$ip = $_POST['ip'];
		$mask = $_POST['mask'];
		$mac = $_POST['mask'];
		$fixo = $_POST['fixo']; /*(dropdown - sim/nao)*/
		$server = $_POST['server'];
		$digit = $_POST['digit']; /*(dropdown - sim/nao)*/
		$nuvem = $_POST['nuvem']; /*(dropdown - sim/nao)*/
		$compart = $_POST['compart'];
		$item_contrato = $_POST['item_contrato'];
		$modelo = $_POST['modelo'];
		$proativo = $_POST['proativo']; /*(dropdown - sim/nao)*/
		$proconf = $_POST['proconf']; /*(dropdown - sim/nao)*/
		$color = $_POST['color']; /*(dropdown - sim/nao)*/
		$scan = $_POST['scan']; /*(dropdown - sim/nao)*/
		$vl_pb = $_POST['vl_pb'];
		$vl_color = $_POST['vl_color'];
		$instalacao = $_POST['instalacao'];
		$desinstalacao = $_POST['desinstalacao'];
		$valor = $_POST['valor'];
		$cr = $_POST['cr'];
		$descricao_cr = $_POST['descricao_cr'];
		$superint = $_POST['superint'];
		$gerencia = $_POST['gerencia'];
		$endereco = $_POST['endereco'];
		$cidade = $_POST['cidade'];
		$uf = $_POST['uf'];
		$cep = $_POST['cep'];
		$interno = $_POST['interno'];
		$telefone = $_POST['telefone'];
		$cnpj = $_POST['cnpj'];
		
		/* $sql = "INSERT INTO impressoras ()" */
	}
?>
<?php require_once("../html/htmlEnd.php"); ?>


