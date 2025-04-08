<?php
$roleEsperado = 'admin';
require_once('../php/protege_pagina.php');

require_once '../php/conexao.php'; // conecta ao banco

// Busca os usuários cadastrados
$sql = "SELECT id, nome, usuario, email, telefone, perfil FROM usuarios";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Admin - Sentinela</title>
</head>
<body>
    <h1>Painel Administrativo</h1>
    <p>Bem-vindo(a), administrador.</p>
    <a href="../page/cadastro.php">Cadastro</a>
    <a href="../php/logout.php">Sair</a>
<h2>Usuários Cadastrados</h2>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Usuário</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Perfil</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nome'] ?></td>
                        <td><?= $row['usuario'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['telefone'] ?></td>
                        <td><?= $row['perfil'] ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="6">Nenhum usuário encontrado.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
