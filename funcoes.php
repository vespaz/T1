<?php 
	function FormEstado(){
		?>
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
		<?php
	}
	
	function LerEstado(){
		$nome = $_POST["nome"];
		$uf = $_POST["uf"];
		
		if(!file_exists("estados.xml")){
			$xml = "<?xml version='1.0' encoding='UTF-8'?>
			
			<estados>
				<estado>
					<nome>$nome</nome>
					<uf>$uf</uf>
				</estado>
			</estados>";
			
			file_put_contents("estados.xml", $xml);
		}else{
			$xml = simplexml_load_file("estados.xml");
			
			$estado = $xml->addChild('estado');
			
			$estado->addChild('nome', $nome);
			$estado->addChild('uf', $uf);
			
			file_put_contents("estados.xml", $xml->asXML());
		}
		
		echo "<h1>Estado Cadastrado!!</h1>";
		
		echo "<a href='form_estado.php'>Cadastro Estado</a>";
		echo "<br />";
		echo "<br />";
		
		echo "<a href='form_cadastro.php'>Cadastro Usuario</a>";
	}	
	
	function FormUsuario(){
		
		if(file_exists("cidades.xml")){
		?>
		<form action="form_cadastro.php" method="post">
				
						<label>Nome: </label>
						<input type="text" name="nome"/>
						<br />
						<br />
						
						<label>Email: </label>
						<input type="text" name="email"/>
						<br />
						<br />
						
						<label>Sexo: </label>
						<input type="radio" name="sexo" value="masculino" checked />Masculino
						<input type="radio" name="sexo" value="feminino"/>Feminino
						<br />
						<br />
						
						<label>Cidade/Estado: </label>
						<select name="city/uf">
							
							<?php 
								if(file_exists("cidades.xml")){
									$xml = simplexml_load_file("cidades.xml");
									
									foreach($xml->children() as $aux){
										$cityUf = $aux->cidade; /* ajeitar esse parte do codigo*/
									
										echo "<option value='$cityUf'>$cityUf</option>";
									}
								}
							?>
						</select>
						<br />
						<br />	
						
						<input type="submit" value="Enviar"/>
					</form>
		<?php
		}else{
			echo "Desculpe, mas inda não há Cidades cadastradas";
			echo "<br />";
			echo "<br />";
			echo "<a href='form_cidade.php'>Cadastrar Cidade</a>";
		}
	}
	
	function LerFormUsuario(){
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$sexo = $_POST["sexo"];
		$city = $_POST["city"];
		
		if(!file_exists("cadastro.xml")){
			$xml = "<?xml version='1.0' encoding='UTF-8'?>
				
				<usuarios>
					<usuario>
						<nome>$nome</nome>
						<email>$email</email>
						<sexo>$sexo</sexo>
						<city>$city</city>
					</usuario>
				</usuarios>
			";
			
			file_put_contents("cadastro.xml", $xml);
		}else{
			$xml = simplexml_load_file("cadastro.xml");
			$usuario = $xml->addChild('usuario');
			
			$usuario->addChild('nome', $nome);
			$usuario->addChild('email', $email);
			$usuario->addChild('sexo', $sexo);
			$usuario->addChild('city', $city);
			
			file_put_contents("cadastro.xml", $xml->asXML());
		}
		echo "<h1>Usuario Cadastrado !!</h1>";
		
		echo "<a href='form_cadastro.php'>Cadastro Usuario</a>";
		
		echo "<br />";
		echo "<br />";
		echo "<a href='form_estado.php'>Cadastro Estado</a>";
	}
?>