<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html">
	<meta http-equiv="X-UA-Compabible" content="IE=edge,chrome=1">
	<meta name="keyword" content="filmes, biblioteca, atores, diretores, cinema, diversão, filmografia">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- JQUERY -->
	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	 
	<!-- ESTILO -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<?php
		include_once "dados/dados.php";
	?>

	<title>Home</title>
	
</head>
<body>

	<!-- MENU SUPERIOR --------------------->

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuSuperior"
		aria-controls="menuSuperior" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars"></i>
		</button>
			<div id="menuSuperior" class="collapse navbar-collapse">
				<a href="index.php" class="navbar-brand">Bolos, Doces & Cia</a>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item"><a class="nav-link" href="pages/produtos.php">Produtos</a></li>
					<li class="nav-item"><a class="nav-link" href="pages/quem_somos.php">Quem Somos</a></li>
					<li class="nav-item"><a class="nav-link" href="pages/contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- FIM DO MENU SUPERIOR --------------------->


	<!-- BANNER --------------------->

	<div id="meuBanner" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<a href="pages/item.php?produto=5">
					<img src="images/banner/1.jpg" class="d-block w-100" alt="Banner de boas-vindas">
				</a>
			</div>
			<div class="carousel-item">
				<a href="pages/item.php?produto=0">
					<img src="images/banner/2.jpg" class="d-block w-100" alt="Banner de boas-vindas">
				</a>
			</div>
			<div class="carousel-item">
				<a href="pages/item.php?produto=8">
					<img src="images/banner/3.jpg" class="d-block w-100" alt="Banner de boas-vindas">
				</a>
			</div>
		</div>
		<!-- INDICADORES -->
		<ol class="carousel-indicators">
			<li data-target="#meuBanner" data-slide-to="0" class="active"></li>
			<li data-target="#meuBanner" data-slide-to="1"></li>
			<li data-target="#meuBanner" data-slide-to="2"></li>
		</ol>
		<!-- FIM DOS INDICADORES -->

		<!-- CONTROLES -->
		<a href="#meuBanner" data-slide="prev" class="carousel-control-prev controles">
			<img  src="https://image.flaticon.com/icons/png/512/271/271220.png"  />
		</a>
		<a href="#meuBanner" data-slide="next" class="carousel-control-next controles">
			<img  src="https://image.flaticon.com/icons/png/512/271/271228.png" />
		</a>
		<!-- FIM DOS CONTROLES -->

	</div>

	<!-- FIM DO BANNER --------------------->

	<!-- PRINCIPAL --------------------->
		<h1 class="text-center">Produtos em Destaque</h1>
		<main class="container">

		<!-- INÍCIO Da VITRINE --------------------->
		<!---------------------------------------------------------------------------------------------------------------------->
		<div class="row produtoEmDestaque">
			
			<?php
				$destaques = array(8,1,6,7,10,3);
				for ($i=0; $i < count($destaques); $i++) {
					$imagem = $destaques[$i];
					$j = 0;
					while ($j < count($produtos)) {
						if ($produtos[$j] == $destaques[$i]) {
							$rotulo = $produtos[$j+1];
							$descricao = $produtos[$j+2];
							$j = 50; /* sair do while */
						}else{
							$j++;
						}
					}
					?>
					
					<div class="col-md-6 col-lg-4 col-sm-6 text-center">
						<div class="card">
							<img src="images/Produtos/<?php echo $imagem; ?>.jpg" class="card-img-top">
							<div class="card-body">
								<h3 class="card-title"><?php echo $rotulo; ?></h3>
								<p class="card-text">
									<?php echo substr($descricao, 0, 99)."..."; ?>
								</p>
								<a href="pages/item.php?produto=<?php echo $imagem; ?>" class="btn btn-primary stretched-link">Ver mais...</a>
							</div>
						</div>
					</div>

				<?php
				}
			?>

		</div>

		<!-- FIM DA VITRINE --------------------->
		<!---------------------------------------------------------------------------------------------------------------------->


		<!-- ------------------------------------------------------------------------------------------------------------------>
		<!-- FIM DO PRODUTOS POPULARES --------------------->

		</main>
	<!-- FIM DO PRINCIPAL --------------------->

	<!-- RODAPÉ --------------------->
	
	<hr>
	<footer>
		<div class="row">
			<div class="faleConosco text-center col-md-6">
				<h3>Fale Conosco:</h3>
				<a href="mailto:contato@email.com.br">contato@email.com.br</a>
				<p>(99) 99999-9999 </p>
			</div>
			<div class="text-center col-md-6">
				<p>
				Desenvolvido por: <strong>
				Jefferson da Silva Rodrigues</strong><br>
				RA: 20136643-5 <br>
				SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET<br>
				Unicesumar<br>
				Disciplina: PROGRAMAÇÃO BACK END I - 53/2021
				</p>
			</div>
		</div>
	</footer>

	<!-- FIM DO RODAPÉ --------------------->

</body>
</html>