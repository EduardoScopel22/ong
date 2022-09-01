<?php
    session_start();
    include_once('config.php');
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['usuario'];

    $sql = "SELECT * FROM aluno ORDER BY idaluno DESC";

    $result = $result = $mysql->query($sql); 

    print_r($result);
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
    <a href="opcoes.php">Voltar</a>
    <img src="CETEC-Logo-Vertical_png_2-removebg-preview.png" alt="Logo do CETEC" width="150px" class="Logo2">
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome do Aluno</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">CPF do Aluno</th>
                    <th scope="col">RG do Aluno</th>
                    <th scope="col">Nome Da Mãe</th>
                    <th scope="col">CPF da Mãe</th>
                    <th scope="col">Nome do Pai</th>
                    <th scope="col">CPF do Pai</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone Fixo</th>
                    <th scope="col">Nome do Responsavel</th>
                    <th scope="col">CPF do Responsavel</th>
                    <th scope="col">Alergia</th>
                    <th scope="col">Pagamento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                    }
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>