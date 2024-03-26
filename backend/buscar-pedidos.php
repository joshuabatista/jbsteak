<?php

require "../config/conexao.php";

$sql = "SELECT *
        FROM pedidos p";

$query = $pdo->query($sql);

$pedidos = $query->fetchAll(PDO::FETCH_OBJ);

foreach ($pedidos as $key => $pedido) {
   
    $sql = "SELECT SUM(valor) valor
            FROM pedidos_itens
            WHERE numero_pedido = '$pedido->numero_pedido'
            GROUP BY numero_pedido";

    $query = $pdo->query($sql);

    $pedido->valor_total = (Float) $query->fetchColumn();

    $pedidos[$key] = $pedido; 
}



echo json_encode([
    'status'=> true,
    'data' => $pedidos
]);