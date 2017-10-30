<?php

$sql = ("SELECT impressoras.ITEM_CONTRATO,
LPAD( impressoras.CR, 5,  '00000' ) AS ID_CLIENTE,
crs.DESC_CR,
crs.CR_GER,
crs.DESC_CR_GER,
crs.CR_SUPERINT,
crs.DESC_CR_SUPERINT,
faturamento_simpress.VALOR_FAT
FROM  `impressoras`
INNER JOIN `crs` ON LPAD(impressoras.CR, 5, '00000') = crs.CR
INNER JOIN `faturamento_simpress` ON impressoras.ITEM_CONTRATO = faturamento_simpress.ITEM_CONTRATO
WHERE COMPETENCIA = (SELECT MAX(COMPETENCIA) FROM faturamento_simpress)
ORDER BY impressoras.ITEM_CONTRATO ASC");

$result = mysql_query($sql, $conecta_banco) or print(mysql_error());
while ($resultado = mysql_fetch_assoc($result)) {
	/*$valor_total = $resultado['SUM(faturamento_simpress.VALOR_FAT)'];*/
	switch ($resultado['CR_SUPERINT']) {
		case '00259':
			$prescons++;
			$v_prescons = $v_prescons + $resultado['VALOR_FAT'];
			break;
		case '00038':
			$sunat++;
			$v_sunat = $v_sunat + $resultado['VALOR_FAT'];
			switch ($resultado['DESC_CR_GER']) {
				case 'GER. REGIONAL GDE. SP E LITORAL':
					$g_reg_sp_lit++;
					$v_reg_sp_lit = $v_reg_sp_lit + $resultado['VALOR_FAT'];
					break;
				case 'GERENCIA REGIONAL SP LESTE':
					$g_sp_leste++;
					$v_sp_leste = $v_sp_leste + $resultado['VALOR_FAT'];
					break;
				case 'GERENCIA REGIONAL SP OESTE':
					$g_sp_oeste++;
					$v_sp_oeste = $v_sp_oeste + $resultado['VALOR_FAT'];
					break;
				case 'GERENCIA REGIONAL NORDESTE':
					$g_reg_nordeste++;
					$v_reg_nordeste = $v_reg_nordeste + $resultado['VALOR_FAT'];
					break;
				case 'GERENCIA REGIONAL NORTE':
					$g_reg_norte++;
					$v_reg_norte = $v_reg_norte + $resultado['VALOR_FAT'];
					break;
				case 'GER. REGIONAL CENTRO-OESTE E DF':
					$g_reg_co_df++;
					$v_reg_co_df = $v_reg_co_df + $resultado['VALOR_FAT'];
					break;
			}
			break;
		case '00191':
			$sunop++;
			$v_sunop = $v_sunop + $resultado['VALOR_FAT'];
			switch ($resultado['DESC_CR_GER']) {
				case 'GER CONTEUDO E CAPACITACAO':
					$g_conteudo_capac++;
					$v_conteudo_capac = $v_conteudo_capac + $resultado['VALOR_FAT'];
					break;
				case 'GERENCIA DE OPERACOES SP':
					$g_op_sp++;
					$v_op_sp = $v_op_sp + $resultado['VALOR_FAT'];
					break;
				case 'GER OPER NORTE E CENTRO-OESTE':
					$g_op_n_co++;
					$v_op_n_co = $v_op_n_co + $resultado['VALOR_FAT'];
					break;
				case'GERENCIA DE OPERACOES NORDESTE':
					$g_op_ne++;
					$v_op_ne = $v_op_ne + $resultado['VALOR_FAT'];
					break;
			}
			break;
		case '00022':
			$safin++;
			$v_safin = $v_safin + $resultado['VALOR_FAT'];
			switch ($resultado['DESC_CR_GER']) {
				case 'GERENCIA FINANCEIRA':
					$g_financeira++;
					$v_financeira = $v_financeira + $resultado['VALOR_FAT'];
					break;
				case 'GERENCIA CONTABIL':
					$g_contabil++;
					$v_contabil = $v_contabil + $resultado['VALOR_FAT'];
					break;
				case 'GER COMPRAS PATRIM E OBRAS':
					$g_compras_patr_obras++;
					$v_compras_patr_obras = $v_compras_patr_obras + $resultado['VALOR_FAT'];
					break;
			}
			break;
		case '03945':
			$sijuc++;
			$v_sijuc = $v_sijuc + $resultado['VALOR_FAT'];
			switch ($resultado['DESC_CR_GER']) {
				case 'GERENCIA DE COMUNICACAO':
					$g_comunicacao++;
					$v_comunicacao = $v_comunicacao + $resultado['VALOR_FAT'];
					break;
				case 'GERENCIA JURID E COMPLIANCE':
					$g_jur++;
					$v_jur = $v_jur + $resultado['VALOR_FAT'];
					break;
			}
			break;
		case '04650':
			$suasf++;
			$v_suasf = $v_suasf + $resultado['VALOR_FAT'];
			switch ($resultado['DESC_CR_GER']) {
				case 'GERENCIA ASSIST. SOCIAL':
					$g_social++;
					break;
			}
			break;
		case '00048':
			$suger++;
			$v_suger = $v_suger + $resultado['VALOR_FAT'];
			switch ($resultado['DESC_CR_GER']) {
				case 'GERENCIA TECNOLOGIA E SUPORTE':
					$g_tec_sup++;
					$v_tec_sup = $v_tec_sup + $resultado['VALOR_FAT'];
					break;
				case 'GER SISTEMAS E PROCESSOS':
					$g_sis_proc++;
					$v_sis_proc = $v_sis_proc + $resultado['VALOR_FAT'];
					break;
				case 'GERENCIA DE RH':
					$g_rh++;
					$v_rh = $v_rh + $resultado['VALOR_FAT'];
					break;
					break;
			}
		/*default:
			echo("Foi encontrado um resultado que não consta! " . $resultado['DESC_CR_SUPERINT'] . " " . $resultado['ITEM_CONTRATO'] . "<BR/>");*/
	}
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