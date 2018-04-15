<!DOCTYPE html>
<?php 
	include "funcoes.php";
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Cadastro de Cidade</title>
		<link rel="stylesheet" href="estilos.css"/>
	</head>
	<body class="bodyCidade">
		<?php
		
			cabeca();
			
		?>
		<br /><br />
		<fieldset class="fieldset">
			<legend>Gravando o Cidades</legend>
			<?php 
 
				LerCidade();
				
			?>
		</fieldset>
	</body>
</html>

<footer>

	
	<?php
	
		rodape();
	
	?>

</footer>