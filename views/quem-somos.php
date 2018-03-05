<script type="text/javascript">
	$(document).ready(function(){
		var hash = location.hash.replace('#','');
		if(hash == 'equipe'){
			$('html, body').animate({ scrollTop: $('#equipe').offset().top-0}, 1000);
		}
	});
</script>

<style type="text/css">
	.session-historico .col-tab .tab-title { font-family: 'Roboto', sans-serif; color: #f5f5f5; text-transform: uppercase }
	.session-historico .col-tab .tab-description { color: #f5f5f5 }

	.session-equipe { background-color: #f5f5f5 }

	.session-premios p.session-content { color: #4a4a4a }
	.session-premios a.session-link:focus,
	.session-premios a.session-link:hover { border-bottom: 1px solid #242367; }

	@media screen and (min-width: 768px) {
		.session-chamada h3.session-title { width: 268px; color: #242367 }
		.session-chamada .row-chamada { margin-top: 45px; margin-bottom: 45px }

		.session-historico h3.session-title { width: 268px; color: #242367; margin-top: 21px; margin-bottom: 21px }
		.session-historico p.session-content { width: 382px; color: #4a4a4a }

		.session-historico .col-tab { height: 377px; position: relative; background-color: #242367 }
		.session-historico .col-tab .tab-title { line-height: 1.2; font-size: 30px; font-weight: 500 }
		.session-historico .col-tab .tab-description { line-height: 1.79; font-size: 14px }

		.session-historico .col-missao .nav-tabs { float: right; margin-top: -40px; margin-right: 20px; border: none; }
		.session-historico .col-missao .nav-tabs>li>a { font-size: 14px; color: #b1b1b1; font-weight: 600; text-transform: uppercase }
		.session-historico .col-missao .nav>li>a { padding: 0; margin-right: 45px; border-bottom: 1px solid #b1b1b1; padding-right: 43px; margin-right: 10px; border-top: none }

		.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover { color: #ffffff !important; border-bottom: 1px solid #ffffff !important; background-color: transparent; border-radius: 0; border: none; }
		.nav>li>a:focus, .nav>li>a:hover { background-color: transparent; border: none; border-radius: 0; }

		.session-equipe { padding-top: 110px; padding-bottom: 110px }
		.session-equipe .membro:first-child,
		.session-equipe .membro:nth-child(2),
		.session-equipe .membro:nth-child(3),
		.session-equipe .membro:nth-child(5),
		.session-equipe .membro:nth-child(6) { border-right: 1px solid #242367 }
		.session-equipe .membro .imagem { height: 264px }
		.session-equipe .membro .imagem h3 { font-size: 30px; font-family: 'Roboto', sans-serif; line-height: 1.2; color: #242367; margin: 0; font-weight: 500; width: 212px }
		.session-equipe .membro .imagem p { font-size: 14px; line-height: 1.79; color: #4a4a4a; width: 268px; margin-top: 10px }

		.session-equipe .membro .conteudo h3 { font-size: 20px; font-family: 'Roboto', sans-serif; line-height: 1; color: #242367; text-transform: uppercase; margin: 0; margin-top: 28px; width: 212px }
		.session-equipe .membro .conteudo span { font-size: 12px; font-family: 'Roboto', sans-serif; line-height: 1.67; color: #242367; font-style: italic; }
		.session-equipe .membro .conteudo p { font-size: 14px; line-height: 1.79; color: #4a4a4a; margin-bottom: 40px; margin-top: 5px; height: 150px }

		.session-premios .col-conteudo { height: 320px }
		.session-premios h3.session-title { width: 212px }
		.session-premios p.session-content { margin-top: 21px; margin-bottom: 15px; width: 382px }

		.session-escritorio .col-conteudo { height: 311px }
		.session-escritorio h3.session-title { width: 323px }
		.session-escritorio p.session-content { margin-top: 21px; margin-bottom: 15px; width: 302px }
	}
</style>

<div class="margin-header">&nbsp;</div>
<div class="session-chamada">
	<div class="container">
		<div class="row row-chamada">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h3 class="session-title">Ferraz | Cicarelli & Passold Advogados Associados</h3>
			</div>
	  	</div>
	</div>
</div>

<div class="container">
	<div style="height: 406px; background: url('<?= RAIZSITE ?>/img/marcacao-4.jpg'); background-size: cover; background-position: center -50px"></div>
</div>

<div class="session-historico">
	<div class="container">
		<div class="line hidden-xs"></div>

		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-historico" style="padding-right: 0px">
				<div style="height: 105px; background-color: #ffffff; margin-top: -105px" class="hidden-xs"></div>

				<p class="bread-crumb-title">o histórico</p>
				<h3 class="session-title">Ferraz | Cicarelli & Passold Advogados Associados</h3>
				<p class="session-content">Fundado em 2001, na cidade de Curitiba, Ferraz | Cicarelli & Passold Advogados Associados é um escritório de advocacia que está presente em três estados: Paraná, Santa Catarina e São Paulo. Além disso, conta com parceiros éticos e de confi ança em praticamente todas as regiões do Brasil, sempre priorizando a qualidade dos serviços e resultados aos clientes.</p>
				<p class="session-content">Apresentando um trabalho sério, eficiente e que supera as expectativas dos clientes, o escritório teve um crescimento rápido sem nunca esquecer dos valores e da excelência em todas as áreas de atuação. O FCP Advogados Associados é referência nacional em serviços jurídicos e de recuperação de ativos e está pronto para atender sua empresa.</p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-missao" style="padding-left: 0px">
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><a data-toggle="tab" href="#missao">Missão</a></li>
					<li role="presentation"><a data-toggle="tab" href="#visao" role="tab">Visão</a></li>
					<li role="presentation"><a data-toggle="tab" href="#valores" role="tab">Valores</a></li>
				</ul>
				<div class="col-tab">
					<div class="tab-content">
						<div id="missao" class="tab-pane fade in active">
							<div class="position-center-center">
								<p class="tab-title">Missão</p>
								<p class="tab-description">A missão do escritório é buscar resultado ao cliente, superando expectativas mediante gestão de informação, serviços jurídicos e de recuperação de crédito com qualidade, bem como proporcionar oportunidades aos colaboradores e crescimento da empresa.</p>
							</div>
						</div>

						<div id="visao" class="tab-pane fade">
							<div class="position-center-center">
								<p class="tab-title">Visão</p>
								<p class="tab-description">A missão do escritório é buscar resultado ao cliente, superando expectativas mediante gestão de informação, serviços jurídicos e de recuperação de crédito com qualidade, bem como proporcionar oportunidades aos colaboradores e crescimento da empresa.</p>
							</div>
						</div>

						<div id="valores" class="tab-pane fade">
							<div class="position-center-center">
								<p class="tab-title">Valores</p>
								<p class="tab-description">A missão do escritório é buscar resultado ao cliente, superando expectativas mediante gestão de informação, serviços jurídicos e de recuperação de crédito com qualidade, bem como proporcionar oportunidades aos colaboradores e crescimento da empresa.</p>
							</div>
						</div>
					</div>
				</div>

				<div style="background: url('<?= RAIZSITE ?>/img/marcacao-5.jpg'); height: 250px; background-position: center center"></div>
			</div>
		</div>
	</div>
</div>

<div class="session-equipe" id="equipe">
	<div class="container hidden-xs">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="margin-bottom: 27px">
				<p class="bread-crumb-title">quem somos</p>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs membro">
				<div class="imagem">
					<h3>O escritório tem como sócios-titulares</h3>
					<p>advogados especializados em diversas áreas, sendo eles:</p>
				</div>
				<div class="conteudo">
					<h3>Valeria caramuru cicarelli</h3>
					<span>(in memoriam)</span>
					<p>Inscrita na OAB/PR sob o n. 25.474, formou-se pela Faculdade de Direito de Curitiba, com especialização em Direito Processual Civil, concluindo o curso em 1997. Cursou a Escola do Ministério Público no ano de 1998.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs membro">
				<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/alexandre.jpg'); height: 264px; background-position: center"></div>
				<div class="conteudo">
					<h3>ALEXANDRE NELSON FERRAZ</h3>
					<span>&nbsp;</span>
					<p>Inscrito na OAB/PR sob o n. 30.890, na OAB/SC sob o n. 36.530, na OAB/SP sob o n. 382.471 e na OAB/MT sob o n. 22.640/A, formou-se pela FURB - Fundação Universidade Regional de Blumenau.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs membro">
				<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/marcio.jpg'); height: 264px; background-position: center"></div>
				<div class="conteudo">
					<h3>márcio rubens passold</h3>
					<span>&nbsp;</span>
					<p>Inscrito na OAB/SC sob o n. 12.826, na OAB/PR sob o n. 37.600 e na OAB/SP sob o n. 382.496, formou-se em Direito pela FURB - Fundação Universidade Regional de Blumenau.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs membro">
				<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/leonardo.jpg'); height: 264px; background-position: center"></div>
				<div class="conteudo">
					<h3>LEONARDO XAVIER ROUSSENQ</h3>
					<span>&nbsp;</span>
					<p>Inscrito na OAB/PR sob o n. 25.661, na OAB/SC sob o n. 45.745, na OAB/SP sob o n. 382.491 e na OAB/MT sob o n. 22.385/A, formou-se em Direito pela Pontifícia Universidade Católica do Paraná.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs membro">
				<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/maria.jpg'); height: 264px; background-position: center"></div>
				<div class="conteudo">
					<h3>maria angela keiko taira</h3>
					<span>&nbsp;</span>
					<p>Inscrita na OAB/PR sob o n. 34.433, na OAB/SC sob o n. 45.743 e na OAB/SP sob o n. 194.240, formou-se em Direito pela Faculdade de Direito da Alta Paulista.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs membro">
				<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/felipe.jpg'); height: 264px; background-position: center"></div>
				<div class="conteudo">
					<h3>felipe sá ferreira</h3>
					<span>&nbsp;</span>
					<p>Inscrito na OAB/SC sob o n. 17.611, na OAB/PR sob o n. 60.109 e na OAB/SP sob o n. 382.482, formou-se em Direito pela FURB - Fundação Universidade Regional de Blumenau.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="session-escritorio" style="background-color: #242367">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-conteudo">
				<div class="position-center-vertical">
					<h3 class="session-title" style="color: #f5f5f5">Áreas de atuação</h3>
					<p class="session-content" style="color: #f5f5f5">O escritório tem especialidade nas áreas de direito bancário, fomento mercantil e empresarial, tanto na recuperação de créditos, quanto na defesa de ações cíveis.</p>

					<a href="<?= RAIZSITE ?>/areas-de-atuacao" class="session-link" style="color: #f5f5f5">saiba mais&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="9px" height="9px" viewBox="0 0 306 306" fill="#ffffff" style="enable-background:new 0 0 306 306; margin-bottom: -1px;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="session-premios" style="background-color: #f5f5f5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-conteudo">
				<div class="position-center-vertical">
					<h3 class="session-title" style="color: #242367">Prêmios</h3>
					<p class="session-content">Escritório e Sócios multi-premiados e reconhecidos por diversas instituições de grande credibilidade e renome no mercado.</p>

					<a href="<?= RAIZSITE ?>/premios" style="color: #16197D" class="session-link">saiba mais&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="9px" height="9px" viewBox="0 0 306 306" fill="#242367" style="enable-background:new 0 0 306 306; margin-bottom: -1px;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></a>
				</div>
			</div>
		</div>
	</div>
</div>