<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21179032_banco_jogobdd"; // usuário do MySQL
$pass = "Evc25884d33*"; // senha do MySQL
$dbname = "id21179032_banco_jogobdd"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
