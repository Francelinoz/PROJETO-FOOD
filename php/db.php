<?php
$host = 'localhost';
$dbname = 'bugerbliss';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO(dsn: "mysql:host=$host;dbname=$dbname;charset=utf8", username: $user, password: $pass);
    $pdo->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
    //echo "Conexão com o banco de dados estabelecida com sucesso.";
} catch (PDOException $e) {
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
}
?>