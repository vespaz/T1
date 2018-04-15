<!DOCTYPE html>
<?php 
	include "funcoes.php";
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Cadastro de Pessoas</title>
		<link rel="stylesheet" href="estilos.css"/>
	</head>
	<body class="bodyCadastro">
		<?php 
			cabeca();
		?>
		<br /><br />
		<fieldset class="fieldset">
			<legend>Cadastro de Pessoas</legend>
			<?php 
				LerCadastroUsuario();
			?>
		</fieldset>
	</body>
</html>

<footer>

	
	<?php
	
		rodape();
	
	?>

</footer>