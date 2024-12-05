<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<style>
    body {
        background-image: linear-gradient(#E68023 40%, white);
        background-repeat: no-repeat;
        margin: 0;
        font-family: sans-serif;

    }

    .menu {
        background-color: black;
        padding: 30px;
        text-align: center;

    }

    .ancora {
        color: aliceblue;
        text-decoration: none;
        font-weight: 200;
        margin: 20px;
        font-size: 18px;
    }

    .box {
        background-color: rgba(0, 0, 0, 0.400);
        color: aliceblue;
        margin: 20px;
        padding: 40px;
        border-radius: 16px;
        transition: .4s;
    }

    .box:hover {
        background-color: rgba(0, 0, 0, 0.600);

    }

    .box2 {
        background-color: white;
        color: aliceblue;
        margin: 40px;
        width: 400px;

        padding: 40px;
        border-radius: 16px;
        transition: .4s;
        box-shadow: 0px 0px 16px #E68023;
    }

    .label {
        font-size: 26px;
    }

    .centralizado {
        background: rgba(0, 0, 0, 0.600);
        color: white;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid rgba(255, 255, 255, 0.400);
    }

    .centralizado:hover {
        cursor: pointer;
    }

    .centralizado2 {
        background: #E68023;
        color: white;
        width: 100%;
        padding: 20px;
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.400)
    }

    .centralizado2:hover {
        background: #A84000;
        cursor: pointer;
        box-shadow: 0px 0px 16px #E68023;
    }
</style>

<body>
    <header>
        <nav>
            <div class="nav-bar">
                <div class="menu">
                    <ul>
                        <a href="index.php" class="ancora">Home</a>
                        <a href="#" class="ancora"> Pedidos</a>
                        <a href="#" class="ancora">Pagamento</a>
                    </ul>
                </div>
            </div>
        </nav>
        <form action="" method="post" id="form-2">
            <input type="hidden" name="id">
            <div class="container">
                <div class="box">
                    <label for="Lanche">Lanche:</label>
                    <label for="Lanche">The Tower of Babel Burger</label><br>

                    <label for="valor">Valor:</label>
                    <label for="valor">R$35</label><br>

                    <label for="Quantidade">Quantidade:</label>
                    <input type="number" id="Quantidade" name="Quantidade">

                    <input type="submit" class="centralizado" name="adicionar" value="Adicionar"><br><br>
                </div>

                <div class="box">


                    <label for="Lanche">Lanche:</label>
                    <label for="Lanche">The Atomic Burger</label><br>

                    <label for="valor">Valor:</label>
                    <label for="valor">R$28</label><br>

                    <label for="Quantidade">Quantidade:</label>
                    <input type="number" id="Quantidade" name="Quantidade">

                    <input type="submit" class="centralizado" name="adicionar" value="Adicionar"><br><br>

                </div>

                <div class="box">

                    <label for="Lanche">Lanche:</label>
                    <label for="Lanche">The Black Hole Burger</label><br>

                    <label for="valor">Valor:</label>
                    <label for="valor">R$40</label><br>

                    <label for="Quantidade">Quantidade:</label>
                    <input type="number" id="Quantidade" name="Quantidade">

                    <input type="submit" class="centralizado" name="adicionar" value="Adicionar"><br><br>
                </div>

                <div class="box">

                    <label for="Lanche">Lanche:</label>
                    <label for="Lanche">The Unicorn Burger</label><br>

                    <label for="valor">Valor:</label>
                    <label for="valor">R$22</label><br>

                    <label for="Quantidade">Quantidade:</label>
                    <input type="number" id="Quantidade" name="Quantidade">

                    <input type="submit" class="centralizado" name="adicionar" value="Adicionar"><br><br>
                </div>

                <div class="box">

                    <label for="Lanche">Lanche:</label>
                    <label for="Lanche">The Zombie Burger</label><br>

                    <label for="valor">Valor:</label>
                    <label for="valor">R$36</label><br>

                    <label for="Quantidade">Quantidade:</label>
                    <input type="number" id="Quantidade" name="Quantidade">

                    <input type="submit" class="centralizado" name="adicionar" value="Adicionar"><br><br>

                </div>

                <div class="box">

                    <label for="Lanche">Lanche:</label>
                    <label for="Lanche">The Godlike Burger</label><br>

                    <label for="valor">Valor:</label>
                    <label for="valor">R$45</label><br>

                    <label for="Quantidade">Quantidade:</label>
                    <input type="number" id="Quantidade" name="Quantidade">

                    <input type="submit" class="centralizado" name="adicionar" value="Adicionar"><br><br>


                </div>
                <div class="box2">
                    <input type="submit" class="centralizado2" name="adicionar" value="Adicionar"><br><br>

                    <input type="submit" class="centralizado2" name="pedido" value="Realizar Pedido">
                </div>

            </div>
        </form>
    </header>
</body>

</html>