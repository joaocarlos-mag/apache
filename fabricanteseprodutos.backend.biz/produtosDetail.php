<?php
       include('connection.php');
       include('header.php');
?>  
<body>
	<?php 
	$query = 'SELECT * FROM produto WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	while($row = mysqli_fetch_array($result)) {

		$id = $row['id'];
                $titulo = $row['titulo'];
                $valor = $row['valor'];   
				$id_fabricante = $row['id_fabricante'];   
  	}
              
	?>

	<h2>Detalhes do produto</h2>
	<table class="table table-bordered table-dark"> 
		<tbody>
			<tr>
				<td><strong>ID:</strong></td>
				<td><?php echo $id; ?></td>
			</tr>
			<tr>
				<td><strong>Nome:</strong></td>
				<td><?php echo $titulo; ?></td>
			</tr>
			<tr>
				<td><strong>Valor:</strong></td>
				<td><?php echo $valor; ?></td>
			</tr>
			<tr>
				<td><strong>ID do Fabricante:</strong></td>
				<td><?php echo $id_fabricante; ?></td>
			</tr>
		</tbody>
	</table>
	<a href="produtosIndex.php">Return</a></td>

</body>

</html>

