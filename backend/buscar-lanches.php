<?php

require "../config/conexao.php";

$sql = "SELECT * FROM produtos";

$query = $pdo->query($sql);

$data = $query->fetchAll(PDO::FETCH_OBJ);

echo json_encode($data);