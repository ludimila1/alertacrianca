<?php
    session_start();
    
    //Timeout system
    if (isset($_SESSION['timeLogged']) && (time() - $_SESSION['timeLogged'] > 600)){ //10 min = 600
        session_unset();
        session_destroy();
        header('Location: http://localhost/Crianca_Alerta/index.php');
    }

    $_SESSION['timeLogged'] = time();

    //Invalid User system
    $_SESSION['logged'] = $_SESSION['logged'] ?? False;
?>