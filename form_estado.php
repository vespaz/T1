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
			<legend>Cadastro de Estado</legend>
			<?php 
				if(empty($_POST)){
					FormEstado();
				}else{
					include "cadastra_estado.php";
				}
			?>
		</fieldset>
	</body>
</html>

<footer>

	
	<?php
	
		rodape();
	
	?>

</footer>