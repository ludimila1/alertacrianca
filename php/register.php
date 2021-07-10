<?php //Registra novos usuários no banco de dados
    session_start();
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $confirmeSenha = $_POST['confirmeSenha'];

    if($senha != $confirmeSenha) die("Erro, senhas não compatíveis!");

    $con = mysqli_connect("localhost", "root", "", "banco_crianca_alerta");

    $senhaCrypto = crypt($senha, '$6$rounds=5000$noCh1ldMu5tS0f37/d3scP4ss.alB4trHjan');

    if(mysqli_connect_errno()){
        echo "Erro: " . mysqli_connect_error();
    }else{
        $sql = "INSERT INTO Criancas (usuario, senha) VALUES('$usuario', '$senhaCrypto')"; //Alterar para $senhaCrypto para salvar a senha criptografada no banco

        if(mysqli_query($con, $sql)){
            $_SESSION['erro'] = "<div class='alert sucesso' role='alert'>Usuário cadastrado com sucesso!</div>";
            header("Location: http://localhost/Crianca_Alerta/pages/login.php");
        }else{
            $_SESSION['erro'] = "<div class='alert erro' role='alert'>Usuário ou senha inválidos!</div>";
            echo "Erro: " . mysqli_connect_error($con);
            header("Location: http://localhost/Crianca_Alerta/pages/cadatro.php");
        }

        mysqli_close($con);
    }
?>