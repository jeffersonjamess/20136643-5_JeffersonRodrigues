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


	<!-- BODY --------------------->
	<div class="container">
	<?php 
		if (isset($_GET['produto'])) {
			$codigo = $_GET['produto'];
			$rotulo = retornaRotulo($codigo);
			$descricao = retornaDescricao($codigo);
			$peso = retornaPeso($codigo);
			?>
			<h1 class="text-center"><?php echo $rotulo; ?></h1>
			<br>
			
			<div class="row">
				<div class="col-md-5">
					<img src="../images/produtos/<?php echo $codigo.'.jpg'; ?>" class="img-fluid img-thumbnail">
				</div>
				<div class="col-md-7">
					<p class="text-justify descricao"><?php echo $descricao; ?></p>
				</div>
			</div>
		<?php
		}else{
			?>
			<br>
			<h1 class="text-center">PRODUTO NÃO ENCONTRADO</h1><br>

			<h2 class="text-center">=/</h2><br>
			<?php
			
		}
	?>
	</div>
	<!-- FIM DO BODY --------------------->
	

	<!-- RODAPÉ --------------------->
	
	<?php include_once "rodape.html"; ?>

	<!-- FIM DO RODAPÉ --------------------->

</body>
</html>