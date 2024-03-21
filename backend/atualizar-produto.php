<?php

require "../config/conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome-produto'];
$descricao = $_POST['descricao-produto'];
$valor = $_POST['valor-produto']; 
$imagem = $_FILES['imagem'];

$valor = str_replace('R$ ','', $valor);

//validação

if (empty($nome) || empty($descricao) || empty($valor)) {

    echo json_encode([
        'status'=> false,
        'message'=> 'Preencha os campos necessarios!'
    ]);
    
    die;

}

//atualizar dados no banco de dados

$sql = "UPDATE produtos SET 
        produto = ?,
        descricao = ?,
        valor = ?
        WHERE id = ?";


$columns = [
    $nome, 
    $descricao,
    $valor,
    $id 
];

$query = $pdo->prepare($sql);

$query->execute($columns);


//faz update da foto

if (!empty($imagem['name'])) {

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

    $sql = "UPDATE produtos SET
            image = ? 
            WHERE id = ?";

    $columns = [
        $path, $id
    ];

    
    $query = $pdo->prepare($sql);

    $query->execute($columns);
}

echo json_encode([
    "status"=> true,
    "message"=> "Seu produto foi atualizado com sucesso!"
]);