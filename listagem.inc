<?php

	$xml = simplexml_load_file("estados.xml");
	?>
	
	<p>Estados</p>
	
	<table>
	
		<thead>
		
			<tr>
				<td>Nome do Estado</td>
				<td>Unidade da Federação</td>
			</tr>
		
		</thead>
		
		<tbody>
		
			<tr>
				<?php
				foreach( $xml->Children() as $aux ){
					
					$estados = $aux->nome;
					$uf = $aux->uf;
					
					echo "<td>$estado</td>";
					echo "<td>$uf</td>";
					
				}
				?>
			</tr>
		</tbody>
	</table>
<?php

// ############################################################################################################################
// ############################################################################################################################
// ############################################################################################################################
	
?>

<?php

	$xml = simplexml_load_file("cidade.xml");
	?>
	
	<p>Cidades</p>
	
	<table>
	
		<thead>
		
			<tr>
				<td>Nome da Cidade</td>
				<td>Estado</td>
			</tr>
		
		</thead>
		
		<tbody>
		
				<?php
				foreach( $xml->Children() as $aux ){
					
					$cidade = $aux->cidade;
					$estado = $aux->estado;
					
					echo "<tr>";
					
						echo "<td>$cidade</td>";
						echo "<td>$estado</td>";
					
					echo "</tr>";
				}
				?>
		</tbody>
	</table>

















