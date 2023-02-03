<?php
       
       include('connection.php');
       include('header.php');
       
?>  
<body>
	<form method="post" action="produtosAdd_post.php">                        
		<input placeholder="Titulo" name="titulo"><br/><br/>
		<input placeholder="Valor" name="valor"><br/><br/>
        <input placeholder="ID do Fabricante" name="id_fabricante"><br/><br/>
		<button type="submit" class="btn btn-success">Save Record</button>&nbsp;
		<button type="reset" class="btn btn-warning">Clear Entry</button>&nbsp;
		<a class="btn btn-info" href="index.php">Return</a>
	</form>  
</body>

</html>
