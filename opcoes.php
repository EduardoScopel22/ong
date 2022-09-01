<?php
    session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="opcao.css">
</head>
<body>
    <h1>Bem-vindo ao Sistema da Conexão Esportiva!</h1>
    <img src="image-depositphotos-bgremover.png" alt="Logo da Conexao Esportiva" class="Logo1">
    <img src="CETEC-Logo-Vertical_png_2-removebg-preview.png" alt="Logo do CETEC" width="150px" class="Logo2">
    <div class="box">
    <a href="sair.php" class="btn btn-danger me-5" >Sair</a>
    <a href="formulario.php">Cadastro do Aluno</a>
    <a href="consulta.php">Consultar</a>
    </div>
</body>
</html>