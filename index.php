<!doctype html>

<html lang="pt-br">
<?php require('model/session.php');?>
<head>
    <link rel="icon" type="imagem/png" href="imagens/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap1.css">
    <link href="css/bootstrap2.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>BP Esportes</title>
</head>

<body>

    <!--Menu----------------------------------------------------------->

    <div class="topnav nav justify-content-end">
        <a class="active" href="index.php">Home</a>
     
        <?php if($_SESSION['autenticado']=='nao'){ ?>
              
        <a href="view/cadastrar.php">Cadastrar</a>
        <a href="view/login.php">Login</a>
                      
          <?php } else {?>
                              
                  <div style="  color:pink; float:left; margin:1%;"><?php print_r('Bem vindo, '.$_SESSION['user']); ?></div>
                    <a href="controller/Autenticado.php">Sair</a> 
                     
                  <?php } ?>
                  <a href="view/carrinho.php">Carrinho</a>
    </div>


    <!------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="principal">

        <div class="corpo">

            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagens/S??o Paulo Carrossel.jpg" alt="S??o Paulo Camisa" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/tenis.jpg" alt="Tenis" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/NBA Carrossel.png" alt="NBA" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/Treino Carrossel.png" alt="Treino Carrossel" width="1100" height="500">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>


            <div class="conteiner-prod">

                <img src="imagens/Frete Gratis.png" width="100%">
 
            
            <!--------------------------------------------------------------------------------------------------------------------------->

            <?php

                   /* require("coneccao.php");
                    $sql = "SELECT * FROM produto";
                    $qr = mysqli_query($conexao,$sql);
                      
                    while($ln = mysqli_fetch_assoc($qr)){
                        
                        
                        echo '<div class="produto">';
                        echo '<a href="view/produto.php?acao=add&id='.$ln['idProduto'].'">';
                        //echo '<a href="view/produto.php?acao=add&id='.$ln['idProduto'].'">Comprar</a>';
                        echo '<img width="120%" src="imagens/'.$ln['nome'].'.png" />';
                        echo '</a>';
                        echo '<p class="prod-paragrafo">'.$ln['nome'].'</p>';
                        echo '<p class="text-success">FRETE GR??TIS</p>';
                        echo '<p class="pre??o1">'.number_format($ln['valor']+100, 2, ',', '.').'</p>';
                        echo '<p class="pre??o2">'.number_format($ln['valor'], 2, ',', '.').'</p>';
                        echo '<p class="pre??o3">4x de '.($ln['valor']/4).'</p>';
                       
                     
                        
                        echo '</div>';
                        
                       }*/

                    ?>


                <div class="produto">
                    <a href="view/produto.php?acao=add&id=1"><img src="imagens/United1.png" width="120%"
                            style="clear: both;"></a>
                    <div class="text-prod">
                        <p class="prod-paragrafo">Camisa Manchester United Third 20/21 s/n?? Torcedor Adidas</p>
                        <p class="text-success">FRETE GR??TIS</p>
                        <p class="pre??o1">R$ 279,99</p>
                        <p class="pre??o2">R$ 189,99</p>
                        <p class="pre??o3">4x de R$ 47,50</p>

                    </div>
                </div>

                <div class="produto">
                    <a href="view/produto.php?acao=add&id=2"><img src="imagens/SaoPaulo1.png" width="120%"></a>

                    <div class="text-prod">
                        <p class="prod-paragrafo">Camisa do S??o Paulo I 2021 adidas - Masculina</p>
                        <br>
                        <p class="text-success">FRETE GR??TIS</p>
                        <p class="pre??o1">R$ 279,99</p>
                        <p class="pre??o2">R$ 229,99</p>
                        <p class="pre??o3">7x R$ 32,86</p>

                    </div>
                </div>

                <div class="produto">
                    <a href="view/produto.php?acao=add&id=3"><img src="imagens/TenisAsics1.png" width="120%"></a>

                    <div class="text-prod">
                        <p class="prod-paragrafo">T??nis Asics Patriot 12 Noosa - Masculino</p>
                        <br>
                        <p class="text-success">FRETE GR??TIS</p>
                        <p class="pre??o1">R$ 279,99</p>
                        <p class="pre??o2">R$ 199,99</p>
                        <p class="pre??o3"> 6x R$ 33,33</p>

                    </div>
                </div>
                <div class="produto">
                <a href="view/produto.php?acao=add&id=10"><img src="imagens/TenisrevolutionM1.png" width="120%"></a>

                    <div class="text-prod">
                        <p class="prod-paragrafo">T??nis Nike Revolution 5 - Masculino</p>
                        <br>
                        <p class="text-success">FRETE GR??TIS</p>
                        <p class="pre??o1">R$ 329,99</p>
                        <p class="pre??o2">R$ 229,99</p>
                        <p class="pre??o3"> 7x de R$ 32,86 </p>

                    </div>
                </div>
                <div class="produto">
                    <a href="view/produto.php?acao=add&id=4"><img src="imagens/Basquete1.png" width="120%"></a>

                    <div class="text-prod">
                        <p class="prod-paragrafo">Bola de Basquete Spalding Fastbreak NBA 7</p>
                        <br>
                        <p class="text-success">FRETE GR??TIS</p>
                        <p class="pre??o1">R$ 200,99</p>
                        <p class="pre??o2">R$ 129,90</p>
                        <p class="pre??o3">4x de R$ 32,50</p>

                    </div>
                </div>
                <div style="clear: both;"></div>

            </div>
            <br>
            <h1>Chegou na BP esportes</h1>
            <br>
            <div class="barner">
                <img src="imagens/Banner fila Classic court.jpg" width="32%" style="margin-left: 1.5%;">
                <img src="imagens/Banner Chuteira Messi.jpg" width="32%">
                <img src="imagens/Banner Bike eletrica.png" width="32%">
            </div>
            <br>
            <div class="produto">
            <a href="view/produto.php?acao=add&id=5"><img src="imagens/Whey1.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo">Whey Protein Optimum Nutrition 100% Whey Gold Standard - Chocolate Mint -
                        2,27kg</p>
                    <p class="text-success">FRETE GR??TIS</p>
                    <p class="pre??o1">R$ 819,54</p>
                    <p class="pre??o2">R$ 710,11</p>
                    <p class="pre??o3">12x de R$ 59,18</p>

                </div>
            </div>

            <div class="produto">
            <a href="view/produto.php?acao=add&id=6"><img src="imagens/Mochila1.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo">Mochila Nike Elemental 2.0 LBR - 21 Litros</p>
                    <br><br><br>
                    <p class="text-success">FRETE GR??TIS</p>
                    <p class="pre??o1">R$ 159,99</p>
                    <p class="pre??o2">R$ 119,99</p>
                    <p class="pre??o3">4x de R$ 30,00</p>

                </div>
            </div>
            <div class="produto">
            <a href="view/produto.php?acao=add&id=7"><img src="imagens/Bolachampions1.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo">Bola de Futebol de Campo adidas UEFA Champions League Istanbul 20</p>
                    <br><br>
                    <p class="text-success">FRETE GR??TIS</p>
                    <p class="pre??o1">R$ 259,99</p>
                    <p class="pre??o2">R$ 199,00</p>
                    <p class="pre??o3">6x de R$ 33,17</p>

                </div>
            </div>

            <div class="produto">
            <a href="view/produto.php?acao=add&id=8"><img src="imagens/TenisrevolutionF1.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo">T??nis Nike Revolution 5 Ext - Feminino</p>
                    <br><br><br>
                    <p class="text-success">FRETE GR??TIS</p>
                    <p class="pre??o1">R$ 329,99</p>
                    <p class="pre??o2">R$ 229,99</p>
                    <p class="pre??o3">7x de R$ 32,86</p>

                </div>
            </div>
            <div class="produto">
            <a href="view/produto.php?acao=add&id=9"> <img src="imagens/Psg1.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo">Camisa PSG III 20/21 Nike - Masculina</p>
                    <br><br><br>
                    <p class="text-success">FRETE GR??TIS</p>
                    <p class="pre??o1">R$ 279,99</p>
                    <p class="pre??o2">R$ 199,99
                    </p>
                    <p class="pre??o3">6x de R$ 33,33</p>

                </div>
            </div>

            

            <img src="imagens/Moda Fitness.png" width="100%">

            <br>
            <br>
            <h1 class="Titulo">Camisetas de Futebol ?? na BP Esportes</h1>
            <br>
            <br>
            <img src="imagens/Promo camisetas.jpg" class="promo-camisetas">
            <!--***********************************************************************************************-->

            <div class="produto2">
            <a href="view/produto.php?acao=add&id=11"><img src="imagens/Liverpool1.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo2">Camisa Liverpool I 20/21 Nike Masculina</p>

                    <p class="p1">R$ 249,99</p>
                    <p class="p2">R$ 202,99

                    </p>
                    <p class="p3">6x de R$ 33,83</p>

                </div>
            </div>


            <div class="produto2">
            <a href="view/produto.php?acao=add&id=12"><img src="imagens/Psgi1.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo2">Camisa PSG I 20/21 Nike Masculina</p>

                    <p class="p1">R$ 279,99</p>
                    <p class="p2">R$ 199,99
                    </p>
                    <p class="p3">6x de R$ 33,33</p>

                </div>
            </div>

            <div class="produto2">
            <a href="view/produto.php?acao=add&id=13"><img src="imagens/Camisa Chelsea 1 2021 Nike Masculina.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo2">Camisa Chelsea I 20/21 Nike Masculina</p>

                    <p class="p1">R$ 279,99</p>
                    <p class="p2">R$ 199,99

                    </p>
                    <p class="p3">6x de R$ 33,83</p>

                </div>
            </div>


            <div class="produto2">
            <a href="view/produto.php?acao=add&id=14"><img src="imagens/Camisa Real Madrid I 2021.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo2">Camisa Real Madrid I 20/21</p>

                    <p class="p1">R$ 249,99</p>
                    <p class="p2">R$ 212,99

                    </p>
                    <p class="p3">6x de R$ 30,43</p>

                </div>
            </div>

            <div class="produto2">
            <a href="view/produto.php?acao=add&id=15"><img src="imagens/Bayern1.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo2">Camisa Bayern de Munique I 20/21</p>

                    <p class="p1">R$ 300,00</p>
                    <p class="p2">R$ 279,99


                    </p>
                    <p class="p3">9x de R$ 31,11</p>

                </div>
            </div>

            <div class="produto2">
            <a href="view/produto.php?acao=add&id=16"><img src="imagens/M_United1.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo2">Camisa Manchester United I adidas 20/21 - Masculina</p>

                    <p class="p1">R$ 279,99</p>
                    <p class="p2">R$ 179,99</p>
                    <p class="p3">6x R$ 30,00 </p>

                </div>
            </div>

            <div class="produto2">
            <a href="view/produto.php?acao=add&id=17"><img src="imagens/Camisa Juventus 1 2021 adidas - Masculina.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo2">Camisa Juventus I 20/21 adidas - Masculina</p>

                    <p class="p1">R$ 249,999</p>
                    <p class="p2">R$ 149,99</p>
                    <p class="p3">5x R$ 30,00 </p>

                </div>
            </div>

            <div class="produto2">
            <a href="view/produto.php?acao=add&id=18"><img src="imagens/City1.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo2">Camisa Manchester City II 20/21 Puma - Masculina</p>

                    <p class="p1">R$ 249,99</p>
                    <p class="p2">R$ 189,99</p>
                    <p class="p3">6x R$ 31,66</p>

                </div>
            </div>

            <div class="produto2">
            <a href="view/produto.php?acao=add&id=19"><img src="imagens/Camisa Barcelona 1 2021 Nike - Masculina.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo2">Camisa Barcelona I 20/21 Nike - Masculina</p>

                    <p class="p1">R$ 279,99</p>
                    <p class="p2">R$ 199,99</p>
                    <p class="p3">6x R$ 33,33</p>

                </div>
            </div>

            <div class="produto2">
            <a href="view/produto.php?acao=add&id=20"><img src="imagens/Arsenal1.png" width="120%"></a>

                <div class="text-prod">
                    <p class="prod-paragrafo2">Camisa Arsenal II 20/21 adidas - Masculina</p>

                    <p class="p1">R$ 279,99</p>
                    <p class="p2">R$ 179,99</p>
                    <p class="p3">6x R$ 30,00</p>

                </div>
            </div>
            <div style="clear: both;"></div>
            <br><br><br>
        </div>
        <br><br><br>
    </div>

    <div class="rodape">
        <div class="incone">
            <a href="https://www.instagram.com/" style="margin-left: 5%;"><svg xmlns="http://www.w3.org/2000/svg"
                    width="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a>
            <a href="https://www.twitter.com/"><svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor"
                    class="bi bi-twitter" viewBox="0 0 16 16">
                    <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg></a>
            <a href="https://www.facebook.com/"><svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a>
        </div>


        <div class="formasPG">

            <img src="imagens/siteSeguro.png">

        </div>

    </div>

    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>