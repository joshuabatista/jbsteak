<?php   

require "../config/conexao.php";

session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

if (!$email || !$senha) {

    echo json_encode([
        'status'=> false,
        'message'=> 'Preencha os campos!'
    ]);
    
    die;
} 

//verifico no banco minhas credenciais

$sql = "SELECT * FROM login_usuario WHERE email = '$email' AND senha = '$senha'";
$result = $pdo->query($sql);


if ($result->rowCount() > 0) {

    $row = $result->fetch(PDO::FETCH_ASSOC);

    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];

    
} else{

    echo json_encode([
        'status' => false,
        'message' => 'Email ou senha incorretos.' 
    ]);

    die;

}

echo json_encode([
    'status' => true,
    'message' => 'Logado com sucesso!' 
]);

