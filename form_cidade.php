<!DOCTYPE html>
<?php 
	include "funcoes.php";
?>

<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<title>Cadastro das Cidades</title>
		<link rel="stylesheet" href="estilos.css"/>		
	</head>
	
	<body class="bodyCidade">
		<?php 
			cabeca();
		?>
		<br /><br />
		<fieldset class="fieldset">		
			<legend>Cadastro de Cidades</legend>
			<?php 
				if(empty($_POST)){
					FormCidade();
				}else{
					include "cadastra_cidade.php";
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