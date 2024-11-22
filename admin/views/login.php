<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🥷🏽nimda🥷🏽</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        background-image: url('../../admin/views/back-2.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        text-align: center;
        color: black;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        height: 100vh;
    }

    h2 {
        background: rgba(255, 255, 255, 0.657);
        margin: 0;
        color: white;
        font-weight: 600;
        font-size: 42px;
        font-family: cursive;
        padding: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px
    }

    form {
        padding: 40px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.557);
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        backdrop-filter: blur(16px);

    }

    #email,
    #senha {
        border-radius: 8px;
        border: none;
        width: calc(100% - 20px);
        font-size: 20px;
        background: rgba(0, 0, 0, 0.657);
        padding: 10px;
        color: white;
        transition: .4s;
    }

    #email:hover,
    #senha:hover {
        background: rgba(255, 255, 255);
        box-shadow: 0px 0px 8px white;
        color: black;
    }


    label {
        font-size: 35px;
        padding: 16px;
    }



    .centralizado {
        display: block;
        background: rgba(255, 255, 255, 0.357);
        color: white;
        padding: 10px 20px;
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
        
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        align-items: justify-content;
        height: calc(100vh - 20px);
        transition: .6s;

    }

    .left {
        width: calc(50% - 200px);
        padding: 0 100px;
        position: absolute;
        top: 50%;
        margin-top: -203px;
        height: 406px;
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
</style>

<body>

    <div class="container">
        <div class="left">
            <h2>Login</h2>
            <form action="" method="post">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha" required><br><br>

                <input type="submit" class="centralizado" value="Enviar" name="submit">
            </form>

            <?php if (isset($_GET['error'])): ?>
                <p style="color: red;">E-mail ou senha incorretos!</p>
            <?php endif; ?>
        </div>
    </div>



</body>

</html>