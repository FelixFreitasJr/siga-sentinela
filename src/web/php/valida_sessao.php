<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header('Location: /index.html');
    exit;
}

// Verifica se o perfil tem permissão para esta página
$roleEsperado = 'admin'; // Troque para 'suporte' ou 'operacional' conforme a página
if ($_SESSION['role'] !== $roleEsperado) {
    echo "Acesso negado.";
    exit;
}