<?php
session_start();

// Bloqueia apenas o perfil 'operacional'
if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'operacional') {
    header("Location: ../page/acesso_negado.php");
    exit();
}

// Define o link de volta com base no perfil
$perfil = $_SESSION['perfil'] ?? '';
$linkMenu = '#';

switch ($perfil) {
    case 'adm':
        $linkMenu = '../page/admin.php';
        break;
    case 'suporte':
        $linkMenu = '../page/suporte.php';
        break;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Cadastro de Novo Usuário</h2>
    <form action="../php/processa_cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone"><br><br>

        <label for="perfil">Perfil:</label>
        <select name="perfil" id="perfil" required>
            <option value="adm">Administrativo</option>
            <option value="suporte">Suporte</option>
            <option value="operacional">Operacional</option>
        </select><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <br><br>
    <a href="<?= $linkMenu ?>"><button type="button">Voltar ao Menu</button></a>
</body>
</html>
