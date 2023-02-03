<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
		$id = $_POST['id'];
		$titulo = $_POST['titulo'];
		$valor = $_POST['valor'];
		$id_fabricante = $_POST['id_fabricante'];
		
		include('connection.php');
		
		$query = 'UPDATE produto set titulo ="'.$titulo.'", valor ="'.$valor.'", id_fabricante ="'.$id_fabricante.'" WHERE
				id ="'.$id.'"';
		$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
		?>	

		<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "produtosIndex.php";
		</script>
	</body>
</html>
