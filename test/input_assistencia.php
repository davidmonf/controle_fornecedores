<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}

?>


<?php require_once("../html/htmlStart.php"); ?>

<h4>Cadastro de OS - Assistência Técnica</h4>
<br>

<div class="row">
	<div class="form-group col-md-2">
		<label for="os"
		       class="form-control-label">Ordem de Serviço: </label>
		<input type="text"
		       class="form-control"
		       id="os"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="data_os"
		       class="form-control-label">Data: </label>
		<input type="text"
		       class="form-control"
		       id="data_os"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="fornecedor"
		       class="form-control-label">Fornecedor: </label>
		<input type="text"
		       class="form-control"
		       id="fornecedor"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="patrimonio"
		       class="form-control-label">Patrimônio: </label>
		<input type="text"
		       class="form-control"
		       id="patrimonio"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="descricao"
		       class="form-control-label">Equipamento: </label>
		<input type="text"
		       class="form-control"
		       id="descricao"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="local"
		       class="form-control-label">Local: </label>
		<input type="text"
		       class="form-control"
		       id="local"
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
		<label for="responsavel"
		       class="form-control-label">Responsavel: </label>
		<input type="text"
		       class="form-control"
		       id="responsavel"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="rsu"
		       class="form-control-label">Chamado RSU: </label>
		<input type="text"
		       class="form-control"
		       id="rsu"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="status"
		       class="form-control-label">Status: </label>
		<input type="text"
		       class="form-control"
		       id="status"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="data_conclusao"
		       class="form-control-label">Data Conclusão: </label>
		<input type="text"
		       class="form-control"
		       id="data_conclusao"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="custo"
		       class="form-control-label">Custo: </label>
		<input type="text"
		       class="form-control"
		       id="custo"
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
		$("#data_os").mask("99/99/9999");
		$("#data_conclusao").mask("99/99/9999");
		$("#patrimonio").mask("99.999");
	});

	$.getScript( "../src/js/main.js" )
		.done(function( script, textStatus ) {
			console.log( textStatus );
		})
		.fail(function( jqxhr, settings, exception ) {
			$( "div.log" ).text( "Triggered ajaxError handler." );
		});
</script>

<?php require_once("../html/htmlEnd.php"); ?>