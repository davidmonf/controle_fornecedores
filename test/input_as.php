<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}

?>


<?php require("../html/htmlStart.php"); ?>

<h4>Cadastro de Equipamento AS</h4>
<br>

<div class="row">
	<div class="form-group col-md-2">
		<label for="sc"
		       class="form-control-label">Nº SC: </label>
		<input type="text"
		       class="form-control"
		       id="sc"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="setor"
		       class="form-control-label">Setor: </label>
		<input type="text"
		       class="form-control"
		       id="setor"
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
		<label for="service_tag"
		       class="form-control-label">Service Tag: </label>
		<input type="text"
		       class="form-control"
		       id="service_tag"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="serial_as"
		       class="form-control-label">Serial AS: </label>
		<input type="text"
		       class="form-control"
		       id="serial_as"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="hostname"
		       class="form-control-label">Nome: </label>
		<input type="text"
		       class="form-control"
		       id="hostname"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="office_origem"
		       class="form-control-label">Origem Office: </label>
		<input type="text"
		       class="form-control"
		       id="office_origem"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="licenca"
		       class="form-control-label">Licença: </label>
		<input type="text"
		       class="form-control"
		       id="licenca"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="colaborador"
		       class="form-control-label">Colaborador: </label>
		<input type="text"
		       class="form-control"
		       id="colaborador"
		       name=""><br>
	</div>
	<div class="form-group col-md-2">
		<label for="instalado"
		       class="form-control-label">Instalado: </label>
		<input type="text"
		       class="form-control"
		       id="instalado"
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
		$("#instalado").mask("99/99/9999");
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
