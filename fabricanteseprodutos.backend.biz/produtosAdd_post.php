<html>
	<?php
	include('connection.php');
	?>   

<body>

	<?php
	$titulo = $_POST['titulo'];
	$valor = $_POST['valor'];
    $id_fabricante = $_POST['id_fabricante'];
				
	$query = "INSERT INTO produto
			(titulo, valor, id_fabricante)
			VALUES ('".$titulo."','".$valor."','".$id_fabricante."')";
	mysqli_query($db,$query) or die ('Error in Database: '.mysqli_error($db));
					
	?>
	
	<script type="text/javascript">
		alert("Successfully added.");
		window.location = "produtosIndex.php";
	</script>

</body>

</html>

