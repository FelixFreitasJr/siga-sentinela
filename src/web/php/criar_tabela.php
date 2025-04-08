<?php
// Caminho relativo para a pasta onde o banco ficará salvo
$dbPath = __DIR__ . '/../banco/banco.sqlite';

// Cria a conexão com o banco
$db = new PDO("sqlite:$dbPath");

// Cria a tabela
$db->exec("
    CREATE TABLE IF NOT EXISTS usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome TEXT NOT NULL,
        usuario TEXT NOT NULL UNIQUE,
        senha TEXT NOT NULL,
        email TEXT NOT NULL,
        telefone TEXT,
        perfil TEXT NOT NULL,
        token_recuperacao TEXT,
        token_expira_em DATETIME
    )
");

echo "Tabela 'usuarios' criada com sucesso!";
?>
