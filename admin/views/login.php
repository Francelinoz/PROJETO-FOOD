<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🥷🏽nimda🥷🏽</title>
</head>
<body>
    
    <h2>Login</h2>
    <form action="" method="post">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>
        
        <input type="submit" value="Enviar" name="submit">
    </form>        
    
    <?php if (isset($_GET['error'])): ?>
        <p style="color: red;">E-mail ou senha incorretos!</p>
    <?php endif; ?>

</body>
</html>