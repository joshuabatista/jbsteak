<?php

require "../config/conexao.php";

$numero_pedido = $_GET['id'];

$sql =  "SELECT pe.*, p.image foto  
        FROM pedidos_itens pe
        JOIN produtos p ON p.id = pe.produto_id
        WHERE pe.numero_pedido = '$numero_pedido'";


$query = $pdo->query($sql);

$itens = $query->fetchAll(PDO::FETCH_OBJ);

echo json_encode([
    'status' => true,
    'data' => $itens
]);

