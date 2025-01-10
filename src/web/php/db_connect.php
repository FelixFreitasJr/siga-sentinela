<?php
$host = 'aws-0-sa-east-1.pooler.supabase.com';
$db = 'postgres';
$user = 'postgres.orxxwpwkdqfkicsjrnux';
$pass = 'suporte@123';  // Substitua [YOUR-PASSWORD] pela senha correta que você configurou
$port = '6543';  // Porta fornecida

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Conexão bem-sucedida
    echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {
    echo 'Falha na conexão: ' . $e->getMessage();
}
?>
