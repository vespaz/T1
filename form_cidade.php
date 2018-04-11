<!DOCTYPE html>

<html lang="pt-BR">

	<head>
	
		<meta charset="UTF-8" />
		<title>Cadastro das cidades</title>
	
	</head>
	
	<body>
	
		<fieldset>
		
			<legend>Cadastro de cidades</legend>
		
			<?php if(file_exists("estados.xml")){  ?>
	
				<form action="cadastra_cidade.php" method="post">
				
					<label>Escolha o estado:</label>
				
					<select name="estado">
				
						<?php
						
							$xml = simplexml_load_file("estados.xml");
							
							foreach( $xml->Children() as $aux ){
								
								$estado = $aux->nome;
								
								echo "<option value=\"$estado\"> $estado </option>";
								
							}
						
						?>
					
					</select>
					<br /><br />
			
					<label>Digite o nome da cidade: </label>
					<input type="text" name="cidade" /> <br /><br />
					
					<input type="submit" value="Enviar" />
			
				</form>
			
			<?php
				}else{
				
					echo "Desculpe, mas ainda não há Estados cadastrados.<br /><br />";
					echo "<a href=\"form_estado.php\">Cadastrar estado</a>";
				
				}
			?>
			
		</fieldset>
	
	</body>

</html>