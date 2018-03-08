<style type="text/css">
	/*
		================
		ESTRUTURA STYLES
		================
	*/
	.session-conteudo { background-color: #f5f5f5 }
	.session-conteudo .line { width: 94%; top: 9px }

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

				<p class="bread-crumb-title hidden-lg hidden-md hidden-sm" style="color: #A9A9A9">nossos premios</p>
				<h3 class="session-title">Estrutura Organizacional</h3>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="color: #16197D">
				<p class="bread-crumb-title hidden-xs" style="color: #A9A9A9">nossa estrutura</p>
				<p class="session-content-alternative">A estrutura organizacional do escritório permite a prestação de serviço personalizado a cada um dos clientes, bem como às diversas espécies de carteiras de processos/contratos.</p>
			</div>
	    </div>
	</div>
</div>

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