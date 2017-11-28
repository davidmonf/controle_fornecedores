<?php
if (isset($_GET['compet']) || ($_GET['compet']!='')){
	$compet = $_GET['compet'];
	$sql = ("SELECT impressoras.ITEM_CONTRATO,
	LPAD( impressoras.CR, 5,  '00000' ) AS ID_CLIENTE,
	crs.DESC_CR,
	crs.CR_GER,
	crs.DESC_CR_GER,
	crs.CR_SUPERINT,
	crs.DESC_CR_SUPERINT,
	faturamento_simpress.VALOR_FAT,
	faturamento_simpress.INICIAL_PB,
	faturamento_simpress.INICIAL_COLOR,
	faturamento_simpress.FINAL_PB,
	faturamento_simpress.FINAL_COLOR
	FROM faturamento_simpress
INNER JOIN crs ON LPAD( ID_CLIENTE, 5,  '00000' ) = crs.CR
INNER JOIN impressoras ON impressoras.ITEM_CONTRATO = faturamento_simpress.ITEM_CONTRATO
	WHERE COMPETENCIA = '$compet'
	ORDER BY impressoras.ITEM_CONTRATO ASC");
}
else {
	$sql = ("SELECT
crs.DESC_CR,
crs.CR_GER,
crs.DESC_CR_GER,
crs.CR_SUPERINT,
crs.DESC_CR_SUPERINT,
faturamento_simpress.VALOR_FAT,
faturamento_simpress.INICIAL_PB,
faturamento_simpress.INICIAL_COLOR,
faturamento_simpress.FINAL_PB,
faturamento_simpress.FINAL_COLOR
FROM faturamento_simpress
INNER JOIN crs ON LPAD( ID_CLIENTE, 5,  '00000' ) = crs.CR
WHERE COMPETENCIA = (SELECT MAX(COMPETENCIA) FROM faturamento_simpress)");
}
$result = mysql_query($sql, $conecta_banco) or print(mysql_error());
$conta_impressoras = mysql_num_rows($result);
while ($resultado = mysql_fetch_assoc($result)) {
	switch ($resultado['CR_SUPERINT']) {
		case '00259':
			$prescons++;
			$v_prescons = $v_prescons + $resultado['VALOR_FAT'];
			$imp_prescons = $imp_prescons + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
			break;
		case '00038':
			$sunat++;
			$v_sunat = $v_sunat + $resultado['VALOR_FAT'];
			$imp_sunat = $imp_sunat + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
			switch ($resultado['DESC_CR_GER']) {
				case 'GER. REGIONAL GDE. SP E LITORAL':
					$g_reg_sp_lit++;
					$v_reg_sp_lit = $v_reg_sp_lit + $resultado['VALOR_FAT'];
					$imp_reg_sp_lit = $imp_reg_sp_lit + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GERENCIA REGIONAL SP LESTE':
					$g_sp_leste++;
					$v_sp_leste = $v_sp_leste + $resultado['VALOR_FAT'];
					$imp_sp_leste = $imp_sp_leste + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GERENCIA REGIONAL SP OESTE':
					$g_sp_oeste++;
					$v_sp_oeste = $v_sp_oeste + $resultado['VALOR_FAT'];
					$imp_sp_oeste = $imp_sp_oeste + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GERENCIA REGIONAL NORDESTE':
					$g_reg_nordeste++;
					$v_reg_nordeste = $v_reg_nordeste + $resultado['VALOR_FAT'];
					$imp_reg_nordeste = $imp_reg_nordeste + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GERENCIA REGIONAL NORTE':
					$g_reg_norte++;
					$v_reg_norte = $v_reg_norte + $resultado['VALOR_FAT'];
					$imp_reg_norte = $imp_reg_norte + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GER. REGIONAL CENTRO-OESTE E DF':
					$g_reg_co_df++;
					$v_reg_co_df = $v_reg_co_df + $resultado['VALOR_FAT'];
					$imp_reg_co_df = $imp_reg_co_df + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
			}
			break;
		case '00191':
			$sunop++;
			$v_sunop = $v_sunop + $resultado['VALOR_FAT'];
			$imp_sunop = $imp_sunop + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
			switch ($resultado['DESC_CR_GER']) {
				case 'GER CONTEUDO E CAPACITACAO':
					$g_conteudo_capac++;
					$v_conteudo_capac = $v_conteudo_capac + $resultado['VALOR_FAT'];
					$imp_conteudo_capac = $imp_conteudo_capac + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GERENCIA DE OPERACOES SP':
					$g_op_sp++;
					$v_op_sp = $v_op_sp + $resultado['VALOR_FAT'];
					$imp_op_sp = $imp_op_sp + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GER OPER NORTE E CENTRO-OESTE':
					$g_op_n_co++;
					$v_op_n_co = $v_op_n_co + $resultado['VALOR_FAT'];
					$imp_op_n_co = $imp_op_n_co + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case'GERENCIA DE OPERACOES NORDESTE':
					$g_op_ne++;
					$v_op_ne = $v_op_ne + $resultado['VALOR_FAT'];
					$imp_op_ne = $imp_op_ne + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
			}
			break;
		case '00022':
			$safin++;
			$v_safin = $v_safin + $resultado['VALOR_FAT'];
			$imp_safin = $imp_safin + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
			switch ($resultado['DESC_CR_GER']) {
				case 'GERENCIA FINANCEIRA':
					$g_financeira++;
					$v_financeira = $v_financeira + $resultado['VALOR_FAT'];
					$imp_financeira = $imp_financeira + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GERENCIA CONTABIL':
					$g_contabil++;
					$v_contabil = $v_contabil + $resultado['VALOR_FAT'];
					$imp_contabil = $imp_contabil + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GER COMPRAS PATRIM E OBRAS':
					$g_compras_patr_obras++;
					$v_compras_patr_obras = $v_compras_patr_obras + $resultado['VALOR_FAT'];
					$imp_compras_patr_obras = $imp_compras_patr_obras + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
			}
			break;
		case '03945':
			$sijuc++;
			$v_sijuc = $v_sijuc + $resultado['VALOR_FAT'];
			$imp_sijuc = $imp_sijuc + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
			switch ($resultado['DESC_CR_GER']) {
				case 'GERENCIA DE COMUNICACAO':
					$g_comunicacao++;
					$v_comunicacao = $v_comunicacao + $resultado['VALOR_FAT'];
					$imp_comunicacao = $imp_comunicacao + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GERENCIA JURID E COMPLIANCE':
					$g_jur++;
					$v_jur = $v_jur + $resultado['VALOR_FAT'];
					$imp_jur = $imp_jur + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
			}
			break;
		case '04650':
			$suasf++;
			$v_suasf = $v_suasf + $resultado['VALOR_FAT'];
			$imp_suasf = $imp_suasf + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));

			switch ($resultado['DESC_CR_GER']) {
				case 'GERENCIA ASSIST. SOCIAL':
					$g_social++;
					break;
			}
			break;
		case '00048':
			$suger++;
			$v_suger = $v_suger + $resultado['VALOR_FAT'];
			$imp_suger = $imp_suger + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
			switch ($resultado['DESC_CR_GER']) {
				case 'GERENCIA TECNOLOGIA E SUPORTE':
					$g_tec_sup++;
					$v_tec_sup = $v_tec_sup + $resultado['VALOR_FAT'];
					$imp_tec_sup = $imp_tec_sup + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					switch ($resultado['DESC_CR']) {
						case 'SUPORTE':
							$suporte++;
							$v_suporte = $v_suporte + $resultado['VALOR_FAT'];
							$imp_suporte = $imp_suporte + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
							break;
						case 'TECNOLOGIA':
							$tecnologia++;
							$v_tecnologia = $v_tecnologia + $resultado['VALOR_FAT'];
							$imp_tecnologia = $imp_tecnologia + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
							break;
						case 'TELECOMUNICACOES':
							$telecomunicacoes++;
							$v_telecomunicacoes = $v_telecomunicacoes + $resultado['VALOR_FAT'];
							$imp_telecomunicacoes = $imp_telecomunicacoes + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
							break;
					}
					$v_suger = $v_suger - $resultado['VALOR_FAT'];
					$suger--;
					$imp_suger = $imp_suger - (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GER SISTEMAS E PROCESSOS':
					$g_sis_proc++;
					$v_sis_proc = $v_sis_proc + $resultado['VALOR_FAT'];
					$imp_sis_proc = $imp_sis_proc + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					$v_suger = $v_suger - $resultado['VALOR_FAT'];
					$suger--;
					$imp_suger = $imp_suger - (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
				case 'GERENCIA DE RH':
					$g_rh++;
					$v_rh = $v_rh + $resultado['VALOR_FAT'];
					$imp_rh = $imp_rh + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					switch ($resultado['DESC_CR']) {
						case 'ADMINISTRACAO DE PESSOAL':
							$admpessoal++;
							$v_admpessoal = $v_admpessoal + $resultado['VALOR_FAT'];
							$imp_admpessoal = $imp_admpessoal + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
							break;
						case 'ADMINISTRACAO DO APRENDIZ':
							$admaprendiz++;
							$v_admaprendiz = $v_admaprendiz + $resultado['VALOR_FAT'];
							$imp_admaprendiz = $imp_admaprendiz + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
							break;
						case 'BENEFICIOS E QUALIDADE DE VIDA':
							$bqv++;
							$v_bqv = $v_bqv + $resultado['VALOR_FAT'];
							$imp_bqv = $imp_bqv + (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
							break;
					}
					$suger--;
					$v_suger = $v_suger - $resultado['VALOR_FAT'];
					$imp_suger = $imp_suger - (($resultado['FINAL_PB'] - $resultado['INICIAL_PB']) + ($resultado['FINAL_COLOR'] - $resultado['INICIAL_COLOR']));
					break;
			}
	}
}

$valortotal = $v_prescons+$v_suger+$v_tec_sup+$v_sis_proc+$v_rh+$v_safin+$v_sijuc+$v_sunop+$v_suasf+$v_sunat;
$valortotal =  number_format($valortotal,2,',','.');
$imptotal = $imp_prescons+$imp_suger+$imp_tec_sup+$imp_sis_proc+$imp_rh+$imp_safin+$imp_sijuc+$imp_sunop+$imp_suasf+$imp_sunat;
$imptotal =  number_format($imptotal,0,',','.');
/*Presidência do Conselho*/
$v_prescons =  number_format($v_prescons,2,',','.');
$imp_prescons =  number_format($imp_prescons,0,',','.');

/*SUNAT*/
$v_sunat =  number_format($v_sunat,2,',','.');
$imp_sunat =  number_format($imp_sunat,0,',','.');
/*Gerências da SUNAT*/
$v_reg_sp_lit =  number_format($v_reg_sp_lit,2,',','.');
$imp_reg_sp_lit =  number_format($imp_reg_sp_lit,0,',','.');
$v_sp_leste =  number_format($v_sp_leste,2,',','.');
$imp_sp_leste =  number_format($imp_sp_leste,0,',','.');
$v_sp_oeste =  number_format($v_sp_oeste,2,',','.');
$imp_sp_oeste =  number_format($imp_sp_oeste,0,',','.');
$v_reg_nordeste =  number_format($v_reg_nordeste,2,',','.');
$imp_reg_nordeste =  number_format($imp_reg_nordeste,0,',','.');
$v_reg_norte =  number_format($v_reg_norte,2,',','.');
$imp_reg_norte =  number_format($imp_reg_norte,0,',','.');
$v_reg_co_df =  number_format($v_reg_co_df,2,',','.');
$imp_reg_co_df =  number_format($imp_reg_co_df,0,',','.');

/*SAFIN*/
$v_safin =  number_format($v_safin,2,',','.');
$imp_safin =  number_format($imp_safin,0,',','.');
/*Gerências da SAFIN*/
$v_financeira =  number_format($v_financeira,2,',','.');
$imp_financeira =  number_format($imp_financeira,0,',','.');
$v_contabil =  number_format($v_contabil,2,',','.');
$imp_contabil =  number_format($imp_contabil,0,',','.');
$v_compras_patr_obras =  number_format($v_compras_patr_obras,2,',','.');
$imp_compras_patr_obras =  number_format($imp_compras_patr_obras,0,',','.');

/*SUGER*/
$v_suger =  number_format($v_suger,2,',','.');
$imp_suger =  number_format($imp_suger,0,',','.');
/*Gerências da SUGER*/
$v_tec_sup =  number_format($v_tec_sup,2,',','.');
$imp_tec_sup =  number_format($imp_tec_sup,0,',','.');
$v_sis_proc =  number_format($v_sis_proc,2,',','.');
$imp_sis_proc =  number_format($imp_sis_proc,0,',','.');
$v_rh =  number_format($v_rh,2,',','.');
$imp_rh =  number_format($imp_rh,0,',','.');
/*Superv. Tec. Sup.*/
$v_suporte =  number_format($v_suporte,2,',','.');
$imp_suporte =  number_format($imp_suporte,0,',','.');
$v_tecnologia =  number_format($v_tecnologia,2,',','.');
$imp_tecnologia =  number_format($imp_tecnologia,0,',','.');
$v_telecomunicacoes =  number_format($v_telecomunicacoes,2,',','.');
$imp_telecomunicacoes =  number_format($imp_telecomunicacoes,0,',','.');
/*Superv. Sis. Proc.*/
/*Superv. RH*/

/*SIJUC*/
$v_sijuc =  number_format($v_sijuc,2,',','.');
$imp_sijuc =  number_format($imp_sijuc,0,',','.');
/*Gerências da SIJUC*/
$v_comunicacao =  number_format($v_comunicacao,2,',','.');
$imp_comunicacao =  number_format($imp_comunicacao,0,',','.');
$v_jur =  number_format($v_jur,2,',','.');
$imp_jur =  number_format($imp_jur,0,',','.');

/*SUNOP*/
$v_sunop =  number_format($v_sunop,2,',','.');
$imp_sunop =  number_format($imp_sunop,0,',','.');
/*Gerências da SUNOP*/
$v_conteudo_capac =  number_format($v_conteudo_capac,2,',','.');
$imp_conteudo_capac =  number_format($imp_conteudo_capac,0,',','.');
$v_op_sp =  number_format($v_op_sp,2,',','.');
$imp_op_sp =  number_format($imp_op_sp,0,',','.');
$v_op_n_co =  number_format($v_op_n_co,2,',','.');
$imp_op_n_co =  number_format($imp_op_n_co,0,',','.');
$v_op_ne =  number_format($v_op_ne,2,',','.');
$imp_op_ne =  number_format($imp_op_ne,0,',','.');

/*SUASF*/
$v_suasf =  number_format($v_suasf,2,',','.');
$imp_suasf =  number_format($imp_suasf,0,',','.');
/*Gerências da SUASF*/
$v_social =  number_format($v_social,2,',','.');
$imp_social =  number_format($imp_social,0,',','.');

?>