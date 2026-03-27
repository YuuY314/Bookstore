<?php
$host = "localhost";
$dbname = "bookstore";
$user = "admin";
$pass = "314159265";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conectado com sucesso!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>