<?php

$conn = mysqli_connect("localhost", "root", "usbw", "loja");

$select = "SELECT * FROM cadastro JOIN cidade ON cadastro.cod_cidade=cidade.id_cidade JOIN estado ON cidade.cod_estado=estado.id_estado";

$query = mysqli_query($conn,$select);


while($linha=mysqli_fetch_array($query)){

	print_r($linha);
	
	
	echo "<br /><br />";

}

?>

