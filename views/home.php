<style type="text/css">
	.owl-home .owl-dots { position: absolute; left: 50px; margin-top: -59px !important }
	.owl-theme .owl-dots .owl-dot span { height: 2px; width: 100px }
	.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span { background: #242367 !important; }

	@media screen and (min-width: 768px) {
		.navbar-default { background-color: #ffffff; border: none }
		.navbar-default.transparent { background-color: transparent; border: none }
		.navbar-default.cinza { background-color: #f5f5f5; border: none; -webkit-transition: 3s; transition: 3s }
		.navbar-default.azul { background-color: #242367; border: none; -webkit-transition: 3s; transition: 3s }

		.navbar-default .navbar-nav>li>a { font-size: 14px }
		.navbar-default .navbar-nav>li>a { color: #242367 }
		.navbar-default.transparent .navbar-nav>li>a { color: #ffffff }
		.navbar-default.cinza .navbar-nav>li>a { color: #242367; -webkit-transition: 3s; transition: 3s }
		.navbar-default.azul .navbar-nav>li>a { color: #ffffff; -webkit-transition: 3s; transition: 3s }

		.navbar-default .navbar-nav>li>a:focus,
		.navbar-default .navbar-nav>li>a:hover,
		.navbar-default .navbar-nav>li>a.link-active { /*font-weight: 700;*/ border-bottom: 1px solid #242367; color: #242367 }

		a.btn { border-radius: 0; width: 225px }
		a.btn.focus,
		a.btn:focus,
		a.btn:hover { color: #ffffff; border-bottom-color: #ffffff; box-shadow: none }
		a.url { font-size: 14px; font-weight: 500; padding: 12px 0px; text-align: left; color: #9b9b9b; border-bottom: 1px solid #9b9b9b }

		.row-carousel-hash { position: relative; margin-top: -100px; z-index: 2 }

		.owl-carousel-text p { font-family: 'Roboto', sans-serif; color: #ffffff; line-height: 0.97; font-size: 36px; text-transform: uppercase }
		.owl-carousel-text p:first-child { font-weight: 200 }
		.owl-carousel-text p:nth-child(2) { font-weight: 600 }

		a.btn-carousel { border-radius: 0; background-color: #242367; color: #ffffff; text-transform: uppercase; width: 113px; padding: 10px 20px; margin-top: 20px; -webkit-transition: 0.5s; transition: 0.5s }
		a.btn-carousel:hover { background-color: transparent; border-color: #ffffff; -webkit-transition: 0.5s; transition: 0.5s }
	}
</style>

<div class="hidden-xs" style="position: relative">
	<div class="position-center-vertical" style="right: 50px; z-index: 999">
		<div class="slider-vertical-line hidden-xs" style="height: 230px; border: 0.5px solid #ffffff; width: 0.5px; margin-left: 11px"></div>
		<span class="hidden-xs" id="info" style="color: #ffffff; font-size: 14px"></span>
	</div>

	<div class="owl-carousel owl-home owl-theme">
	    <div class="item item-home" data-hash="o-escritorio" style="background: url('<?= RAIZSITE ?>/img/marcacao-navbar-2.jpg'); background-position: center center; background-size: cover; height: 644px">

	    	<div class="parallax-filter" style="background: #242367; width: 100%; opacity: 0.5; height: 644px; position: absolute; z-index: 2"></div>

	    	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 owl-carousel-text" style="position: relative; height: 644px; z-index: 3">
	    				<div class="position-center-vertical">
	    					<p>Desde 2001 com</p>
	    					<p>ótimos resultados</p>

	    					<a role="button" class="btn btn-carousel" href="<?= RAIZSITE ?>/quem-somos">Conhecer</a>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <div class="item item-home" data-hash="o-que-fazemos" style="background: url('<?= RAIZSITE ?>/img/marcacao-navbar-1.jpg'); background-position: center center; background-size: cover; height: 644px">

	    	<div class="parallax-filter" style="background: #242367; width: 100%; opacity: 0.5; height: 644px; position: absolute; z-index: 2"></div>

	    	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 owl-carousel-text" style="position: relative; height: 644px; z-index: 3">
	    				<div class="position-center-vertical">
	    					<p>Desde 2001 com</p>
	    					<p>ótimos resultados</p>

	    					<a role="button" class="btn btn-carousel" href="<?= RAIZSITE ?>/quem-somos">Conhecer</a>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <div class="item item-home" data-hash="estrutura-organizacional" style="background: url('<?= RAIZSITE ?>/img/marcacao-2.jpg'); background-position: center center; background-size: cover; height: 644px">

	    	<div class="parallax-filter" style="background: #242367; width: 100%; opacity: 0.5; height: 644px; position: absolute; z-index: 2"></div>

	    	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 owl-carousel-text" style="position: relative; height: 644px; z-index: 3">
	    				<div class="position-center-vertical">
	    					<p>Desde 2001 com</p>
	    					<p>ótimos resultados</p>

	    					<a role="button" class="btn btn-carousel" href="<?= RAIZSITE ?>/quem-somos">Conhecer</a>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
</div>

<div class="container">
	<div class="row row-carousel-hash">
		<div class="col-lg-3 col-md-3 col-sm-3">
			<a class="btn url" data-name="o-escritorio" href="#o-escritorio">o escritório</a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3">
			<a class="btn url" data-name="o-que-fazemos" href="#o-que-fazemos">o que fazemos</a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3">
			<a class="btn url" data-name="estrutura-organizacional" href="#estrutura-organizacional">estrutura organizacional</a>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.owl-home').on('initialized.owl.carousel changed.owl.carousel', function(e) {
			if (!e.namespace) return
			var carousel = e.relatedTarget
			$('#info').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length)
		}).owlCarousel({
			items:1,
		    margin:10,
		    autoplay:true,
    		autoplayTimeout:10000,
    		loop:true,
    		dots:false,
    		URLhashListener:true
		})
	});
</script>

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
			=======
			EFFECTS
			=======
		*/
		.row-historia.after-scrolled { background-color: #f5f5f5; -webkit-transition: 3s; transition: 3s }

		.row-historia .historia-content { height: 634px; position: relative }
		.row-historia h3.session-title { margin-top: 24px }
		.row-historia p.session-content { margin-top: 32px; margin-bottom: 32px }

		/*
			=============
			SLIDER STYLES
			=============
		*/
		.row-slider .col-slider { margin-top: -634px; float: right; padding: 0 }

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

	@media screen and (min-width: 992px) {
		.row-historia h3.session-title { width: 268px }
		.row-historia p.session-content { width: 362px }
	}

	@media screen and (max-width: 767px) {
		.row-historia { background-color: #f5f5f5; -webkit-transition: 3s; transition: 3s }

		.row-historia .historia-content { height: 515px; position: relative }
		.row-historia .historia-content h3.session-title { margin-top: 14px }
		.row-historia .historia-content p.session-content { margin-top: 20px; margin-bottom: 20px }
		.row-historia .historia-content h3.session-title { width: 191px; }
		.row-historia .historia-content p.session-content { width: 251px; }
		.row-historia { margin: 0 !important; padding: 0 !important }
	}

	@media screen and (min-width: 768px) and (max-width: 991px) {
		.row-historia h3.session-title { width: 268px }
		.row-historia p.session-content { width: 305px }
	}
</style>
<div class="row-historia">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 historia-content">
				<div class="position-center-vertical">
					<p class="bread-crumb-title">o histórico</p>
					<h3 class="session-title">Ferraz | Cicarelli & Passold Advogados Associados</h3>
					<p class="session-content">Fundado em 2001, na cidade de Curitiba, Ferraz | Cicarelli & Passold Advogados Associados é um escritório de advocacia que está presente em três estados: Paraná, Santa Catarina e São Paulo. Além disso, conta com parceiros éticos e de confi ança em praticamente todas as regiões do Brasil, sempre priorizando a qualidade dos serviços e resultados aos clientes.</p>
					<a href="<?= RAIZSITE ?>/quem-somos" class="session-link">saiba mais&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="9px" height="9px" viewBox="0 0 306 306" fill="#242367" style="enable-background:new 0 0 306 306; margin-bottom: -1px;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">&nbsp;</div>
		</div>
	</div>
</div>
<div class="row-slider hidden-xs">
	<div class="col-lg-6 col-md-6 col-sm-6 col-slider hidden-xs">
		<div class="tarja-branca position-center" style="height: 634px; width: 113px; background-color: #f5f5f5; z-index: 2">
			<div class="chamada">
				<p>estrutura física</p>
				<p class="owl-change-text">Matriz Curitiba</p>
			</div>
		</div>
		<div class="owl-carousel owl-matrizes owl-theme">
			<div class="item" data-text="Filial Maringá">
				<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-matriz-5.jpg'); height: 634px; background-size: cover; background-position: center center"></div>
			</div>
			<div class="item" data-text="Filial Blumenau">
				<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-matriz-1.jpg'); height: 634px; background-size: cover; background-position: center center"></div>
			</div>
			<div class="item" data-text="Filial Cascavel">
				<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-matriz-2.jpg'); height: 634px; background-size: cover; background-position: center center"></div>
			</div>
			<div class="item" data-text="Filial São Paulo">
				<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-matriz-3.jpg'); height: 634px; background-size: cover; background-position: center center"></div>
			</div>
			<div class="item" data-text="Filial Curitiba">
				<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-matriz-4.jpg'); height: 634px; background-size: cover; background-position: center center"></div>
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
		$('.owl-matrizes').on('changed.owl.carousel', function(e) {
			var owlText = $(".owl-matrizes .owl-item.active .item").attr("data-text");
			$(".owl-change-text").html(owlText);
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
	/*
		=======
		EFFECTS
		=======
	*/
	.session-atuacao-destaques { -webkit-transition: 3s; transition: 3s }
	@media screen and (min-width: 768px) {
		.session-atuacao-destaques { background-color: #ffffff }
		.session-atuacao-destaques.after-scrolled { background-color: #242367; -webkit-transition: 3s; transition: 3s }

		.session-atuacao-destaques p.bread-crumb-title { color: #242367 }
		.session-atuacao-destaques.after-scrolled p.bread-crumb-title { color: #b1b1b1 }

		.session-atuacao-destaques .atuacao-content .content h3.session-title { color: #242367 }
		.session-atuacao-destaques.after-scrolled .atuacao-content .content h3.session-title { color: #f5f5f5 }

		.session-atuacao-destaques .atuacao-content .content p.session-content { color: #000000 }
		.session-atuacao-destaques.after-scrolled .atuacao-content .content p.session-content { color: #f5f5f5 }

		.session-atuacao-destaques .atuacao-content .content a:hover.session-link { color: #000000 }
		.session-atuacao-destaques.after-scrolled .atuacao-content .content a:hover.session-link { color: #f5f5f5 }
	}
</style>
<div class="session-atuacao-destaques hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 atuacao-content">
				<div class="content position-center-vertical">
					<p class="bread-crumb-title">o que fazemos</p>
					<h3 class="session-title">Áreas de atuação</h3>
					<p class="session-content">O escritório tem especialidade nas áreas de direito bancário, fomento mercantil e empresarial, tanto na recuperação de créditos, quanto na defesa de ações cíveis.</p>
					<a href="<?= RAIZSITE ?>/areas-de-atuacao" class="session-link hidden-xs">saiba mais&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="9px" height="9px" viewBox="0 0 306 306" fill="#ffffff" style="enable-background:new 0 0 306 306; margin-bottom: -1px;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero" style="position: relative; z-index: 1">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 atuacao-item">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 611.994 611.994" style="enable-background:new 0 0 611.994 611.994;" xml:space="preserve"><g><g><g><path d="M306.032,611.994v-14.703l-0.023,14.703C137.29,611.994,0.012,474.722,0,305.997C0,137.272,137.272,0,305.997,0     c168.729,0,305.997,137.272,305.997,305.997C612,474.722,474.745,611.994,306.032,611.994z M305.997,29.406     c-152.51,0-276.591,124.081-276.591,276.591c0.012,152.511,124.099,276.591,276.603,276.591h0.023     c152.499,0,276.556-124.08,276.556-276.591C582.594,153.487,458.514,29.406,305.997,29.406z" fill="#242367"/><g><path d="M306.009,481.303c-55.595,0-100.833-42.621-100.833-95.004c0-8.122,6.581-14.703,14.703-14.703      s14.703,6.581,14.703,14.703c0,36.169,32.041,65.6,71.427,65.6s71.415-29.431,71.415-65.6c0-36.17-32.035-65.599-71.415-65.599      c-55.595,0-100.833-42.621-100.833-95.004c0-52.384,45.238-95.004,100.833-95.004c29.854,0,57.988,12.351,77.196,33.887      c5.404,6.063,4.869,15.355-1.188,20.76c-6.058,5.411-15.354,4.87-20.76-1.188c-13.627-15.285-33.764-24.054-55.248-24.054      c-39.38,0-71.427,29.423-71.427,65.599c0,36.169,32.041,65.598,71.427,65.598c55.596,0,100.821,42.621,100.821,95.005      C406.836,438.682,361.604,481.303,306.009,481.303z" fill="#242367"/><path d="M303.315,525.235c-8.122,0-14.703-6.581-14.703-14.703v-409.07c0-8.122,6.581-14.703,14.703-14.703      c8.123,0,14.703,6.581,14.703,14.703v409.07C318.019,518.654,311.438,525.235,303.315,525.235z" fill="#242367"/></g></g></g></g></svg>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item position-center-center">
						<p>Recuperação de créditos</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 atuacao-item">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 496.941 496.941" style="enable-background:new 0 0 496.941 496.941;" xml:space="preserve" width="28px" height="28px"><g><g><g><path d="M276.329,2.259C274.824,0.753,272.565,0,271.059,0H36.894C16.565,0,0,16.565,0,37.647v421.647     c0,20.329,16.565,37.647,36.894,37.647h330.541c20.329,0,36.894-16.565,36.894-37.647V146.824c0-1.506-0.753-3.765-2.259-5.271     L276.329,2.259z M278.588,27.106l101.647,112.188H278.588V27.106z M390.023,459.294c0,12.047-9.788,22.588-21.835,22.588H36.894     c-12.047,0-21.835-9.788-21.835-22.588V37.647c0-12.047,9.788-22.588,21.835-22.588h226.635v131.765     c0,4.518,3.012,7.529,7.529,7.529h118.965V459.294z" fill="#242367"/><path d="M70.024,206.306h103.906c4.518,0,7.529-3.012,7.529-7.529v-27.859c0-23.341-18.823-42.165-42.165-42.165h-12.8     c18.824-2.259,33.882-18.824,33.882-38.4c0-21.082-17.318-38.4-38.4-38.4c-21.082,0-38.4,17.318-38.4,38.4     c0,19.576,15.059,35.388,33.882,38.4h-12.8c-23.341,0-42.165,18.824-42.165,42.165v27.859     C62.494,203.294,66.259,206.306,70.024,206.306z M98.635,91.106c0-12.8,10.541-23.341,23.341-23.341     c12.8,0,23.341,10.541,23.341,23.341c0,12.8-10.541,23.341-23.341,23.341C109.176,114.447,98.635,103.906,98.635,91.106z      M77.553,170.918c0-15.059,12.047-27.106,27.106-27.106h34.635c15.059,0,27.106,12.047,27.106,27.106v20.329H77.553V170.918z" fill="#242367"/><path d="M66.259,265.035h112.188c4.518,0,7.529-3.012,7.529-7.529s-3.012-7.529-7.529-7.529H66.259     c-4.518,0-7.529,3.012-7.529,7.529S61.741,265.035,66.259,265.035z" fill="#242367"/><path d="M60.988,314.729c0,4.518,3.012,7.529,7.529,7.529H332.8c4.518,0,7.529-3.012,7.529-7.529     c0-4.518-3.012-7.529-7.529-7.529H68.518C64,307.2,60.988,310.212,60.988,314.729z" fill="#242367"/><path d="M334.306,360.659H70.024c-4.518,0-7.529,3.012-7.529,7.529s3.012,7.529,7.529,7.529h264.282     c4.518,0,7.529-3.012,7.529-7.529S338.071,360.659,334.306,360.659z" fill="#242367"/><path d="M330.541,414.871H67.012c-4.518,0-7.529,3.012-7.529,7.529s3.012,7.529,7.529,7.529h264.282     c4.518,0,7.529-3.012,7.529-7.529S335.059,414.871,330.541,414.871z" fill="#242367"/><path d="M246.965,212.329c-1.506-3.765-6.024-5.271-9.788-3.765c-3.765,1.506-5.271,6.024-3.765,9.788l20.329,42.165     c0.753,2.259,3.012,3.765,5.271,4.518c2.259,0.753,4.518,0,6.776-1.506l74.541-66.259c3.012-3.012,3.765-7.529,0.753-10.541     c-3.012-3.012-7.529-3.012-10.541-0.753l-67.012,59.482L246.965,212.329z" fill="#242367"/><path d="M457.788,115.2c-21.835,0-39.153,17.318-39.153,39.153v238.682v2.259l31.624,96.376c0.753,3.012,3.765,5.271,7.529,5.271     s6.024-2.259,7.529-5.271l31.624-96.376v-2.259V154.353C496.941,132.518,479.623,115.2,457.788,115.2z M457.788,465.318     l-21.082-64.753h42.165L457.788,465.318z M481.882,385.506h-48.188V195.012h48.188V385.506z M481.882,179.953h-48.188v-25.6     c0-13.553,10.541-24.094,24.094-24.094c13.553,0,24.094,10.541,24.094,24.094V179.953z" fill="#242367"/></g></g></g></g></svg>
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item position-center-center">
						<p>Negociação</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 atuacao-item">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 463 463" style="enable-background:new 0 0 463 463;" xml:space="preserve" width="28px" height="28px"><g><path d="M439.5,382.51H431v-8.5c0-12.958-10.542-23.5-23.5-23.5h-80c-12.958,0-23.5,10.542-23.5,23.5v8.5h-8.5   c-12.958,0-23.5,10.542-23.5,23.5v16c0,4.142,3.358,7.5,7.5,7.5h176c4.142,0,7.5-3.358,7.5-7.5v-16   C463,393.052,452.458,382.51,439.5,382.51z M319,374.01c0-4.687,3.813-8.5,8.5-8.5h80c4.687,0,8.5,3.813,8.5,8.5v8.5h-97V374.01z    M448,414.51H287v-8.5c0-4.687,3.813-8.5,8.5-8.5h144c4.687,0,8.5,3.813,8.5,8.5V414.51z" fill="#242367"/><path d="M287.001,221.039l-0.354,0.354c-9.163,9.163-9.163,24.071,0,33.233c4.438,4.438,10.34,6.883,16.617,6.883   c6.277,0,12.178-2.445,16.617-6.883l45.255-45.254c4.438-4.438,6.883-10.34,6.883-16.617s-2.445-12.179-6.883-16.617   c-4.438-4.438-10.34-6.883-16.617-6.883c-6.277,0-12.179,2.445-16.617,6.883l-0.353,0.354l-17.396-17.397   c1.497-5.241,0.192-11.121-3.928-15.241l-48.569-48.569c-4.12-4.12-10-5.425-15.241-3.927l-17.397-17.396l0.353-0.354   c4.438-4.438,6.883-10.34,6.883-16.617c0-6.277-2.445-12.178-6.883-16.617c-4.438-4.438-10.34-6.883-16.617-6.883   s-12.179,2.445-16.617,6.883l-45.254,45.255c-4.438,4.438-6.883,10.34-6.883,16.617c0,6.277,2.445,12.179,6.883,16.617   c4.581,4.582,10.599,6.872,16.617,6.872s12.036-2.291,16.617-6.872l0.354-0.354l17.392,17.392   c-0.394,1.377-0.607,2.814-0.607,4.286c0,4.141,1.612,8.033,4.54,10.96l2.01,2.01l-15.549,15.55   c-4.962,4.962-7.213,11.607-6.801,18.114L6.883,365.393C2.445,369.831,0,375.732,0,382.01s2.445,12.179,6.883,16.617   c4.438,4.438,10.34,6.883,16.617,6.883s12.179-2.445,16.617-6.883l178.572-178.572c0.499,0.031,0.998,0.071,1.497,0.071   c6.017,0,12.036-2.291,16.617-6.872l15.55-15.549l2.01,2.01c2.928,2.928,6.82,4.541,10.96,4.541c1.472,0,2.909-0.213,4.286-0.607   L287.001,221.039z M348.519,184.259c2.177,0,4.354,0.829,6.011,2.486c1.605,1.605,2.49,3.739,2.49,6.01s-0.884,4.405-2.49,6.011   l-45.255,45.254c-3.315,3.315-8.707,3.314-12.021,0s-3.314-8.707,0-12.021l45.255-45.255   C344.166,185.087,346.342,184.259,348.519,184.259z M297.608,210.433l-16.021-16.021l23.335-23.335l16.021,16.021L297.608,210.433z    M161.49,108.256c-3.314-3.314-3.314-8.707,0-12.021l45.254-45.255c1.605-1.605,3.74-2.49,6.011-2.49s4.405,0.884,6.01,2.49   c3.314,3.314,3.314,8.707,0,12.021l-45.255,45.255C170.196,111.569,164.804,111.569,161.49,108.256z M218.412,84.567l16.021,16.021   l-23.335,23.335l-16.021-16.021L218.412,84.567z M29.51,388.02c-1.605,1.605-3.739,2.49-6.01,2.49s-4.405-0.884-6.01-2.49   c-1.605-1.605-2.49-3.739-2.49-6.01s0.884-4.405,2.49-6.01l174.43-174.431c0.116,0.121,0.216,0.252,0.336,0.372l11.313,11.313   c0.119,0.119,0.25,0.219,0.372,0.336L29.51,388.02z M226.197,202.647c-3.314,3.314-8.706,3.314-12.021,0l-11.313-11.313   c-3.314-3.314-3.314-8.707,0-12.021l15.549-15.55l23.335,23.335L226.197,202.647z M216.401,140.54   c-0.036-0.036-0.146-0.146-0.146-0.353s0.11-0.318,0.146-0.354l33.941-33.941c0.098-0.097,0.226-0.146,0.354-0.146   c0.128,0,0.256,0.049,0.354,0.146l48.568,48.568c0.195,0.195,0.195,0.513,0,0.708l-33.941,33.941   c-0.036,0.036-0.147,0.146-0.354,0.146s-0.317-0.11-0.354-0.146L216.401,140.54z" fill="#242367"/></g></g></g></g></svg>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item position-center-center">
						<p>Cobrança Judicial</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 atuacao-item">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="28px" height="28px"><g><circle cx="35" cy="52" r="1" fill="#242367"/><circle cx="39" cy="52" r="1" fill="#242367"/><circle cx="43" cy="52" r="1" fill="#242367"/><circle cx="33" cy="33" r="1" fill="#242367"/><circle cx="35" cy="22" r="1" fill="#242367"/><circle cx="39" cy="22" r="1" fill="#242367"/><circle cx="37" cy="20" r="1" fill="#242367"/><circle cx="39" cy="18" r="1" fill="#242367"/><circle cx="35" cy="26" r="1" fill="#242367"/><circle cx="33" cy="24" r="1" fill="#242367"/><circle cx="37" cy="24" r="1" fill="#242367"/><circle cx="33" cy="36" r="1" fill="#242367"/><circle cx="33" cy="39" r="1" fill="#242367"/><circle cx="33" cy="42" r="1" fill="#242367"/><circle cx="33" cy="45" r="1" fill="#242367"/><circle cx="33" cy="48" r="1" fill="#242367"/><circle cx="37" cy="50" r="1" fill="#242367"/><circle cx="41" cy="50" r="1" fill="#242367"/><path d="M24,11h-5c-0.552,0-1,0.447-1,1s0.448,1,1,1h5c0.552,0,1-0.447,1-1S24.552,11,24,11z" fill="#242367"/><path d="M24,18H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h10c0.552,0,1-0.447,1-1S24.552,18,24,18z" fill="#242367"/><path d="M24,25H9c-0.552,0-1,0.447-1,1s0.448,1,1,1h15c0.552,0,1-0.447,1-1S24.552,25,24,25z" fill="#242367"/><path d="M24,32H5c-0.552,0-1,0.447-1,1s0.448,1,1,1h19c0.552,0,1-0.447,1-1S24.552,32,24,32z" fill="#242367"/><path d="M24,39H11c-0.552,0-1,0.447-1,1s0.448,1,1,1h13c0.552,0,1-0.447,1-1S24.552,39,24,39z" fill="#242367"/><path d="M24,46h-7c-0.552,0-1,0.447-1,1s0.448,1,1,1h7c0.552,0,1-0.447,1-1S24.552,46,24,46z" fill="#242367"/><path d="M53,54h-5v-6c0-7.591-4.147-14.44-10.714-18C43.853,26.44,48,19.591,48,12V6h5c1.654,0,3-1.346,3-3s-1.346-3-3-3H30   c-0.552,0-1,0.447-1,1s0.448,1,1,1h23c0.551,0,1,0.448,1,1s-0.449,1-1,1h-5H30c-0.552,0-1,0.447-1,1s0.448,1,1,1h16v6   c0,7.491-4.467,14.193-11.381,17.075c-0.001,0-0.001,0-0.002,0.001c0,0-0.001,0.001-0.002,0.001   c-0.011,0.005-0.018,0.014-0.029,0.02c-0.107,0.049-0.208,0.113-0.293,0.198c-0.07,0.07-0.117,0.155-0.162,0.241   c-0.016,0.029-0.041,0.049-0.054,0.08c0,0.001,0,0.002,0,0.002c-0.05,0.121-0.076,0.251-0.076,0.383   c0,0.132,0.026,0.262,0.075,0.382c0,0,0,0.002,0.001,0.003c0.046,0.111,0.114,0.205,0.192,0.289   c0.022,0.023,0.047,0.041,0.071,0.063c0.069,0.062,0.143,0.112,0.225,0.152c0.019,0.009,0.031,0.026,0.051,0.034   C41.531,33.805,46,40.508,46,48v6c0-0.552-0.448-1-1-1s-1,0.448-1,1h-2c0-0.552-0.448-1-1-1s-1,0.448-1,1h-2c0-0.552-0.448-1-1-1   s-1,0.448-1,1h-2c0-0.552-0.448-1-1-1s-1,0.448-1,1h-2c-0.552,0-1,0.447-1,1s0.448,1,1,1h18h5c0.551,0,1,0.448,1,1s-0.449,1-1,1H30   c-0.552,0-1,0.447-1,1s0.448,1,1,1h23c1.654,0,3-1.346,3-3S54.654,54,53,54z" fill="#242367"/></g></g></g></g></svg>
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item position-center-center">
						<p>Solução de litígios</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background-color: #ffffff; position: relative; z-index: 0; height: 410px; float: right; margin-top: -410px"></div>
</div>
<div class="session-atuacao">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 atuacao-item">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve" width="28px" height="28px"><g><g><g><path d="M472,256v-58.52c0-25.744-17.44-48.08-42.416-54.328l-11.952-2.992C431.544,126.904,440,108.256,440,88V72     c0-39.696-32.304-72-72-72s-72,32.304-72,72v16c0,20.256,8.456,38.904,22.376,52.16l-11.952,2.992     C281.44,149.392,264,171.736,264,197.48V256h-32v-58.52c0-25.744-17.44-48.08-42.416-54.328l-11.952-2.992     C191.544,126.904,200,108.256,200,88V72c0-39.696-32.304-72-72-72S56,32.304,56,72v16c0,20.256,8.456,38.904,22.376,52.16     l-11.952,2.992C41.44,149.392,24,171.736,24,197.48V256c-13.232,0-24,10.768-24,24v16c0,13.232,10.768,24,24,24v176h448V320     c13.232,0,24-10.768,24-24v-16C496,266.768,485.232,256,472,256z M425.696,158.672C443.536,163.136,456,179.088,456,197.48V256     h-17.064l-7.016-49.136l-15.832,2.264L422.776,256H408v-8c0-13.232-10.768-24-24-24h-8v-41.472c9.288-3.312,16-12.112,16-22.528     v-4.104c2.864-1.008,5.616-2.24,8.288-3.576L425.696,158.672z M384,240c4.408,0,8,3.592,8,8v8h-48v-8c0-4.408,3.592-8,8-8H384z      M360,160v-16c0-4.408,3.592-8,8-8c4.408,0,8,3.592,8,8v16c0,4.408-3.592,8-8,8C363.592,168,360,164.408,360,160z M312,88V72     c0-30.88,25.12-56,56-56s56,25.12,56,56v16c0,22.176-13.016,41.856-32.584,50.848C389.048,128.088,379.464,120,368,120     s-21.048,8.088-23.416,18.848C325.016,129.856,312,110.168,312,88z M280,197.48c0-18.384,12.464-34.344,30.304-38.808     l25.416-6.352c2.672,1.344,5.416,2.568,8.288,3.584V160c0,10.416,6.712,19.216,16,22.528V224h-8c-13.232,0-24,10.768-24,24v8     h-14.776l6.696-46.864l-15.832-2.264L297.064,256H280V197.48z M185.696,158.672C203.536,163.136,216,179.088,216,197.48V256     h-17.064l-7.016-49.136l-15.832,2.264L182.776,256H168v-8c0-13.232-10.768-24-24-24h-8v-41.472c9.288-3.312,16-12.112,16-22.528     v-4.104c2.864-1.008,5.616-2.24,8.288-3.576L185.696,158.672z M144,240c4.408,0,8,3.592,8,8v8h-48v-8c0-4.408,3.592-8,8-8H144z      M120,160v-16c0-4.408,3.592-8,8-8s8,3.592,8,8v16c0,4.408-3.592,8-8,8S120,164.408,120,160z M72,88V72c0-30.88,25.12-56,56-56     s56,25.12,56,56v16c0,22.176-13.016,41.856-32.584,50.848C149.048,128.088,139.464,120,128,120s-21.048,8.088-23.416,18.848     C85.016,129.856,72,110.168,72,88z M40,197.48c0-18.384,12.464-34.344,30.304-38.808l25.416-6.352     c2.672,1.344,5.416,2.568,8.288,3.584V160c0,10.416,6.712,19.216,16,22.528V224h-8c-13.232,0-24,10.768-24,24v8H73.232     l6.696-46.864l-15.848-2.272L57.064,256H40V197.48z M480,296c0,4.416-3.592,8-8,8h-32v16h16v160H40V320h384v-16H24     c-4.408,0-8-3.584-8-8v-16c0-4.416,3.592-8,8-8h448c4.408,0,8,3.584,8,8V296z" fill="#242367"/><path d="M72,448h352v-96H72V448z M88,368h320v64H88V368z" fill="#242367"/></g></g></g></g></svg>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item position-center-center">
					<p>Equipes especializadas</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 atuacao-item">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 294.843 294.843" style="enable-background:new 0 0 294.843 294.843;" xml:space="preserve" width="22px" height="22px"><g><path d="M199.628,175.487c-0.632-1.977,0.067-4.131,1.741-5.358l37.422-27.455c5.958-4.371,8.333-11.736,6.049-18.763   c-2.283-7.028-8.533-11.591-15.922-11.625l-46.413-0.215c-2.076-0.01-3.908-1.34-4.558-3.311l-14.547-44.076   c-2.316-7.017-8.586-11.55-15.975-11.551h0c-7.389,0-13.66,4.534-15.976,11.55l-6.557,19.859c-1.039,3.146,0.669,6.54,3.816,7.578   c3.147,1.041,6.539-0.669,7.579-3.816l6.557-19.859c1.014-3.073,3.762-3.312,4.581-3.312c0.818,0,3.566,0.239,4.58,3.312   l14.547,44.077c2.27,6.875,8.658,11.516,15.897,11.55l46.413,0.215c3.236,0.015,4.313,2.555,4.565,3.333   c0.253,0.778,0.875,3.465-1.734,5.379l-37.423,27.455c-5.837,4.283-8.277,11.793-6.072,18.689l14.143,44.222   c0.986,3.083-1.097,4.892-1.759,5.372c-0.662,0.481-3.025,1.904-5.652,0.013l-37.677-27.114c-5.878-4.229-13.776-4.229-19.654,0   l-37.684,27.119c-2.627,1.89-4.991,0.468-5.652-0.012c-0.662-0.481-2.745-2.289-1.76-5.371l14.139-44.229   c2.205-6.895-0.236-14.405-6.072-18.688l-37.421-27.455c-2.609-1.914-1.987-4.602-1.734-5.379c0.253-0.778,1.33-3.318,4.565-3.333   l46.416-0.215c3.313-0.016,5.987-2.714,5.972-6.028c-0.016-3.304-2.699-5.972-6-5.972c-0.009,0-0.019,0-0.028,0l-46.416,0.215   c-7.389,0.034-13.639,4.597-15.922,11.625c-2.283,7.028,0.091,14.393,6.048,18.764l37.421,27.455   c1.673,1.228,2.373,3.381,1.741,5.358l-14.138,44.229c-2.25,7.038,0.159,14.392,6.137,18.734c3,2.179,6.442,3.269,9.886,3.269   c3.419,0,6.84-1.075,9.829-3.225l37.683-27.119c1.685-1.213,3.95-1.213,5.635,0l37.677,27.114c5.998,4.316,13.736,4.3,19.715-0.044   c5.979-4.343,8.387-11.697,6.136-18.736L199.628,175.487z" fill="#242367"/><path d="M147.421,0C66.133,0,0,66.133,0,147.421s66.133,147.421,147.421,147.421c3.313,0,6-2.687,6-6s-2.687-6-6-6   C72.75,282.843,12,222.093,12,147.421S72.75,12,147.421,12s135.421,60.75,135.421,135.421c0,46.48-23.42,89.182-62.65,114.228   c-2.793,1.783-3.612,5.493-1.829,8.286c1.783,2.793,5.492,3.612,8.286,1.829c42.7-27.262,68.193-73.745,68.193-124.342   C294.843,66.133,228.71,0,147.421,0z" fill="#242367"/></g></svg>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item position-center-center">
					<p>Solução completas</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 atuacao-item">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="28px" height="28px"><g><g><path d="M367.355,179.878l-6.596-14.419c-2.471-5.409-3.724-11.171-3.724-17.122c0-10.811,4.15-21.024,11.687-28.76    c3.54-3.633,3.516-9.432-0.052-13.036l-29.236-29.533c-3.441-3.477-8.988-3.695-12.69-0.496c-5.63,4.86-12.832,7.538-20.279,7.538    c-7.179,0-13.916-2.378-19.481-6.875c-3.411-2.757-8.284-2.757-11.695,0c-5.566,4.498-12.297,6.875-19.468,6.875    c-7.457,0-14.656-2.675-20.273-7.533c-3.701-3.203-9.252-2.988-12.696,0.491l-29.236,29.533    c-3.569,3.605-3.592,9.403-0.052,13.036c7.528,7.728,11.674,17.942,11.674,28.76c0,5.951-1.253,11.713-3.724,17.123l-6.586,14.424    c-8.129,17.797-8.082,38.124,0.129,55.771c8.304,17.845,23.796,31.064,42.396,36.236c0.98,0.285,2.172,0.558,3.569,0.819    c12.918,2.529,24.614,9.484,32.933,19.583c1.766,2.145,4.398,3.387,7.178,3.389c0.001,0,0.001,0,0.003,0    c2.777,0,5.409-1.24,7.177-3.384c8.335-10.107,20.037-17.063,32.89-19.577c1.425-0.269,2.586-0.533,3.551-0.807    c18.695-5.208,34.175-18.423,42.475-36.258C375.439,218.007,375.486,197.68,367.355,179.878z M350.359,227.804    c-6.003,12.902-17.165,22.449-30.622,26.192c-0.021,0.006-0.043,0.012-0.065,0.019c-0.186,0.053-0.747,0.201-1.982,0.435    c-13.692,2.678-26.364,9.118-36.551,18.448c-10.181-9.329-22.861-15.77-36.622-18.463c-1.194-0.223-1.725-0.368-1.968-0.438    c-13.457-3.742-24.618-13.289-30.622-26.192c-5.998-12.891-6.024-27.164-0.074-40.192l6.586-14.424    c3.586-7.853,5.404-16.214,5.404-24.852c0-12.601-3.88-24.641-11.068-34.706l17.73-17.91c7.608,4.51,16.347,6.932,25.315,6.932    c8.924,0,17.696-2.434,25.316-6.949c7.622,4.515,16.398,6.949,25.328,6.949c8.959,0,17.698-2.424,25.312-6.935l17.731,17.911    c-7.194,10.069-11.079,22.11-11.079,34.707c0,8.637,1.818,16.999,5.407,24.857l6.598,14.421    C356.384,200.64,356.357,214.914,350.359,227.804z" fill="#242367"/></g></g><g><g><path d="M451.402,95.422c0-5.138-4.165-9.303-9.303-9.303c-5.138,0-9.303,4.165-9.303,9.303V392.85h-303.32v-52.469    c0-5.138-4.165-9.303-9.303-9.303c-5.138,0-9.303,4.165-9.303,9.303v53.197c-11.852,1.849-22.818,7.231-31.667,15.619V59.575    c0-19.391,13.545-35.666,31.667-39.892v290.311c0,5.138,4.165,9.303,9.303,9.303c5.138,0,9.303-4.165,9.303-9.303V18.606h303.32    v46.428c0,5.138,4.165,9.303,9.303,9.303c5.138,0,9.303-4.165,9.303-9.303V9.303c0-5.138-4.165-9.303-9.303-9.303H120.173    c-32.85,0-59.575,26.725-59.575,59.575v392.85c0,32.85,26.725,59.575,59.575,59.575h321.926c5.138,0,9.303-4.165,9.303-9.303    L451.402,95.422L451.402,95.422z M432.796,426.907H206.874c-5.138,0-9.303,4.165-9.303,9.303s4.165,9.303,9.303,9.303h225.922    v13.821h-77.078c-5.138,0-9.303,4.165-9.303,9.303s4.165,9.303,9.303,9.303h77.078v15.455H120.173    c-22.591,0-40.969-18.379-40.969-40.969c0-10.945,4.262-21.234,11.994-28.966c7.751-7.74,18.041-12.003,28.975-12.003h312.623    V426.907z" fill="#242367"/></g></g><g><g><path d="M328.43,459.334H118.808c-5.138,0-9.303,4.165-9.303,9.303s4.165,9.303,9.303,9.303H328.43    c5.138,0,9.303-4.165,9.303-9.303S333.569,459.334,328.43,459.334z" fill="#242367"/></g></g><g><g><path d="M355.718,319.101H206.56c-5.138,0-9.303,4.165-9.303,9.303c0,5.138,4.165,9.303,9.303,9.303h149.158    c5.138,0,9.303-4.165,9.303-9.303C365.021,323.267,360.856,319.101,355.718,319.101z" fill="#242367"/></g></g><g><g><path d="M309.046,146.699h-55.814c-5.138,0-9.303,4.165-9.303,9.303c0,5.138,4.165,9.303,9.303,9.303h55.814    c5.138,0,9.303-4.165,9.303-9.303S314.184,146.699,309.046,146.699z" fill="#242367"/></g></g><g><g><path d="M309.046,176.466h-55.814c-5.138,0-9.303,4.165-9.303,9.303c0,5.138,4.165,9.303,9.303,9.303h55.814    c5.138,0,9.303-4.165,9.303-9.303C318.348,180.631,314.184,176.466,309.046,176.466z" fill="#242367"/></g></g></g></g></svg>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item position-center-center">
					<p>Recuperação judicial, EXTRAJUDICIAL e falências</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 atuacao-item">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 418.484 418.484" style="enable-background:new 0 0 418.484 418.484;" xml:space="preserve" width="28px" height="28px"><path d="M82.647,78.685c1.571,31.81,15.046,57.253,37.877,70.817c10.72,6.368,22.735,9.552,34.754,9.552  c12.017,0,24.036-3.185,34.753-9.552c25.499-15.147,39.327-45.113,37.939-82.214c-1.429-38.149-28.365-59.561-57.086-65.854  c-0.318-0.096-3.845-0.67-7.635-1.169c-2.788-0.367-12.428-0.398-17.177,0.193c-2.682,0.333-5.391,0.738-7.332,1.186  c-28.37,6.551-54.742,27.91-56.153,65.644c-0.135,3.599-0.126,7.128,0.022,10.585C82.611,78.146,82.624,78.416,82.647,78.685z   M179.816,132.308c-15.135,8.992-33.941,8.992-49.076,0c-14.185-8.428-23.501-23.612-26.855-43.062  c15.011,0.359,29.87-4.286,42.205-13.428c1.393-1.032,2.744-2.114,4.055-3.245c15.827,13.622,36.611,19.269,56.702,15.63  C203.649,108.153,194.255,123.731,179.816,132.308z M176.434,23.872c16.882,6.633,30.443,20.86,31.524,43.553  c-15.508,4.442-32.181,0.716-44.636-9.904C169.679,47.913,174.129,36.536,176.434,23.872z M102.574,68.037  c1.202-32.142,27.277-47.507,52.707-48.531c0.533,0.021,1.067,0.05,1.601,0.084c-3.019,17.367-10.907,31.422-22.699,40.161  c-9.225,6.835-20.437,10.109-31.646,9.423C102.548,68.794,102.559,68.417,102.574,68.037z M367.749,332.558  c0.072,0.486,0.11,1.175,0.11,1.681c0,5.523-4.477,10.245-9.999,10.245h-17.657c-5.523,0-10.001-4.754-10.001-10.277  c0-0.508,0.038-1.284,0.11-1.772c-4.438-1.022-7.746-5.066-7.746-9.814c0-5.522,4.478-10.138,10-10.138h6.466l0.112-35.107  l-40.902,12.814v108.293h10.578c5.522,0,10,4.477,10,10c0,5.522-4.477,10-10,10h-20.664c-0.048,0-0.095,0-0.143,0  c-0.047,0-0.095,0-0.142,0h-20.671c-5.522,0-10-4.477-10-10c0-5.522,4.477-10,10-10h11.041V296.372l-41,12.678v41.434h6.216  c5.522,0,10,4.472,10,9.995c0,4.749-3.311,8.72-7.749,9.741c0.072,0.486,0.11,0.983,0.11,1.49  c0.001,5.523-4.476,10.001-9.998,10.002l-17.659,0.003c-5.523,0.001-10.001-4.475-10.002-9.997c0-0.509,0.038-1.008,0.111-1.495  c-4.439-1.021-7.75-4.995-7.75-9.744c0-5.522,4.477-9.996,10-9.996h6.721v-48.811c0-4.386,2.847-8.259,7.036-9.554l53.964-16.682  v-15.66c0-5.522,4.478-10,10-10s10,4.478,10,10v9.479l47.822-14.833c0.985-0.318,1.909-0.503,2.965-0.503  c4.946,0,9.15,3.582,9.89,8.472c0.087,0.576,0.123,1.082,0.11,1.648l0.003,48.441h6.466c5.522,0,10,4.615,10,10.138  C375.498,327.371,372.187,331.537,367.749,332.558z M117.536,208.333l28.469,70.59c1.525,3.783,5.195,6.26,9.274,6.26  c4.078,0,7.749-2.478,9.274-6.26l28.52-70.713c13.729,6.816,24.928,17.946,29.705,34.048c1.571,5.294,7.133,8.312,12.432,6.742  c5.295-1.571,8.313-7.137,6.742-12.432c-5.613-18.917-18.271-34.279-36.603-44.424c-16.133-8.928-36.013-13.26-55.987-12.212  c-19.391,1.021-37.926,7.149-52.189,17.254c-16.34,11.574-26.868,27.911-30.449,47.244l-23.57,127.233  c-0.541,2.921,0.245,5.932,2.145,8.216c1.9,2.284,4.718,3.605,7.688,3.605l110.988-0.003c5.523,0,10-4.478,10-10  c0-5.523-4.478-10-10-10l-98.966,0.003L86.39,248.074C90.016,228.49,102.583,215.774,117.536,208.333z M150.415,199.905  c7.773-0.408,15.853,0.169,23.707,1.823l-18.843,46.72l-18.821-46.669C141.194,200.753,145.904,200.143,150.415,199.905z" fill="#242367"/></g></g></g></g></svg>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 item position-center-center">
					<p>Alta complexidade</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="parallax-to-action" style="background: url('<?= RAIZSITE ?>/img/marcacao-1.jpg'); background-position: center center; background-size: cover; background-attachment: fixed; position: relative">
	<div class="parallax-to-action-filter" style="background: #242367; width: 100%; opacity: 0.73"></div>

	<div class="position-center-center">
		<div class="parallax-title">
			<p>O ESCRITÓRIO TEM COMO SÓCIOS-titulares ADVOGADOS ESPECIALIZADOS em diversas áreas</p>
		</div><br>
		<a class="parallax-link" href="<?= RAIZSITE ?>/quem-somos/#equipe">conheça a nossa equipe&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="9px" height="9px" viewBox="0 0 306 306" fill="#ffffff" style="enable-background:new 0 0 306 306;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></a>
	</div>
</div>

<style type="text/css">
	.number { color: #b1b1b1; line-height: 1.2; padding-top: 53px; padding-bottom: 23px; margin: 0; }
	.number.active { color: #242367; line-height: 1.2; padding-top: 0px; padding-bottom: 10px; margin: 0; }
	.item-title { color: #242367; text-transform: uppercase; font-weight: 500; font-family: 'Roboto', sans-serif; margin: 0 }
	.item-content p.item-address { font-weight: 400; line-height: 1.43; color: #4a4a4a; margin: 0; padding-bottom: 10px }
	.item-content p.item-phone { font-weight: 400; line-height: 1.43; color: #4a4a4a; margin: 0 }
	.phones p { margin: 0 }
	.phones p:nth-child(2) { margin-left: 30.5px }

	@media screen and (min-width: 768px) and (max-width: 991px) {
		.item-title { font-size: 18px }
		.item-content p.item-address { font-size: 12px }
		.item-content p.item-phone { font-size: 12px }
		.item-content p.item-phone:nth-child(2) { margin-left: 26.5px }
	}

	@media screen and (min-width: 992px) {
		.item-title { font-size: 20px }
		.item-content p.item-address { font-size: 14px }
		.item-content p.item-phone { font-size: 14px }
		.item-content p.item-phone:nth-child(2) { margin-left: 30.5px }
	}
</style>

<div class="session-estrutura hidden-xs">
	<div class="container">
		<div class="row row-title">
			<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
				<p>onde estamos</p>
				<p class="session-title structure-title">Estrutura física</p>
			</div>
		</div>
		<div class="row row-first">
			<div class="col-lg-9 col-md-9 col-sm-9 hidden-xs" style="padding: 0">
				<div class="col-lg-12 col-md-12 col-sm-12" style="background: url('<?= RAIZSITE ?>/img/marcacao-matriz-5.jpg'); background-size: cover; background-position: top right; height: 192px; padding: 0">
					<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs" style="border-right: 1px solid #242367; height: 100%; padding: 0">&nbsp;</div>
					<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs" style="border-right: 1px solid #242367; height: 100%; padding: 0">&nbsp;</div>
					<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs" style="border-right: 1px solid #242367; height: 100%; padding: 0">&nbsp;</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<p class="session-title number active">01</p>
				<p class="item-title text-center">Matriz curitiba</p>

				<div class="item-content">
					<div class="col-lg-1 col-md-1 hidden-sm padding-zero">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" height="15px" width="15px" viewBox="0 0 485.632 485.632" style="enable-background:new 0 0 485.632 485.632; margin-top: 19px" xml:space="preserve"><g><g><g><path style="fill:#242367;" d="M242.816,0C148.699,0,72.396,76.303,72.396,170.419c0,7.205,0.578,14.227,1.459,21.188     C88.417,324.727,231.75,478.153,231.75,478.153c2.554,2.858,5.016,4.621,7.387,5.897l0.122,0.061l4.773,1.52l4.773-1.52     l0.122-0.061c2.371-1.277,4.834-3.131,7.387-5.897c0,0,141.266-153.7,155.493-286.849c0.851-6.87,1.429-13.832,1.429-20.915     C413.205,76.303,336.933,0,242.816,0z M242.816,280.04c-60.434,0-109.62-49.186-109.62-109.62s49.186-109.62,109.62-109.62     s109.59,49.186,109.59,109.62S303.25,280.04,242.816,280.04z"/></g></g></g></svg>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 padding-zero" style="margin-left: 5px; margin-top: 15px">
						<p class="item-address">Rua Alberto Folloni,<br>541/543, 1o e 2o andares,<br>Juvevê, Curitiba-PR</p>
					</div>

					<div class="col-lg-1 col-md-1 hidden-sm padding-zero">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="13px" width="13px" viewBox="0 0 578.106 578.106" style="enable-background:new 0 0 578.106 578.106; margin-top: 4px" xml:space="preserve"><g><g><path style="fill:#010002;" d="M577.83,456.128c1.225,9.385-1.635,17.545-8.568,24.48l-81.396,80.781 c-3.672,4.08-8.465,7.551-14.381,10.404c-5.916,2.857-11.729,4.693-17.439,5.508c-0.408,0-1.635,0.105-3.676,0.309 c-2.037,0.203-4.689,0.307-7.953,0.307c-7.754,0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584 c-25.096-10.404-53.553-26.012-85.376-46.818c-31.823-20.805-65.688-49.367-101.592-85.68 c-28.56-28.152-52.224-55.08-70.992-80.783c-18.768-25.705-33.864-49.471-45.288-71.299 c-11.425-21.828-19.993-41.616-25.705-59.364S4.59,177.362,2.55,164.51s-2.856-22.95-2.448-30.294 c0.408-7.344,0.612-11.424,0.612-12.24c0.816-5.712,2.652-11.526,5.508-17.442s6.324-10.71,10.404-14.382L98.022,8.756 c5.712-5.712,12.24-8.568,19.584-8.568c5.304,0,9.996,1.53,14.076,4.59s7.548,6.834,10.404,11.322l65.484,124.236 c3.672,6.528,4.692,13.668,3.06,21.42c-1.632,7.752-5.1,14.28-10.404,19.584l-29.988,29.988c-0.816,0.816-1.53,2.142-2.142,3.978 s-0.918,3.366-0.918,4.59c1.632,8.568,5.304,18.36,11.016,29.376c4.896,9.792,12.444,21.726,22.644,35.802 s24.684,30.293,43.452,48.653c18.36,18.77,34.68,33.354,48.96,43.76c14.277,10.4,26.215,18.053,35.803,22.949 c9.588,4.896,16.932,7.854,22.031,8.871l7.648,1.531c0.816,0,2.145-0.307,3.979-0.918c1.836-0.613,3.162-1.326,3.979-2.143 l34.883-35.496c7.348-6.527,15.912-9.791,25.705-9.791c6.938,0,12.443,1.223,16.523,3.672h0.611l118.115,69.768 C571.098,441.238,576.197,447.968,577.83,456.128z"/></g></g></svg>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 padding-zero" style="margin-left: 5px">
						<p class="item-phone">Tel.: 41 3595 9200</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-second">
			<div class="col-lg-3 col-md-3 col-sm-3 col">
				<p class="session-title number">02</p>
				<img src="<?= RAIZSITE ?>/img/marcacao-matriz-1.jpg" class="img-responsive">
				<p class="item-title text-center">Filial Maringá</p>

				<div class="item-content">
					<div class="col-lg-1 col-md-1 hidden-sm padding-zero">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" height="15px" width="15px" viewBox="0 0 485.632 485.632" style="enable-background:new 0 0 485.632 485.632; margin-top: 5px" xml:space="preserve"><g><g><g><path style="fill:#242367;" d="M242.816,0C148.699,0,72.396,76.303,72.396,170.419c0,7.205,0.578,14.227,1.459,21.188     C88.417,324.727,231.75,478.153,231.75,478.153c2.554,2.858,5.016,4.621,7.387,5.897l0.122,0.061l4.773,1.52l4.773-1.52     l0.122-0.061c2.371-1.277,4.834-3.131,7.387-5.897c0,0,141.266-153.7,155.493-286.849c0.851-6.87,1.429-13.832,1.429-20.915     C413.205,76.303,336.933,0,242.816,0z M242.816,280.04c-60.434,0-109.62-49.186-109.62-109.62s49.186-109.62,109.62-109.62     s109.59,49.186,109.59,109.62S303.25,280.04,242.816,280.04z"/></g></g></g></svg>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 padding-zero" style="margin-left: 5px">
						<p class="item-address">Rua Santos Dumont,<br>2314, cj. 601,<br>Centro, Maringá-PR</p>
					</div>

					<div class="col-lg-1 col-md-1 hidden-sm padding-zero">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="13px" width="13px" viewBox="0 0 578.106 578.106" style="enable-background:new 0 0 578.106 578.106; margin-top: 4px" xml:space="preserve"><g><g><path style="fill:#010002;" d="M577.83,456.128c1.225,9.385-1.635,17.545-8.568,24.48l-81.396,80.781 c-3.672,4.08-8.465,7.551-14.381,10.404c-5.916,2.857-11.729,4.693-17.439,5.508c-0.408,0-1.635,0.105-3.676,0.309 c-2.037,0.203-4.689,0.307-7.953,0.307c-7.754,0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584 c-25.096-10.404-53.553-26.012-85.376-46.818c-31.823-20.805-65.688-49.367-101.592-85.68 c-28.56-28.152-52.224-55.08-70.992-80.783c-18.768-25.705-33.864-49.471-45.288-71.299 c-11.425-21.828-19.993-41.616-25.705-59.364S4.59,177.362,2.55,164.51s-2.856-22.95-2.448-30.294 c0.408-7.344,0.612-11.424,0.612-12.24c0.816-5.712,2.652-11.526,5.508-17.442s6.324-10.71,10.404-14.382L98.022,8.756 c5.712-5.712,12.24-8.568,19.584-8.568c5.304,0,9.996,1.53,14.076,4.59s7.548,6.834,10.404,11.322l65.484,124.236 c3.672,6.528,4.692,13.668,3.06,21.42c-1.632,7.752-5.1,14.28-10.404,19.584l-29.988,29.988c-0.816,0.816-1.53,2.142-2.142,3.978 s-0.918,3.366-0.918,4.59c1.632,8.568,5.304,18.36,11.016,29.376c4.896,9.792,12.444,21.726,22.644,35.802 s24.684,30.293,43.452,48.653c18.36,18.77,34.68,33.354,48.96,43.76c14.277,10.4,26.215,18.053,35.803,22.949 c9.588,4.896,16.932,7.854,22.031,8.871l7.648,1.531c0.816,0,2.145-0.307,3.979-0.918c1.836-0.613,3.162-1.326,3.979-2.143 l34.883-35.496c7.348-6.527,15.912-9.791,25.705-9.791c6.938,0,12.443,1.223,16.523,3.672h0.611l118.115,69.768 C571.098,441.238,576.197,447.968,577.83,456.128z"/></g></g></svg>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 padding-zero" style="margin-left: 5px">
						<p class="item-phone">Tel.: 44 3302 5300</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col">
				<p class="session-title number">03</p>
				<img src="<?= RAIZSITE ?>/img/marcacao-matriz-2.jpg" class="img-responsive">
				<p class="item-title text-center">Filial Blumenau</p>

				<div class="item-content">
					<div class="col-lg-1 col-md-1 hidden-sm padding-zero">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" height="15px" width="15px" viewBox="0 0 485.632 485.632" style="enable-background:new 0 0 485.632 485.632; margin-top: 5px" xml:space="preserve"><g><g><g><path style="fill:#242367;" d="M242.816,0C148.699,0,72.396,76.303,72.396,170.419c0,7.205,0.578,14.227,1.459,21.188     C88.417,324.727,231.75,478.153,231.75,478.153c2.554,2.858,5.016,4.621,7.387,5.897l0.122,0.061l4.773,1.52l4.773-1.52     l0.122-0.061c2.371-1.277,4.834-3.131,7.387-5.897c0,0,141.266-153.7,155.493-286.849c0.851-6.87,1.429-13.832,1.429-20.915     C413.205,76.303,336.933,0,242.816,0z M242.816,280.04c-60.434,0-109.62-49.186-109.62-109.62s49.186-109.62,109.62-109.62     s109.59,49.186,109.59,109.62S303.25,280.04,242.816,280.04z"/></g></g></g></svg>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 padding-zero" style="margin-left: 5px">
						<p class="item-address">Rua Rodolfo Freygang, 15,<br>Ed. Itaçu, 4o andar, cj. 401,<br>Centro, Blumenau-SC</p>
					</div>

					<div class="col-lg-1 col-md-1 hidden-sm padding-zero">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="13px" width="13px" viewBox="0 0 578.106 578.106" style="enable-background:new 0 0 578.106 578.106; margin-top: 4px" xml:space="preserve"><g><g><path style="fill:#010002;" d="M577.83,456.128c1.225,9.385-1.635,17.545-8.568,24.48l-81.396,80.781 c-3.672,4.08-8.465,7.551-14.381,10.404c-5.916,2.857-11.729,4.693-17.439,5.508c-0.408,0-1.635,0.105-3.676,0.309 c-2.037,0.203-4.689,0.307-7.953,0.307c-7.754,0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584 c-25.096-10.404-53.553-26.012-85.376-46.818c-31.823-20.805-65.688-49.367-101.592-85.68 c-28.56-28.152-52.224-55.08-70.992-80.783c-18.768-25.705-33.864-49.471-45.288-71.299 c-11.425-21.828-19.993-41.616-25.705-59.364S4.59,177.362,2.55,164.51s-2.856-22.95-2.448-30.294 c0.408-7.344,0.612-11.424,0.612-12.24c0.816-5.712,2.652-11.526,5.508-17.442s6.324-10.71,10.404-14.382L98.022,8.756 c5.712-5.712,12.24-8.568,19.584-8.568c5.304,0,9.996,1.53,14.076,4.59s7.548,6.834,10.404,11.322l65.484,124.236 c3.672,6.528,4.692,13.668,3.06,21.42c-1.632,7.752-5.1,14.28-10.404,19.584l-29.988,29.988c-0.816,0.816-1.53,2.142-2.142,3.978 s-0.918,3.366-0.918,4.59c1.632,8.568,5.304,18.36,11.016,29.376c4.896,9.792,12.444,21.726,22.644,35.802 s24.684,30.293,43.452,48.653c18.36,18.77,34.68,33.354,48.96,43.76c14.277,10.4,26.215,18.053,35.803,22.949 c9.588,4.896,16.932,7.854,22.031,8.871l7.648,1.531c0.816,0,2.145-0.307,3.979-0.918c1.836-0.613,3.162-1.326,3.979-2.143 l34.883-35.496c7.348-6.527,15.912-9.791,25.705-9.791c6.938,0,12.443,1.223,16.523,3.672h0.611l118.115,69.768 C571.098,441.238,576.197,447.968,577.83,456.128z"/></g></g></svg>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 padding-zero" style="margin-left: 5px">
						<p class="item-phone">Tel.: 47 2102 7150</p>
						<p class="item-phone">47 3326 3299</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col">
				<p class="session-title number">04</p>
				<img src="<?= RAIZSITE ?>/img/marcacao-matriz-3.jpg" class="img-responsive">
				<p class="item-title text-center">Filial Cascavel</p>

				<div class="item-content">
					<div class="col-lg-1 col-md-1 hidden-sm padding-zero">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" height="15px" width="15px" viewBox="0 0 485.632 485.632" style="enable-background:new 0 0 485.632 485.632; margin-top: 5px" xml:space="preserve"><g><g><g><path style="fill:#242367;" d="M242.816,0C148.699,0,72.396,76.303,72.396,170.419c0,7.205,0.578,14.227,1.459,21.188     C88.417,324.727,231.75,478.153,231.75,478.153c2.554,2.858,5.016,4.621,7.387,5.897l0.122,0.061l4.773,1.52l4.773-1.52     l0.122-0.061c2.371-1.277,4.834-3.131,7.387-5.897c0,0,141.266-153.7,155.493-286.849c0.851-6.87,1.429-13.832,1.429-20.915     C413.205,76.303,336.933,0,242.816,0z M242.816,280.04c-60.434,0-109.62-49.186-109.62-109.62s49.186-109.62,109.62-109.62     s109.59,49.186,109.59,109.62S303.25,280.04,242.816,280.04z"/></g></g></g></svg>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 padding-zero" style="margin-left: 5px">
						<p class="item-address">Avenida Brasil,<br>5964, cj. 114<br>Centro, Cascavel-PR</p>
					</div>

					<div class="col-lg-1 col-md-1 hidden-sm padding-zero">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="13px" width="13px" viewBox="0 0 578.106 578.106" style="enable-background:new 0 0 578.106 578.106; margin-top: 4px" xml:space="preserve"><g><g><path style="fill:#010002;" d="M577.83,456.128c1.225,9.385-1.635,17.545-8.568,24.48l-81.396,80.781 c-3.672,4.08-8.465,7.551-14.381,10.404c-5.916,2.857-11.729,4.693-17.439,5.508c-0.408,0-1.635,0.105-3.676,0.309 c-2.037,0.203-4.689,0.307-7.953,0.307c-7.754,0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584 c-25.096-10.404-53.553-26.012-85.376-46.818c-31.823-20.805-65.688-49.367-101.592-85.68 c-28.56-28.152-52.224-55.08-70.992-80.783c-18.768-25.705-33.864-49.471-45.288-71.299 c-11.425-21.828-19.993-41.616-25.705-59.364S4.59,177.362,2.55,164.51s-2.856-22.95-2.448-30.294 c0.408-7.344,0.612-11.424,0.612-12.24c0.816-5.712,2.652-11.526,5.508-17.442s6.324-10.71,10.404-14.382L98.022,8.756 c5.712-5.712,12.24-8.568,19.584-8.568c5.304,0,9.996,1.53,14.076,4.59s7.548,6.834,10.404,11.322l65.484,124.236 c3.672,6.528,4.692,13.668,3.06,21.42c-1.632,7.752-5.1,14.28-10.404,19.584l-29.988,29.988c-0.816,0.816-1.53,2.142-2.142,3.978 s-0.918,3.366-0.918,4.59c1.632,8.568,5.304,18.36,11.016,29.376c4.896,9.792,12.444,21.726,22.644,35.802 s24.684,30.293,43.452,48.653c18.36,18.77,34.68,33.354,48.96,43.76c14.277,10.4,26.215,18.053,35.803,22.949 c9.588,4.896,16.932,7.854,22.031,8.871l7.648,1.531c0.816,0,2.145-0.307,3.979-0.918c1.836-0.613,3.162-1.326,3.979-2.143 l34.883-35.496c7.348-6.527,15.912-9.791,25.705-9.791c6.938,0,12.443,1.223,16.523,3.672h0.611l118.115,69.768 C571.098,441.238,576.197,447.968,577.83,456.128z"/></g></g></svg>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 padding-zero" style="margin-left: 5px">
						<p class="item-phone">Tel.: 45 3304 9200</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col">
				<p class="session-title number">05</p>
				<img src="<?= RAIZSITE ?>/img/marcacao-matriz-4.jpg" class="img-responsive">
				<p class="item-title text-center">Filial São Paulo</p>

				<div class="item-content">
					<div class="col-lg-1 col-md-1 hidden-sm padding-zero">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" height="15px" width="15px" viewBox="0 0 485.632 485.632" style="enable-background:new 0 0 485.632 485.632; margin-top: 5px" xml:space="preserve"><g><g><g><path style="fill:#242367;" d="M242.816,0C148.699,0,72.396,76.303,72.396,170.419c0,7.205,0.578,14.227,1.459,21.188     C88.417,324.727,231.75,478.153,231.75,478.153c2.554,2.858,5.016,4.621,7.387,5.897l0.122,0.061l4.773,1.52l4.773-1.52     l0.122-0.061c2.371-1.277,4.834-3.131,7.387-5.897c0,0,141.266-153.7,155.493-286.849c0.851-6.87,1.429-13.832,1.429-20.915     C413.205,76.303,336.933,0,242.816,0z M242.816,280.04c-60.434,0-109.62-49.186-109.62-109.62s49.186-109.62,109.62-109.62     s109.59,49.186,109.59,109.62S303.25,280.04,242.816,280.04z"/></g></g></g></svg>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 padding-zero" style="margin-left: 5px">
						<p class="item-address">Rua Leôncio de Carvalho,<br>306, 1o andar, sala 11,<br>Paraíso, São Paulo-SP</p>
					</div>

					<div class="col-lg-1 col-md-1 hidden-sm padding-zero">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="13px" width="13px" viewBox="0 0 578.106 578.106" style="enable-background:new 0 0 578.106 578.106; margin-top: 4px" xml:space="preserve"><g><g><path style="fill:#010002;" d="M577.83,456.128c1.225,9.385-1.635,17.545-8.568,24.48l-81.396,80.781 c-3.672,4.08-8.465,7.551-14.381,10.404c-5.916,2.857-11.729,4.693-17.439,5.508c-0.408,0-1.635,0.105-3.676,0.309 c-2.037,0.203-4.689,0.307-7.953,0.307c-7.754,0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584 c-25.096-10.404-53.553-26.012-85.376-46.818c-31.823-20.805-65.688-49.367-101.592-85.68 c-28.56-28.152-52.224-55.08-70.992-80.783c-18.768-25.705-33.864-49.471-45.288-71.299 c-11.425-21.828-19.993-41.616-25.705-59.364S4.59,177.362,2.55,164.51s-2.856-22.95-2.448-30.294 c0.408-7.344,0.612-11.424,0.612-12.24c0.816-5.712,2.652-11.526,5.508-17.442s6.324-10.71,10.404-14.382L98.022,8.756 c5.712-5.712,12.24-8.568,19.584-8.568c5.304,0,9.996,1.53,14.076,4.59s7.548,6.834,10.404,11.322l65.484,124.236 c3.672,6.528,4.692,13.668,3.06,21.42c-1.632,7.752-5.1,14.28-10.404,19.584l-29.988,29.988c-0.816,0.816-1.53,2.142-2.142,3.978 s-0.918,3.366-0.918,4.59c1.632,8.568,5.304,18.36,11.016,29.376c4.896,9.792,12.444,21.726,22.644,35.802 s24.684,30.293,43.452,48.653c18.36,18.77,34.68,33.354,48.96,43.76c14.277,10.4,26.215,18.053,35.803,22.949 c9.588,4.896,16.932,7.854,22.031,8.871l7.648,1.531c0.816,0,2.145-0.307,3.979-0.918c1.836-0.613,3.162-1.326,3.979-2.143 l34.883-35.496c7.348-6.527,15.912-9.791,25.705-9.791c6.938,0,12.443,1.223,16.523,3.672h0.611l118.115,69.768 C571.098,441.238,576.197,447.968,577.83,456.128z"/></g></g></svg>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 padding-zero" style="margin-left: 5px">
						<p class="item-phone">Tel.: 11 3255 6376</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(".navbar-default").addClass("transparent");
	$(".img-brand").attr('src', '<?= RAIZSITE ?>/img/logo-branca.png');

	$(document).scroll(function() {
		if ($(this).scrollTop() < 640) {
			$(".navbar-default").removeClass("cinza");
			$(".img-brand").attr('src', '<?= RAIZSITE ?>/img/logo-branca.png');

			$(".row-historia").removeClass('after-scrolled');
		} else {
			$(".navbar-default").addClass("cinza");
			$(".img-brand").attr('src', '<?= RAIZSITE ?>/img/ferraz-advocacia.png');

			$(".row-historia").addClass('after-scrolled');
		}

		if ($(this).scrollTop() < 1220) {
			$(".navbar-default").removeClass("azul");

			$(".session-atuacao-destaques").removeClass('after-scrolled');
		} else {
			$(".navbar-default").addClass("azul");
			$(".img-brand").attr('src', '<?= RAIZSITE ?>/img/logo-branca.png');

			$(".session-atuacao-destaques").addClass('after-scrolled');
		}
	});
</script>