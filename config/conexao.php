<?php

$hostname = 'localhost';
$database = 'cardapio';
$username = 'root';
$password = '';

$dsn = "mysql:host=$hostname;dbname=$database";


$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Modo de erro: exceções
    PDO::ATTR_EMULATE_PREPARES => false); // Desativar emulação de prepared statements

$pdo = new PDO($dsn, $username, $password, $options);