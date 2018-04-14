
<?php 
	include "funcoes.php";
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Entrada de Dados do Estado</title>
		<link rel="stylesheet" href="estilos.css"/>
	</head>
	<body class="bodyEstado">
		<?php 
			cabeca();
		?>
		<br /><br />
		<fieldset class="fieldset">
			<legend>Gravando o Estado</legend>
			<?php 
 
				LerEstado();
			?>
		</fieldset>
	</body>
</html>