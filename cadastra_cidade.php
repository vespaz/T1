<?php

	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	
	if( !file_exists("cidades.xml") ){
		
		$xml = "<?xml version='1.0' encoding='UTF-8' ?>
		
		<cidades>
			<cidade>
				<nome>$cidade</nome>
				<estado>$estado</estado>
			</cidade>
		</cidades>";
		
		file_put_contents("cidades.xml", $xml);
		
	}else{
		
		$xml = simplexml_load_file("cidades.xml");
		
		$aux = $xml->addChild("cidade");
		
		$aux->addChild('cidade', $cidade);
		$aux->addChild('estado', $estado);
		
		file_put_contents("cidades.xml", $xml->asXML());
		
	}
	
	echo "Cidade cadastrada com sucesso!<br />";
	echo "<a href=\"form_cidade.php\">Cadastrar outra cidade</a><br />";
	echo "<a href=\"form_estado.php\">Cadastrar outro estado</a><br />";

?>