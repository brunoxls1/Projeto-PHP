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
		<h1>ORÇAMENTO</h1><hr>

	<div class="pesquisa">

	</div>

	<div class="conteudo">
		<?php

			$data = $_POST['data'];
			$garantia = $_POST['garantia'];
			$servico = $_POST['servico'];
			$aparelho = $_POST['aparelho'];
			$cliente = $_POST['cliente'];

			echo "<strong>Detalhes do Orçamento:</strong> <br><br>";
			echo "Data $data, Tempo de Garantia após a entrega: $garantia meses<br><br>";
			echo "Aparelho para Manutenção: $aparelho<br><br>";
			echo "Serviço a ser executado: $servico<br><br>";

			switch ($servico) {
				case 'Formatação':
					echo "O valor <strong>Total</strong> será de R$ 70,00 a mão de obra mais R$ 50,00 de equipamentos, <strong>Totalizando</strong> R$ 120,00.<br>";
					break;
				case 'Troca de Peças':
					echo "O valor <strong>Total</strong> será de R$ 100,00 a mão de obra mais R$ 50,00 de equipamentos, <strong>Totalizando</strong> R$ 150,00.<br>";
					break;
				case 'Outros':
					echo "O valor <strong>Total</strong> será de R$ 150,00 a mão de obra mais R$ 50,00 de equipamentos, <strong>Totalizando</strong> R$ 200,00.<br>";
					break;
					
				
				default:
					echo "Infelizmente não é possivel realizar este serviço no momento.<br>";
					break;

			}
				echo "<br>Declaro estar de acordo com os valores e informações acima descritos.<br> $cliente.";
		?>
		<br><br>

		<p>Assinatura____________________</p><br>
		<p>Data:___/___/___/</p><br>
		<p>Ao Assinar você concorda com todos os termos de serviço e garantia.</p><br>
		<form>
			<input type="button" value="Imprimir Orçamento" onclick="window.print()">
		</form>


		<a href="index.html"> << voltar</a>

	<footer>
		<br><h3>Todos os direitos reservados - Desenvolvido por Bruno Oliveira Spínola</h3>

	</footer>

</body>
</html>