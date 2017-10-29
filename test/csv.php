<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}
require("../html/htmlStart.php");
include("conexao.php");
function DataBR2DB($datapega)
{
	$data = explode('/',$datapega);
	$datacerta = $data[2].'-'.$data[1].'-'.$data[0];
	return $datacerta;
}

$uploadfile = 'uploads/' . basename($_FILES['arquivo']['name']);

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
	echo ("<script>alert('Arquivo válido e enviado com sucesso.');</script>");
} else {
	echo "Erro no upload!\n";
}
echo '<pre>';
$row = 1;
$contalinhas=0;
echo ("<table border='1'>");
if (($handle = fopen($uploadfile, "r")) !== FALSE) {
	while (($data = fgetcsv($handle, 50000, ";")) !== FALSE) {
		$query = '';
		$num = count($data);
		$row++;
		echo ("<tr>");
		$contalinhas++;
		for ($c=0; $c < $num; $c++) {
			if ((($c == 0) && (strlen($data[$c])<>14))){break;}
			if ($row > 8) {
				if (($data[$c] == '') && ($data[$c+2]== '')){
					break;
				}
				else {
					$data[$c] = str_replace('.','',$data[$c]);
					$data[$c] = rtrim ($data[$c], "'");
					$data[$c] = trim ($data[$c], "'");
					if ($data[$c] == ''){$data[$c]='NULL';}
					$checadata = mb_substr($data[$c],2,1);
					if ($checadata == '/'){
						$data[$c] = mb_substr($data[$c],0,10);
						$data[$c] = Databr2db($data[$c]);
					}
					$checareais = mb_substr($data[$c],0,2);
					if ($checareais == 'R$'){
						$data[$c] = mb_substr($data[$c],3,9);
						$data[$c] = str_replace(',','.',$data[$c]);
					}
					if (($c > 16) && ($c < 21)){$data[$c] = str_replace(',','.',$data[$c]);} /*17,18,19,20*/
					echo ("<td>".$data[$c]."</td>");
					$query = ($query.",'".$data[$c]."'");
				}
			}
		}
		echo ("</tr>");
		$query = trim($query, ",");
		$query = rtrim($query, "'");
		$checklinha = mb_substr($query, 0, 2);
		if ($query <> ('') && ($checklinha <> "'S")) {
		$query_final = "INSERT INTO faturamento_simpress (ID_REG, SERIE, ITEM_CONTRATO, MODELO, TIPO_MAQUINA, INSTALACAO, RETIRADA, INICIAL_PB, INICIAL_COLOR, FINAL_PB, FINAL_COLOR, DATA_LEITURA, PRODUCAO_PB, PRODUCAO_COLOR, EXCED_PB, EXCED_COLOR, EXCED_PB_FAT, EXCED_COLOR_FAT, VALOR_UNIT, VALOR_UNIT_COLOR, VALOR_EXCED_PB, VALOR_EXCED_COLOR, ACUMULO_PB, VALOR_MENSAL, VALOR_PRO_RATA, VALOR_FAT, ID_CLIENTE, COD_CLIENTE_FAT, CNPJ_FAT, DESCRICAO, ENDERECO, CNPJ_INSTALACAO, COD_CLIENTE_INST, VIA_LEITURA, COMPETENCIA) VALUES (NULL,$query','".$_POST['compet']."')";
		$query_final = str_replace('\'NULL\'','NULL',$query_final);
		/*echo $query_final.'<br/>';*/
		$result = mysql_query($query_final, $conecta_banco) or print(mysql_error());
		}
	}
	echo ("</table>");
	fclose($handle);
}
echo '</pre>';
/*$query_checa = "SELECT COUNT(SERIE) FROM faturamento_simpress WHERE `COMPETENCIA` = '".$_POST['compet']."'";
$result_checa = mysql_query($query_checa, $conecta_banco) or print(mysql_error());
while ($result_checado = mysql_fetch_assoc($result_checa)){
	$inserido = $result_checado['COUNT(SERIE)'];
}
echo ($inserido);
echo ($contalinhas);
if ($inserido == $contalinhas) {
	echo("<script>alert('Dados inseridos com sucesso.');</script>");
	echo ("importado 100%");
}*/
require("../html/htmlEnd.php"); ?>