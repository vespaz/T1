<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Entrada de Dados do Estado</title>
	</head>
	<body>
		<fieldset>
			<legend>Cadastro de Estado</legend>
			<form action="cadastra_estado.php" method="post">
					
					<label>Nome do Estado: </label>
					<input type="text" name="nome"/>
					<br />
					<br />
					
					<label>Sigla: </label>
					<input type="text" name="uf"/>
					<br />
					<br />
					
					<input type="submit" value="Enviar"/>
			</form>
		</fieldset>
	</body>
</html>