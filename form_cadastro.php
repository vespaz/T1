<?php 
	include "funcoes.php";
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Entrada de Dados do Usuario</title>
	</head>
	<body>
		<fieldset>
			<legend>Cadastro de usuario</legend>
			<?php 
				if(empty($_POST)){
					FormUsuario();
				}else{
					LerFormUsuario();
				}
			?>
		</fieldset>
	</body>
</html>