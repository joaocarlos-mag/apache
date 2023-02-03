<?php
       include('header.php');
       include('connection.php');
?>
<body>
<h1>
      <a class="nav-link" href="produtosAdd.php">Adicionar Produto</a>
    </h1>
	<table class="table table-striped table-hover"> 
		<thead>
			<tr>
				<th>Nome</th>
				<th>Valor</th>
                <th>Fabricante</th>
				<th>Detalhes</th>
				<th>Editar</th>
				<th>Remover</th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			$query = 'SELECT produto.id, produto.titulo, produto.valor, fabricante.nome from produto inner join fabricante
			on produto.id_fabricante = fabricante.id';
			$result = mysqli_query($db, $query) or die (mysqli_error($db));

			while ($row = mysqli_fetch_assoc($result)) {
                                
				echo '<tr>';
					echo '<td>'. $row['titulo'].'</td>';
					echo '<td> R$ '. $row['valor'].'</td>';
                    echo '<td>'. $row['nome'].'</td>';
					echo '<td>';
						echo '<a href="produtosDetail.php?id='.$row['id'].'" >Detalhes</a><br/>';
					echo '</td>';
					echo '<td>';
						echo '<a href="produtosEdit.php?id='.$row['id'].'">Editar</a><br/>';
					echo '</td>';
					echo '<td>';
						echo '<a href="produtosRemove.php?id='.$row['id'].'">Remover</a>';
					echo '</td>';
					
				echo '</tr> ';
			}
			?> 
                                    
		</tbody>
	</table>

</body>

</html>
