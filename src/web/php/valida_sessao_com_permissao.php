<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function verificaPermissao($perfisPermitidos) {
    if (!isset($_SESSION['usuario']) || !in_array($_SESSION['perfil'], $perfisPermitidos)) {
        header("Location: ../page/acesso_negado.php");
        exit();
    }
}
?>
