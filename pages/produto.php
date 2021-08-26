<?php
include ("dados/produtos.php");

if (isset($_GET["id"]) && !empty($_GET["id"])) {
	$id = $_GET["id"];
} else {
	return 0;
}

foreach ($produto as $value) {
		if ($value["id"] == $id) {
?>
	<p>
		<?=$value["sabor"];?><?=$value["descricao"];?>
		<br>R$: <?=$value["preço"];?>
	</p>  	
	<p><img src="images/<?php=$produto['photo'];?>"></p>

<?php
	} else {
		
	}
}