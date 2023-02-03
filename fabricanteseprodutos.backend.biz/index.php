<?php
	include('connection.php');
	include('header.php');
?>  
<body>
<h1>
      <a class="nav-link" href="add.php">Adicionar Fabricante</a>
    </h1>
	<table class="table table-striped table-hover"> 
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>CNPJ</th>
				<th>Detalhes</th>
				<th>Editar</th>
				<th>Remover</th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			$query = 'SELECT * FROM fabricante';
			$result = mysqli_query($db, $query) or die (mysqli_error($db));

			while ($row = mysqli_fetch_assoc($result)) {
                                
				echo '<tr>';
					echo '<td>'. $row['id'].'</td>';
					echo '<td>'. $row['nome'].'</td>';
					echo '<td>'. $row['cnpj'].'</td>';
					echo '<td>';
						echo '<a href="detail.php?id='.$row['id'].'" >Detalhes</a><br/>';
					echo '</td>';
					echo '<td>';
						echo '<a href="edit.php?id='.$row['id'].'">Editar</a><br/>';
					echo '</td>';
					echo '<td>';
						echo '<a href="remove.php?id='.$row['id'].'">Remover</a>';
					echo '</td>';
					
				echo '</tr> ';
			}
			?> 
                                    
		</tbody>
	</table>

</body>

</html>
