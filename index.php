<?php
    session_start();
?>

<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="./css/main.css"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" type="image/x-icon" href="./media/logo-rodape.png">
        <title> Criança Alerta | Bem Vindo(a) </title>
        <meta charset="UTF-8">
    </head>
    <body>
        <nav class="navigation">
            <ul class="menu">
                <li id="menu-general"><a href="">MENU</a>
                    <ul>
                        <li><a href="http://localhost/Crianca_Alerta/index.php">Início</a></li>
                        <li><a href="http://localhost/Crianca_Alerta/pages/tipo_de_violencia.html">Tipos de Violência</a></li>
                        <li><a href="http://localhost/Crianca_Alerta/pages/quebrando_silencio.html">Quebrando o Silêncio</a></li>
                        <li><a href="http://localhost/Crianca_Alerta/pages/direitos.html">Direito das Crianças</a></li>
                        <li><a href="http://localhost/Crianca_Alerta/pages/login.php">Jogue nosso jogo!</a></li>
                    </ul>
                </li>
            </ul>
            <a href="http://localhost/Crianca_Alerta/index.php"><img id="logo-central" src="./media/logo-nome.png"></a>
            <a href="http://localhost/Crianca_Alerta/index.php"><img id="menu-logo" src="./media/logo-oficial.png"></a>
        </nav>
        <div class="conteudo">
            <div class="cartao">
                <div class="cartao-image">
                    <a href="./pages/tipo_de_violencia.html"><img src="./media/tipos-de-violencia.jpeg"></a>
                </div>
            </div>
            <div class="cartao">
                <div class="cartao-image">
                    <a href="./pages/direitos.html"><img src="./media/direitos-das-criancas.jpeg"></a>
                </div>
            </div>
            <div class="cartao">
                <div class="cartao-image">
                    <a href="./pages/quebrando_silencio.html"><img src="./media/quebrando-o-silencio.jpeg"></a>
                </div>
            </div>
        </div>
        <footer class="rodape">
            <div class="rodape-content">
                <div class="linhas">
                    <div class="rodape-text">
                        <h5>O que é o Criança Alerta?</h5>
                        <p>O projeto foi criado por alunos do <a href="https://www.ifbaiano.edu.br/unidades/guanambi/" class="rodape-web" target="_blank">Instituto Federal Baiano - Campus Guanambi</a>, na qual o objetivo era desenvolver um site para auxiliar crianças, apresentando conteúdos sobre violência infantil, assédios e como se comportarem diante de tais situações, além de informar os direitos que toda criança deve ter, onde encontrá-los e orgãos que devem garantir esses direitos.</p>
                    </div>
                </div>
                <div class="links">
                    <h5>Entre em contato conosco:</h5>
                    <ul>
                        <li><a class="rodape-web" href="https://instagram.com/crianca.alerta" target="_blank">Instagram</a></li>
                        <li><a class="rodape-web" href="https://github.com/criancaalerta" target="_blank">Github</a></li>
                        <li class="rodape-web">Projetocriancaalerta@outlook.com</li>
                    </ul>
                </div>
            </div>
            <div class="rodape-copyright">
                <div class="rodape-content-copyright">
                    © 2021 All copyrights reserved to Criança Alerta LTDA
                </div>
                <div class="rodape-imagem-box">
                    <img src="./media/logo-rodape.png" class="rodape-imagem">
                </div>
            </div>
        </footer>
        <div id="mensagem">
        <?php
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
        ?>
        </div>
        <script src="./js/main.js"></script>
    </body>
</html>