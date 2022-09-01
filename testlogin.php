<?php

    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {

        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST ['senha'];

        //print_r('usuario: ' . $usuario);
        //print_r('<br>');
        //print_r('senha: ' . $senha);

        $sql = "SELECT * FROM login WHERE usuario = '$usuario' and senha = '$senha'";

        $result = $mysql->query($sql); 

        //print_r($result);
        //print_r($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: opcoes.php');
        }

    }
    else
    {
        header('Location: login.php');
    }
?>