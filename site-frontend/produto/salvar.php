<?php
	include("../config.php");
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO produtos 
						(nome, id_fabricante)
					VALUES
						('".$_POST["nome"]."', '".$_POST["id_fabricante"]."')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				//print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar.');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE produtos SET
						nome='".$_POST["nome"]."',
						id_fabricante='".$_POST["id_fabricante"]."'					
					WHERE
						id=".$_POST["id"];
				$res = $conn->query($sql) or die($conn->error);
				if($res==true){
					//print "<script>alert('Cadastrou com sucesso!');</script>";
					print "<script>location.href='produtos.php';</script>";
				}else{
					print "<script>alert('Não foi possível cadastrar.');</script>";
					print "<script>location.href='produtos.php';</script>";
				}
				break;			

		case 'excluir':
			$sql = "DELETE FROM produtos WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				//print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}else{
				print "<script>alert('Não foi possível excluir.');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
			break;
	}
?>