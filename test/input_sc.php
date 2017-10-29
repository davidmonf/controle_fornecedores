<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}

?>


<?php require("../html/htmlStart.php"); ?>

<h4>Cadastro de Solicitação de Compra</h4>
<br>

<div class="row">
	<div class="form-group col-md-2"> <!-- Nº Solicitação de Compra -->
		<label for="sc"
		       class="form-control-label">Nº SC: </label>
		<input type="text"
		       class="form-control"
		       id="sc"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="data_sc"
		       class="form-control-label">Data: </label>
		<input type="text"
		       class="form-control"
		       id="data_sc"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="solicitante"
		       class="form-control-label">Solicitante: </label>
		<input type="text"
		       class="form-control"
		       id="solicitante"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="entrada_ru"
		       class="form-control-label">Entrada RU: </label>
		<input type="text"
		       class="form-control"
		       id="entrada_ru"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="data_pedido"
		       class="form-control-label">Data Pedido: </label>
		<input type="text"
		       class="form-control"
		       id="data_pedido"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="localidade"
		       class="form-control-label">Localidade: </label>
		<input type="text"
		       class="form-control"
		       id="localidade"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="qtd"
		       class="form-control-label">Quantidade: </label>
		<input type="text"
		       class="form-control"
		       id="qtd"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="descricao_sc"
		       class="form-control-label">Descrição: </label>
		<input type="text"
		       class="form-control"
		       id="descricao_sc"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="endereco_sc"
		       class="form-control-label">Endereço: </label>
		<input type="text"
		       class="form-control"
		       id="endereco_sc"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="cidade_sc"
		       class="form-control-label">Cidade: </label>
		<input type="text"
		       class="form-control"
		       id="cidade_sc"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="uf_sc"
		       class="form-control-label">UF: </label>
		<input type="text"
		       class="form-control"
		       id="uf_sc"
		       name=""
		       maxlength="2"
		       minlength="2"><br>
	</div>
	<div class="form-group col-md-2">
		<label for="telefone_sc"
		       class="form-control-label">Telefone: </label>
		<input type="text"
		       class="form-control"
		       id="telefone_sc"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="cnpj_sc"
		       class="form-control-label">CNPJ: </label>
		<input type="text"
		       class="form-control"
		       id="cnpj_sc"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="valor_unit"
		       class="form-control-label">Valor Unitário: </label>
		<input type="text"
		       class="form-control"
		       id="valor_unit"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="valor_total"
		       class="form-control-label">Valor Total: </label>
		<input type="text"
		       class="form-control"
		       id="valor_total"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="contato"
		       class="form-control-label">Contato: </label>
		<input type="text"
		       class="form-control"
		       id="contato"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="cr"
		       class="form-control-label">CR: </label>
		<input type="text"
		       class="form-control"
		       id="cr"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="descricao_cr"
		       class="form-control-label">Descrição: </label>
		<input type="text"
		       class="form-control"
		       id="descricao_cr"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="motivo"
		       class="form-control-label">Motivo: </label>
		<input type="text"
		       class="form-control"
		       id="motivo"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="n_vaga"
		       class="form-control-label">Nº Vaga: </label>
		<input type="text"
		       class="form-control"
		       id="n_vaga"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="pedido_interno"
		       class="form-control-label">Nº Pedido Interno: </label>
		<input type="text"
		       class="form-control"
		       id="pedido_interno"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="pedido_as"
		       class="form-control-label">Nº Pedido AS: </label>
		<input type="text"
		       class="form-control"
		       id="pedido_as"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="chegada"
		       class="form-control-label">Chegou em: </label>
		<input type="text"
		       class="form-control"
		       id="chegada"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="termino"
		       class="form-control-label">Termino do Contrato: </label>
		<input type="text"
		       class="form-control"
		       id="termino"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="obs"
		       class="form-control-label">Observação: </label>
		<input type="text"
		       class="form-control"
		       id="obs"
		       name=""><br>
	</div>
	
	<div class="col-md-12">
		<button id="incluir" type="submit" class="btn btn-primary">Incluir</button>
		<button id="buscar" type="submit" class="btn btn-primary">Buscar</button>
		<button id="limpar" type="submit" class="btn btn-primary">Limpar</button>
	</div>
	
</div>

<script type="text/javascript">

	jQuery(function($){
		$("#data_sc").mask("99/99/9999");
		$("#data_pedido").mask("99/99/9999");
		$("#chegada").mask("99/99/9999");
		$("#termino").mask("99/99/9999");
		$("#cnpj_sc").mask("99.999.999/9999-99");
	});

	$.getScript( "../src/js/main.js" )
		.done(function( script, textStatus ) {
			console.log( textStatus );
		})
		.fail(function( jqxhr, settings, exception ) {
			$( "div.log" ).text( "Triggered ajaxError handler." );
		});
</script>

<?php require("../html/htmlEnd.php"); ?>