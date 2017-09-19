<?php require_once("html/htmlStart.php"); ?>

<script src="src/js/jquery-3.2.1.min.js"></script>
<script src="src/js/bootstrap.min.js"></script>

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
	
	<div class="form-group col-md-2">
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
	
	<div class="form-group col-md-2">
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
	
	<div class="form-group col-md-1">
		<label for="vl_pb"
		       class="form-control-label">Unit.PB: </label>
		<input type="text"
		       class="form-control"
		       id="vl_pb"
		       name=""><br>
	</div>
	
	<div class="form-group col-md-1">
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
		       class="form-control-label">Código CR: </label>
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
	
	<div class="form-group col-md-2">
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

<script type="text/javascript">
	jQuery(function($){
		$("#instalacao").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
		$("#desinstalacao").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
		$("#telefone").mask("(99) 9999-9999");
		$("#ip").mask("999.999.999.999");
		$("#cep").mask("99999-99");
		$("#cnpj").mask("99.999.999/9999-99");
	});
</script>

<?php require_once("html/htmlEnd.php"); ?>


