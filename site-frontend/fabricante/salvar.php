<?php
	include("../config.php");
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO fabricantes 
						(nome)
					VALUES
						('".$_POST["nome"]."')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				//print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='fabricantes.php';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar.');</script>";
				print "<script>location.href='fabricantes.php';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE fabricantes SET
						nome='".$_POST["nome"]."'
					WHERE
						id=".$_POST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				//print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='fabricantes.php';</script>";
			}else{
				print "<script>alert('Não foi possível editar.');</script>";
				print "<script>location.href='fabricantes.php';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM fabricantes WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				//print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='fabricantes.php';</script>";
			}else{
				print "<script>alert('Não foi possível excluir.');</script>";
				print "<script>location.href='fabricantes.php';</script>";
			}
			break;
	}
?>