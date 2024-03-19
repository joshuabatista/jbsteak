<?php

require "../config/conexao.php";

// Recupera valores

$produto = $_POST['produto'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$imagem = $_FILES['image'];

// Validações



$path = "../images/" . $imagem['name'];

$upload = move_uploaded_file($imagem['tmp_name'], $path); 

if(!$upload) {
    echo json_encode([
        'status' => false,
        'message' => 'Erro ao upar foto'
    ]);
    die;
}

$path =  substr($path, 1);

$sql = "INSERT INTO produtos (produto, tipo, descricao, valor, `image`) VALUES ('$produto', '$tipo', '$descricao', '$valor', '$path')";

$data = $pdo->query($sql);

echo json_encode([
    'status' => true,
    'message' => "Produto cadastrado com sucesso!"
]);


