<?php
session_start();
header('Content-Type: application/json');

// Usuários simulados (futuramente vamos usar banco de dados)
$usuarios = [
    ['username' => 'admin', 'password' => 'admin123', 'role' => 'admin'],
    ['username' => 'suporte', 'password' => 'suporte123', 'role' => 'suporte'],
    ['username' => 'operacional', 'password' => 'operacional123', 'role' => 'operacional']
];

// Lê dados enviados via fetch()
$dados = json_decode(file_get_contents('php://input'), true);
$username = $dados['username'];
$password = $dados['password'];

// Verifica usuário
foreach ($usuarios as $usuario) {
    if ($usuario['username'] === $username && $usuario['password'] === $password) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $usuario['role'];
        echo json_encode(['status' => 'ok', 'role' => $usuario['role']]);
        exit;
    }
}

// Se chegou aqui, login falhou
http_response_code(401);
echo json_encode(['status' => 'erro', 'mensagem' => 'Usuário ou senha inválidos']);
?>
