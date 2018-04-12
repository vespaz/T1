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
		
			if( file_exists("cadastro.xml")){
			
				include "listagem.inc";
			
			}else{
			
				echo "Desculpe, mas ainda não é possível mostrar as tabelas por falta de dados. <br /><br />";
				echo "<a href=\"form_estado.php\">Cadastre um Estados</a> <br /><br />";
				echo "<a href=\"form_cidade.php\">Cadastre uma Cidade</a> <br /><br />";
				echo "<a href=\"form_cadastro.php\">Cadastre uma Pessoa</a> <br /><br />";
			
			}
		
		?>
	
	</fieldset>

</body>