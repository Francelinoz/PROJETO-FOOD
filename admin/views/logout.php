<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Logout</h2>
    <form action="" method="post">
        <label for="email">Deslogar</label>
        <input type="submit" value="Deslogar" name="submit">
</body>

<?php

$usuario = new Usuario();
$usuario = $usuarios -> listarUsuarios($pdo);

Foreach($usuario as $usuario){
    echo "<br>";
    echo " ID: " . $usuario['id'];
    echo "<br>";
    echo " NOME: " . $usuario['nome'];
    echo "<br>";
    echo " NÚMERO: " . $usuario['numero'];
    echo "<br>";
    echo " EMAIL: " . $usuario['email'];
    echo "<br>";
    echo " SENHA: " . $usuario['senha'];
    echo "<br>";
}

if (isset($_POST['submit'])){
    session_start();
    session_destroy();
    header('Location: /GitHub/PROJETO-FOOD/');
}
?>

</html>




