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

<?php require_once("html/htmlEnd.php"); ?>
