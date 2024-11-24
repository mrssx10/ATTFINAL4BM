<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contatos";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$sql = "INSERT INTO formulario_contato (nome, email, assunto, mensagem) 
        VALUES ('$nome', '$email', '$assunto', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
