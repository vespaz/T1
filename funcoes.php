<?php 
// ############################################## Cadastrado Estado

	function FormEstado(){
		?>
		<form action="cadastra_estado.php" method="post" class="formEstado" >
					
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
		
		echo "<p class='linkMensagem'>";
		
			echo "<a href='form_estado.php'>Cadastro Estado</a>";
			echo "<br />";
			echo "<br />";
			
			echo "<a href='form_cidade.php'>Cadastro Cidade</a>";
			echo "<br />";
			echo "<br />";
			
			echo "<a href='form_cadastro.php'>Cadastro Usuario</a>";
		
		echo "</p>";
	}

// ###########################################  Cadastrado Cidade
	
	function FormCidade(){
		if(file_exists("estados.xml")){  
			?>
				<form action="cadastra_cidade.php" method="post" class="formCidade">
				
					<label>Escolha o estado:</label>
					
					<select name="estado">	
					
						<?php	
						
							$xml = simplexml_load_file("estados.xml");
							
							foreach( $xml->Children() as $aux ){								
								$uf = $aux->uf;
								
								echo "<option value=\"$uf\"> $uf </option>";
								
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
				
					echo "<p class='mensagemErro'>";
						echo "Desculpe, mas ainda não há Estados cadastrados";
						echo "<br />";
						echo "<br />";
					echo "</p>";
					
					echo "<p class='linkMensagem'>";
						echo "<a href=\"form_estado.php\">Cadastrar estado</a>";
					echo "</p>";
		}	
	}
	
	function LerCidade(){
		$cidade = $_POST["cidade"];
		$estado = $_POST["estado"];
		
		if( !file_exists("cidades.xml") ){
			
			$xml = "<?xml version='1.0' encoding='UTF-8' ?>
			
			<cidades>
				<cidade>
					<nome>$cidade</nome>
					<estado>$estado</estado>
				</cidade>
			</cidades>";
			
			file_put_contents("cidades.xml", $xml);
			
		}else{
			
			$xml = simplexml_load_file("cidades.xml");
			
			$aux = $xml->addChild("cidade");
			
			$aux->addChild('nome', $cidade);
			$aux->addChild('estado', $estado);
			
			file_put_contents("cidades.xml", $xml->asXML());
			
		}
		
		echo "<h1>Cidade Cadastrada !!</h1>";
		
		echo "<p class='linkMensagem'>";
		
			echo "<a href='form_estado.php'>Cadastro Estado</a>";
			echo "<br />";
			echo "<br />";
			
			echo "<a href='form_cidade.php'>Cadastro Cidade</a>";
			echo "<br />";
			echo "<br />";
			
			echo "<a href='form_cadastro.php'>Cadastro Usuario</a>";
		echo "</p>";
	}	

	
// 	################################################ Cadastrado Usuario

	function FormUsuario(){
		
		if(file_exists("cidades.xml")){
		?>
		<form action="cadastro_cadastro.php" method="post" class="formUsuario">
				
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
						<select name="local">
							
							<?php
								$xml = simplexml_load_file("cidades.xml");
								
								foreach($xml->Children() as $aux){
								
									$city = $aux->nome;
									$uf = $aux->estado;
									
									echo "<option value='" . $city . " / " . $uf . "'> " . $city . " / " . $uf . "</option>";
									
								}
							?>
						</select>
						<br />
						<br />	
						
						<input type="submit" value="Enviar"/>
					</form>
		<?php
		}else{
			echo "<p class='mensagemErro'>";
				echo "Desculpe, mas inda não há Cidades cadastradas";
				echo "<br />";
				echo "<br />";
			echo "</p>";
			
			echo "<p class='linkMensagem'>";
				echo "<a href='form_cidade.php'>Cadastrar Cidade</a>";
			echo "</p>";
		}
	}
	
	function LerCadastroUsuario(){
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$sexo = $_POST["sexo"];
		$local = $_POST["local"];
		
		if(!file_exists("cadastro.xml")){
			$xml = "<?xml version='1.0' encoding='UTF-8'?>
				
				<usuarios>
					<usuario>
						<nome>$nome</nome>
						<email>$email</email>
						<sexo>$sexo</sexo>
						<local>$local</local>
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
			$usuario->addChild('local', $local);
			
			file_put_contents("cadastro.xml", $xml->asXML());
		}
		echo "<h1>Usuario Cadastrado !!</h1>";
		
		echo "<p class='linkMensagem'>";
			echo "<a href='form_estado.php'>Cadastro Estado</a>";
			echo "<br />";
			echo "<br />";
			
			echo "<a href='form_cidade.php'>Cadastro Cidade</a>";
			echo "<br />";
			echo "<br />";
			
			echo "<a href='form_cadastro.php'>Cadastro Usuario</a>";
			
		echo "</p>";

	}
	
	
// ################################ function cabeca
	function cabeca(){
		?>
		
		<p class="linkabeca">
			<a href="index.php">Pagina Inicial</a> |
			<a href="form_estado.php">Cadastrar Estado</a> |
			<a href="form_cidade.php">Cadastrar Cidade</a> |
			<a href="form_cadastro.php">Cadastro Usuário</a> 
		</p>
		<?php
	}
?>