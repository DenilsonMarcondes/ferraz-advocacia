<style type="text/css">
	/*
		==============
		ATUAÇÃO STYLES
		==============
	*/
	.session-atuacao-conteudo { background-color: #f5f5f5 }
	.session-atuacao-conteudo .line { width: 94%; top: 9px }

	.session-premios { background-color: #f5f5f5 }
	.session-premios p.session-content { color: #4a4a4a }
	.session-premios a.session-link:focus,
	.session-premios a.session-link:hover { border-bottom: 1px solid #242367; }

	.session-escritorio { background-color: #242367 }
	.session-escritorio h3.session-title,
	.session-escritorio p.session-content,
	.session-escritorio a.session-link { color: #ffffff }
	.session-escritorio a.session-link:focus,
	.session-escritorio a.session-link:hover { border-bottom: 1px solid #ffffff; }

	.session-atuacoes { background-color: #242367 }
	.session-atuacoes .col-titulos h4 { font-family: 'Roboto', sans-serif; color: #f5f5f5; line-height: 1.56; font-size: 16px }
	.session-atuacoes .col-titulos h4:first-child { padding: 0 !important }
	.session-atuacoes .col-titulos h4 { margin: 0; padding-top: 30px }
	.session-atuacoes .col-titulos h4 a { color: #a29cdf }
	.session-atuacoes .col-titulos h4 a.active,
	.session-atuacoes .col-titulos h4 a:focus,
	.session-atuacoes .col-titulos h4 a:hover { color: #f5f5f5 }

	.session-atuacoes .col-descritivos h4 { font-family: 'Roboto', sans-serif; color: #ffffff; line-height: 1.25; font-size: 20px }
	.session-atuacoes .col-descritivos h4:first-child { padding-top: 0 }
	.session-atuacoes .col-descritivos h4 { margin: 0; padding-top: 70px; padding-bottom: 30px }
	.session-atuacoes .col-descritivos p { width: 456px; font-size: 14px; line-height: 1.79; color: #f5f5f5; margin: 0; }

	@media screen and (min-width: 768px) {
		.session-atuacao-conteudo { padding-top: 91px; padding-bottom: 91px }
		.session-atuacao-conteudo h3 { margin-top: 37px; width: 268px }
		.session-atuacao-conteudo p.session-content-alternative { margin-top: 15px }

		.session-socios p.session-content { margin-top: 40px }
		.session-socios .col-conteudo { height: 519px; position: relative; }
		.session-socios .col-conteudo .position-center-vertical { width: 340px }

		.session-premios .col-conteudo { height: 320px }
		.session-premios h3.session-title { width: 212px }
		.session-premios p.session-content { margin-top: 21px; margin-bottom: 15px; width: 382px }

		.session-escritorio .col-conteudo { height: 311px }
		.session-escritorio h3.session-title { width: 323px }
		.session-escritorio p.session-content { margin-top: 21px; margin-bottom: 15px; width: 302px }

		.session-atuacoes { padding-top: 120px; padding-bottom: 120px }
	}
	@media screen and (max-width: 768px) {
		.session-atuacao-conteudo { padding-top: 63px; padding-bottom: 63px }
		.session-atuacao-conteudo h3 { margin-top: 15px; width: 191px }
		.session-atuacao-conteudo p.session-content-alternative { margin-top: 21px }

		.session-socios p.session-content { margin-top: 20px }
		.session-socios .col-conteudo { height: 441px; position: relative; }

		.session-premios .col-conteudo { height: 233px }
		.session-premios p.session-content { margin-top: 21px; margin-bottom: 15px }

		.session-escritorio .col-conteudo { height: 258px }
		.session-escritorio p.session-content { margin-top: 21px; margin-bottom: 15px }

		.row-atuacao { position: relative; border-bottom: 1px solid #ffffff; padding-top: 25px; padding-bottom: 25px }
		.row-atuacao h4 { margin: 0; font-size: 16px; font-family: 'Roboto', sans-serif; line-height: 1.56; color: #ffffff; font-weight: 500; text-transform: uppercase }
		.row-atuacao .atuacao-conteudo { -webkit-transition: 0.5s; transition: 0.5s }
		.row-atuacao .atuacao-conteudo p { font-size: 12px; line-height: 1.83; color: #f5f5f5; margin-top: 20px; margin-bottom: 0px }
		.row-atuacao .atuacao-conteudo.esconder { height: 0px; -webkit-transition: 0.5s; transition: 0.5s }
		.row-atuacao .atuacao-conteudo.mostrar { height: auto; -webkit-transition: 0.5s; transition: 0.5s }
	}
</style>

<div class="parallax-topo margin-header" style="background: url('<?= RAIZSITE ?>/img/marcacao-2.jpg'); background-position: center center; background-size: cover; background-attachment: fixed">
	<div class="parallax-filter" style="background: #242367; width: 100%; opacity: 0.34"></div>
</div>

<div class="session-atuacao-conteudo">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: #16197D">
				<div class="line hidden-xs"></div>

				<p class="bread-crumb-title hidden-lg hidden-md hidden-sm" style="color: #A9A9A9">nossos premios</p>
				<h3 class="session-title">Ferraz | Cicarelli & Passold Advogados Associados</h3>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: #16197D">
				<p class="bread-crumb-title hidden-xs" style="color: #A9A9A9">nossa estrutura</p>
				<p class="session-content-alternative">O escritório tem especialidade nas áreas de direito bancário, fomento mercantil e empresarial, tanto na recuperação de créditos, quanto na defesa de ações cíveis.</p>
			</div>
	  	</div>
	</div>
</div>

<div class="hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-2.jpg'); background-position: center center; background-size: cover; background-attachment: fixed; height: 188px">
	<div class="hidden-xs" style="background: #242367; width: 100%; opacity: 0.34; height: 188px"></div>
</div>

<div class="session-atuacoes">
	<!--inicio do container-->
	<div class="container">
		<div class="row hidden-xs row-atuacoes">
			<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs col-titulos">
				<h4><a href="#recuperacaocreditos" class="ancora principal">RECUPERAÇÃO DE CRÉDITOS</a></h4>
				<h4><a href="#negociacao" class="ancora atalho">NEGOCIAÇÃO</a></h4>
				<h4><a href="#solicitacao" class="ancora atalho">SOLICITAÇÃO DE LITÍGIOS</a></h4>
				<h4><a href="#cobranca" class="ancora atalho">COBRANÇA JUDICIAL</a></h4>
				<h4><a href="#recuperacaojudicial" class="ancora atalho">RECUPERAÇÃO JUDICIAL,<br>EXTRAJUDICIAL E FALÊNCIAS</a></h4>
				<h4><a href="#equipes" class="ancora atalho">EQUIPES ESPECIALIZADAS</a></h4>
				<h4><a href="#solucoes" class="ancora atalho">SOLUÇÕES COMPLETAS</a></h4>
				<h4><a href="#complexidade" class="ancora atalho">ALTA COMPLEXIDADE</a></h4>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs col-descritivos">
				<h4 id="recuperacaocreditos">RECUPERAÇÃO DE CRÉDITOS</h4>
				<p>Atuação rápida e eficaz na recuperação de créditos por meio da retomada de bens dados em garantia, investigação patrimonial e busca de bens passíveis de penhora.</p>

				<h4 id="negociacao">NEGOCIAÇÃO </h4>
				<p>O escritório possui estrutura especializada na negociação de créditos com equipes treinadas e diversas ferramentas tecnológicas e de informação (Sistemas de telefonia completo, de controle de gestão, de localização de pessoas, de cruzamento de informações públicas, dentre outras).</p>

				<h4 id="solicitacao">SOLUÇÃO DE LITÍGIOS</h4>
				<p>Na defesa de ações cíveis, a diretoria contenciosa do escritório busca a rápida solução dos litígios, inclusive na busca ativa por acordos, a fim de garantir a redução dos riscos processuais (condenações) e dos custos inerentes aos processos.</p>

				<h4 id="cobranca">COBRANÇA JUDICIAL</h4>
				<p>Atendendo às exigências do mercado, o escritório está preparado para atuar na fase pré-jurídica ou administrativa, evitando os custos inerentes aos processos judiciais. </p>

				<h4 id="recuperacaojudicial">RECUPERAÇÃO JUDICIAL,<br>EXTRAJUDICIAL E FALÊNCIAS</h4>
				<p>O escritório conta com equipe especializada no acompanhamento de processos de recuperação judicial, extrajudicial e falências, além de parceria com profissionais de outras áreas do conhecimento.</p>

				<h4 id="equipes">EQUIPES ESPECIALIZADAS</h4>
				<p>As equipes internas são especializadas nos clientes do escritório, atuando com sinergia e trazendo melhores resultados.</p>

				<h4 id="solucoes">SOLUÇÕES COMPLETAS</h4>
				<p>Com perfil moderno e conhecimento nas mais diversas espécies de operações bancárias, contratos e processos o escritório entrega Soluções completas, com as melhores práticas e inovação.</p>

				<h4 id="complexidade">ALTA COMPLEXIDADE</h4>	
				<p>Além da atuação no contencioso de massa, há profissionais com alta capacidade técnica, preparados para processos e causas jurídicas de alta complexidade e relevância.</p>
			</div>
		</div>

		<div class="row hidden-lg hidden-md hidden-sm row-atuacao">
			<div class="hidden-lg hidden-md hidden-sm col-xs-12 atuacao-titulo">
				<h4>Recuperação de créditos&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="12px" height="12px" viewBox="0 0 306 306" fill="#ffffff" style="enable-background:new 0 0 306 306;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></h4>
			</div>
			<div class="hidden-lg hidden-md hidden-sm col-xs-12 atuacao-conteudo">
				<p>Atuação rápida e eficaz na recuperação de créditos por meio da retomada de bens dados em garantia, investigação patrimonial e busca de bens passíveis de penhora.</p>
			</div>
		</div>
	</div>
</div>

<div class="session-premios">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-conteudo">
				<div class="position-center-vertical">
					<h3 class="session-title" style="color: #242367">Prêmios</h3>
					<p class="session-content">Escritório e Sócios multi-premiados e reconhecidos por diversas instituições de grande credibilidade e renome no mercado.</p>

					<a href="premios.html" style="color: #16197D" class="session-link">saiba mais</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="session-escritorio">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-conteudo">
				<div class="position-center-vertical">
					<h3 class="session-title">O escritório tem como sócios-titulares</h3>
					<p class="session-content">advogados especializados em diversas áreas.</p>

					<a href="<?= RAIZSITE ?>" class="session-link">saiba mais</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('a.principal[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top - 100
				}, 1000);
				return false;
			}
		}
	});
	$('a.atalho[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top - 50
				}, 1000);
				return false;
			}
		}
	});

	$(".atuacao-conteudo").hide();
	$(".atuacao-titulo").click(function(event) {
		if($(".atuacao-conteudo").is(":visible")) {
			$(".atuacao-conteudo svg").removeClass('rotate');
			$(".atuacao-conteudo").hide();
		} else {
			$(".atuacao-conteudo").show();
			$(".atuacao-conteudo svg").addClass('rotate');
		}
	});
</script>