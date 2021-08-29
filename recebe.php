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
		
	</div>

	<div class="conteudo">
		<?php

			$pesquisa = $_GET['pesquisa'];



			switch ($pesquisa){
				case 'Office':
				case 'Pacote';
					echo "
<h2>Pacote Office</h2><br>
<img src='img/office.png'><br><br>

Faculdade, cursos livres e técnicos.<br>

Mercado de trabalho disputado, empresas cada vez mais exigentes...<br>

Tempo e Dinheiro, são fatores que ocupam e preocupam pessoas o tempo todo na atual sociedade.<br>

Microsoft Office Essencial, apresenta a forma mais simples e rápida de aprender as principais ferramentas da Microsoft para a criação de Planilhas eletrônicas, Formatação de Textos e Criação de Apresentações com os já conhecidos e amplamente utilizados Softwares Excel, Word e Power Point.
";
					break;
					case 'Javascript':
					case 'Java';
					echo "

<h2>Javascript</h2>
<img src='img/javascript.png'><br><br>

JavaScript (abreviado como JS) é uma linguagem de programação dinâmica cheia de recursos que quando aplicada em um documento HTML, pode fornecer interatividade dinâmica em sites. Foi inventada por Brendan Eich, co-fundador do projeto Mozilla, da Fundação Mozilla e da Corporação Mozilla.

JavaScript é incrivelmente versátil e amigável ao iniciante. Com mais experiência, você poderá criar jogos, gráficos 2D e 3D animados, aplicativos abrangentes baseados em bancos de dados e muito mais!

JavaScript em si é bastante compacto, mas muito flexível. Os desenvolvedores escreveram uma grande variedade de ferramentas sobre a linguagem JavaScript principal, desbloqueando uma grande quantidade de funcionalidades extras com o mínimo de esforço. Essas incluem:

Interfaces de programação de aplicativos no navegador (APIs) - APIs integradas em navegadores da Web, fornecendo funcionalidade como criar dinamicamente HTML e definir estilos CSS, coletar e manipular um fluxo de vídeo da webcam do usuário ou gerando gráficos 3D e amostras de áudio.
APIs de terceiros  — Permitem que os desenvolvedores incorporem funcionalidades em seus sites de outros provedores de conteúdo, como o Twitter ou o Facebook.
Estruturas e bibliotecas de terceiros — você pode aplicá-las ao seu HTML para permitir que você crie rapidamente sites e aplicativos.
Como este artigo deve ser apenas uma introdução ao JavaScript, não vamos confundir você neste estágio, falando em detalhes sobre qual é a diferença entre a linguagem JavaScript principal e as diferentes ferramentas listadas acima. Você pode aprender tudo isso em detalhes mais tarde, em nossa área de aprendizado de JavaScript e no restante do MDN.
Abaixo, apresentaremos alguns aspectos da linguagem principal, e você também poderá brincar com alguns recursos da API do navegador. Divirta-se!<br>

";
					break;
						case 'Programação' ;
						case 'Web';
					echo "
<h2>Negócios Digitais</h2>
<img src='img/programaçãoweb.jpg'><br><br>

Usamos as linguagens de programação para nos comunicar com os computadores. Ou seja, da mesma maneira que estudamos o inglês para falar com pessoas de outros países, temos que aprender a língua dos computadores se quisermos que as máquinas respondam aos nossos comandos. E programar é justamente se comunicar nesta outra língua, que o computador consegue interpretar e devolver um resultado ao usuário.

Mas então o que é um website?
É um conjunto de páginas web de hypertextos acessíveis, que foram escritos usando alguma linguagem computacional. Nesta série de posts produzida com o conteúdo do Curso EuProgramo vamos explicar as três principais linguagens web. Elas normalmente são usadas de forma conjunta, pois cada uma tem uma função muito específica dentro da internet:

HTML: determina a estrutura dos elementos. Funciona como se fosse o texto da página.
CSS: define a aparência do website, cores, formas, bordas, fontes, etc. É o que dá o estilo, deixando o site mais bonito e atraente.
JavaScript: responsável pelas interações e por como os elementos irão se comportar dentro da página.

Editor de código
Antes de entrarmos na explicação das linguagens em si, temos que falar um pouco sobre o editor de código. Funciona mais ou menos assim: da mesma forma que usamos o Word para escrever um texto ou o Excel para criar uma planilha, quando programamos precisamos de um software específico que recebe esse nome bonito: editor de código. O editor de código funciona como se fosse um editor de texto comum, mas ele oferece algumas facilidades considerando a linguagem em que o código está sendo escrito: cores que destacam partes, indentação e atalhos automatizados. É por meio deles que geramos as páginas web, que por sua vez são salvas nos servidores de hospedagem. Quando alguém digita a URL de um site no navegador, ocorre uma requisição para o servidor que guarda as informações daquele site específico. O servidor devolve o código das páginas, escrito por nós, desenvolvedoras, e o navegador traduz e exibe essas informações para o usuário. Conhecemos esse mecanismo no texto A Internet e seus conceitos básicos.

Há muitos editores de código no mercado e a escolha depende de cada programadora. Um dos que indicamos é o Atom, pois é gratuito e desenvolvido pela equipe do GitHub, que são ativistas da internet opensource. E nós amamos esse tipo de iniciativa democrática, não é mesmo?

Pausa para falar um pouco sobre a internet opensource (ou, em português, código aberto). Nada mais é do que a programação baseada na partilha e na melhoria colaborativa do código fonte do software. Para saber mais, acesse esse site opensource.org.

Faça o download de um editor de código, sente-se confortavelmente que nos próximos textos vamos começar a programar! Próxima missão: HTML, o esqueleto da internet.

";
					break;
				
				default:
					echo 'Infelizmente não encontramos resposta para sua pesquisa, clique em voltar e tente novamente';
					break;
			}

		?>
		<br>

	</div><br><br>
	<div class="voltar">
		<a href="index.html"> << voltar</a>
	</div>


	<div class="rodape">
		<h2>Front End e Back End Teste</h2>
		<h2>PAGINA DE TRATAMENTO DE DADOS</h2>
	</div><br><br><br>

	<footer><br><br><br>
		<h3>Todos os direitos reservados - Desenvolvido por Bruno Oliveira Spínola</h3>


	</footer>

</body>
</html>