<?php

	$xml = simplexml_load_file("estados.xml");
	
	?>
	
	<p class="lista">Estados cadastrados</p>
	
	<table class="tabelaLista">
	
		<thead>
		
			<tr>
				<th>Nome do Estado</th>
				<th>Unidade da Federação</th>
			</tr>
		
		</thead>
		
		<tbody>
		
				<?php
				foreach( $xml->Children() as $aux ){
					
					$estado = $aux->nome;
					$uf = $aux->uf;
					
					echo "<tr>";
					
						echo "<td>$estado</td>";
						echo "<td>$uf</td>";
					
					echo "</tr>";
					
				}
				?>
			
		</tbody>
	</table>
	
	
	
	
<?php

// ############################################################################################################################
// ############################################################################################################################
// ############################################################################################################################
	
	

	$xml = simplexml_load_file("cidades.xml");
	
	?>
	
	<p class="lista">Cidades cadastradas</p>
	
	<table class="tabelaLista">
	
		<thead>
		
			<tr>
				<th>Nome da Cidade</th>
				<th>Estado</th>
			</tr>
		
		</thead>
		
		<tbody>
		
				<?php
				foreach( $xml->Children() as $aux ){
					
					$cidade = $aux->nome;
					$estado = $aux->estado;
					
					echo "<tr>";
					
						echo "<td>$cidade</td>";
						echo "<td>$estado</td>";
					
					echo "</tr>";
				}
				?>
		</tbody>
	</table>


<?php 

// ############################################################################################################################
// ############################################################################################################################
// ############################################################################################################################
	
?>

<?php

	$xml = simplexml_load_file("cadastro.xml");
	?>
	
	<p class="lista">Pessoas cadastradas</p>
	
	<table class="tabelaLista">
	
		<thead>
		
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th>Sexo</th>
				<th>Localidade</th>
			</tr>
		
		</thead>
		
		<tbody>
		
				<?php
				foreach( $xml->Children() as $aux ){
					
					$nome 	= $aux->nome;
					$email 	= $aux->email;
					$sexo 	= $aux->sexo;
					$local 	= $aux->local;
					
					echo "<tr>";
					
						echo "<td>$nome</td>";
						echo "<td>$email</td>";
						echo "<td>$sexo</td>";
						echo "<td>$local</td>";
					
					echo "</tr>";
				}
				?>
		</tbody>
	</table>
	<br />
	<br />
	














