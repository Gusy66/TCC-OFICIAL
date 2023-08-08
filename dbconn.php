<?php
$host = "localhost"; // nome do servidor do banco de dados
$user = "root"; // usuário do banco de dados
$password = ""; // senha do banco de dados
$dbname = "pinucare"; // nome do banco de dados

// Cria a conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
