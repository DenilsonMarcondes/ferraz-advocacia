<style type="text/css">
	/*
		================
		ESTRUTURA STYLES
		================
	*/
	.session-conteudo { background-color: #f5f5f5 }
	.session-conteudo .line { -webkit-transition: all 0.6s ease-out; transition: all 0.6s ease-out }
	.session-conteudo .line { width: 0%; top: 9px }

	.session-socios { background-color: #242367 }
	@media screen and (min-width: 768px) {
		.navbar-default { background-color: #ffffff; border: none }
		.navbar-default.transparent { background-color: transparent; border: none }

		.navbar-default .navbar-nav>li>a { font-size: 14px }
		.navbar-default .navbar-nav>li>a { color: #242367 }
		.navbar-default.transparent .navbar-nav>li>a { color: #ffffff }

		.navbar-default .navbar-nav>li>a:focus,
		.navbar-default .navbar-nav>li>a:hover,
		.navbar-default .navbar-nav>li>a.link-active { /*font-weight: 700;*/ border-bottom: 1px solid #242367; color: #242367 }

		.navbar-default.transparent .navbar-nav>li>a:focus,
		.navbar-default.transparent .navbar-nav>li>a:hover,
		.navbar-default.transparent .navbar-nav>li>a.link-active { /*font-weight: 700;*/ border-bottom: 1px solid #ffffff; color: #ffffff }

		.session-conteudo { padding-top: 100px; padding-bottom: 100px }
		.session-conteudo h3 { margin-top: 37px; width: 268px }
		.session-conteudo p.session-content-alternative { margin-top: 15px }

		.session-socios p.session-content { margin-top: 40px }
		.session-socios .col-conteudo { height: 519px; position: relative; }
		.session-socios .col-conteudo .position-center-vertical { width: 340px }
	}
	@media screen and (max-width: 768px) {
		.session-conteudo { padding-top: 63px; padding-bottom: 63px }
		.session-conteudo h3 { margin-top: 15px; width: 191px }
		.session-conteudo p.session-content-alternative { margin-top: 21px }

		.session-socios p.session-content { margin-top: 20px }
		.session-socios .col-conteudo { height: 441px; position: relative; }
	}
</style>

<div class="parallax-topo" style="background: url('<?= RAIZSITE ?>/img/marcacao-2.jpg'); background-position: center center; background-size: cover; background-attachment: fixed">
	<div class="parallax-filter" style="background: #242367; width: 100%; opacity: 0.5"></div>
</div>

<div class="session-conteudo">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: #16197D">
				<div class="line hidden-xs"></div>

				<p class="bread-crumb-title hidden-lg hidden-md hidden-sm" style="color: #A9A9A9">nossa estrutura</p>
				<h3 class="session-title">Estrutura Organizacional</h3>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: #16197D">
				<p class="bread-crumb-title hidden-xs" style="color: #A9A9A9">nossa estrutura</p>
				<p class="session-content-alternative">A estrutura organizacional do escritório permite a prestação de serviço personalizado a cada um dos clientes, bem como às diversas espécies de carteiras de processos/contratos.</p>
			</div>
	    </div>
	</div>
</div>
<script type="text/javascript">
	$(document).scroll(function() {
		if ($(this).scrollTop() > 150) {
			$(".session-conteudo .line").css('width', '94%');

			setTimeout(function(){
				$(".bread-crumb-title").css({
					'margin-left': '0',
					'opacity': '9'
				});
			}, 800);
		}
	});
</script>

<div class="session-socios">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-conteudo">
				<div class="position-center-vertical" style="color: #ffffff">
					<p class="session-content-alternative">Os advogados-sócios e seniores atuam como Diretores, capitaneando as equipes, também divididas por clientes e especialidades.</p>
					<p class="session-content">O conselho diretor é formado pelos sócios, que decidem a estratégia de todo escritório. Cada filial possui um advogado gestor responsável que, juntamente com sua equipe, está preparado para atender todas as demandas dos nossos clientes localmente.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">&nbsp;</div>
		</div>
	</div>
</div>

<style type="text/css">
	@media screen and (min-width: 768px) {
		/*
			=============
			SLIDER STYLES
			=============
		*/
		.row-slider .col-slider { margin-top: -519px; float: right; padding: 0 }

		.tarja-branca .chamada { -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); -ms-transform: rotate(-90deg); -o-transform: rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); width: 260px }
		.tarja-branca .chamada { position: absolute; left: -75px; top: 250px }
		.tarja-branca .chamada p { font-weight: 600; margin: 0; }
		.tarja-branca .chamada p:first-child { font-size: 14px; color: #b1b1b1 }
		.tarja-branca .chamada p:nth-child(2) { font-size: 30px; color: #242367 }

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
		<div class="tarja-branca position-center" style="height: 519px; width: 113px; background-color: #f5f5f5; z-index: 2">
			<div class="chamada">
				<p>quem somos</p>
				<p class="owl-change-text"><a style="color: #242367" href="<?= RAIZSITE ?>/quem-somos/#equipe">Sócios-titulares</a></p>
			</div>
		</div>
		<div class="owl-carousel owl-matrizes owl-theme">
			<div class="item">
				<a data-fancybox="socios-titulares" href="<?= RAIZSITE ?>/img/marcacao-socio-titular-1.jpg" data-caption="ALEXANDRE NELSON FERRAZ">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-1.jpg'); height: 519px; background-size: cover; background-position: center center"></div>
				</a>
				<a data-fancybox="socios-titulares" href="<?= RAIZSITE ?>/img/marcacao-socio-titular-2.jpg" data-caption="MÁRCIO RUBENS PASSOLD">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-2.jpg'); height: 519px; background-size: cover; background-position: center center"></div>
				</a>
			</div>
			<div class="item">
				<a data-fancybox="socios-titulares" href="<?= RAIZSITE ?>/img/marcacao-socio-titular-3.jpg" data-caption="LEONARDO XAVIER ROUSSENQ">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-3.jpg'); height: 519px; background-size: cover; background-position: center center"></div>
				</a>
				<a data-fancybox="socios-titulares" href="<?= RAIZSITE ?>/img/marcacao-socio-titular-4.jpg" data-caption="MARIA ANGELA KEIKO TAIRA">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-4.jpg'); height: 519px; background-size: cover; background-position: center center"></div>
				</a>
			</div>
			<div class="item">
				<a data-fancybox="socios-titulares" href="<?= RAIZSITE ?>/img/marcacao-socio-titular-5.jpg" data-caption="FELIPE SÁ FERREIRA">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-socio-titular-5.jpg'); height: 519px; background-size: cover; background-position: center center"></div>
				</a>
				<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: #242367; height: 519px"></div>
			</div>
		</div>
		<div class="buttons position-center">
			<button type="button" class="btn btn-carousel btn-owl-prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve" width="21px" height="21px"><g><path d="M26,0C11.663,0,0,11.663,0,26s11.663,26,26,26s26-11.663,26-26S40.337,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" fill="#b1b1b1"/><polygon points="32,36.783 32,15.438 14.043,25.806  " fill="#b1b1b1"/></g></svg></button>

			<button type="button" class="btn btn-carousel btn-owl-next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve" width="21px" height="21px"><g><path d="M26,0C11.663,0,0,11.663,0,26s11.663,26,26,26s26-11.663,26-26S40.337,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" fill="#b1b1b1"/><polygon points="32,36.783 32,15.438 14.043,25.806  " fill="#b1b1b1"/></g></svg></button>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.owl-matrizes').owlCarousel({
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
	.row-socios-mobile { padding-top: 51px; padding-bottom: 51px }

	.row-socios-mobile h3,
	.row-socios-mobile p,
	.row-socios-mobile a.session-link { color: #242367 }

	.row-socios-mobile p { margin-top: 20px; margin-bottom: 18px }
</style>
<div class="hidden-lg hidden-md hidden-sm" style="background-color: #f5f5f5">
	<div class="container">
		<div class="row row-socios-mobile">
			<div class="hidden-lg hidden-md hidden-sm col-xs-12">
				<h3 class="session-title">O escritório tem como sócios-titulares</h3>
				<p class="session-content">advogados especializados em<br>diversas áreas.</p>
				<a href="<?= RAIZSITE ?>/quem-somos/#equipe" class="session-link">saiba mais&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="9px" height="9px" viewBox="0 0 306 306" fill="#242367" style="enable-background:new 0 0 306 306; margin-bottom: -1px;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></a>
			</div>
		</div>
	</div>
</div>

<?php include COMPONENTES."estrutura-fisica.php" ?>

<script type="text/javascript">
	$(".navbar-default").addClass("transparent");
	$(".img-brand").attr('src', '<?= RAIZSITE ?>/img/logo-branca.png');
	$(document).scroll(function() {
		if ($(this).scrollTop() < 290) {
			$(".navbar-default").addClass("transparent");
			$(".img-brand").attr('src', '<?= RAIZSITE ?>/img/logo-branca.png');
		} else {
			$(".navbar-default").removeClass("transparent");
			$(".img-brand").attr('src', '<?= RAIZSITE ?>/img/ferraz-advocacia.png');
		}
	});
</script>