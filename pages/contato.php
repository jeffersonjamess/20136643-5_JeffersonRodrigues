<!DOCTYPE html>
<html>
<head>
	<?php
		include_once "header.html";

	?>
	
	<title>Contato</title>
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
		<div class="row">

			<?php
				if (isset($_GET['btnEnviar'])) {
					?>
						<div class="col-md-12 alert alert-success text-center" role="alert">
							<h3>Mensagem registrada com sucesso!</h3>
							<h4>Obrigado por entrar em contato.</h4>
							<br><br>
							<a href="contato.php" class="alert-link" target='_self'>Voltar</a>
						</div>
					<?php
				}else{
			?>

			<div class="col-md-7">
				<h4>Entre em contato conosco através do telefone: <br><strong>(99) 99999-9999</strong>&nbsp;<i class="fa fa-whatsapp" aria-hidden="true"></i> </h4>
				<h4>Ou pelo e-mail: <a href="mailto:contato@email.com.br">contato@email.com.br</a></h4>
				<h4>Se preferir, pode utilizar o formulário abaixo:</h4>
				<form name="fmContato" method="get" action="contato.php" onsubmit="return validaCampos();">
					<label>Nome:</label><br>
					<input type="text" name="txtNome" class="form-control" maxlength="50"><br>
					<label>E-mail: </label><br>
					<input type="email" name="txtEmail" class="form-control" aria-describedby="emailHelp" maxlength="50"><br>
					<label>Mensagem:</label>
					<textarea class="form-control" name="txtMensagem" maxlength="500"></textarea><br>
					<button type="submit" class="btn btn-primary w-100" name="btnEnviar">Enviar</button>
				</form>
			</div>
			<div class="col-md-5">
				<h3 class="text-center">Venha nos conhecer!</h3>
				<h5>Estamos localizados na R. das Andorinhas - Pernambués, S/n - Salvador - BA</h5>
				<br>
				<!-- ENDEREÇO FICTÍCIO -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9945251773097!2d-38.457324649067104!3d-12.972201763292462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161ae2eae93363%3A0x649bc46457ffb7c1!2sR.%20das%20Andorinhas%20-%20Pernambu%C3%A9s%2C%20Salvador%20-%20BA%2C%2040301-110!5e0!3m2!1spt-BR!2sbr!4v1629676542548!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>


			<?php
				}
			?>
		</div>
	</p>
	</main>

	<!-- FIM DO MAIN --------------------->

	

	<!-- RODAPÉ --------------------->
	
	<?php include_once "rodape.html"; ?>

	<!-- FIM DO RODAPÉ --------------------->

</body>
</html>