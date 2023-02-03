<?php
       
       include('connection.php');
       include('header.php');
       
?>  
<body>
	<form method="post" action="add_post.php">                        
		<input placeholder="Nome" name="nome"><br/><br/>
		<input placeholder="CNPJ" name="cnpj"><br/><br/>
		<button type="submit" class="btn btn-success">Salvar</button>&nbsp;
		<button type="reset" class="btn btn-warning">Limpar</button>&nbsp;
		<a class="btn btn-info" href="index.php">Retornar</a>
	</form>  
</body>

</html>
