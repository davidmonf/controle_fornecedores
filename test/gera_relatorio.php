<?php
$buscar = str_pad($_GET['id'], 5, "0", STR_PAD_LEFT);
$competencia = $_GET['compet'];

if ($buscar=='00048') {
	$query = ("SELECT crs . * ,
faturamento_simpress.SERIE,
faturamento_simpress.MODELO,
faturamento_simpress.VALOR_FAT,
faturamento_simpress.ENDERECO,
faturamento_simpress.COMPETENCIA
FROM  `impressoras`
INNER JOIN `crs` ON LPAD(impressoras.CR, 5, '00000') = crs.CR
INNER JOIN `faturamento_simpress` ON impressoras.ITEM_CONTRATO = faturamento_simpress.ITEM_CONTRATO
WHERE crs.CR =  '$buscar'
AND faturamento_simpress.COMPETENCIA = '$competencia'
ORDER BY DESC_CR_GER ASC");
}
else {
	$query = ("SELECT crs . * ,
faturamento_simpress.SERIE,
faturamento_simpress.MODELO,
faturamento_simpress.VALOR_FAT,
faturamento_simpress.ENDERECO,
faturamento_simpress.COMPETENCIA
FROM faturamento_simpress
INNER JOIN crs ON LPAD( ID_CLIENTE, 5,  '00000' ) = crs.CR
WHERE (crs.CR =  '$buscar'
OR crs.CR_SUPERINT =  '$buscar'
OR crs.CR_GER =  '$buscar')
AND faturamento_simpress.COMPETENCIA = '$competencia'
ORDER BY DESC_CR_GER ASC");
}

$query_nome = ("SELECT DESC_CR FROM crs WHERE CR = '$buscar'");
$sql_nome = mysql_query($query_nome,$conecta_banco) or print (mysql_error());
while ($result_nome = mysql_fetch_assoc($sql_nome)){
	$desc_cr = $result_nome['DESC_CR'];
}

if ($buscar=='00048'){
	$query_setores = "SELECT crs.DESC_CR, SUM(VALOR_FAT) AS VALOR_FAT,
	faturamento_simpress.INICIAL_COLOR,
	faturamento_simpress.INICIAL_PB,
	faturamento_simpress.FINAL_COLOR,
	faturamento_simpress.FINAL_PB,
	COUNT( DESCRICAO_CR ) AS SOMA
FROM faturamento_simpress
INNER JOIN crs ON LPAD( ID_CLIENTE, 5,  '00000' ) = crs.CR
INNER JOIN impressoras ON impressoras.ITEM_CONTRATO = faturamento_simpress.ITEM_CONTRATO
	WHERE (
	crs.CR =  '$buscar'
	)
	AND faturamento_simpress.COMPETENCIA =  '$competencia'
	GROUP BY DESC_CR
	ORDER BY DESC_CR ASC";
}
else {
	$query_setores = "SELECT crs.DESC_CR, SUM(VALOR_FAT) AS VALOR_FAT,
faturamento_simpress.INICIAL_COLOR,
faturamento_simpress.INICIAL_PB,
faturamento_simpress.FINAL_COLOR,
faturamento_simpress.FINAL_PB,
COUNT( DESCRICAO_CR ) AS SOMA
FROM faturamento_simpress
INNER JOIN crs ON LPAD( ID_CLIENTE, 5,  '00000' ) = crs.CR
INNER JOIN impressoras ON impressoras.ITEM_CONTRATO = faturamento_simpress.ITEM_CONTRATO
WHERE (
	crs.CR =  '$buscar'
	OR crs.CR_SUPERINT =  '$buscar'
	OR crs.CR_GER =  '$buscar'
)
AND faturamento_simpress.COMPETENCIA =  '$competencia'
GROUP BY DESC_CR
ORDER BY DESC_CR ASC";
}
$valor_total = 0;
$conta_impressora = 0;
$result = mysql_query($query, $conecta_banco) or print(mysql_error());
while ($resultado = mysql_fetch_assoc($result)) {
	$conta_impressora++;
	$valor_total = $valor_total + $resultado['VALOR_FAT'];
}
$valor_total =  number_format($valor_total,2,',','.');

if ($buscar=='00048') {
	$query_hist = "SELECT SUM( VALOR_FAT ) AS SOMA_HIST, COMPETENCIA
FROM faturamento_simpress
INNER JOIN crs ON LPAD( ID_CLIENTE, 5,  '00000' ) = crs.CR
INNER JOIN impressoras ON impressoras.ITEM_CONTRATO = faturamento_simpress.ITEM_CONTRATO
WHERE (
	crs.CR =  '$buscar'
)
GROUP BY  `COMPETENCIA`
ORDER BY COMPETENCIA ASC";
}
else {
	$query_hist = "SELECT SUM( VALOR_FAT ) AS SOMA_HIST, COMPETENCIA
FROM faturamento_simpress
INNER JOIN crs ON LPAD( ID_CLIENTE, 5,  '00000' ) = crs.CR
WHERE (
	crs.CR =  '$buscar'
	OR crs.CR_SUPERINT =  '$buscar'
	OR crs.CR_GER =  '$buscar'
)
GROUP BY  `COMPETENCIA`
ORDER BY COMPETENCIA ASC";
}
?>