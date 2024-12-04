<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
</head>

<body>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-image: url('views/back-3.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            text-align: center;
            color: black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            height: 100vh;
        }

        h2 {
            background: rgba(0, 0, 0);
            margin: 0;
            color: white;
            font-weight: 600;
            font-size: 42px;
            font-family: sans-serif;
            padding: 20px;

        }


        /* FORMULARIO 1*/
        .container {
            margin: 0 0px 40px;
            transition: .6s;
            display: flex;
            flex-wrap: nowrap;
            flex-direction: row;
            justify-content: flex-end;
            align-items: center;

        }

        #form {
            padding: 40px;
            text-align: left;
            color: white;
            border: 0px solid rgba(255, 255, 255, 0.557);
            border-bottom-left-radius: 100%;
            border-bottom-right-radius: 0;
            background: rgba(0, 0, 0, 0.500);



        }

        .icon {
            background-image: url('views/icons8-logout-50 (1).png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            width: 40px;
            height: 40px;
        }

        #btt-1 {
            border-radius: 60px;
            border: 0px;
            box-shadow: inset 0px 0px 8px black;
            background: rgba(0, 0, 0, 0.257);
            padding: 10px;
            margin: 0 10px;
            transition: .5s;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        #btt-1:hover {
            cursor: pointer;
            background: rgba(255, 255, 255, 0.557);
            box-shadow: 0px 0px 8px white;
            color: white;
            border: 1px solid white;


        }

        label {
            font-weight: 200;
            font-size: 35px;
            padding: 16px;
        }

        /************************************ */
        #nome {
            border-radius: 8px;
            border: none;
            width: 400px;
            font-size: 20px;
            background: rgba(0, 0, 0, 0.657);
            padding: 10px;
            color: white;
            transition: .4s;
        }

        #nome:hover {
            background: rgba(255, 255, 255);
            box-shadow: 0px 0px 8px white;
            color: black;
        }

        #email {
            border-radius: 8px;
            border: none;

            font-size: 20px;
            background: rgba(0, 0, 0, 0.657);
            padding: 10px;
            color: white;
            transition: .4s;
        }

        #email:hover {
            background: rgba(255, 255, 255);
            box-shadow: 0px 0px 8px white;
            color: black;
        }

        #numero {
            border-radius: 8px;
            border: none;

            font-size: 20px;
            background: rgba(0, 0, 0, 0.657);
            color: white;
            padding: 10px;
            transition: .4s;
        }

        #numero:hover {
            background: rgba(255, 255, 255);
            box-shadow: 0px 0px 8px white;
            color: black;
        }

        #senha {
            border-radius: 8px;
            border: none;

            font-size: 20px;
            background: rgba(0, 0, 0, 0.657);
            color: white;
            padding: 10px;
            transition: .4s;

        }

        #senha:hover {
            background: rgba(255, 255, 255);
            box-shadow: 0px 0px 8px white;
            color: black;
        }

        #saldo {
            border-radius: 8px;
            border: none;

            font-size: 20px;
            background: rgba(0, 0, 0, 0.657);
            color: white;
            padding: 10px;
            transition: .4s;

        }

        #saldo:hover {
            background: rgba(255, 255, 255);
            box-shadow: 0px 0px 8px white;
            color: black;
        }

        .left {
            width: calc(50% - 200px);
            padding: 0 100px;
            position: absolute;
            top: 40%;
            margin-top: -180px;
            padding-bottom: 283px;
            text-align: left;
            height: 406px;

        }

        .tt {
            display: flex;
            text-indent: 20px;
            padding: 10px;
            background: black;
            color: #FAC02F;
            font-weight: 100;
        }

        .icon-2 {
            background-image: url('views/icons8-registration-32.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            width: 40px;
            height: 40px;

        }

        #form-2 {
            padding: 10px;
            text-align: left;
            border: 1px solid rgba(255, 255, 255, 0.557);
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            backdrop-filter: blur(16px);
            display: grid;
            align-content: center;
            justify-content: start;
            align-items: center;
            justify-items: stretch;

        }

        .centralizado {

            background: rgba(255, 255, 255, 0.357);
            color: white;
            padding: 10px;
            margin: 20px 20px 0;
            font-size: 18px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.757);
            font-weight: 200;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            transition: .4s;
            width: 50%;
        }

        .centralizado:hover {
            background: rgba(255, 255, 255);
            cursor: pointer;
            color: black;
            font-size: 20px;
            border-radius: 18px;
            box-shadow: 0px 0px 10px 4px white;

        }

        .box-sal {
            border: 1px solid rgba(255, 255, 255, 0.486);
            max-width: 400px;
            float: right;
            margin: 20px;
            padding: 40px;
            background: rgba(0, 0, 0, 0.657);
            color: white;
            border-radius: 16px;

        }


        @media (max-width: 1366px) {
            .left {
                width: calc(60% - 150px);
                padding: 0 75px;
            }
        }

        @media (max-width: 1024px) {
            .left {
                width: calc(100% - 100px);
                padding: 0 50px;
            }
        }

        @media (max-width: 768px) {

            .left {
                width: calc(100% - 20px);
                padding: 0 10px;
            }


        }

        #texto {
            text-decoration: none;
            color: white;
            background: rgba(0, 0, 0);
            margin: 0;
            font-weight: 600;
            font-size: 42px;
            font-family: sans-serif;
            padding: 20px;
        }
    </style>
    <h2><a id="texto" href="/GitHub/PROJETO-FOOD/">PERFIL</a></h2>
    <form action="" method="post" id="form">
        <div class="container">
            <div class="icon"> </div>
            <label for="email" id="h1">Aperte aqui para sair da conta</label>
            <input type="submit" id="btt-1" value="Deslogar" name="logout">
        </div>
    </form>
    <div class="left">
        <div class="tt">
            <div class="icon-2"></div>
            <h1>Editar Usuário</h1>
        </div>
        <form action="" method="post" id="form-2">
            <input type="hidden" name="id" value="<?= $id ?>">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?= $nome ?>">

            <label for="numero">Número:</label>
            <input type="text" id="numero" name="telefone" value="<?= $telefone ?>">

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?= $email ?>">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" value="<?= $senha ?>">

            <input type="submit" class="centralizado" name="salvar" value="Salvar Usuário">
            <input type="submit" class="centralizado" name="excluir" value="Excluir Usuário">
    </div>
    <div class="box-sal">
        <label for="saldo">Saldo:</label>
        <input type="number" id="saldo" name="saldo" value="<?= $saldo ?>">
    </div>

    </form>

</body>

</html>