<?php 

$username = "root";
$password = '';
$banco    = "aula";
$host     = "127.0.0.1";

try{
    $conexao = new PDO("mysql:host={$host}; dbname={$banco}", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro: {$e->getMessage()}";
}