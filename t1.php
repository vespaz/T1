<?php

$conn = mysqli_connect("localhost", "root", "usbw", "loja");

$select = "SELECT * FROM loja_cadastro JOIN loja_cidade ON loja_cadastro.cod_cidade=loja_cidade.id_cidade JOIN loja_estado ON loja_cidade.cod_estado=loja_estado.id_estado";

$query = mysqli_query($conn,$select);


while($linha=mysqli_fetch_array($query)){
	echo "<pre>";
		print_r($linha);
	echo "</pre>";
	
	echo "<br /><br />";

}

?>

