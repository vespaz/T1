<?php 
	include "funcoes.php";
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Entrada de Dados do Estado</title>
		<link rel="stylesheet" href="estilos.css">
	</head>
	<body>
		<?php 
			cabeca();
		?>
		<br /><br />
		<fieldset>
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