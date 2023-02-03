
<?php
	include('connection.php');
	include('header.php');
?>  
<body>

	<?php 
	$query = 'SELECT * FROM produto WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while($row = mysqli_fetch_array($result)) {

		$id= $row['id'];
		$titulo= $row['titulo'];
		$valor= $row['valor'];
		$id_fabricante= $row['id_fabricante'];
	}
              
	?>

	<h2>Edit Record</h2>

	<form method="post" action="produtosEdit_post.php">
                            
	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input placeholder="Nome" name="titulo" value="<?php echo $titulo; ?>"><br/><br/>
		<input placeholder="Valor" name="valor" value="<?php echo $valor; ?>"><br/><br/>
		<input placeholder="Valor" name="id_fabricante" value="<?php echo $id_fabricante; ?>"><br/><br/>
		
		<button type="submit" class="btn btn-success">Atualizar</button>&nbsp;
		<a href="produtosIndex.php">Voltar</a>

	</form>  
</body>

</html>

