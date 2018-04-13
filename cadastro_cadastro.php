<?php 
	include "funcoes.php";
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Entrada de Dados do Usuario</title>
		<link rel="stylesheet" href="estilos.css">
	</head>
	<body>
		<?php 
			cabeca();
		?>
		<br /><br />
		<fieldset>
			<legend>Cadastro de Usuário</legend>
			<?php 
				LerCadastroUsuario();
			?>
		</fieldset>
	</body>
</html>