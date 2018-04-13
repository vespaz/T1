
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
			<legend>Gravando o Estado</legend>
			<?php 
 
				LerEstado();
			?>
		</fieldset>
	</body>
</html>