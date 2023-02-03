<html>
	<?php
	include('connection.php');
	?>  

	<body>

	<?php

	$query = 'DELETE FROM fabricante WHERE id = '.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
	?>
		
	<script type="text/javascript">
		alert("Successfully Deleted.");
		window.location = "index.php";
	</script>				
				
	</body>
</html>
