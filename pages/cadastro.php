<?php
    session_start();
?>

<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../css/main.css"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" type="image/x-icon" href="../media/logo-rodape.png">
        <title> Criança Alerta | Cadastre-se já! </title>
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
                        <li><a href="http://localhost/Crianca_Alerta/pages/login.php">Jogue nosso jogo</a></li>
                    </ul>
                </li>
            </ul>
            <a href="http://localhost/Crianca_Alerta/index.php"><img id="logo-central" src="../media/logo-nome.png"></a>
            <a href="http://localhost/Crianca_Alerta/index.php"><img id="menu-logo" src="../media/logo-oficial.png"></a>
        </nav>
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <div class="card">
                    <div class="card-action #64b5f6 blue lighten-2 white-text">
                        <h3 style="text-align: center;">Cadastro</h3>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="../php/register.php">
                            <div class="form-field">
                                <label for="username">Nome de usuário</label>
                                <input type="text" id="username" name="usuario" required>
                            </div>
                            <div class="form-field">
                                <label for="password">Senha</label>
                                <input type="password" id="password" name="senha" required>
                            </div>
                            <div class="form-field">
                                <label for="password">Confirme senha</label>
                                <input type="password" id="confirme" name="confirmeSenha" required>
                            </div>
                            <div class="form-field">
                            <button type="submit" class="btn-large waves-effect #64b5f6 blue lighten-2" style="width:100%">Cadastrar</button>
                            </div></br>
                            <p style="text-align: center;"> Já possui cadastro?
                            <a href="login.php" class="login-link">Entre agora!</a></p>
                        </form>
                     </div>
                </div>
             </div>
        </div>
        <span id="rodape-cadastro">
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
                            <!--<li><a class="rodape-web" href="#!">Link 1</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="rodape-copyright">
                    <div class="rodape-content-copyright">
                        © 2021 All copyrights reserved to Criança Alerta LTDA
                        <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
                    </div>
                    <div class="rodape-imagem-box">
                        <img src="../media/logo-rodape.png" class="rodape-imagem">
                    </div>
                </div>
            </footer>
        </span>
        <div id="mensagem">
        <?php
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
        ?>
        </div>
        <script src="../js/main.js"></script>
    </body>
</html>