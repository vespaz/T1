<!DOCTYPE html>

<?php 
	include "funcoes.php";
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Cadastro de Estado</title>
		<link rel="stylesheet" href="estilos.css"/>
	</head>
	<body class="bodyEstado">
		<?php 
			cabeca();
		?>
		<br /><br />
		<fieldset class="fieldset">
			<legend>Gravando Estado</legend>
			<?php 
 
				LerEstado();
			?>
		</fieldset>
	</body>
</html>

<footer>

	
	<?php
	
		rodape();
	
	?>

</footer>