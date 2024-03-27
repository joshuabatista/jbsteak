<?php

require "../config/conexao.php";

// Recupra seu carrinho via POST
$carrinho = $_POST['carrinho'] ?? [];
$cliente = $_POST['nome'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$telefone = $_POST['telefone'] ?? '';


// Validações
// Verificar se o carrinho nao está vazio, se tiver vazio retorna para o front informando que o carrinho ta vazio e nao da pra finalizar pedido
if(empty($carrinho)) {

    echo json_encode([
        'status'=> false,
        'message'=> 'Seu carrinho está vazio!'
    ]);
    
    die;

}

if(empty($cliente) || empty($endereco) || empty($telefone)) {

    echo json_encode([
        'status'=> false,
        'message'=> 'Preencha os campos necessarios!'
    ]);
    
    die;

}



// Criar um numero do pedido sempre unico e diferente  unidid();
$numeroPedido = uniqid();


// Inserir na tabela pedidos (Numero do pedido, nome cliente, endereco cliente); // Insert no banco
$sql = "INSERT INTO pedidos (numero_pedido, cliente, endereco_cliente, telefone) values (?, ?, ?, ?)";

$query = $pdo->prepare($sql);

$columns = [
    $numeroPedido, 
    $cliente, 
    $endereco,
    $telefone
];


$query->execute($columns);



// Foreach no seu carrinho

foreach ($carrinho as $key => $value) {

   $value = (object) $value;
    
    $sql = "INSERT INTO pedidos_itens (produto_id, numero_pedido, item, valor, quantidade) values (?, ?, ?, ?, ?)";

    $query = $pdo->prepare($sql);

    $columns = [
        $value->id,
        $numeroPedido,
        $value->produto,
        $value->valor,
        $value->quantidade
    ];

    $query->execute($columns);
    

}

echo json_encode([
    "status"=> true,
    "message"=> "Seu pedido foi concluido!"
]);