<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$cnpj = $_POST['cnpj'];
		
		include('connection.php');
		
		$query = 'UPDATE fabricante set nome ="'.$nome.'", 
				cnpj="'.$cnpj.'" WHERE
				id ="'.$id.'"';
		$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
		?>	

		<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
	</body>
</html>
