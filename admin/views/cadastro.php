<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    
    <h2>Cadastrar</h2>
    <form method="post">
        <label for="text">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="number">Número de telefone:</label><br>
        <input type="number" id="number" name="numero" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>
        
        <input type="submit" value="submit" name="submit">
    </form>        
    
</body>
</html>