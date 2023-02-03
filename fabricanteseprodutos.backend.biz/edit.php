
<?php
	include('connection.php');
	include('header.php');
?>  
<body>

	<?php 
	$query = 'SELECT * FROM fabricante WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while($row = mysqli_fetch_array($result)) {

		$id= $row['id'];
		$nome= $row['nome'];
		$cnpj=$row['cnpj'];
	}
              
	?>

	<h2>Edit Record</h2>

	<form method="post" action="edit_post.php">
                            
	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input placeholder="Nome" name="nome" value="<?php echo $nome; ?>"><br/><br/>
		<input placeholder="CNPJ" name="cnpj" value="<?php echo $cnpj; ?>"><br/><br/>
		<button type="submit" class="btn btn-success">Atualizar</button>&nbsp;
		<a href="index.php">Voltar</a>

	</form>  
</body>

</html>

