<?php

$servername = "127.0.0.1";
$database = "quiz";
$username = "root";
$password = "usbw";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

echo($nome.'-'.$email.'-'.$cpf.'-'.$dataNascimento.'-'.$sexo.'-'.$telefone.'-'.$senha);
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


$sql = "INSERT INTO usuario (id,nome, email, cpf, dataNasc, sexo, telefone, senha) 
    VALUES(3,'$nome', '$email', '$cpf', STR_TO_DATE('$dataNascimento','%Y-%m-%d'), '$sexo', '$telefone', '$senha')";
if (mysqli_query($conn, $sql)) {
      echo "Cadastrado com sucesso";
      header("Location: http://localhost/FATEC/PPI/P2/php/home.php"); 
} else {
      echo "Error ao cadastrar: " . $sql . "<br>" . mysqli_error($conn);
      echo "<br/><a href='http://localhost/FATEC/PPI/P2/php/home.php'>Home</a>";
}
mysqli_close($conn);
?>