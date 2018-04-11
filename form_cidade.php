<?php 
	include "funcoes.php";
?>
<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<title>Cadastro das cidades</title	
	</head>
	
	<body>	
		<fieldset>		
			<legend>Cadastro de cidades</legend>					
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