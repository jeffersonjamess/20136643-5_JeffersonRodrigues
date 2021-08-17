<!DOCTYPE html>
<html>
<head>
	<?php
		include_once "header.html";
		include_once "../dados/dados.php";
		include_once "../function/funcoes.php";
	?>
	<title>Filmes</title>
	
</head>
<body>

	<!-- MENU SUPERIOR --------------------->

	<?php include_once "menuSuperior.html";	?>

	<!-- FIM DO MENU SUPERIOR --------------------->


	<!-- BANNER --------------------->

	<?php include_once "banner.php";	?>

	<!-- FIM DO BANNER --------------------->



	<!-- MAIN --------------------->

	<main class="container">
		<br>
		<h1 class="text-center">Conheça nossos produtos</h1>
		<br>
		<div class="row">
			
		<?php
			for ($i=0; $i <= count($produtos)/4; $i++) {
				?>
				<div class="col-md-4">
				<?php
					echo $i."<br>";
					$rotulo = retornaRotulo($i);
					$descricao = retornaDescricao($i);
					echo $rotulo."<br>";
				?>
				</div>
				<?php
			}
		?>
			
		</div>
	</main>

	<!-- FIM DO MAIN --------------------->
	

	<!-- RODAPÉ --------------------->
	
	<?php include_once "rodape.html"; ?>

	<!-- FIM DO RODAPÉ --------------------->

</body>
</html>