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
					       name="serie"
					       value='<?php echo($serie) ?>'><br>
					
				</div>
				
				<div class="form-group col-md-2">
					<label for="item_contrato"
					       class="form-control-label">Item Contrato: </label>
					<input type="text"
					       class="form-control"
					       id="item_contrato"
					       name="item_contrato"
					       value="<?php echo($item_contrato) ?>"><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="nome"
					       class="form-control-label">Atend. Simpress Nome: </label>
					<input type="text"
					       class="form-control"
					       id="nome"
					       name="nome"
					       value="<?php echo($nome) ?>"><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="modelo"
					       class="form-control-label">Modelo: </label>
					<input type="text"
					       class="form-control"
					       id="modelo"
					       name="modelo"
					       value="<?php echo($modelo) ?>"><br>
				</div>
				
				<div class="form-group col-md-3">
					<label for="endereco"
					       class="form-control-label">Endereço: </label>
					<input type="text"
					       class="form-control"
					       id="endereco"
					       name="endereco"
					       value="<?php echo utf8_encode($endereco) ?>"><br>
				</div>
				
				<div class="form-group col-md-3">
					<label for="numero"
					       class="form-control-label">Número: </label>
					<input type="text"
					       class="form-control"
					       id="numero"
					       name="numero"
					       value="<?php echo($numero) ?>"><br>
				</div>
				
				<div class="form-group col-md-3">
					<label for="complemento"
					       class="form-control-label">Complemento: </label>
					<input type="text"
					       class="form-control"
					       id="complemento"
					       name="complemento"
					       value="<?php echo($complemento); ?>"><br>
				</div>
				
				<div class="form-group col-md-3">
					<label for="bairro"
					       class="form-control-label">Bairro: </label>
					<input type="text"
					       class="form-control"
					       id="bairro"
					       name="bairro"
					       value="<?php echo($bairro); ?>"><br>
				</div>
				
				<div class="form-group col-md-3">
					<label for="cidade"
					       class="form-control-label">Cidade: </label>
					<input type="text"
					       class="form-control"
					       id="cidade"
					       name="cidade"
					       value="<?php echo utf8_encode($cidade); ?>"><br>
				</div>
				
				<div class="form-group col-md-1">
					<label for="uf"
					       class="form-control-label">UF: </label>
					<input type="text"
					       class="form-control"
					       id="uf"
					       maxlength="2"
					       minlength="2"
					       name="uf"
					       value="<?php echo($uf); ?>"><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="cep"
					       class="form-control-label">CEP: </label>
					<input type="text"
					       class="form-control"
					       id="cep"
					       maxlength="9"
					       name="cep"
					       value="<?php echo($cep); ?>"><br>
				</div>
				
				<div class="form-group col-md-2"> <!-- Local interno onde a impressora está -->
					<label for="interno"
					       class="form-control-label">Local Interno: </label>
					<input type="text"
					       class="form-control"
					       id="interno"
					       name="interno"
					       value="<?php echo($interno); ?>"><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="telefone"
					       class="form-control-label">Telefone: </label>
					<input type="text"
					       class="form-control"
					       id="telefone"
					       name="telefone"
					       value="<?php echo($telefone); ?>"><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="cnpj"
					       class="form-control-label">CNPJ: </label>
					<input type="text"
					       class="form-control"
					       id="cnpj"
					       name="cnpj"
					       value="<?php echo($cnpj); ?>"><br>
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
					       name="cr"
					       value="<?php echo($cr); ?>"><br>
				</div>
				
				<div class="form-group col-md-3">
					<label for="descricao_cr"
					       class="form-control-label">Descrição CR: </label>
					<input type="text"
					       class="form-control"
					       id="descricao_cr"
					       name="descricao_cr"
					       value="<?php echo($descricao_cr); ?>"><br>
				</div>
				
				<div class="form-group col-md-1"> <!-- Valor impressão P&B -->
					<label for="vl_pb"
					       class="form-control-label">Unit.PB: </label>
					<input type="text"
					       class="form-control"
					       id="vl_pb"
					       name="vl_pb"
					       value="<?php echo($vl_pb); ?>"><br>
				</div>
				
				<div class="form-group col-md-1"> <!-- Valor impressão P&B -->
					<label for="vl_color"
					       class="form-control-label">Unit.Color: </label>
					<input type="text"
					       class="form-control"
					       id="vl_color"
					       name="vl_color"
					       value="<?php echo($vl_color); ?>"><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="proativo"
					       class="form-control-label">Proativo: </label>
					<select class="form-control"
					        id="proativo"
					        name="proativo">
						<?php
						if ($proativo == '1') {
							echo("<option selected>Sim</option>");
							echo("<option>Não</option>");
						}
						elseif ($proativo == '0'){
							echo("<option>Sim</option>");
							echo("<option selected>Não</option>");
						}
						?>
					</select><br>
				</div>
				
				<div class="form-group col-md-2"> <!-- Proativo conferido na Simpress -->
					<label for="proconf"
					       class="form-control-label">Pro Conf: </label>
					<select class="form-control"
					        id="proconf"
					        name="proconf">
						<?php
						if ($proconf == '1') {
							echo("<option selected>Sim</option>");
							echo("<option>Não</option>");
						}
						elseif ($proconf == '0'){
							echo("<option>Sim</option>");
							echo("<option selected>Não</option>");
						}
						?>
					</select><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="valor"
					       class="form-control-label">Valor: </label>
					<input type="text"
					       class="form-control"
					       id="valor"
					       name="valor"
					       value="<?php echo($valor); ?>"><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="instalacao"
					       class="form-control-label">Instalação: </label>
					<input type="text"
					       class="form-control"
					       id="instalacao"
					       name="instalacao"
					       value="<?php echo($instalacao); ?>"><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="desinstalacao"
					       class="form-control-label">Desinstalação: </label>
					<input type="text"
					       class="form-control"
					       id="desinstalacao"
					       name="desinstalacao"
					       value="<?php echo($desinstalacao); ?>"><br>
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
					       name="ip"
					       value="<?php echo($ip); ?>"><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="mask"
					       class="form-control-label">Máscara: </label>
					<input type="text"
					       class="form-control"
					       id="mask"
					       name="mask"
					       value="<?php echo($mask); ?>"><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="mask"
					       class="form-control-label">Endereço MAC: </label>
					<input type="text"
					       class="form-control"
					       id="mac"
					       name="mac"
					       value="<?php echo($mac); ?>"<br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="fixo"
					       class="form-control-label">IP Fixo: </label>
					<select class="form-control"
					        id="fixo"
					        name="fixo">
						<?php
						if ($fixo == '1') {
							echo("<option selected>Sim</option>");
							echo("<option>Não</option>");
						}
						elseif ($fixo == '0'){
							echo("<option>Sim</option>");
							echo("<option selected>Não</option>");
						}
						?>
					</select><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="server"
					       class="form-control-label">Servidor: </label>
					<input type="text"
					       class="form-control"
					       id="server"
					       name="server"
					       value="<?php echo($server); ?>"><br>
				</div>
				
				<div class="form-group col-md-2"> <!-- Digitalização para rede -->
					<label for="digit"
					       class="form-control-label">Digit. Rede: </label>
					<select class="form-control"
					        id="digit"
					        name="digit">
						<?php
						if ($digit == '1') {
							echo("<option selected>Sim</option>");
							echo("<option>Não</option>");
						}
						elseif ($digit == '0'){
							echo("<option>Sim</option>");
							echo("<option selected>Não</option>");
						}
						?>
					</select><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="nuvem"
					       class="form-control-label">Nuvem: </label>
					<select class="form-control"
					        id="nuvem"
					        name="nuvem">
						<?php
						if ($nuvem == '1') {
							echo("<option selected>Sim</option>");
							echo("<option>Não</option>");
						}
						elseif ($nuvem == '0'){
							echo("<option>Sim</option>");
							echo("<option selected>Não</option>");
						}
						?>
					</select><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="compart"
					       class="form-control-label">Compartilhamento: </label>
					<input type="text"
					       class="form-control"
					       id="compart"
					       name="compart"
					       value="<?php echo($compart); ?>"><br>
				</div>
				
				<div class="form-group col-md-2">
					<label for="scan"
					       class="form-control-label">Scan: </label>
					<select class="form-control"
					        id="scan"
					        name="scan">
						<?php
						if ($scan == '1') {
							echo("<option selected>Sim</option>");
							echo("<option>Não</option>");
						}
						elseif ($scan == '0'){
							echo("<option>Sim</option>");
							echo("<option selected>Não</option>");
						}
						?>
					</select><br>
					<input type="hidden"
					       class="form-control"
					       id="verifica"
					       name="verifica"
					       value="preenchido">
				</div>
				<div class="col-md-12">
					<button id="incluir" type="submit" class="btn btn-primary">Incluir</button>
					<button id="limpar" type="reset" class="btn btn-default">Limpar</button>
				</div>
			</div>
		</div>
	</div>

</form>