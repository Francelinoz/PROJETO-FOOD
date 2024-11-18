<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🥷🏽nimda🥷🏽</title>
</head>
<style>
    body{
        background-image: url('admin/views/back.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        text-align: center;
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
    }
    .box{
        backdrop-filter: blur(16px);
        width: 500px;
        border-radius: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
       box-shadow: 0px 0px 16px rgba(255, 255, 255, 0.457);
    }
    h2{
        background: rgba(255, 255, 255, 0.657);
        margin: 0;
        color: white;
        font-weight: 600 ;
        font-size: 42px;
        font-family: cursive;
        padding: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px
    }
    #form{
        padding: 40px;
        text-align: left;
        border: 1px solid rgba(255, 255, 255, 0.557);
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
       
    }
    #nome{
        border-radius: 8px;
        border: none;
        width: 400px;
        font-size: 20px;
        background: rgba(255, 255, 255, 0.657);
        padding: 10px;
        color: white;
        transition: .4s;
    }
    #nome:hover{
        background: rgba(255, 255, 255);
        box-shadow: 0px 0px 8px white;
        color: black;
    }
    #email{
        border-radius: 8px;
        border: none;
        width: 400px;
        font-size: 20px;
        background: rgba(255, 255, 255, 0.657);
        padding: 10px;
        color: white;
        transition: .4s;
    }
    #email:hover{
        background: rgba(255, 255, 255);
        box-shadow: 0px 0px 8px white;
        color: black;
    }
    #telefone{
        border-radius: 8px;
        border: none;
        width: 400px;
        font-size: 20px;
        background: rgba(255, 255, 255, 0.657);
        color: white;
        padding: 10px;
        transition: .4s;
    }
    #telefone:hover{
        background: rgba(255, 255, 255);
        box-shadow: 0px 0px 8px white;
        color: black;
    }
    #senha{
        border-radius: 8px;
        border: none;
        width: 400px;
        font-size: 20px;
        background: rgba(255, 255, 255, 0.657);
        color: white;
        padding: 10px;
        transition: .4s;
    
    }
    #senha:hover{
        background: rgba(255, 255, 255);
        box-shadow: 0px 0px 8px white;
        color: black;
    }
    label{
        font-size: 35px;
        padding: 16px;
    }
    .container {
    display: flex;
    justify-content: center; 
    align-items: center; 
    
}
    .centralizado {
    display: block; 
    background: rgba(255, 255, 255, 0.357);
    color: white;
    padding: 10px 20px ;
    font-size: 18px;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.757);
    font-weight: 200;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    transition: .4s;

    }
    .centralizado:hover{
        background: rgba(255, 255, 255); 
        cursor: pointer;
        color:black;
        font-size: 20px;
        border-radius: 18px;
    }
</style>

<body>
    <div class="box">
        <h2>Cadastrar</h2>
        <form id="form" action="" method="post">

            <label for="nome">Nome</label><br>
            <input type="nome" id="nome" name="nome" required><br><br>

            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="telefone">Telefone</label><br>
            <input type="telefone" id="telefone" name="telefone" required><br><br>
            
            <label for="senha">Senha</label><br>
            <input type="password" id="senha" name="senha" required><br><br>
            <div class="container">
                <input type="submit" class="centralizado" name="cadastrar" value="Enviar">
            </div>
        </form>       
    </div>
         
 
    
</body>
</html>