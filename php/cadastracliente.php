<?php 
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$sql = "select senha, email from usuario where senha=$senha";
	$conexao = mysqli_connect('localhost', 'root', 'usbw', 'quiz');
	if ($conexao != null) {
		mysqli_query($conexao, $sql);
		mysqli_close($conexao);
	}
	header('location: home.php');
?>
