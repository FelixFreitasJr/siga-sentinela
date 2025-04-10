<?php
session_start();

// Verifica se usuário está logado
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header('Location: /index.html');
    exit;
}

// Verifica se o perfil é o esperado
if (!isset($roleEsperado) || $_SESSION['role'] !== $roleEsperado) {
    header('Location: /index.html');
    exit;
}
