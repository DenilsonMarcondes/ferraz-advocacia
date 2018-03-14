<script type="text/javascript">
	$(document).ready(function(){
		var hash = location.hash.replace('#','');
		if(hash == 'equipe'){
			$('html, body').animate({ scrollTop: $('#equipe').offset().top-50}, 1000);
		}
	});
</script>

<style type="text/css">
	@media screen and (min-width: 768px) {
		.navbar-default { background-color: #ffffff; border: none }

		.navbar-default .navbar-nav>li>a { font-size: 14px }
		.navbar-default .navbar-nav>li>a { color: #242367 }

		.navbar-default .navbar-nav>li>a:focus,
		.navbar-default .navbar-nav>li>a:hover,
		.navbar-default .navbar-nav>li>a.link-active { /*font-weight: 700;*/ border-bottom: 1px solid #242367; color: #242367 }

		.session-chamada h3.session-title { width: 268px; color: #242367 }
		.session-chamada .row-chamada { margin-top: 45px; margin-bottom: 45px }

		.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover { color: #ffffff !important; border-bottom: 1px solid #ffffff !important; background-color: transparent; border-radius: 0; border: none; }
		.nav>li>a:focus, .nav>li>a:hover { background-color: transparent; border-radius: 0 }
		.nav-tabs>li>a:hover { border-color: transparent }

		.session-escritorio .col-conteudo { height: 311px }
		.session-escritorio h3.session-title { width: 323px }
		.session-escritorio p.session-content { margin-top: 21px; margin-bottom: 15px; width: 302px }
	}
</style>

<div class="margin-header hidden-xs">&nbsp;</div>
<div class="session-chamada hidden-xs">
	<div class="container">
		<div class="row row-chamada">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<h3 class="session-title">Ferraz | Cicarelli & Passold Advogados Associados</h3>
			</div>
	  	</div>
	</div>
</div>

<style type="text/css">
	.session-historico .col-tab .tab-title { font-family: 'Roboto', sans-serif; color: #f5f5f5; text-transform: uppercase }
	.session-historico .col-tab .tab-description { color: #f5f5f5 }

	.session-historico .line { -webkit-transition: all 0.6s ease-out; transition: all 0.6s ease-out }
	.session-historico .line { width: 0%; top: 0px; right: 0px }

	@media screen and (min-width: 768px) {
		.session-historico .col-historico { padding-right: 0; height: 616px }
		.session-historico .col-historico p.bread-crumb-title { margin-top: -11px; margin-right: -5px; margin-left: 0 }
		.session-historico h3.session-title { color: #242367; margin-top: 21px; margin-bottom: 21px }
		.session-historico p.session-content { color: #4a4a4a }

		.session-historico .col-tab { height: 377px; position: relative; background-color: #242367 }
		.session-historico .col-tab .tab-title { line-height: 1.2; font-size: 30px; font-weight: 500 }
		.session-historico .col-tab .tab-description { line-height: 1.79; font-size: 14px }

		.session-historico .col-missao .nav-tabs { float: left; margin-top: -40px; margin-left: 30px; border: none; }
		.session-historico .col-missao .nav-tabs>li>a { font-size: 14px; color: #b1b1b1; font-weight: 600; text-transform: uppercase }
		.session-historico .col-missao .nav>li>a { padding: 0; margin-right: 45px; border-bottom: 1px solid #b1b1b1; padding-right: 43px; margin-right: 10px; border-top: none }
	}

	@media screen and (max-width: 768px) {
		.session-historico { padding-top: 51px; padding-bottom: 51px }
		.session-historico h3.session-title { width: 190px; margin-top: 14px; color: #242367 }
		.session-historico p.session-content { margin-top: 22px }
	}

	@media screen and (min-width: 1200px) {
		.session-historico h3.session-title { width: 268px }
		.session-historico p.session-content { width: 382px }
	}

	@media screen and (min-width: 768px) and (max-width: 991px) {
		.session-historico h3.session-title { width: 268px }
		.session-historico p.session-content { width: 330px }
	}

	@media screen and (min-width: 992px) and (max-width: 1199px) {
		.session-historico h3.session-title { width: 268px }
		.session-historico p.session-content { width: 382px }
	}
</style>
<div class="container hidden-xs">
	<div style="height: 406px; background: url('<?= RAIZSITE ?>/img/marcacao-4.jpg'); background-size: cover; background-position: center -50px"></div>
</div>
<div class="hidden-lg hidden-md hidden-sm" style="height: 233px; background: url('<?= RAIZSITE ?>/img/marcacao-4.jpg'); background-size: cover; background-position: center center; margin-top: 70px; position: relative">
	<div class="container">
		<p class="position-center-vertical" style="font-family: 'Roboto', sans-serif; font-size: 20px; color: #242367; line-height: 1.25; font-weight: 500; width: 191px">Ferraz | Cicarelli & Passold Advogados Associados</p>
	</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs pull-right" style="position: relative; height: 377px; background-color: #242367; z-index: 0; margin-bottom: -377px"></div>
<div class="session-historico">
	<div class="container">
		<div class="line hidden-xs"></div>

		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-historico">
				<div style="height: 105px; background-color: #ffffff; margin-top: -105px" class="hidden-xs"></div>

				<div class="line hidden-xs"></div>

				<p class="bread-crumb-title">o histórico</p>
				<h3 class="session-title">Ferraz | Cicarelli & Passold Advogados Associados</h3>
				<p class="session-content">Fundado em 2001, na cidade de Curitiba, Ferraz | Cicarelli & Passold Advogados Associados é um escritório de advocacia que está presente em três estados: Paraná, Santa Catarina e São Paulo. Além disso, conta com parceiros éticos e de confi ança em praticamente todas as regiões do Brasil, sempre priorizando a qualidade dos serviços e resultados aos clientes.</p>
				<p class="session-content">Apresentando um trabalho sério, eficiente e que supera as expectativas dos clientes, o escritório teve um crescimento rápido sem nunca esquecer dos valores e da excelência em todas as áreas de atuação. O FCP Advogados Associados é referência nacional em serviços jurídicos e de recuperação de ativos e está pronto para atender sua empresa.</p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs col-missao" style="padding-left: 0px">
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><a data-toggle="tab" href="#missao">Missão</a></li>
					<li role="presentation"><a data-toggle="tab" href="#visao" role="tab">Visão</a></li>
					<li role="presentation"><a data-toggle="tab" href="#valores" role="tab">Valores</a></li>
				</ul>
				<div class="col-tab">
					<div class="tab-content">
						<div id="missao" class="tab-pane fade in active">
							<div style="padding: 98px 30px">
								<p class="tab-title">Missão</p>
								<p class="tab-description">A missão do escritório é buscar resultado ao cliente, superando expectativas mediante gestão de informação, serviços jurídicos e de recuperação de crédito com qualidade, bem como proporcionar oportunidades aos colaboradores e crescimento da empresa.</p>
							</div>
						</div>

						<div id="visao" class="tab-pane fade">
							<div style="padding: 98px 30px">
								<p class="tab-title">Visão</p>
								<p class="tab-description">A missão do escritório é buscar resultado ao cliente, superando expectativas mediante gestão de informação, serviços jurídicos e de recuperação de crédito com qualidade, bem como proporcionar oportunidades aos colaboradores e crescimento da empresa.</p>
							</div>
						</div>

						<div id="valores" class="tab-pane fade">
							<div style="padding: 98px 30px">
								<p class="tab-title">Valores</p>
								<p class="tab-description">A missão do escritório é buscar resultado ao cliente, superando expectativas mediante gestão de informação, serviços jurídicos e de recuperação de crédito com qualidade, bem como proporcionar oportunidades aos colaboradores e crescimento da empresa.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).scroll(function() {
		if ($(this).scrollTop() > 180) {
			$(".session-historico .line").css('width', '80%');

			setTimeout(function(){
				$(".bread-crumb-title").css({
					'margin-right': '0',
					'opacity': '9'
				});
			}, 800);
		}
	});
</script>

<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs pull-right" style="background: url('<?= RAIZSITE ?>/img/marcacao-5.jpg'); height: 250px; background-position: center center; margin-top: -250px"></div>

<style type="text/css">
	@media screen and (max-width: 767px) {
		.session-missao-mobile { background-color: #242367; padding-top: 60px; padding-bottom: 60px }

		.session-missao-mobile .tab-title { font-family: 'Roboto', sans-serif; font-weight: 500; line-height: 1.8; font-size: 20px; text-transform: uppercase; color: #ffffff; margin: 0; }
		.session-missao-mobile .tab-description { margin: 35px 0px 0px 0px; color: #ffffff; font-size: 12px; line-height: 1.5 }

		.session-missao-mobile .nav-tabs { border: none }
		.session-missao-mobile .nav-tabs>li>a { font-size: 14px; color: #b1b1b1; font-weight: 600; text-transform: uppercase }
		.session-missao-mobile .nav>li>a { padding: 0; margin-right: 45px; border-bottom: 1px solid #b1b1b1; padding-right: 43px; margin-right: 10px; border-top: none }

		.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover { color: #ffffff !important; border-bottom: 1px solid #ffffff !important; background-color: transparent; border-radius: 0; border: none; }
		.nav>li>a:focus, .nav>li>a:hover { background-color: transparent; border-radius: 0 }
		.nav-tabs>li>a:hover { border-color: transparent }
	}
</style>
<div class="session-missao-mobile hidden-lg hidden-md hidden-sm">
	<div class="container">
		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a data-toggle="tab" href="#missaoMobile">Missão</a></li>
			<li role="presentation"><a data-toggle="tab" href="#visaoMobile" role="tab">Visão</a></li>
			<li role="presentation"><a data-toggle="tab" href="#valoresMobile" role="tab">Valores</a></li>
		</ul>

		<div class="col-tab">
			<div class="tab-content">
				<div id="missaoMobile" class="tab-pane fade in active">
					<div style="padding-top: 38px">
						<p class="tab-title">Missão</p>
						<p class="tab-description">A missão do escritório é buscar resultado ao cliente, superando expectativas mediante gestão de informação, serviços jurídicos e de recuperação de crédito com qualidade, bem como proporcionar oportunidades aos colaboradores e crescimento da empresa.</p>
					</div>
				</div>

				<div id="visaoMobile" class="tab-pane fade">
					<div style="padding-top: 38px">
						<p class="tab-title">Visão</p>
						<p class="tab-description">A missão do escritório é buscar resultado ao cliente, superando expectativas mediante gestão de informação, serviços jurídicos e de recuperação de crédito com qualidade, bem como proporcionar oportunidades aos colaboradores e crescimento da empresa.</p>
					</div>
				</div>

				<div id="valoresMobile" class="tab-pane fade">
					<div style="padding-top: 38px">
						<p class="tab-title">Valores</p>
						<p class="tab-description">A missão do escritório é buscar resultado ao cliente, superando expectativas mediante gestão de informação, serviços jurídicos e de recuperação de crédito com qualidade, bem como proporcionar oportunidades aos colaboradores e crescimento da empresa.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.session-equipe { background-color: #f5f5f5 }

	@media screen and (min-width: 768px) {
		.session-equipe { padding-top: 110px; padding-bottom: 110px }
		.session-equipe .membro:first-child,
		.session-equipe .membro:nth-child(2),
		.session-equipe .membro:nth-child(3),
		.session-equipe .membro:nth-child(5),
		.session-equipe .membro:nth-child(6) { border-right: 1px solid #242367 }
		.session-equipe .membro .imagem { height: 264px }
		.session-equipe .membro .imagem h3 { font-size: 30px; font-family: 'Roboto', sans-serif; line-height: 1.2; color: #242367; margin: 0; font-weight: 500 }
		.session-equipe .membro .imagem p { font-size: 14px; line-height: 1.79; color: #4a4a4a; margin-top: 10px }
		.session-equipe .membro .conteudo h3 { font-size: 20px; font-family: 'Roboto', sans-serif; line-height: 1; color: #242367; text-transform: uppercase; margin: 0; margin-top: 28px }
		.session-equipe .membro .conteudo span { font-size: 12px; font-family: 'Roboto', sans-serif; line-height: 1.67; color: #242367; font-style: italic; }
		.session-equipe .membro .conteudo p { font-size: 14px; line-height: 1.79; color: #4a4a4a; margin-bottom: 40px; margin-top: 5px }
	}

	@media screen and (min-width: 1200px) {
		.session-equipe .membro .imagem h3 { width: 212px }
		.session-equipe .membro .imagem p { width: 268px }
		.session-equipe .membro .conteudo h3 { width: 212px }
		.session-equipe .membro .conteudo p { height: 150px }
	}

	@media screen and (min-width: 768px) and (max-width: 991px) {
		.session-equipe .membro .imagem h3 { width: 212px }
		.session-equipe .membro .imagem p { width: auto }
		.session-equipe .membro .conteudo h3 { width: 212px }
		.session-equipe .membro .conteudo p { height: 180px }
	}

	@media screen and (min-width: 992px) and (max-width: 1199px) {
		.session-equipe .membro .imagem h3 { width: 212px }
		.session-equipe .membro .imagem p { width: 268px }
		.session-equipe .membro .conteudo h3 { width: 212px }
		.session-equipe .membro .conteudo p { height: 150px }
	}
</style>
<div class="session-equipe hidden-xs" id="equipe">
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
				<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-1.jpg'); height: 264px; background-position: top center; background-size: cover"></div>
				<div class="conteudo">
					<h3>ALEXANDRE NELSON FERRAZ</h3>
					<span>&nbsp;</span>
					<p>Inscrito na OAB/PR sob o n. 30.890, na OAB/SC sob o n. 36.530, na OAB/SP sob o n. 382.471 e na OAB/MT sob o n. 22.640/A, formou-se pela FURB - Fundação Universidade Regional de Blumenau.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs membro">
				<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-2.jpg'); height: 264px; background-position: top center; background-size: cover"></div>
				<div class="conteudo">
					<h3>márcio rubens passold</h3>
					<span>&nbsp;</span>
					<p>Inscrito na OAB/SC sob o n. 12.826, na OAB/PR sob o n. 37.600 e na OAB/SP sob o n. 382.496, formou-se em Direito pela FURB - Fundação Universidade Regional de Blumenau.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs membro">
				<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-3.jpg'); height: 264px; background-position: top center; background-size: cover"></div>
				<div class="conteudo">
					<h3>LEONARDO XAVIER ROUSSENQ</h3>
					<span>&nbsp;</span>
					<p>Inscrito na OAB/PR sob o n. 25.661, na OAB/SC sob o n. 45.745, na OAB/SP sob o n. 382.491 e na OAB/MT sob o n. 22.385/A, formou-se em Direito pela Pontifícia Universidade Católica do Paraná.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs membro">
				<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-4.jpg'); height: 264px; background-position: top center; background-size: cover"></div>
				<div class="conteudo">
					<h3>maria angela keiko taira</h3>
					<span>&nbsp;</span>
					<p>Inscrita na OAB/PR sob o n. 34.433, na OAB/SC sob o n. 45.743 e na OAB/SP sob o n. 194.240, formou-se em Direito pela Faculdade de Direito da Alta Paulista.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs membro">
				<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-5.jpg'); height: 264px; background-position: top center; background-size: cover"></div>
				<div class="conteudo">
					<h3>felipe sá ferreira</h3>
					<span>&nbsp;</span>
					<p>Inscrito na OAB/SC sob o n. 17.611, na OAB/PR sob o n. 60.109 e na OAB/SP sob o n. 382.482, formou-se em Direito pela FURB - Fundação Universidade Regional de Blumenau.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.session-premios p.session-content { color: #4a4a4a }
	.session-premios a.session-link:focus,
	.session-premios a.session-link:hover { border-bottom: 1px solid #242367 }

	@media screen and (min-width: 768px) {
		.session-link svg { -webkit-transition: all 0.2s ease-out; transition: all 0.2s ease-out }
		.session-link:hover svg { margin-left: 5px }
		
		.session-premios .col-conteudo { height: 320px }
		.session-premios p.session-content { margin-top: 21px; margin-bottom: 15px }
	}

	@media screen and (min-width: 1200px) {
		.session-premios h3.session-title { width: 212px }
		.session-premios p.session-content { width: 382px }
	}

	@media screen and (min-width: 768px) and (max-width: 991px) {
		.session-premios h3.session-title { width: 212px }
		.session-premios p.session-content { width: 302px }
	}

	@media screen and (min-width: 992px) and (max-width: 1199px) {
		.session-premios h3.session-title { width: 212px }
		.session-premios p.session-content { width: 382px }
	}
</style>
<div class="session-escritorio hidden-xs" style="background-color: #242367">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-conteudo">
				<div class="position-center-vertical">
					<p class="bread-crumb-title">o que fazemos</p>
					<h3 class="session-title" style="color: #f5f5f5">Áreas de atuação</h3>
					<p class="session-content" style="color: #f5f5f5">O escritório tem especialidade nas áreas de direito bancário, fomento mercantil e empresarial, tanto na recuperação de créditos, quanto na defesa de ações cíveis.</p>

					<a href="<?= RAIZSITE ?>/areas-de-atuacao" class="session-link" style="color: #f5f5f5">saiba mais&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="9px" height="9px" viewBox="0 0 306 306" fill="#ffffff" style="enable-background:new 0 0 306 306; margin-bottom: -1px;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="session-premios hidden-xs" style="background-color: #f5f5f5">
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

<style type="text/css">
	/*
		========
		HISTÓRIA
		========
	*/
	.row-historia h3.session-title { color: #242367 }
	.row-historia p.session-content { color: #4a4a4a }
	.row-historia a.session-link { color: #242367; font-weight: normal; font-size: 12px }
	.row-historia a.session-link:hover { border-bottom: 1px solid #242367 }
	.row-historia .line { width: 54%; top: 100px; margin-left: 90px }

	@media screen and (min-width: 768px) {
		/*
			=============
			SLIDER STYLES
			=============
		*/
		.row-slider .col-slider { margin-top: -631px; float: right; padding: 0 }

		.tarja-branca .chamada { -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); -ms-transform: rotate(-90deg); -o-transform: rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); width: 260px }
		.tarja-branca .chamada { position: absolute; left: -75px; top: 250px }
		.tarja-branca .chamada p { font-weight: 600; margin: 0; }
		.tarja-branca .chamada p:first-child { font-size: 14px; color: #b1b1b1 }
		.tarja-branca .chamada a.owl-change-link p { font-size: 30px; color: #242367 }

		.owl-theme .owl-nav { position: absolute; margin-top: -75px; left: 50%; -ms-transform: translateX(-50%); -webkit-transform: translateX(-50%); -moz-transform: translateX(-50%); -o-transform: translateX(-50%); transform: translateX(-50%) }
		
		.btn-owl-next:active,
		.btn-owl-next:focus,
		.btn-owl-next:active:focus,
		.btn-owl-prev:active,
		.btn-owl-prev:focus,
		.btn-owl-prev:active:focus { outline: none; box-shadow: none }
		.btn-owl-next { -webkit-transform: rotate(180deg); -moz-transform: rotate(180deg); -ms-transform: rotate(180deg); -o-transform: rotate(180deg) }
		.btn-owl-prev,
		.btn-owl-next { border-radius: 0; border: none; background-color: transparent; padding: 5px 5px }
		.btn-owl-prev svg,
		.btn-owl-next svg { margin-bottom: -5px }
		.btn-owl-prev:hover svg g path,
		.btn-owl-prev:hover svg g polygon,
		.btn-owl-next:hover svg g path,
		.btn-owl-next:hover svg g polygon { fill: #242367 }

		.buttons { position: absolute; bottom: 44px; z-index: 3 }
	}
</style>
<div class="row-slider hidden-xs">
	<div class="col-lg-6 col-md-6 col-sm-6 col-slider hidden-xs">
		<div class="tarja-branca position-center" style="height: 634px; width: 113px; background-color: #f5f5f5; z-index: 2">
			<div class="chamada">
				<p>estrutura física</p>
				<a class="owl-change-link" style="color: #242367"><p class="owl-change-text">Matriz Curitiba</p></a>
			</div>
		</div>
		<div class="owl-carousel owl-matrizes owl-theme">
			<a data-fancybox="matrizes" href="<?= RAIZSITE ?>/img/marcacao-matriz-5.jpg">
				<div class="item" data-text="Filial Blumenau" data-link="#filialBlumenau">
					<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-matriz-5.jpg'); height: 631px; background-size: cover; background-position: center center"></div>
				</div>
			</a>
			<a data-fancybox="matrizes" href="<?= RAIZSITE ?>/img/marcacao-matriz-2.jpg">
				<div class="item" data-text="Filial São Paulo" data-link="#filialSaoPaulo">
					<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-matriz-2.jpg'); height: 631px; background-size: cover; background-position: center center"></div>
				</div>
			</a>
			<a data-fancybox="matrizes" href="<?= RAIZSITE ?>/img/marcacao-matriz-4.jpg">
				<div class="item" data-text="Filial Maringá" data-link="#filialMaringa">
					<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-matriz-4.jpg'); height: 631px; background-size: cover; background-position: center center"></div>
				</div>
			</a>
			<a data-fancybox="matrizes" href="<?= RAIZSITE ?>/img/marcacao-matriz-1.jpg">
				<div class="item" data-text="Filial Cascavel" data-link="#filialCascavel">
					<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-matriz-1.jpg'); height: 631px; background-size: cover; background-position: center center"></div>
				</div>
			</a>
			<a data-fancybox="matrizes" href="<?= RAIZSITE ?>/img/marcacao-matriz-3.jpg">
				<div class="item" data-text="Matriz Curitiba" data-link="#matrizCuritiba">
					<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-matriz-3.jpg'); height: 631px; background-size: cover; background-position: center center"></div>
				</div>
			</a>
		</div>
		<div class="buttons position-center">
			<button type="button" class="btn btn-carousel btn-owl-prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve" width="21px" height="21px"><g><path d="M26,0C11.663,0,0,11.663,0,26s11.663,26,26,26s26-11.663,26-26S40.337,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" fill="#b1b1b1"/><polygon points="32,36.783 32,15.438 14.043,25.806  " fill="#b1b1b1"/></g></svg></button>

			<button type="button" class="btn btn-carousel btn-owl-next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve" width="21px" height="21px"><g><path d="M26,0C11.663,0,0,11.663,0,26s11.663,26,26,26s26-11.663,26-26S40.337,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" fill="#b1b1b1"/><polygon points="32,36.783 32,15.438 14.043,25.806  " fill="#b1b1b1"/></g></svg></button>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(".owl-change-link").attr("href", "<?= RAIZSITE ?>/contato/#matrizCuritiba");

		$('.owl-matrizes').on('changed.owl.carousel', function(e) {
			var owlText = $(".owl-matrizes .owl-item.active .item").attr("data-text");
			var owlLink = $(".owl-matrizes .owl-item.active .item").attr("data-link");
			$(".owl-change-text").html(owlText);
			$(".owl-change-link").attr("href", "<?= RAIZSITE ?>/contato/"+owlLink);
		}).owlCarousel({
			items:1,
		    margin:10,
		    autoplay:true,
    		autoplayTimeout:10000,
    		loop:true,
    		dots:false,
    		nav:false
		});

		$(".btn-owl-prev").click(function(event) {
			$('.owl-matrizes').trigger('prev.owl.carousel');
		});
		$(".btn-owl-next").click(function(event) {
			$('.owl-matrizes').trigger('next.owl.carousel');
		});
	});
</script>

<style type="text/css">
	.bloco-chamada-socios { padding-top: 46px; padding-bottom: 46px }
	.bloco-chamada-socios .session-title { padding-top: 13px; padding-bottom: 13px; width: 212px; color: #242367 }
	.bloco-chamada-socios .session-content { width: 268px; color: #4a4a4a }

	.menu-mobile-socios-li { padding-top: 21px; padding-bottom: 21px; padding-left: 0 !important; padding-right: 0 !important; border-top: 1px solid #242367 }
	.menu-mobile-socios-li.principal { border-top: none; padding-top: 0 }
	.menu-mobile-socios-li .socios-li-principal p:first-child { font-size: 10px; font-weight: 700; color: #b1b1b1; margin: 0 }
	.menu-mobile-socios-li .socios-li-principal p.session-title { color: #242367; line-height: 1.8; font-size: 16px }
	.menu-mobile-socios-li .socios-li-principal svg { -webkit-transition: 0.5s; transition: 0.5s }
	.socios-li { padding-bottom: 25px }
	.socios-li-principal span { font-family: 'Roboto', sans-serif; font-size: 10px; font-style: italic; line-height: 2; color: #242367 }
	.socios-li p.description { font-size: 12px; color: #4a4a4a; line-height: 1.83; margin: 0; font-weight: 400; margin-top: 20px; }

	.bloco-chamada-quem-somos { padding-top: 46px; padding-bottom: 46px }
	.bloco-chamada-quem-somos .session-title { padding-top: 13px; padding-bottom: 13px; color: #f5f5f5 }
	.bloco-chamada-quem-somos .session-content { color: #f5f5f5 }

	.bloco-chamada-premios { padding-top: 46px; padding-bottom: 46px }
	.bloco-chamada-premios .session-title { padding-top: 13px; padding-bottom: 13px; color: #242367 }
	.bloco-chamada-premios .session-content { color: #4a4a4a }
</style>
<div class="hidden-lg hidden-md hidden-sm row" style="margin: 0 !important">
	<div class="col-xs-12" style="padding: 0 !important">
		<div class="container bloco-chamada-socios">
			<p class="bread-crumb-title">quem somos</p>
			<h3 class="session-title">O escritório tem como sócios-titulares</h3>
			<p class="session-content">Advogados especializados em diversas áreas, sendo eles:</p>
		</div>

		<div class="hidden-lg hidden-md hidden-sm col-xs-12 menu-mobile-socios-li principal">
			<div class="container socios-li-principal">
				<p class="session-title display-filiais uppercase">VALERIA CARAMURU CICARELLI</p>
				<span>(in memoriam)</span>
			</div>
		</div>

		<div class="hidden-lg hidden-md hidden-sm col-xs-12 menu-mobile-socios-li" onClick="act(1)">
			<div class="container socios-li-principal">
				<p class="session-title display-filiais uppercase">ALEXANDRE NELSON FERRAZ&nbsp;&nbsp;<svg class="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="12px" height="12px" viewBox="0 0 306 306" fill="#242367" style="enable-background:new 0 0 306 306;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></p>
			</div>
		</div>

		<div class="socios-conteudo" id="conteudo1">
			<div class="container socios-li">
				<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="padding: 0">
					<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-1.jpg'); height: 202px; background-position: top center; background-size: cover"></div>
				</div>
				<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="padding: 0">
					<p class="description">Inscrito na OAB/PR sob o n. 30.890, na OAB/SC sob o n. 36.530, na OAB/SP sob o n. 382.471 e na OAB/MT sob o n. 22.640/A, formou-se pela FURB - Fundação Universidade Regional de Blumenau.</p>
				</div>
			</div>
		</div>

		<div class="hidden-lg hidden-md hidden-sm col-xs-12 menu-mobile-socios-li" onClick="act(2)">
			<div class="container socios-li-principal">
				<p class="session-title display-filiais uppercase">Márcio rubens passold&nbsp;&nbsp;<svg class="svg2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="12px" height="12px" viewBox="0 0 306 306" fill="#242367" style="enable-background:new 0 0 306 306;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></p>
			</div>
		</div>

		<div class="socios-conteudo" id="conteudo2">
			<div class="container socios-li">
				<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="padding: 0">
					<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-2.jpg'); height: 202px; background-position: top center; background-size: cover"></div>
				</div>
				<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="padding: 0">
					<p class="description">Inscrito na OAB/SC sob o n. 12.826, na OAB/PR sob o n. 37.600 e na OAB/SP sob o n. 382.496, formou-se em Direito pela FURB - Fundação Universidade Regional de Blumenau.</p>
				</div>
			</div>
		</div>

		<div class="hidden-lg hidden-md hidden-sm col-xs-12 menu-mobile-socios-li" onClick="act(3)">
			<div class="container socios-li-principal">
				<p class="session-title display-filiais uppercase">LEONARDO XAVIER ROUSSENQ&nbsp;&nbsp;<svg class="svg3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="12px" height="12px" viewBox="0 0 306 306" fill="#242367" style="enable-background:new 0 0 306 306;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></p>
			</div>
		</div>

		<div class="socios-conteudo" id="conteudo3">
			<div class="container socios-li">
				<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="padding: 0">
					<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-3.jpg'); height: 202px; background-position: top center; background-size: cover"></div>
				</div>
				<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="padding: 0">
					<p class="description">Inscrito na OAB/PR sob o n. 25.661, na OAB/SC sob o n. 45.745, na OAB/SP sob o n. 382.491 e na OAB/MT sob o n. 22.385/A, formou-se em Direito pela Pontifícia Universidade Católica do Paraná.</p>
				</div>
			</div>
		</div>

		<div class="hidden-lg hidden-md hidden-sm col-xs-12 menu-mobile-socios-li" onClick="act(4)">
			<div class="container socios-li-principal">
				<p class="session-title display-filiais uppercase">Maria angela keiko taira&nbsp;&nbsp;<svg class="svg4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="12px" height="12px" viewBox="0 0 306 306" fill="#242367" style="enable-background:new 0 0 306 306;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></p>
			</div>
		</div>

		<div class="socios-conteudo" id="conteudo4">
			<div class="container socios-li">
				<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="padding: 0">
					<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-4.jpg'); height: 202px; background-position: top center; background-size: cover"></div>
				</div>
				<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="padding: 0">
					<p class="description">Inscrita na OAB/PR sob o n. 34.433, na OAB/SC sob o n. 45.743 e na OAB/SP sob o n. 194.240, formou-se em Direito pela Faculdade de Direito da Alta Paulista.</p>
				</div>
			</div>
		</div>

		<div class="hidden-lg hidden-md hidden-sm col-xs-12 menu-mobile-socios-li" onClick="act(5)">
			<div class="container socios-li-principal">
				<p class="session-title display-filiais uppercase">Felipe sá ferreira&nbsp;&nbsp;<svg class="svg5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="12px" height="12px" viewBox="0 0 306 306" fill="#242367" style="enable-background:new 0 0 306 306;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></p>
			</div>
		</div>

		<div class="socios-conteudo" id="conteudo5">
			<div class="container socios-li">
				<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="padding: 0">
					<div class="imagem" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-5.jpg'); height: 202px; background-position: top center; background-size: cover"></div>
				</div>
				<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="padding: 0">
					<p class="description">Inscrito na OAB/SC sob o n. 17.611, na OAB/PR sob o n. 60.109 e na OAB/SP sob o n. 382.482, formou-se em Direito pela FURB - Fundação Universidade Regional de Blumenau.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(".socios-conteudo").css("display", "none");
	$(".session-title .svg1").addClass('rotate');
	$(".socios-conteudo#conteudo1").css("display", "block");
	function act(value) {
		if($(".socios-conteudo#conteudo"+value+"").is(":visible")) {
			$(".session-title .svg"+value+"").removeClass('rotate');
			$(".socios-conteudo#conteudo"+value+"").css("display", "none");
		} else {
			$(".socios-conteudo#conteudo"+value+"").css("display", "block");
			$(".session-title .svg"+value+"").addClass('rotate');
		}
	}
</script>

<div class="session-atuacao-mobile hidden-lg hidden-md hidden-sm" style="background-color: #242367">
	<div class="container bloco-chamada-quem-somos">
		<p class="bread-crumb-title">quem somos</p>
		<h3 class="session-title">Áreas de atuação</h3>
		<p class="session-content">O escritório tem especialidade nas áreas de direito bancário, fomento mercantil e empresarial, tanto na recuperação de créditos, quanto na defesa de ações cíveis.</p>

		<a href="<?= RAIZSITE ?>/areas-de-atuacao" style="color: #f5f5f5" class="session-link">saiba mais&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="9px" height="9px" viewBox="0 0 306 306" fill="#f5f5f5" style="enable-background:new 0 0 306 306; margin-bottom: -1px;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></a>
	</div>
</div>
<div class="session-premios-mobile hidden-lg hidden-md hidden-sm" style="background-color: #f5f5f5">
	<div class="container bloco-chamada-premios">
		<h3 class="session-title">Prêmios</h3>
		<p class="session-content">Escritório e Sócios multi-premiados e reconhecidos por diversas instituições de grande credibilidade e renome no mercado.</p>

		<a href="<?= RAIZSITE ?>/premios" style="color: #16197D" class="session-link">saiba mais&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="9px" height="9px" viewBox="0 0 306 306" fill="#242367" style="enable-background:new 0 0 306 306; margin-bottom: -1px;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></a>
	</div>
</div>