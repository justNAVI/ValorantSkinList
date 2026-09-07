<?php

$host = "localhost";
$dbname = "ProjetoWL";
$user = "phpuser";
$pass = "707";

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // modos de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    // erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error";
}