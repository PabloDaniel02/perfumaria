
<!DOCTYPE html>

<html>
	<head>
	<meta charset="UTF-8">
		<title> SALUDYBLO </title>

<?php
	
	$host = "localhost";
	$banco = "perfumaria";
	$urs = "root";
	$pwd = "";
	try{
		$conn = new PDO("mysql:host=$host;dbname=$banco", $urs, $pwd);
		echo "conectou";
		}catch(PDOException $e){
			echo "Erro de conexão!:<br>". $e->getMessage();
			
		}
?>
<?
		echo $_POST['nome'];
		echo $_POST['sobrenome'];
		echo $_POST['e-mail'];
		echo $_POST['conf'];
		echo $_POST['senha'];
		echo $_POST['confsenha'];


?>