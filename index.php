<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8" />
	<title>Página inicial</title>

</head>

<body>

	<fieldset>
	
		<legend>Tabelas de cadastros</legend>
		
		<?php
		
			if( file_exists("cadastros.xml")){
			
				include "listagem.inc";
			
			}else{
			
				echo "Desculpe, mas ainda não é possível mostrar as tabelas por falta de dados. <br /><br />";
				echo "<a href=\"form_estado.php\">Cadastre um Estados</a> <br /><br />";
				echo "<a href=\"form_cidade.php\">Cadastre uma cidade</a> <br /><br />";
				echo "<a href=\"form_cadastro.php\">Cadastre umaa pessoa</a> <br /><br />";
			
			}
		
		?>
	
	</fieldset>

</body>