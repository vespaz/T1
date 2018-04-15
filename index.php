<!DOCTYPE html>

<?php 
	include "funcoes.php";
?>

<html lang="pt-br">

<head>

	<meta charset="UTF-8" />
	<title>Página inicial</title>
	<link rel="stylesheet" href="estilos.css" />
	
</head>

<body class="bodyIndex">
	<?php 
		cabeca();
	?>
	<br /><br />
	
	<fieldset class="fieldset">
	
		<legend>Tabelas de cadastros</legend>
		
		<?php
		
			if( file_exists("cadastro.xml")){
			
				include "listagem.inc";
			
			}else{
				
				echo "<p class='mensagemErro'>";
					echo "Desculpe, mas ainda não é possível mostrar as tabelas por falta de dados. <br />";
					echo "Cadastre pelo menos um Estado, uma Cidade e uma Pessoa. <br /><br />";
				echo "</p>'";
				
			}
		
		?>
	
	</fieldset>

</body>

<footer>

	
	<?php
	
		rodape();
	
	?>

</footer>