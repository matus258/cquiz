<?php

$servername = "mysql.hostinger.co.uk";
$database = "u266072517_name";
$username = "u266072517_user";
$password = "buystuffpwd";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Erro na conexão: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$dataNascimento = $_POST['dataNascimento'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];


$sql = "INSERT INTO usuario (nome, email, cpf, dataNascimento, sexo, telefone, senha) 
    VALUES($nome, $email, $cpf, $dataNascimento, $sexo, $telefone, $senha)";
if (mysqli_query($conn, $sql)) {
      echo "Cadastrado com sucesso";
} else {
      echo "Error ao cadastrar: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>