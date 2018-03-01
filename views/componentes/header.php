<style type="text/css">
	@media screen and (min-width: 767px) {
		.navbar-default .navbar-nav>li>a { font-size: 14px; color: #242367 }
		.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover { font-weight: 700; color: #242367 }
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
			<a class="navbar-brand" href="home.html"><img src="<?= RAIZSITE ?>/img/ferraz-advocacia.png" alt=""></a>
		</div>
		<div style="" id="navbar" class="navbar-collapse collapse">
			<!-- Inicio Navbar do projeto -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="quem-somos.html">Quem somos</a></li>
				<li><a href="areas-de-atuacao.html">Areas de atuação</a></li>
				<li><a href="estrutura.html">Estrutura</a></li>
				<li><a href="premios.html">Prêmios</a></li>
				<li><a href="contato.html">Contato</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<script type="text/javascript">
	$(document).scroll(function() {
		if ($(this).scrollTop() > 500) {
			console.log('Mais de 500 pixels submarinos');
		}
	});
</script>