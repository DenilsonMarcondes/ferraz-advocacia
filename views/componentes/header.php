<style type="text/css">
	@media screen and (min-width: 767px) {
		.margin-header { margin-top: 100px }
	}
	@media screen and (max-width: 768px) {
		.navbar-default { border-color: inherit }
		.margin-header { margin-top: 73px }
	}
</style>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= RAIZSITE ?>">
				<img class="img-brand hidden-xs" src="<?= RAIZSITE ?>/img/ferraz-advocacia.png" alt="">
				<img class="hidden-lg hidden-md hidden-sm" src="<?= RAIZSITE ?>/img/logo-branca.png">
			</a>
		</div>
		<div style="" id="navbar" class="navbar-collapse collapse">
			<!-- Inicio Navbar do projeto -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?= RAIZSITE ?>/quem-somos" class="<?= ($pagina_atual == 'quem-somos') ? 'link-active' : '' ?>">Quem somos</a></li>
				<li><a href="<?= RAIZSITE ?>/areas-de-atuacao" class="<?= ($pagina_atual == 'areas-de-atuacao') ? 'link-active' : '' ?>">Áreas de atuação</a></li>
				<li><a href="<?= RAIZSITE ?>/estrutura" class="<?= ($pagina_atual == 'estrutura') ? 'link-active' : '' ?>">Estrutura</a></li>
				<li><a href="<?= RAIZSITE ?>/premios" class="<?= ($pagina_atual == 'premios') ? 'link-active' : '' ?>">Prêmios</a></li>
				<li><a href="<?= RAIZSITE ?>/contato" class="<?= ($pagina_atual == 'contato') ? 'link-active' : '' ?>">Contato</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<script type="text/javascript">
	$(document).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$(".navbar-default").addClass("navbar-sticky");
		} else {
			$(".navbar-default").removeClass("navbar-sticky");
		}
	});
</script>