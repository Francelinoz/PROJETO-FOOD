<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#62280a" />
    <title>Burguer Bliss</title>
    <link rel="shortcut icon" href="./img/logo1.png" type="./img/icon-web.png">
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /-->
    <link rel="stylesheet" href="swiper-bundle.min.css">

    <link rel="stylesheet" href="style.css">



</head>

<body>
    <header>
        <nav>
            <div class="nav-bar">
                <input type="checkbox" id="toggle-menu">
                <div class="menu">
                    <label for="toggle-menu">x</label>
                    <ul>
                        <a href="#home" class="ancora">Home</a>
                        <a href="#pratos" class="ancora">Pratos</a>
                        <a href="#chef" class="ancora">Chef</a>
                        <a href="#cardapio" class="ancora">Cardápio</a>
                        <a href="#endereco" class=" ancora">Endereço</a>

                    </ul>
                </div>
                <img src="./img/logo1.png" alt="" class="logo1">
                <div class="links">


                    <a href="#home" class="ancora-1">Home</a>
                    <a href="#pratos" class="ancora-1">PF</a>
                    <a href="#chef" class="ancora-1">Chef</a>
                    <a href="#cardapio" class="ancora-1">Cardápio</a>
                    <a href="#endereco" class=" ancora-1">Endereço</a>
                    <a href="#redes" class="ancora-2">Sobre</a>
                    <?php

                    if(isset($_SESSION['nome'])){
                        echo '<a href="admin/perfil" class="ancora-3">Olá, '.$_SESSION['nome'].'</a>';
                    }else{
                        echo '<a href="admin/login" class="ancora-3">Login</a>';
                        echo '<a href="admin/cadastrar-usuario" class="ancora-4">cadastro</a>';
                    }
                    ?>


                </div>
            </div>
        </nav>
    </header>
    <main class="main">
        <section id="home">
            <div class="conteudo-1">

                <div class="text-cont-1">
                    <h1 class="titulo-1">BURGUER</h1>
                    <h1 class="titulo-1-2">BLISS</h1>
                    <p class="para-2">No Burguer Bliss, cada mordida é uma experiência gastronômica. Venha nos visitar e
                        descubra por que somos o destino número um para os amantes de hambúrguer no bairro. Ambiente
                        acolhedor, serviço atencioso e sabores irresistíveis esperam por você!</p>
                    <p class="para-1">O melhor hambúrguer do pedaço.</p>
                </div>

                <img src="./img/prod1.png" alt="produto-1" class="foto-1">
            </div>
        </section>

        <section id="pratos">

            <div class="conteudo-2">
                <div class="text-cont-2">
                    <h1 class="titulo-2">Pratos Principais</h1>
                    <p class="para-3">Não perca a chance de saborear nossos hambúrgueres artesanais preparados com
                        ingredientes frescos e de alta qualidade. Venha ao Burguer Bliss hoje e experimente o verdadeiro
                        paraíso gastronômico!</p>
                </div>
                <div class="pratos">
                    <div class="prato-1">
                        <img src="./img/prato-1.jpg" alt="prato1" class="prato1">
                        <h2 class="nome-prato">The Atômic Burger</h2>

                        <p class="dec-prato">Se você está procurando um hambúrguer que irá desafiar seus limites e
                            deixar um rastro de sabor inesquecível, então o Atomic Burger é a escolha perfeita. Esteja
                            preparado para uma experiência verdadeiramente atômica!</p>
                    </div>

                    <div class="prato-2">
                        <img src="./img/prato-2.jpg" alt="prato52" class="prato2">
                        <h2 class="nome-prato">The Black Hole Burger</h2>

                        <p class="dec-prato">Prepare-se para uma jornada gastronômica ao desconhecido com o Black Hole
                            Burger. Este hambúrguer enigmático é tão escuro e misterioso quanto o próprio buraco negro,
                            prometendo uma aventura de sabor que irá desafiar seus sentidos.</p>
                    </div>

                    <div class="prato-3">
                        <img src="./img/prato-3.jpg" alt="prato3" class="prato3">
                        <h2 class="nome-prato">The Godlike Burger</h2>

                        <p class="dec-prato">Imagine uma suculenta carne bovina, moída a partir do gado mais sagrado e
                            alimentada com ambrosia. Cada mordida é uma explosão de sabor, realçada por uma sinfonia de
                            especiarias celestiais e molhos divinos.</p>
                    </div>
                </div>
            </div>

        </section>
        <section id="chef">
            <h1 class="first-title">CHEFE DE COZINHA</h1>
            <div class="conteudo-3">

                <div class="text-cont-3">
                    <h1 class="nome-chef">JENNIFER </h1>
                    <h1 class="nome-chef-2">GENEVIÈVE</h1>
                    <p class="quali-1">Jennifer Geneviève é uma talentosa chefe de cozinha que trabalha na hamburgueria
                        Burger Bliss há quatro anos. Apaixonada por ingredientes frescos e sabores ousados, ela criou um
                        menu que agrada a todos os paladares.</p>
                    <p class="quali-1">Jennifer começou sua jornada culinária ajudando sua avó a preparar refeições
                        tradicionais francesas. Após se formar na escola de culinária, trabalhou em vários restaurantes
                        renomados, onde aprimorou suas habilidades e aprendeu com os melhores chefs do setor.</p>
                </div>


            </div>

        </section>

        <section id="cardapio" class="swiper mySwiper">
            <h1 class="title-cardapio">Cardápio</h1>
            <p class="para-cardapio">Explore nosso cardápio e prepare-se para uma experiência culinária inesquecível.
                Estamos ansiosos para atendê-lo e tornar sua refeição um momento especial.</p>
            <div class="cardapio-container swiper-wrapper">


                <div class="slide swiper-slide" style="text-align: center">
                    <img src="./img/torre.jpg" alt="" class="burguer1">
                    <h2 class="tt-img">The Tower of Babel Burger </h2>
                    <p class="desc-burguer">Um hambúrguer com várias camadas de carne,
                        queijo e coberturas, empilhadas tão alto quanto a lendária torre.</p>
                    <p class="desc-burguer-bolder">R$ 35,00</p>
                    <a href="comprar.php" class="desc-burguer-2">COMPRAR</a>
                </div>

                <div class="slide swiper-slide" style="text-align: center">
                    <img src="./img/prato-1.jpg" alt="burguer1" class="burguer2">
                    <h2 class="tt-img">The Atomic Burger</h2>
                    <p class="desc-burguer">Um hambúrguer picante que fará seu paladar explodir como
                        uma bomba atômica.</p>
                    <p class="desc-burguer-bolder">R$ 28,00</p>
                    <a href="comprar.php" class="desc-burguer-2">COMPRAR</a>
                </div>

                <div class="slide swiper-slide" style="text-align: center">
                    <img src="./img/prato-2.jpg" alt="" class="burguer3">
                    <h2 class="tt-img">The Black Hole Burger</h2>
                    <p class="desc-burguer">Um hambúrguer tão escuro e misterioso quanto um
                        buraco negro, com uma mistura secreta de especiarias e molhos.</p>
                    <p class="desc-burguer-bolder">R$ 40,00</p>
                    <a href="comprar.php" class="desc-burguer-2">COMPRAR</a>
                </div>

                <div class="slide swiper-slide" style="text-align: center"> 
                    <img src="./img/uni.jpg" alt="" class="burguer4">
                    <h2 class="tt-img">The Unicorn Burger</h2>
                    <p class="desc-burguer">Um hambúrguer mágico e colorido, coberto com
                        ingredientes únicos e extravagantes.</p>
                    <p class="desc-burguer-bolder">R$ 22,00</p>
                    <a href="comprar.php" class="desc-burguer-2">COMPRAR</a>
                </div>

                <div class="slide swiper-slide" style="text-align: center">
                    <img src="./img/zumbi.jpg" alt="" class="burguer5">
                    <h2 class="tt-img">The Zombie Burger</h2>
                    <p class="desc-burguer">Um hambúrguer assustadoramente delicioso, servido em um
                        pão preto com olhos de queijo e uma boca de ketchup.</p>
                    <p class="desc-burguer-bolder">R$ 36,00</p>
                    <a href="comprar.php" class="desc-burguer-2">COMPRAR</a>
                </div>

                <div class="slide swiper-slide" style="text-align: center">
                    <img src="./img/prato-3.jpg" alt="" class="burguer6">
                    <h2 class="tt-img">The Godlike Burger</h2>
                    <p class="desc-burguer">O hambúrguer mais delicioso e supremo do universo,
                        feito com os melhores ingredientes e preparado com maestria divina.</p>
                    <p class="desc-burguer-bolder">R$ 45,00</p>
                    <a href="comprar.php" class="desc-burguer-2">COMPRAR</a>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>

        </section>
        <section id="endereco">
            <div class="conteudo-5">
                <div class="txt-cont-5">
                    <h1 class="tt-cont-5">FEEDBACK</h1>
                    <p class="para-cont-5">Endereço da loja fisica: Rua dos Sabores, 123 Bairro da Fome São Paulo - SP CEP: 01234-567</p>

                    <form class="formulario" method="post" action="" name="url">

                        <h2 class="titulo">Caixa de mensagem</h2>

                        <label class="label">

                            <input type="text" class="input-bordas" placeholder="Nome" required="">
                            <span class="focus-border"> <i></i> </span>

                        </label>

                        <label class="label">

                            <input type="text" class="input-bordas" placeholder="E-mail" required="">
                            <span class="focus-border"> <i></i> </span>

                        </label>


                        <label class="naoexibir">
                            <span>Não preencher:</span><br>
                            <input type="text" name="url" value=""></p>
                        </label>

                        <label class="label">

                            <textarea type="text" class="input-bordas textarea" rows="4" placeholder="Assunto"
                                required=""></textarea>
                            <span class="focus-border"> <i></i> </span>

                        </label>

                        <button class="button-form borda-inversa"> Enviar</button>


                    </form>
                </div>
                <div class="mapa">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14631.83320240231!2d-46.59118441011851!3d-23.53400216665319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ee7acdd50f5%3A0x3eeaf24eff368507!2zVGF0dWFww6ksIFPDo28gUGF1bG8gLSBTUA!5e0!3m2!1spt-BR!2sbr!4v1719895155156!5m2!1spt-BR!2sbr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
                </div>

            </div>
        </section>



    </main>
    <footer class="rodape" id="redes">
        <div class="rodape-div">

            <div class="rodape-div-1">
                <div class="rodape-div-1-coluna">
                    <!-- elemento -->
                    <h1 class="tt-p1">BURGUER BLISS</h1>
                    <p class="pp-p1">Rua dos Sabores, 123 Bairro da Fome São Paulo - SP CEP: 01234-567</p>
                </div>
            </div>

            <div class="rodape-div-2">
                <div class="rodape-div-2-coluna">
                    <!-- elemento -->
                    <h1 class="tt-p2">Contatos</h1>
                    <p>miguelsf806@gmail.com</p>
                    <p>edomenicalipeixoto@gmail.com</p>
                </div>
            </div>

            <div class="rodape-div-3">
                <div class="rodape-div-3-coluna">
                    <!-- elemento -->
                    <h1>Links</h1>
                    <p><a href="#">Serviços</a></p>
                    <p><a href="#">Empresa</a></p>
                    <p><a href="#">Sobre</a></p>
                </div>
            </div>

            <div class="rodape-div-4">
                <div class="rodape-div-4-coluna">
                    <!-- elemento -->
                    <h1>Outros</h1>
                    <a href="#" class="link-priv">Políticas de Privacidade</a>
                </div>
            </div>

        </div>
        <p class="rodape-direitos">Copyright © 2024 – Todos os Direitos Reservados.</p>
    </footer>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>