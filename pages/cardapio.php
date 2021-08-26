
<?php
include ("dados/produtos.php");

foreach ($produto as $value) {
?>
	<p style="text-align: center; color: black; font-family: serif; font-size: 30px;">
		<a style="color: white "href="index.php?pagina=pages/produto.php&id=<?=$value["id"];?>"><?=$value["sabor"];?> </a>
	</p>
	<?php
}