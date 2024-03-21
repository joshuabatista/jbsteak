<?php

require "../config/conexao.php";

$id = $_POST['id'];
$status = $_POST['status'];

$status = $status == 0 ? 1 : 0; //invertendo o status 


$sql = "UPDATE produtos 
        SET status = ? 
        WHERE id = ?";


$query = $pdo->prepare($sql);
$query->execute([$status, $id]);


if ($query->rowCount() > 0) {
    echo json_encode([
        "status" => true,
        "message" => "Status do lanche atualizado com sucesso!"
    ]);
} else {
    echo json_encode([
        "status" => false,
        "message" => "Erro ao atualizar o status do lanche!"
    ]);
}
