<?php //Valida o login informado pelo usuário
    session_start();

    $con = mysqli_connect("localhost", "root", "", "banco_crianca_alerta");

    if(mysqli_connect_errno()){
        echo "Erro: " . mysqli_connect_error();
    }

    $usuarioLogin = $_POST['usuario'];
    $senhaLogin = $_POST['senha'];
    $senhaCrypt = crypt($senhaLogin, '$6$rounds=5000$noCh1ldMu5tS0f37/d3scP4ss.alB4trHjan');

    $buscarUsuario = "SELECT * FROM Criancas WHERE usuario = '$usuarioLogin'";
    $verificaLogin = mysqli_query($con, $buscarUsuario);
    $dadosUser = mysqli_fetch_assoc($verificaLogin);

    if($dadosUser['usuario'] == $usuarioLogin){
        echo "certo usuário <br>";
        if($dadosUser['senha'] == $senhaCrypt){
            $_SESSION['mensagem'] = "<div class='alert sucesso' role='alert'>Usuário logado com sucesso!</div>";
            $_SESSION['logged'] = True;
            header("Location: http://localhost/Crianca_Alerta/pages/jogo.php");
            echo "certo senha";
        }else {
            $_SESSION['mensagem'] = "<div class='alert erro' role='alert'>Erro! Senha incorreta!</div>";
            header("Location: http://localhost/Crianca_Alerta/pages/login.php");
        }
    }else {
        $_SESSION['mensagem'] = "<div class='alert erro' role='alert'>Erro! Usuário inexistente, cadastre-se!</div>";
        header("Location: http://localhost/Crianca_Alerta/pages/cadastro.php");
    }

     //Mudar para $senhaCrypt para buscar a senha criptografada no banco

    // if($verificaLogin){
    //     // $dadosUser = mysqli_fetch_assoc($verificaLogin);
    //     if($senhaCrypt == $senhaBD){
    //         $_SESSION['erro'] = "<div class='alert sucesso' role='alert'>Usuário logado com sucesso!</div>";
    //         $_SESSION['logged'] = True;
    //         header("Location: http://localhost/Crianca_Alerta/pages/jogo.php");
    //     }else if($senhaCrypt != $senhaBD){
    //         $_SESSION['erro'] = "<div class='alert erro' role='alert'>Erro! Usuário ou senha não encontrados!</div>";
    //         header("Location: http://localhost/Crianca_Alerta/pages/login.php");
    //     }
    // }

    // echo mysqli_num_rows($verificaLogin);
    // if(mysqli_num_rows($verificaLogin) >= 1){
    //     $_SESSION['erro'] = "<div class='alert sucesso' role='alert'>Usuário logado com sucesso!</div>";
    //     $_SESSION['logged'] = True;
    //     header("Location: http://localhost/Crianca_Alerta/pages/jogo.php");
    // }
    // if(mysqli_num_rows($verificaLogin) <= 0){
    //     $_SESSION['erro'] = "<div class='alert erro' role='alert'>Erro! Usuário ou senha não encontrados!</div>";
    //     header("Location: http://localhost/Crianca_Alerta/pages/login.php");
    // }

//     $buscarUsuario = "SELECT usuario, senha FROM Criancas WHERE usuario = '$usuarioLogin'"; 

//     $resultadoUsuario = mysqli_query($con, $buscarUsuario);

//     if($resultadoUsuario){
//         $dadosUser = mysqli_fetch_assoc($resultadoUsuario);
//         if(crypt($senhaLogin, $dadosUser['senha']))
//         $_SESSION['usuario'] = $dadosUser['usuario'];
//         $_SESSION['logged'] = True;
//     }

?>