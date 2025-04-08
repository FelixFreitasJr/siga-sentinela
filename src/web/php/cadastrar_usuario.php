<?php
require 'conexao.php';

// Pega os dados do formulário
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$perfil = $_POST['perfil'];

// Prepara o SQL
$sql = "INSERT INTO usuarios (nome, usuario, senha, email, telefone, perfil)
        VALUES (:nome, :usuario, :senha, :email, :telefone, :perfil)";

$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([
        ':nome' => $nome,
        ':usuario' => $usuario,
        ':senha' => $senha,
        ':email' => $email,
        ':telefone' => $telefone,
        ':perfil' => $perfil
    ]);
    echo "Usuário cadastrado com sucesso!";
    // Você pode redirecionar ou mostrar um link de voltar
} catch (PDOException $e) {
    echo "Erro ao cadastrar usuário: " . $e->getMessage();
}
?>
