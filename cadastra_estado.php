<?php 
	$nome = $_POST["nome"];
	$uf = $_POST["uf"];
	
	if(!file_exists("estados.xml")){
		$xml = "<?xml version='1.0' encoding='UTF-8'?>
		
		<estados>
			<estado>
				<nome>$nome</nome>
				<uf>$uf</uf>
			</estado>
		</estados>";
		
		file_put_contents("estados.xml", $xml);
	}else{
		$xml = simplexml_load_file("estados.xml");
		
		$estado = $xml->addChild('estado');
		
		$estado->addChild('nome', $nome);
		$estado->addChild('uf', $uf);
		
		file_put_contents("estados.xml", $xml->asXML());
	}
	
	echo "<h1>Enviado!!</h1>";
?>