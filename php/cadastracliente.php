<?php 
	$mat = $_POST['matricula'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$datnas = $_POST['datanasc'];
	$sql = "insert into alunos values ($mat, $nome, $email, $datnas)";
	$conexao = mysqli_connect('localhost', 'root', 'josefa', 'cquiz');
	if ($conexao != null) {
		mysqli_query($conexao, $sql);
		mysqli_close($conexao);
	}
	header('location: home.php');
?>
