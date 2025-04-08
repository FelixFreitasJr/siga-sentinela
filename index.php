<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/web/css/style.css">
    <link rel="shortcut icon" href="src/web/img/orbe.png" type="image/x-icon">
    <title>Login - Sentinela</title>
    <style>
        .error {
            color: red;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-container">
            <a href="https://www.ini.fiocruz.br/"><img src="src/web/img/inicio.png" alt="Imagem Principal"></a>
        </div>
        <div class="login-container">
            <h2>Sentinela</h2>
            <form id="loginForm">
                <label for="username">Usuário:</label>
                <input type="text" name="username" id="username" required>
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" required>
                <button type="button" onclick="login()">Logar</button>
                <div class="forgot-password">
                    <a href="#">Esqueci a senha</a>
                </div>
            </form>
            <div id="errorContainer" class="error"></div>
        </div>
    </div>
    <footer>
        Desenvolvido por <a href="https://www.linkedin.com/in/felixfreitasjr/" target="_blank">Felix Freitas Jr</a>
        <br>
        Veja mais no <a href="https://github.com/felixfreitasjr" target="_blank">GitHub</a> | <a href="https://github.com/FelixFreitasJr/sentinela" target="_blank">Documentação do Projeto</a>
    </footer>

    <script src="src/web/js/login.js"></script>

</body>
</html>
