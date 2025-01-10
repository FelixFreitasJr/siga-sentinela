<?php
session_start();
include 'db_connect.php';

$username = $_POST['username'];
$email_domain = '@ini.fiocruz.br';  // Defina o domínio do email institucional
$email = $username . $email_domain;
$senha = $_POST['password'];

function verificar_usuario($conn, $email, $senha) {
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senha'])) {
        return $user;
    }
    return false;
}

$user = verificar_usuario($conn, $email, $senha);
if ($user) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user['nome'];
    $_SESSION['nivel'] = $user['nivel'];
    echo "<script>
            sessionStorage.setItem('loggedin', 'true');
            window.location.href = '/src/web/page/dashboard.html';
          </script>";
} else {
    echo "<script>
            alert('Credenciais inválidas!');
            window.location.href = '/index.html';
          </script>";
}
?>

