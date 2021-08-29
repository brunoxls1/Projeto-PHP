<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Programação WEB</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

	<div class="topo">
		<img src="img/topo_aula10.png" alt="Topo">
		</div><br><br><br>
			<br>
		<h1>Portfólio WEB Front CSS e HTML/Back End PHP</h1><hr>

	<div class="pesquisa">
		<h6>Bruno Oliveira Spínola</h6>
	</div>

	<div class="conteudo">
		<?php

			$nome = $_POST['nome'];
			$renda = $_POST['renda'];

			echo "Olá $nome muito obrigado por seu contato.<br>";
			if ($renda>=2000) {
				echo "Parabéns seu crédito foi <strong>Aprovado!</strong>";
			}elseif ($renda<2000) {
				echo "Infelizmente não poderemos disponibilizar Crédito, clique em voltar para ser direcionado a pagina principal";
			}


		?>
		<br>
		<a href="index.html"> << voltar</a>

	</div><br><br>

	<div class="rodape">
		<h2>Front End e Back End Teste</h2>
		<h2>PAGINA DE TRATAMENTO DE DADOS</h2>
	</div><br><br><br>

	<footer><br><br><br>
		<h3>Todos os direitos reservados - Desenvolvido por Bruno Oliveira Spínola</h3>


	</footer>

</body>
</html>