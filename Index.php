<!--Muita coisa poderia ser melhorada que fui aprendendo durante o projeto, porém como é meu primeiro site e disponho de pouco tempo acabou ficando com algumas arestas -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>MAPA Back End I</title>
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 34px 140px;
  text-decoration: none;
  font-family: serif;
  font-size: 30px;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
p {
	color: white;
	font-family: serif;
	font-size: 20px;
}
h2 {
	color: lightgreen;
	font-family: serif;
	font-size: 25px;
	text-align: center;
	text-decoration: underline;
}
h1 {
	color: black;
	font-family: serif;
	font-size: 30px;
	text-align: center;
}
h3 {
	color: white;
	font-family: serif;
	font-size: 20px;
}
form {
	text-align: center;
}
main {
  padding: 80px;
  border: 1px solid white;
}
footer {
	background-color: lightgrey;
	color: black;
	padding: 4px;
}

</style>

</head>
<body>
	<header>
		<img src="images/logo_pistachio.png" height="400" alt="Pistachio+Rum" title="Pistachio+Rum" >
		<nav>
		<ul>
			<li><a href="index.php?pagina=pages/home.php">A Pistachio</a></li>
			<li><a href="index.php?pagina=pages/cardapio.php">Cardápio</a></li>
			<li><a href="index.php?pagina=pages/contato.php">Contato</a></li>
		</ul>
		</nav>
	</header>
		<main style="background-color: #8e2d2c;">
			<?php
				if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
					$pagina = $_GET["pagina"];
					include ($pagina);
				} else {

				}
			?>
</main>
<footer>
	<p style="color: darkgrey;">Desenvolvido por: Hermógenes R Cavalcanti</p>
</footer>
</body>
</html>