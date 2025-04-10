<?php
session_start();
// if (!isset($_SESSION['username']) || !isset($_SESSION['perfil'])) {
//     // header("Location: acesso_negado.php");
//     exit();
// }
$nomeUsuario = $_SESSION['nome'] ?? $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Dashboard - Sentinela</title>
</head>
<body>
    <div class="container-menu">
    <div class="image-container-menu">
        <img src="../img/CAPA_SENTINELA_CENTRO_HOSPITALAR_COVID-19.jpg" alt="Imagem Principal"></a>
    </div><!--image-container-menu-->


    
    

    <div class="container-navbar">
        <div class="navbar">
            <ul>
                <li><a href="menu.php">Home</a></li>
                <li><a href="admin.php">Gerenciamento</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="suporte.php">Configurações</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="operacional.php">Solicitações</a></li>
               <li><a href="../php/logout.php">Sair</a></li>
            </ul>
        </div><!--navbar-->
    </div><!--container-navbar-->

    <div class="container-username">
        <h2>Bem-vindo, <?= ($_SESSION['username']) ?>!</h2>
    </div> <!--container-username-->
    
    <div class="container-dashboard">
        <p>Selecione uma opção no menu para começar.</p>
        
    </div><!--container-dashboard-->

    </div><!--container-->
        
        
    
    <footer>
        Desenvolvido por <a href="https://www.linkedin.com/in/felixfreitasjr/" target="_blank">Felix Freitas Jr</a>
        <br>
        Veja mais no <a href="https://github.com/felixfreitasjr" target="_blank">GitHub</a> | <a href="https://github.com/FelixFreitasJr/sentinela" target="_blank">Documentação do Projeto</a>
    </footer>
</body>
</html>
