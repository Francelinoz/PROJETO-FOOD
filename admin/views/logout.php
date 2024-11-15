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
if (isset($_POST['submit'])){
    session_start();
    session_destroy();
    header('Location: /GitHub/PROJETO-FOOD/');
}
?>

</html>




