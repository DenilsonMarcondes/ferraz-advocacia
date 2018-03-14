<style type="text/css">
	/*
		==============
		PRÊMIOS STYLES
		==============
	*/
	.session-premios { background-color: #f5f5f5 }
	.session-premios .line { -webkit-transition: all 0.6s ease-out; transition: all 0.6s ease-out }
	.session-premios .line { width: 0%; top: 9px }
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

		.session-premios { padding-top: 133px; padding-bottom: 133px }
		.session-premios h3 { margin-top: 37px; width: 268px }
		.session-premios p.session-content-alternative { margin-top: 15px }

		.tarja-branca .chamada { -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); -ms-transform: rotate(-90deg); -o-transform: rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); width: 260px }
		.tarja-branca .chamada { position: absolute; left: -75px; top: 250px }
		.tarja-branca .chamada p { font-weight: 600; margin: 0; }
		.tarja-branca .chamada p:first-child { font-size: 14px; color: #b1b1b1 }
		.tarja-branca .chamada p:nth-child(2) { font-size: 30px; color: #242367 }
	}
	@media screen and (max-width: 768px) {
		.session-premios { padding-top: 83px; padding-bottom: 83px }
		.session-premios h3 { margin-top: 15px; width: 191px }
		.session-premios p.session-content-alternative { margin-top: 21px }
	}
</style>

<div class="parallax-topo" style="background: url('<?= RAIZSITE ?>/img/marcacao-2.jpg'); background-position: center center; background-size: cover; background-attachment: fixed">
	<div class="parallax-filter" style="background: #242367; width: 100%; opacity: 0.5"></div>
</div>

<div class="session-premios">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: #16197D">
				<div class="line hidden-xs"></div>

				<p class="bread-crumb-title hidden-lg hidden-md hidden-sm" style="color: #A9A9A9">nossos prêmios</p>
				<h3 class="session-title">Ferraz | Cicarelli & Passold Advogados Associados</h3>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: #16197D">
				<p class="bread-crumb-title hidden-xs" style="color: #A9A9A9">nossos premios</p>
				<p class="session-content-alternative">Escritório e Sócios multi-premiados e reconhecidos por diversas instituições de grande credibilidade e renome no mercado.</p>
			</div>
	    </div>
	</div>
</div>
<script type="text/javascript">
	$(document).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$(".session-premios .line").css('width', '94%');

			setTimeout(function(){
				$(".bread-crumb-title").css({
					'margin-left': '0',
					'opacity': '9'
				});
			}, 800);
		}
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
<div class="row hidden-xs">
	<div class="col-lg-12 col-md-12 col-sm-12 col-slider hidden-xs">
		<div class="tarja-branca position-center" style="height: 634px; width: 113px; background-color: #f5f5f5; z-index: 2">
			<div class="chamada">
				<p>escritório e sócios</p>
				<p class="owl-change-text">multi-premiados</p>
			</div>
		</div>
		<div class="owl-carousel owl-premios owl-theme">
			<div class="item">
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-1.jpg">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-1.jpg'); height: 634px; background-size: cover; background-position: center center"></div>
				</a>
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-2.jpg">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-2.jpg'); height: 634px; background-size: cover; background-position: center center"></div>
				</a>
			</div>
			<div class="item">
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-3.jpg">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-3.jpg'); height: 634px; background-size: cover; background-position: center center"></div>
				</a>
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-4.jpg">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-4.jpg'); height: 634px; background-size: cover; background-position: center center"></div>
				</a>
			</div>
			<div class="item">
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-5.jpg">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-5.jpg'); height: 634px; background-size: cover; background-position: center center"></div>
				</a>
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-6.jpg">
					<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-6.jpg'); height: 634px; background-size: cover; background-position: center center"></div>
				</a>
			</div>
		</div>
		<div class="buttons position-center">
			<button type="button" class="btn btn-carousel btn-owl-prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve" width="21px" height="21px"><g><path d="M26,0C11.663,0,0,11.663,0,26s11.663,26,26,26s26-11.663,26-26S40.337,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" fill="#b1b1b1"/><polygon points="32,36.783 32,15.438 14.043,25.806  " fill="#b1b1b1"/></g></svg></button>

			<button type="button" class="btn btn-carousel btn-owl-next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve" width="21px" height="21px"><g><path d="M26,0C11.663,0,0,11.663,0,26s11.663,26,26,26s26-11.663,26-26S40.337,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" fill="#b1b1b1"/><polygon points="32,36.783 32,15.438 14.043,25.806  " fill="#b1b1b1"/></g></svg></button>
		</div>
	</div>
</div>
<div class="row hidden-lg hidden-md hidden-sm" style="margin: 0">
	<div class="hidden-lg hidden-md hidden-sm col-xs-12 col-slider" style="padding: 0">
		<div class="owl-carousel owl-premios owl-theme">
			<div class="item">
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-1.jpg">
					<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-1.jpg'); height: 389px; background-size: cover; background-position: center center"></div>
				</a>
			</div>
			<div class="item">
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-2.jpg">
					<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-2.jpg'); height: 389px; background-size: cover; background-position: center center"></div>
				</a>
			</div>
			<div class="item">
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-3.jpg">
					<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-3.jpg'); height: 389px; background-size: cover; background-position: center center"></div>
				</a>
			</div>
			<div class="item">
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-4.jpg">
					<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-4.jpg'); height: 389px; background-size: cover; background-position: center center"></div>
				</a>
			</div>
			<div class="item">
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-5.jpg">
					<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-5.jpg'); height: 389px; background-size: cover; background-position: center center"></div>
				</a>
			</div>
			<div class="item">
				<a data-fancybox="premios" href="<?= RAIZSITE ?>/img/marcacao-premios-6.jpg">
					<div class="hidden-lg hidden-md hidden-sm col-xs-12" style="background: url('<?= RAIZSITE ?>/img/marcacao-premios-6.jpg'); height: 389px; background-size: cover; background-position: center center"></div>
				</a>
			</div>
		</div>
		<div class="buttons position-center hidden-xs">
			<button type="button" class="btn btn-carousel btn-owl-prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve" width="21px" height="21px"><g><path d="M26,0C11.663,0,0,11.663,0,26s11.663,26,26,26s26-11.663,26-26S40.337,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" fill="#b1b1b1"/><polygon points="32,36.783 32,15.438 14.043,25.806  " fill="#b1b1b1"/></g></svg></button>

			<button type="button" class="btn btn-carousel btn-owl-next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 52 52" style="enable-background:new 0 0 52 52;" xml:space="preserve" width="21px" height="21px"><g><path d="M26,0C11.663,0,0,11.663,0,26s11.663,26,26,26s26-11.663,26-26S40.337,0,26,0z M26,50C12.767,50,2,39.233,2,26   S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" fill="#b1b1b1"/><polygon points="32,36.783 32,15.438 14.043,25.806  " fill="#b1b1b1"/></g></svg></button>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.owl-premios').owlCarousel({
			items:1,
		    margin:10,
		    autoplay:true,
    		autoplayTimeout:10000,
    		loop:true,
    		dots:false,
    		nav:false
		});

		$(".btn-owl-prev").click(function(event) {
			$('.owl-premios').trigger('prev.owl.carousel');
		});
		$(".btn-owl-next").click(function(event) {
			$('.owl-premios').trigger('next.owl.carousel');
		});
	});
</script>

<style type="text/css">
	@media screen and (min-width: 768px) {
		.parallax-link svg { -webkit-transition: all 0.2s ease-out; transition: all 0.2s ease-out }
		.parallax-link:hover svg { margin-left: 5px }
	}
</style>
<div class="parallax-to-action" style="background: url('<?= RAIZSITE ?>/img/marcacao-1.jpg'); background-position: center center; background-size: cover; background-attachment: fixed; position: relative">
	<div class="parallax-to-action-filter" style="background: #242367; width: 100%; opacity: 0.73"></div>

	<div class="position-center-center">
		<div class="parallax-title">
			<p>O ESCRITÓRIO TEM COMO SÓCIOS-titulares ADVOGADOS ESPECIALIZADOS em diversas áreas</p>
		</div><br>
		<a class="parallax-link" href="<?= RAIZSITE ?>/quem-somos/#equipe">conheça a equipe&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="9px" height="9px" viewBox="0 0 306 306" fill="#ffffff" style="enable-background:new 0 0 306 306;" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153   "/></g></g></svg></a>
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