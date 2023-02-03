<html>
	<?php
	include('connection.php');
	?>   

<body>

	<?php
	$nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];
				
	$query = "INSERT INTO fabricante
			(nome, cnpj)
			VALUES ('".$nome."','".$cnpj."')";
	mysqli_query($db,$query) or die ('Error in Database: '.mysqli_error($db));
					
	?>
	
	<script type="text/javascript">
		alert("Successfully added.");
		window.location = "index.php";
	</script>

</body>

</html>

