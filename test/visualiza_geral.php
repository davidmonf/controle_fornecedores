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
<br>
<label for="qtd_geral"
       class="form-control-label">Qtd. Geral:</label>
<input type="text"
       id="qtd_geral"
       value="<?php include("conta_impressoras.php"); ?>"
       size="1"
       readonly>
	<label for="qtd_geral"
	       class="form-control-label">Valor Geral:</label>
	<input type="text"
	       id="qtd_geral"
	       value="<?php echo($valor_total); ?>"
	       size="1"
	       readonly>
<br>
<br>
<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=259'">Presidência do Conselho - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($prescons); ?>"
				       size="1"
				       readonly>
				Valor Total:
				<input type="text"
				       id="v_prescons"
				       value="<?php echo utf8_encode($v_prescons); ?>"
				       size="4"
				       readonly>
			</h4>
		</div>
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="fa fa-plus-square-o" data-toggle="collapse" href="#suger"></a>
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=48'">Superintendência Geral - SUGER - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($suger); ?>"
				       size="1"
				       readonly>
				Valor Total:
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_suger); ?>"
				       size="4"
				       readonly>
			</h4>
		</div>
		<div id="suger" class="panel-collapse collapse">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#getec"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=3125'">Gerência de Tecnologia e Suporte</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_tec_sup); ?>"
					       size="1"
					       readonly>
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_tec_sup); ?>"
					       size="4"
					       readonly>
				</h4>
			</div>
			<div id="getec" class="panel-collapse collapse">
				<div class="panel-body">Suporte</div>
				<div class="panel-body">Tecnologia</div>
				<div class="panel-body">Telecomunicações</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#sistemas"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=241'">Gerência de Sistemas e Processos</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_sis_proc); ?>"
					       size="1"
					       readonly>
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_sis_proc); ?>"
					       size="4"
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
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#rh"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=115'">Gerência de Recursos Humanos</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_rh); ?>"
					       size="1"
					       readonly>
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_rh); ?>"
					       size="4"
					       readonly>
				</h4>
			</div>
			<div id="rh" class="panel-collapse collapse">
				<div class="panel-body">Administração de Pessoal e Remuneração</div>
				<div class="panel-body">Administração do Aprendiz</div>
				<div class="panel-body">Benefícios e Qualidade de Vida</div>
			</div>
		</div>
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="fa fa-plus-square-o" data-toggle="collapse" href="#safin"></a>
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=22'">Superintendência de Administração e Finanças - SAFIN - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($safin); ?>"
				       size="1"
				       readonly>
				Valor Total:
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_safin); ?>"
				       size="4"
				       readonly>
			</h4>
		</div>
		<div id="safin" class="panel-collapse collapse">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#contabil"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=3131'">Gerência Contábil</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_contabil); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_contabil); ?>"
					       size="4"
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
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=3133'">Gerência Financeira</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_financeira); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_financeira); ?>"
					       size="4"
					       readonly>
				</h4>
			</div>
			<div id="financeira" class="panel-collapse collapse">
				<div class="panel-body">Pagamento de Bolsa-Auxilio e Contas a Receber</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#compras"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=3129'">Gerência de Compras, Patrimônio e Obras</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_compras_patr_obras); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_compras_patr_obras); ?>"
					       size="4"
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
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="fa fa-plus-square-o" data-toggle="collapse" href="#sijuc"></a>
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=3945'">Superintendência Institucional, Juridico e Compliance - SIJUC - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($sijuc); ?>"
				       size="1"
				       readonly>
				Valor Total:
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_sijuc); ?>"
				       size="4"
				       readonly>
			</h4>
		</div>
		<div id="sijuc" class="panel-collapse collapse">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#comunicacao"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=33'">Gerência de Comunicação</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_comunicacao); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_comunicacao); ?>"
					       size="4"
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
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=4654'">Gerência Jurídica e Compliance</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_jur); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_jur); ?>"
					       size="4"
					       readonly>
				</h4>
			</div>
			<div id="g_jur_comp" class="panel-collapse collapse">
				<div class="panel-body">Jurídico</div>
			</div>
			<div class="panel-body">Feiras</div>
			<div class="panel-body">Relações Públicas e Eventos</div>
			
		</div>
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="fa fa-plus-square-o" data-toggle="collapse" href="#sunop"></a>
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=191'">Superintendência Nacional de Operações - SUNOP - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($sunop); ?>"
				       size="1"
				       readonly>
				Valor Total:
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_sunop); ?>"
				       size="4"
				       readonly>
			</h4>
		</div>
		<div id="sunop" class="panel-collapse collapse">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#capacitacao"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=191'">Gerência de Conteudo e Capacitação</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_conteudo_capac); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_conteudo_capac); ?>"
					       size="4"
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
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=4807'">Gerência de Operações SP</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_op_sp); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_op_sp); ?>"
					       size="4"
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
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=221'">Gerência de Operações Norte e CO</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_op_n_co); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_op_n_co); ?>"
					       size="4"
					       readonly>
				</h4>
			</div>
			<div id="opnorte" class="panel-collapse collapse">
				<div class="panel-body">Central de Operações Norte e CO</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#opnordeste"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=76'">Gerência de Operações Nordeste</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_op_ne); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_suger"
					       value="<?php echo utf8_encode($v_op_ne); ?>"
					       size="4"
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
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="fa fa-plus-square-o" data-toggle="collapse" href="#suasf"></a>
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=4650'">Superintendência de Ação Social e Filantropia - SUASF - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($suasf); ?>"
				       size="1"
				       readonly>
				Valor Total:
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_suasf); ?>"
				       size="4"
				       readonly>
			</h4>
		</div>
		<div id="suasf" class="panel-collapse collapse">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#social"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=4652'">Gerência de Assistência Social</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo($g_social); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_social); ?>"
					       size="4"
					       readonly>
				</h4>
			</div>
			<div id="social" class="panel-collapse collapse">
				<div class="panel-body">Supervisão de Projetos Sociais</div>
			</div>
		</div>
		<div class="panel-heading">
			<h4 class="panel-title">
				<a class="fa fa-plus-square-o" data-toggle="collapse" href="#sunat"></a>
				<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=38'">Superintendência Nacional de Atendimento - SUNAT - Total de Impressoras:</a>
				<input type="text"
				       id="qtd_geral"
				       value="<?php echo utf8_encode($sunat); ?>"
				       size="1"
				       readonly>
				Valor Total:
				<input type="text"
				       id="v_suger"
				       value="<?php echo utf8_encode($v_sunat); ?>"
				       size="4"
				       readonly>
			</h4>
		</div>
		<div id="sunat" class="panel-collapse collapse">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a class="fa fa-plus-square-o" data-toggle="collapse" href="#gdesplitoral"></a>
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=1672 '">Gerência Regional Gde SP e Litoral</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_reg_sp_lit); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_reg_sp_lit); ?>"
					       size="4"
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
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=1676'">Gerência Regional SP Oeste</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_sp_oeste); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_sp_oeste); ?>"
					       size="4"
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
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=60'">Gerência Regional SP Leste</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_sp_leste); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_sp_leste); ?>"
					       size="4"
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
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=76'">Gerência Regional Nordeste</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_reg_nordeste); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_reg_nordeste); ?>"
					       size="4"
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
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=160'">Gerência Regional Norte</a>
					<input type="text"
					       id="qtd_geral"
					       value="<?php echo utf8_encode($g_reg_norte); ?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_reg_norte); ?>"
					       size="4"
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
					<a data-toggle="collapse" href="#" onclick="location.href='../test/relatorio.php?id=92'">Gerência Regional Centro-Oeste e DF</a>
					<input type="text"
					       id="qtd_geral"
					       value="0<?php /*echo($g_reg_co_df); */?>"
					       size="1"
					       readonly>
					Valor Total:
					<input type="text"
					       id="v_prescons"
					       value="<?php echo utf8_encode($v_reg_co_df); ?>"
					       size="4"
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