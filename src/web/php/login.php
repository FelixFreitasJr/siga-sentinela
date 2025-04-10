<?php
session_start();
header('Content-Type: application/json');

// Simulando um "banco de dados" de usuários (futuramente substituído por um banco real)
$usuarios = [
    ['username' => 'admin', 'password' => 'admin123', 'role' => 'admin', 'nome' => 'Administrador'],
    ['username' => 'suporte', 'password' => 'suporte123', 'role' => 'suporte', 'nome' => 'Equipe de Suporte'],
    ['username' => 'operacional', 'password' => 'operacional123', 'role' => 'operacional', 'nome' => 'Usuário Operacional']
];

// Recebe os dados enviados via fetch()
$dados = json_decode(file_get_contents('php://input'), true);
$username = $dados['username'] ?? '';
$password = $dados['password'] ?? '';

// Verifica credenciais
foreach ($usuarios as $usuario) {
    if ($usuario['username'] === $username && $usuario['password'] === $password) {
        // Salva dados na sessão
        $_SESSION['username'] = $usuario['username'];
        $_SESSION['role'] = $usuario['role'];
        $_SESSION['nome'] = $usuario['nome']; // Para exibir no menu

        // Retorna sucesso para o JavaScript redirecionar para menu.php
        echo json_encode(['status' => 'ok']);
        exit;
    }
}

// Credenciais inválidas
http_response_code(401);
echo json_encode(['status' => 'erro', 'mensagem' => 'Usuário ou senha inválidos']);
?>
