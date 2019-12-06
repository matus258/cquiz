<?php 
ini_set('display_errors', 1);
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$sql = "select senha, email from usuario where senha=$senha and email=$email";
	$conexao = mysqli_connect('127.0.0.1', 'root', 'josefa', 'cquiz');
	echo("teste");
	if ($conexao != null) {
		echo("test");
		$test=mysqli_query($conexao, $sql);
		echo($test);
		mysqli_close($conexao);
	}
	#header('location: home.php');
?>
