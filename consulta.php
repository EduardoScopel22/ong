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

    $result = $result = $conexao->query($sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ConexaoEsportiva</title>
    <style>
        body{
            background: rgb(32, 27, 44);

        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            color: white;
            height: 30px;
        }
        
    </style>
</head>
<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CONEXÃO ESPORTIVA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="opcoes.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <div class="m-1">
        <table class="table table-bg">
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
                    <th scope="col">Pagamento</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['idaluno']."</td>";
                        echo "<td>".$user_data['nomealuno']."</td>";
                        echo "<td>".$user_data['datanasc']."</td>";
                        echo "<td>".$user_data['cpfaluno']."</td>";
                        echo "<td>".$user_data['rgaluno']."</td>";
                        echo "<td>".$user_data['nomemae']."</td>";
                        echo "<td>".$user_data['cpfmae']."</td>";
                        echo "<td>".$user_data['nomepai']."</td>";
                        echo "<td>".$user_data['cpfpai']."</td>";
                        echo "<td>".$user_data['celular']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['pagamento']."</td>";
                        echo "<td>
                            <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[idaluno]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a>
                            </td>";
                            echo "</tr>";
                    }
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>