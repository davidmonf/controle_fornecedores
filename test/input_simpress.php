<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}
include("conexao.php");

	function DataDB2BR($datapega)
	{
		$data = explode('-',$datapega);
		$datacerta = $data[2].'/'.$data[1].'/'.$data[0];
		return $datacerta;
	}
	
	function DataBR2DB($datapega)
	{
		$data = explode('/',$datapega);
		$datacerta = $data[2].'-'.$data[1].'-'.$data[0];
		return $datacerta;
	}
?>


<?php require("../html/htmlStart.php"); ?>
<br>
<h4>Cadastro de Equipamento Simpress</h4>
<br>


<br>
<br>
<!--<button id="anterior" type="button" class="btn btn-default">Registro Anterior</button>-->
<!--<button id="proximo" type="button" class="btn btn-default">Próximo Registro</button>-->

<script type="text/javascript">
	jQuery(function($){
		$("#instalacao").mask("99/99/9999");
		$("#desinstalacao").mask("99/99/9999");
		$("#telefone").mask("(99) 9999-9999");
		$("#ip").mask("999.999.999.999");
		$("#mask").mask("999.999.999.999");
		$("#mac").mask("**-**-**-**-**-**");
		$("#cep").mask("99999-999");
		$("#cnpj").mask("99.999.999/9999-99");
	});
</script>

<?php if (isset($_GET['num_serie'])){
	
	$num_serie = $_GET['num_serie'];
	$sql_busca = "SELECT SERIE, ITEM_CONTRATO, NOME, MODELO, ENDERECO, NUMERO, COMPL, BAIRRO, CIDADE, UF, CEP, INTERNO, TELEFONE, CNPJ_INSTALACAO, CR, DESCRICAO_CR, VALOR_UNIT, VALOR_UNIT_COLOR, PROATIVO, PROCONF, VALOR_PRO_RATA, INSTALACAO, DESINSTALACAO, IP, MASK, MAC, FIXO, SERVER, DIGIT, NUVEM, COMPART, SCAN from impressoras WHERE SERIE = '$num_serie'";
	
	$result_busca = mysql_query($sql_busca, $conecta_banco) or print(mysql_error());
	while ($resultado_select = mysql_fetch_array($result_busca)){
		/* Principal */
		$serie = $resultado_select['SERIE'];
		$item_contrato = $resultado_select['ITEM_CONTRATO'];
		$nome = $resultado_select['NOME'];
		$modelo = $resultado_select['MODELO'];
		$endereco = $resultado_select['ENDERECO'];
		$numero = $resultado_select['NUMERO'];
		$complemento = $resultado_select['COMPL'];
		$bairro = $resultado_select['BAIRRO'];
		$cidade = $resultado_select['CIDADE'];
		$uf = $resultado_select['UF'];
		$cep = $resultado_select['CEP'];
		$interno = $resultado_select['INTERNO'];
		$telefone = $resultado_select['TELEFONE'];
		$cnpj = $resultado_select['CNPJ_INSTALACAO'];
		
		/*Informações Gerenciais*/
		$cr = $resultado_select['CR'];
		$descricao_cr = $resultado_select['DESCRICAO_CR'];
		$vl_pb = $resultado_select['VALOR_UNIT'];
		$vl_color = $resultado_select['VALOR_UNIT_COLOR'];
		$proativo = $resultado_select['PROATIVO']; /*(dropdown - sim/nao)*/
		$proconf = $resultado_select['PROCONF']; /*(dropdown - sim/nao)*/
		$valor = $resultado_select['VALOR_PRO_RATA'];
		$instalacao = DataDB2BR($resultado_select['INSTALACAO']);
		$desinstalacao = DataDB2BR($resultado_select['DESINSTALACAO']);
		
		/*Informações de Rede*/
		$ip = $resultado_select['IP'];
		$mask = $resultado_select['MASK'];
		$mac = $resultado_select['MAC'];
		$fixo = $resultado_select['FIXO']; /*(dropdown - sim/nao)*/
		$server = $resultado_select['SERVER'];
		$digit = $resultado_select['DIGIT']; /*(dropdown - sim/nao)*/
		$nuvem = $resultado_select['NUVEM']; /*(dropdown - sim/nao)*/
		$compart = $resultado_select['COMPART'];
		$scan = $resultado_select['SCAN']; /*(dropdown - sim/nao)*/
		include ('form_simpress_preenchido.php');
		
		
	}
}
	else{
		include ('form_simpress_branco.php');
	}
	?>

<?php
	if ((isset($_POST['serie'])) && (!isset($_POST['verifica']))){
		/* Principal */
		$serie = $_POST['serie'];
		$item_contrato = $_POST['item_contrato'];
		$nome = $_POST['nome'];
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
		
		
	//$sql = "INSERT INTO impressoras (PK, SERIE, ITEM_CONTRATO, NOME, MODELO, ENDERECO, NUMERO, COMPL, BAIRRO, CIDADE, UF, CEP, INTERNO, TELEFONE, CNPJ_INSTALACAO, CR, DESCRICAO_CR, VL_PB, VL_COLOR, PROATIVO, PROCONF, VALOR, INSTALACAO, DESINSTALACAO, IP, MASK, MAC, FIXO, SERVER, DIGIT, NUVEM, COMPART, SCAN) VALUES ('NULL', '$serie', '$item_contrato', '$nome', '$modelo', '$endereco', '$cidade', '$uf', '$cep', '$interno', '$telefone', '$cnpj', '$cr', '$descricao_cr', '$vl_pb', '$vl_color', '$proativo', '$proconf', '$valor', '$instalacao', '$desinstalacao', '$ip', '$mask','$mac', '$fixo', '$server', '$digit', '$nuvem', '$compart', '$scan')";
		
		$sql = "INSERT INTO impressoras (PK, SERIE, ITEM_CONTRATO, NOME, MODELO, COLOR, INSTALACAO, DESINSTALACAO, VALOR_UNIT, VALOR_UNIT_COLOR, VALOR_PRO_RATA, CR, CNPJ_INSTALACAO, ENDERECO, NUMERO, COMPL, BAIRRO, CIDADE, UF, CEP, INTERNO, TELEFONE, PROATIVO, PROCONF, VIA_LEITURA, IP, MASK, MAC, FIXO, SERVER, DIGIT, NUVEM, COMPART, SCAN) VALUES ('NULL', '$serie', '$item_contrato', '$nome', '$modelo', '$color', '$instalacao', '$desinstalacao','$endereco', '$cidade', '$uf', '$cep', '$interno', '$telefone', '$cnpj', '$cr', '$descricao_cr', '$vl_pb', '$vl_color', '$proativo', '$proconf', '$valor',  '$ip', '$mask','$mac', '$fixo', '$server', '$digit', '$nuvem', '$compart', '$scan')";
	$result = mysql_query($sql, $conecta_banco) or print(mysql_error());
	echo ("<script>alert('Dados inseridos com sucesso');window.location = 'input_simpress.php?num_serie=".$serie."'</script>");
	
	}

elseif (isset($_POST['verifica'])){
	$serie = $_POST['serie'];
	$item_contrato = $_POST['item_contrato'];
	$nome = $_POST['nome'];
	$modelo = $_POST['modelo'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$cep = $_POST['cep'];
	$complemento = $_POST['complemento'];
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
	switch ($proativo){
		case 'Sim':
			$proativo=1;
		case 'Não':
			$proativo=0;
	}
	$proconf = $_POST['proconf']; /*(dropdown - sim/nao)*/
	switch ($proconf){
		case 'Sim':
			$proconf=1;
		case 'Não':
			$proconf=0;
	}
	$valor = $_POST['valor'];
	$instalacao = DataBR2DB($_POST['instalacao']);
	$desinstalacao = DataBR2DB($_POST['desinstalacao']);
	
	/*Informações de Rede*/
	$ip = $_POST['ip'];
	$mask = $_POST['mask'];
	$mac = $_POST['mac'];
	$fixo = $_POST['fixo']; /*(dropdown - sim/nao)*/
	switch ($fixo){
		case 'Sim':
			$fixo=1;
		case 'Não':
			$fixo=0;
	}
	$server = $_POST['server'];
	$digit = $_POST['digit']; /*(dropdown - sim/nao)*/
	switch ($digit){
		case 'Sim':
			$digit=1;
		case 'Não':
			$digit=0;
	}
	$nuvem = $_POST['nuvem']; /*(dropdown - sim/nao)*/
	switch ($nuvem){
		case 'Sim':
			$nuvem=1;
		case 'Não':
			$nuvem=0;
	}
	$compart = $_POST['compart'];
	$scan = $_POST['scan']; /*(dropdown - sim/nao)*/
	switch ($scan){
		case 'Sim':
			$scan=1;
		case 'Não':
			$scan=0;
	}
	
	$sql_input = "UPDATE impressoras SET SERIE='$serie', ITEM_CONTRATO='$item_contrato', NOME='$nome', MODELO='$modelo', ENDERECO='$endereco', CIDADE='$cidade', UF='$uf', NUMERO='$numero', COMPL='$complemento', BAIRRO='$bairro', CEP='$cep', INTERNO='$interno', TELEFONE='$telefone', CNPJ_INSTALACAO='$cnpj', CR='$cr', VALOR_UNIT='$vl_pb', VALOR_UNIT_COLOR='$vl_color', PROATIVO='$proativo', PROCONF='$proconf', VALOR_PRO_RATA='$valor', INSTALACAO='$instalacao', DESINSTALACAO='$desinstalacao', IP='$ip', MASK='$mask', MAC='$mac', FIXO='$fixo', SERVER='$server', DIGIT='$digit', NUVEM='$nuvem', COMPART='$compart', SCAN='$scan' WHERE ITEM_CONTRATO='$item_contrato'";
	
	$result = mysql_query($sql_input, $conecta_banco) or print(mysql_error());
	echo ("<script>alert('Dados atualizados com sucesso');window.location = 'input_simpress.php?num_serie=".$serie."'</script>");
}

?>
<?php require("../html/htmlEnd.php"); ?>