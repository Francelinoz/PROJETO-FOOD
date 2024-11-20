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

include_once '../constrollers/UsuarioController.php';


$usu = new UsuarioController();
$usuarios = $usu -> listaUsuarios($pdo);

foreach($usu as $usu){
    echo "<br>";
    echo " ID: " . $usu['id'];
    echo " NOME: " . $usu['nome'];
    echo " NÚMERO: " . $usu['numero'];
    echo " EMAIL: " . $usu['email'];
    echo " SENHA: " . $usu['senha'];
    echo "<a href='excluir-usuario?id=" . $usu['id'] . "'>  DELETE</a>";
    echo "<br>";
}

if (isset($_POST['submit'])){
    session_start();
    session_destroy();
    header('Location: /GitHub/PROJETO-FOOD/');
}
?>

</html>




