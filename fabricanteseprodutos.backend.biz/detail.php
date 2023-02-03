<?php
       include('connection.php');
       include('header.php');
?>  
<body>
	<?php 
	$query = 'SELECT * FROM fabricante WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	while($row = mysqli_fetch_array($result)) {

		$id = $row['id'];
                $nome = $row['nome'];
                $cnpj = $row['cnpj'];      
  	}
              
	?>

	<h2>Detalhes do fabricante</h2>
	<table class="table table-bordered table-dark"> 
		<tbody>
			<tr>
				<td><strong>ID:</strong></td>
				<td><?php echo $id; ?></td>
			</tr>
			<tr>
				<td><strong>Nome:</strong></td>
				<td><?php echo $nome; ?></td>
			</tr>
			<tr>
				<td><strong>CNPJ:</strong></td>
				<td><?php echo $cnpj; ?></td>
			</tr>
		</tbody>
	</table>
	<a href="index.php">Return</a></td>

</body>

</html>

