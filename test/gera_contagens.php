<?php

$sql = ("SELECT impressoras.ITEM_CONTRATO,
LPAD( impressoras.CR, 5,  '00000' ) AS ID_CLIENTE,
crs.DESC_CR,
crs.CR_GER,
crs.DESC_CR_GER,
crs.CR_SUPERINT,
crs.DESC_CR_SUPERINT
FROM  `impressoras`
INNER JOIN  `crs` ON LPAD(impressoras.CR, 5,  '00000') = crs.CR
ORDER BY impressoras.ITEM_CONTRATO ASC");

$result = mysql_query($sql, $conecta_banco) or print(mysql_error());
while ($resultado = mysql_fetch_assoc($result))
switch ($resultado['CR_SUPERINT']) {
	case '00259':
		$prescons++;
		break;
	case '00038':
		$sunat++;
	switch ($resultado['DESC_CR_GER']){
		case 'GER. REGIONAL GDE. SP E LITORAL':
			$g_reg_sp_lit++;
			break;
		case 'GERENCIA REGIONAL SP LESTE':
			$g_sp_leste++;
			break;
		case 'GERENCIA REGIONAL SP OESTE':
			$g_sp_oeste++;
			break;
		case 'GERENCIA REGIONAL NORDESTE':
			$g_reg_nordeste++;
			break;
		case 'GERENCIA REGIONAL NORTE':
			$g_reg_norte++;
			break;
		case 'GER. REGIONAL CENTRO-OESTE E DF':
			$g_reg_co_df++;
			break;
	}
	break;
	case '00191':
		$sunop++;
		switch ($resultado['DESC_CR_GER']) {
			case 'GER CONTEUDO E CAPACITACAO':
				$g_conteudo_capac++;
				break;
			case 'GERENCIA DE OPERACOES SP':
				$g_op_sp++;
				break;
			case 'GER OPER NORTE E CENTRO-OESTE':
				$g_op_n_co++;
				break;
			case'GERENCIA DE OPERACOES NORDESTE':
				$g_op_ne++;
				break;
		}
		break;
	case '00022':
		$safin++;
		switch ($resultado['DESC_CR_GER']){
			case 'GERENCIA FINANCEIRA':
				$g_financeira++;
				break;
			case 'GERENCIA CONTABIL':
				$g_contabil++;
				break;
			case 'GER COMPRAS PATRIM E OBRAS':
				$g_compras_patr_obras++;
				break;
		}
		break;
	case '03945':
		$sijuc++;
		switch ($resultado['DESC_CR_GER']) {
			case 'GERENCIA DE COMUNICACAO':
				$g_comunicacao++;
				break;
			case 'GERENCIA JURID E COMPLIANCE':
				$g_jur++;
				break;
		}
		break;
	case '04650':
		$suasf++;
		switch ($resultado['DESC_CR_GER']) {
			case 'GERENCIA ASSIST. SOCIAL':
				$g_social++;
				break;
		}
		break;
	case '00048':
		$suger++;
		switch ($resultado['DESC_CR_GER']) {
			case 'GERENCIA TECNOLOGIA E SUPORTE':
				$g_tec_sup++;
				break;
			case 'GER SISTEMAS E PROCESSOS':
				$g_sis_proc++;
				break;
			case 'GERENCIA DE RH':
				$g_rh++;
				break;
		break;
		}
	/*default:
		echo("Foi encontrado um resultado que não consta! " . $resultado['DESC_CR_SUPERINT'] . " " . $resultado['ITEM_CONTRATO'] . "<BR/>");*/
}
		
/*		switch ($resultado['DESC_CR_GER']){
			
			case 'SEM GERENCIA':
				$sem++;
				break;
			case 'SUPERINTENDENCIA':
				$superint++;
				break;
			case 'SUPERINT NACIONAL DE ATENDIMENTO':
				$superint++;
				break;
			

			
			
			

			
			
			/*default:
				echo("Foi encontrado um resultado que não consta! ".$resultado['DESC_CR_GER']." ".$resultado['DESC_CR']."<BR/>");
}*/

?>