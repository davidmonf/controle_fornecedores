<?php
session_start();
include("conexao.php");
include("gera_contagens.php");
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location: login.php");
	exit;
}
?>
<?php require("../html/htmlStart.php"); ?>
	<br>
	<form method="GET" action="visualiza_geral.php" id="relatorio">
	<label for="qtd_geral"
	       class="form-control-label">Competência:</label>
	<select onchange="this.form.submit()"
	        id="compet"
	        name="compet">
		<?php
		$count = 0;
		$sql_select = "SELECT DISTINCT COMPETENCIA FROM faturamento_simpress ORDER BY COMPETENCIA DESC LIMIT 12";
		$result_select = mysql_query($sql_select,$conecta_banco) or print (mysql_error());
		while ($resultado_select = mysql_fetch_assoc($result_select))
		{
			echo ("<option value=".$resultado_select['COMPETENCIA']);
			if(($_GET['compet'] == $resultado_select['COMPETENCIA']) || ($count==0) ) {
				echo(' selected');
				$compet_select = $resultado_select['COMPETENCIA'];
				$count++;
			}
			echo (">".$resultado_select['COMPETENCIA']."</option>");
		}
		?>
	</select>
</form>
<br>
<label for="qtd_geral"
       class="form-control-label">Qtd. Geral:</label>
<input type="text"
       id="qtd_geral"
       value="<?php echo($conta_impressoras); ?>"
       size="1"
       readonly>
	<label for="v_geral"
	       class="form-control-label">Valor Geral:</label>
	<input type="text"
	       id="v_geral"
	       value="R$ <?php echo($valortotal); ?>"
	       size="8"
	       readonly>
	<label for="imp_geral"
	       class="form-control-label">Total geral de impressões:</label>
	<input type="text"
	       id="imp_geral"
	       value="<?php echo($imptotal); ?>"
	       size="6"
	       readonly>
<br>
<br>

<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<input type="hidden" id="cr" value="259">
			<h4 class="panel-title">
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=259&compet=<?php echo($compet_select); ?>'">Presidência do Conselho - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($prescons); ?>"
				       size="1"
				       readonly>
				Valor Total: R$
				<input type="text"
				       id="v_prescons"
				       value="<?php echo utf8_encode($v_prescons); ?>"
				       size="6"
				       readonly>
			Impressões:
			<input type="text"
			       id="imp_prescons"
			       value="<?php echo utf8_encode($imp_prescons); ?>"
			       size="6"
			       readonly>
			</h4>
		</div>
	</div>
</div>

	<div id="dv-suger" class="panel-group">
		<div class="panel panel-default">
		<div class="panel-heading">
			<input type="hidden" id="cr" value="48">
			<h4 class="panel-title">
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=48&compet=<?php echo($compet_select); ?>'">Superintendência Geral - SUGER - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_suger"
				       value="<?php echo utf8_encode($suger); ?>"
				       size="1"
				       readonly>
				Valor Total: R$
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_suger); ?>"
				       size="6"
				       readonly>
				Impressões:
				<input type="text"
				       id="imp_suger"
				       value="<?php echo utf8_encode($imp_suger); ?>"
				       size="6"
				       readonly>
				<input type="hidden" id="cr" value="48">
			</h4>
		</div>
		<div id="suger-tree-children"
		     class="panel">
			<div class="panel-heading">
				<input type="hidden" id="cr" value="3125">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#getec"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=3125&compet=<?php echo($compet_select); ?>'">Gerência de Tecnologia e Suporte - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_tec_sup"
					       value="<?php echo utf8_encode($g_tec_sup); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_tec_sup"
					       value="<?php echo utf8_encode($v_tec_sup); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_tec_sup"
					       value="<?php echo utf8_encode($imp_tec_sup); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="getec" class="panel-collapse collapse">
				<div class="panel-body">Suporte - Total de Impressoras:
					<input type="text"
					       id="qtd_suporte"
					       value="<?php echo utf8_encode($suporte); ?>"
					       size="1"
					       readonly>
				                        Valor Total: R$
					<input type="text"
					       id="v_suporte"
					       value="<?php echo utf8_encode($v_suporte); ?>"
					       size="6"
					       readonly>
				           Impressões:
					<input type="text"
					       id="imp_suporte"
					       value="<?php echo utf8_encode($imp_suporte); ?>"
					       size="6"
					       readonly>
				</div>
				<div class="panel-body">Tecnologia - Total de Impressoras:
					<input type="text"
					       id="qtd_tecnologia"
					       value="<?php echo utf8_encode($tecnologia); ?>"
					       size="1"
					       readonly>
				                        Valor Total: R$
					<input type="text"
					       id="v_tecnologia"
					       value="<?php echo utf8_encode($v_tecnologia); ?>"
					       size="6"
					       readonly>
				           Impressões:
					<input type="text"
					       id="imp_tecnologia"
					       value="<?php echo utf8_encode($imp_tecnologia); ?>"
					       size="6"
					       readonly>
				</div>
				<div class="panel-body">Telecomunicações - Total de Impressoras:
					<input type="text"
					       id="qtd_telecomunicacoes"
					       value="<?php echo utf8_encode($telecomunicacoes); ?>"
					       size="1"
					       readonly>
				                        Valor Total: R$
					<input type="text"
					       id="v_telecomunicacoes"
					       value="<?php echo utf8_encode($v_telecomunicacoes); ?>"
					       size="6"
					       readonly>
				           Impressões:
					<input type="text"
					       id="imp_telecomunicacoes"
					       value="<?php echo utf8_encode($imp_telecomunicacoes); ?>"
					       size="6"
					       readonly>
				</div>
			</div>
			<div class="panel-heading">
				<input type="hidden" id="cr" value="241">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#sistemas"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=241&compet=<?php echo($compet_select); ?>'">Gerência de Sistemas e Processos - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_sis_proc"
					       value="<?php echo utf8_encode($g_sis_proc); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_sis_proc"
					       value="<?php echo utf8_encode($v_sis_proc); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_sis_proc"
					       value="<?php echo utf8_encode($imp_sis_proc); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="sistemas" class="panel-collapse collapse">
				<div class="panel-body">Desenvolvimento de Sistemas</div>
				<div class="panel-body">Métodos e Processos</div>
				<div class="panel-body">Inovações e Projetos Digitais</div>
				<div class="panel-body">Comunicação Digital</div>
			</div>
			<div class="panel-heading">
				<input type="hidden" id="cr" value="115">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#rh"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=115&compet=<?php echo($compet_select); ?>'">Gerência de Recursos Humanos - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_rh"
					       value="<?php echo utf8_encode($g_rh); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_rh"
					       value="<?php echo utf8_encode($v_rh); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_rh"
					       value="<?php echo utf8_encode($imp_rh); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="rh" class="panel-collapse collapse">
				<div class="panel-body">Administração de Pessoal e Remuneração - Total de Impressoras:
					<input type="text"
					       id="qtd_rh"
					       value="<?php echo utf8_encode($admpessoal); ?>"
					       size="1"
					       readonly>
				                        Valor Total: R$
					<input type="text"
					       id="v_rh"
					       value="<?php echo utf8_encode($v_admpessoal); ?>"
					       size="6"
					       readonly>
				           Impressões:
					<input type="text"
					       id="imp_rh"
					       value="<?php echo utf8_encode($imp_admpessoal); ?>"
					       size="6"
					       readonly>
				</div>
				<div class="panel-body">Administração do Aprendiz - Total de Impressoras:
					<input type="text"
					       id="qtd_rh"
					       value="<?php echo utf8_encode($admaprendiz); ?>"
					       size="1"
					       readonly>
				                        Valor Total: R$
					<input type="text"
					       id="v_rh"
					       value="<?php echo utf8_encode($v_admaprendiz); ?>"
					       size="6"
					       readonly>
				           Impressões:
					<input type="text"
					       id="imp_rh"
					       value="<?php echo utf8_encode($imp_admaprendiz); ?>"
					       size="6"
					       readonly>
				</div>
				<div class="panel-body">Benefícios e Qualidade de Vida - Total de Impressoras:
					<input type="text"
					       id="qtd_rh"
					       value="<?php echo utf8_encode($bqv); ?>"
					       size="1"
					       readonly>
				                        Valor Total: R$
					<input type="text"
					       id="v_rh"
					       value="<?php echo utf8_encode($v_bqv); ?>"
					       size="6"
					       readonly>
				           Impressões:
					<input type="text"
					       id="imp_rh"
					       value="<?php echo utf8_encode($imp_bqv); ?>"
					       size="6"
					       readonly>
				</div>
			</div>
		</div>
		</div>
	</div>
	
	<div id="dv-safin" class="panel-group">
		<div class="panel panel-default">

		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="fa fa-plus-square-o" data-toggle="collapse" href="#safin-tree-children"></a>
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=22&compet=<?php echo($compet_select); ?>'">Superintendência de Administração e Finanças - SAFIN - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($safin); ?>"
				       size="1"
				       readonly>
				Valor Total: R$
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_safin); ?>"
				       size="6"
				       readonly>
				Impressões:
				<input type="text"
				       id="imp_prescons"
				       value="<?php echo utf8_encode($imp_safin); ?>"
				       size="6"
				       readonly>
			</h4>
		</div>
		
		
		<div id="safin-tree-children"
		     class="panel-collapse collapse tree-view-children">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#contabil"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=3131&compet=<?php echo($compet_select); ?>'">Gerência Contábil - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_contabil); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_contabil); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_contabil); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="contabil" class="panel-collapse collapse">
				<div class="panel-body">Contabilidade</div>
				<div class="panel-body">Fiscal e Tributário</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#financeira"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=3133&compet=<?php echo($compet_select); ?>'">Gerência Financeira - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_financeira); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_financeira); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_financeira); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="financeira" class="panel-collapse collapse">
				<div class="panel-body">Pagamento de Bolsa-Auxilio e Contas a Receber - Total de Impressoras:</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#compras"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=3129&compet=<?php echo($compet_select); ?>'">Gerência de Compras, Patrimônio e Obras</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_compras_patr_obras); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_compras_patr_obras); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_compras_patr_obras); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="compras" class="panel-collapse collapse">
				<div class="panel-body">Segurança Patrimonial e de Serviços</div>
				<div class="panel-body">Administração Patrimonial</div>
				<div class="panel-body">Apoio as Unidades</div>
			</div>
			<div class="panel-body">Controle Operacional</div>
		</div>
		</div>
	</div>


	<div id="dv-sijuc" class="panel-group">
		<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="fa fa-plus-square-o" data-toggle="collapse" href="#sijuc-tree-children"></a>
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=3945&compet=<?php echo($compet_select); ?>'">Superintendência Instit., Juridico e Compliance - SIJUC - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($sijuc); ?>"
				       size="1"
				       readonly>
				Valor Total: R$
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_sijuc); ?>"
				       size="6"
				       readonly>
				Impressões:
				<input type="text"
				       id="imp_prescons"
				       value="<?php echo utf8_encode($imp_sijuc); ?>"
				       size="6"
				       readonly>
			</h4>
		</div>
		<div id="sijuc-tree-children"
		     class="panel-collapse collapse tree-view-children">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#comunicacao"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=33&compet=<?php echo($compet_select); ?>'">Gerência de Comunicação - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_comunicacao); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_comunicacao); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_comunicacao); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="comunicacao" class="panel-collapse collapse">
				<div class="panel-body">Banco de Dados Institucional</div>
				<div class="panel-body">Midias Eletrônicas</div>
				<div class="panel-body">Assessoria de Comunicação</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#g_jur_comp"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=4654&compet=<?php echo($compet_select); ?>'">Gerência Jurídica e Compliance - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_jur); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_jur); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_jur); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="g_jur_comp" class="panel-collapse collapse">
				<div class="panel-body">Jurídico</div>
			</div>
			<div class="panel-body">Feiras</div>
			<div class="panel-body">Relações Públicas e Eventos</div>
		</div>
		
		</div>
	</div>

	<div id="dv-sunop" class="panel-group">
		<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="fa fa-plus-square-o" data-toggle="collapse" href="#sunop-tree-children"></a>
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=191&compet=<?php echo($compet_select); ?>'">Superintendência Nacional de Operações - SUNOP - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($sunop); ?>"
				       size="1"
				       readonly>
				Valor Total: R$
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_sunop); ?>"
				       size="6"
				       readonly>
				Impressões:
				<input type="text"
				       id="imp_prescons"
				       value="<?php echo utf8_encode($imp_sunop); ?>"
				       size="6"
				       readonly>
			</h4>
		</div>
		
		<div id="sunop-tree-children"
		     class="panel-collapse collapse tree-view-children">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#capacitacao"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=699&compet=<?php echo($compet_select); ?>'">Gerência de Conteudo e Capacitação - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_conteudo_capac); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_conteudo_capac); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_conteudo_capac); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="capacitacao" class="panel-collapse collapse">
				<div class="panel-body">Capacitação de Aprendizes - SP</div>
				<div class="panel-body">Capacitação de Aprendizes - DF</div>
				<div class="panel-body">Conteúdo de Estágio e Aprendizagem</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#opsp"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=4807&compet=<?php echo($compet_select); ?>'">Gerência de Operações SP - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_op_sp); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_op_sp); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_op_sp); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="opsp" class="panel-collapse collapse">
				<div class="panel-body">Central de Operações SP</div>
				<div class="panel-body">Atendimento aos Estudantes</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#opnorte"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=221&compet=<?php echo($compet_select); ?>'">Gerência de Operações Norte e CO - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_op_n_co); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_op_n_co); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_op_n_co); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="opnorte" class="panel-collapse collapse">
				<div class="panel-body">Central de Operações Norte e CO - Total de Impressoras:</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#opnordeste"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=76&compet=<?php echo($compet_select); ?>'">Gerência de Operações Nordeste - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_op_ne); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_op_ne); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_op_ne); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="opnordeste" class="panel-collapse collapse">
				<div class="panel-body">Central de Operações Nordeste</div>
			</div>
			<div class="panel-body">Administração de Contratos</div>
			<div class="panel-body">Planejamento e Controle de Atendimento</div>
			<div class="panel-body">Supervisão Técnica de Aprendizagem</div>
		</div>
		</div>
	</div>

	<div id="dv-suasf" class="panel-group">
		<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="fa fa-plus-square-o" data-toggle="collapse" href="#suasf-tree-children"></a>
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=4650&compet=<?php echo($compet_select); ?>'">Superintendência de Ação Social e Filantropia - SUASF - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($suasf); ?>"
				       size="1"
				       readonly>
				Valor Total: R$
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_suasf); ?>"
				       size="6"
				       readonly>
				Impressões:
				<input type="text"
				       id="imp_prescons"
				       value="<?php echo utf8_encode($imp_suasf); ?>"
				       size="6"
				       readonly>
			</h4>
		</div>
		<div id="suasf-tree-children"
		     class="panel-collapse collapse tree-view-children">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#social"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=4652&compet=<?php echo($compet_select); ?>'">Gerência de Assistência Social - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo($g_social); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_social); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_social); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="social" class="panel-collapse collapse">
				<div class="panel-body">Supervisão de Projetos Sociais</div>
			</div>
		</div>
		
		</div>
	</div>

	<div id="dv-sunat" class="panel-group">
		<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="fa fa-plus-square-o" data-toggle="collapse" href="#sunat-tree-children"></a>
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=38&compet=<?php echo($compet_select); ?>'">Superintendência Nacional de Atendimento - SUNAT - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($sunat); ?>"
				       size="1"
				       readonly>
				Valor Total: R$
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_sunat); ?>"
				       size="6"
				       readonly>
				Impressões:
				<input type="text"
				       id="imp_prescons"
				       value="<?php echo utf8_encode($imp_sunat); ?>"
				       size="6"
				       readonly>
			</h4>
		</div>
		<div id="sunat-tree-children"
		     class="panel-collapse collapse tree-view-children">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#gdesplitoral"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=1672&compet=<?php echo($compet_select); ?> '">Gerência Regional Gde SP e Litoral - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_reg_sp_lit); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_reg_sp_lit); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_reg_sp_lit); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="gdesplitoral" class="panel-collapse collapse">
				<div class="panel-body">São Paulo Capital</div>
				<div class="panel-body">Santos</div>
				<div class="panel-body">Guarulhos</div>
				<div class="panel-body">Jundiai</div>
				<div class="panel-body">São Caetano do Sul</div>
				<div class="panel-body">Osasco</div>
				<div class="panel-body">Mogi das Cruzes</div>
				<div class="panel-body">Barueri</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#oeste"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=1676&compet=<?php echo($compet_select); ?>'">Gerência Regional SP Oeste - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_sp_oeste); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_sp_oeste); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_sp_oeste); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="oeste" class="panel-collapse collapse">
				<div class="panel-body">SJRio Preto</div>
				<div class="panel-body">Marilia</div>
				<div class="panel-body">Presidente Prudente</div>
				<div class="panel-body">Bauru</div>
				<div class="panel-body">Araraquara</div>
				<div class="panel-body">Ribeirão Preto</div>
				<div class="panel-body">Franca</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#leste"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=60&compet=<?php echo($compet_select); ?>'">Gerência Regional SP Leste - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_sp_leste); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_sp_leste); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_sp_leste); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="leste" class="panel-collapse collapse">
				<div class="panel-body">Campinas</div>
				<div class="panel-body">Mogi Guaçu</div>
				<div class="panel-body">Piracicaba</div>
				<div class="panel-body">Sorocaba</div>
				<div class="panel-body">Itapetininga</div>
				<div class="panel-body">São José dos Campos</div>
				<div class="panel-body">Taubaté</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#nordeste"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=76&compet=<?php echo($compet_select); ?>'">Gerência Regional Nordeste - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_reg_nordeste); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_reg_nordeste); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_reg_nordeste); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="nordeste" class="panel-collapse collapse">
				<div class="panel-body">Salvador</div>
				<div class="panel-body">Camaçari</div>
				<div class="panel-body">Feira de Santana</div>
				<div class="panel-body">Vitória da Conquista</div>
				<div class="panel-body">Itabuna</div>
				<div class="panel-body">Aracaju</div>
				<div class="panel-body">Fortaleza</div>
				<div class="panel-body">Natal</div>
				<div class="panel-body">Mossoró</div>
				<div class="panel-body">João Pessoa</div>
				<div class="panel-body">São Luis</div>
				<div class="panel-body">Teresina</div>
				<div class="panel-body">Maceió</div>
				<div class="panel-body">Juazeiro do Norte</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#norte"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=160&compet=<?php echo($compet_select); ?>'">Gerência Regional Norte - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_reg_norte); ?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_reg_norte); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_reg_norte); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="norte" class="panel-collapse collapse">
				<div class="panel-body">Manaus</div>
				<div class="panel-body">Porto Velho</div>
				<div class="panel-body">Macapá</div>
				<div class="panel-body">Belém</div>
				<div class="panel-body">Boa Vista</div>
				<div class="panel-body">Rio Branco</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#codf"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=92&compet=<?php echo($compet_select); ?>'">Gerência Regional Centro-Oeste e DF - Total de Impressoras:</a>
					<input type="text"
					       id="qtd_geral"
					       value="0<?php /*echo($g_reg_co_df); */?>"
					       size="1"
					       readonly>
					Valor Total: R$
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_reg_co_df); ?>"
					       size="6"
					       readonly>
					Impressões:
					<input type="text"
					       id="imp_prescons"
					       value="<?php echo utf8_encode($imp_reg_co_df); ?>"
					       size="6"
					       readonly>
				</h4>
			</div>
			<div id="codf" class="panel-collapse collapse">
				<div class="panel-body">Brasilia</div>
				<div class="panel-body">Goiânia</div>
				<div class="panel-body">Campo Grande</div>
				<div class="panel-body">Palmas</div>
				<div class="panel-body">Cuiabá</div>
				<div class="panel-body">Belo Horizonte</div>
			</div>
		</div>
	</div>
</div>
<?php require("../html/htmlEnd.php"); ?>