<?php
$user = "";//Nome de Usuário
$pass = "";//Senha do Banco de Dados
$data = "mysql:dbname=NOME_DO_BANCO;host=localhost;charset=utf8";

global $pdo;

try {
    $pdo = new PDO($data, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    return $erro->getMessage();
    exit;
}

