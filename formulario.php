<?php

if (isset($_POST['submit'])) {
  //print_r($_POST['nome']);
  //print_r($_POST['rg']);
  //print_r($_POST['cpf']);
  include_once('config.php');

  $nome = $_POST['nome'];
  $rg = $_POST['rg'];
  $cpf = $_POST['cpf'];
  $datanasc = $_POST['datadenascimento'];
  $nomemae = $_POST['nomedamae'];
  $cpfmae = $_POST['cpfdamae'];
  $nomepai = $_POST['nomedopai'];
  $cpfpai = $_POST['cpfdopai'];
  $celular = $_POST['telefone'];
  $endereco = $_POST['endereço'];
  $email = $_POST['email'];
  $telefonefixo = $_POST['telefonefixo'];
  $nomeresponsavel = $_POST['nomedoresponsavel'];
  $cpfresponsavel = $_POST['cpfdoresponsavel'];
  $alergia = $_POST['alergia'];
  $pagamentos = $_POST['pagamentos'];


  $result = mysqli_query($conexao, "INSERT INTO aluno(nomealuno,datanasc,cpfaluno,rgaluno,nomemae,cpfmae,nomepai,cpfpai,celular,endereco,email,telefonefixo,nomeresponsavel,cpfresponsavel,alergia,pagamento) VALUES ('$nome','$datanasc','$cpf','$rg','$nomemae','$cpfmae','$nomepai','$cpfpai','$celular','$endereco','$email','$telefonefixo','$nomeresponsavel','$cpfresponsavel','$alergia','$pagamentos')");
}

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
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ficha do Aluno</title>
  <link rel="stylesheet" href="style.formulario.css" />
</head>

<body>

  <img src="image-depositphotos-bgremover.png" alt="Logo da Conexão Esportiva" class="Logo1" />
  <img src="CETEC-Logo-Vertical_png_2-removebg-preview.png" alt="Logo do CETEC" width="150px" class="Logo2" />
  <div class="box">
    <form action="formulario.php" method="POST">
      <fieldset>
        <legend><strong>Ficha do Aluno</strong></legend>
        <div class="inputBox">
          <label for="nome" class="labelinput">Nome Completo do Aluno:</label>
          <input type="text" name="nome" id="nome" class="inputUser" required />
        </div>
        <br />
        <div class="inputBox">
          <label for="datadenascimento" class="labelinput">Data de Nascimento:</label>
          <input type="date" name="datadenascimento" id="datadenascimento" class="inputdatadenascimento" required />
        </div>
        <br />
        <div class="inputBox">
          <label for="rg" class="labelinput">Nº do RG:</label>
          <input type="text" name="rg" \ pattern="\d{2}\.\d{3}\.\d{3}-\d{1}" \ title="Digite um RG no formato: xx.xxx.xxx-x" class="inputUser" required />
        </div>
        <br />
        <div class="inputBox">
          <label for="cpf" class="labelinput">Nº do CPF:</label>
          <input type="text" name="cpf" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite um CPF no formato: xxx.xxx.xxx-xx" class="inputUser" required />
        </div>
        <br />
        <div class="inputBox">
          <label for="nomedamae" class="labelinput">Nome da Mãe:</label>
          <input type="text" name="nomedamae" id="nomedamae" class="inputUser" required />
        </div>
        <br />
        <div class="inputBox">
          <label for="cpfdamae" class="labelinput">CPF da Mãe:</label>
          <input type="text" name="cpfdamae" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite um CPF no formato: xxx.xxx.xxx-xx" class="inputUser" required />
        </div>
        <br />
        <div class="inputBox">
          <label for="nomedopai" class="labelinput">Nome do Pai:</label>
          <input type="text" name="nomedopai" id="nomedopai" class="inputUser" required />
        </div>
        <br />
        <div class="inputBox">
          <label for="cpfdopai" class="labelinput">CPF do Pai:</label>
          <input type="text" name="cpfdopai" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite um CPF no formato: xxx.xxx.xxx-xx" class="inputUser" required />
          <br />
          <br />
          <div class="inputBox">
            <label for="telefone" class="labelinput">Celular para Contato:</label>
            <input type="tel" name="telefone" id="telefone" class="inputUser" pattern="\d{5}-\d{4}" title="Digite um Telefone no formato: xxxxx-xxxx" required />
          </div>
          <br />
          <div class="inputBox">
            <label for="endereço" class="labelinput">Endereço Completo:</label>
            <input type="text" name="endereço" id="endereço" class="inputUser" required />
          </div>
          <br />
          <div class="inputBox">
            <label for="email" class="labelinput">E-mail:</label>
            <input type="email" name="email" id="email" class="inputUser" required />
          </div>
          <br />
          <div class="inputBox">
            <label for="telefonefixo" class="labelinput">Fone Residencial:</label>
            <input type="tel" name="telefonefixo" id="telefonefixo" class="inputUser" pattern="\d{4}-\d{4}" title="Digite um Telefone no formato: (+xx)xxxx-xxxx" />
          </div>
          <br /><br />
          <div class="inputBox">
            <label for="nomedoresponsavel" class="labelinput">Nome do Responsável:</label>
            <input type="text" name="nomedoresponsavel" id="nomedoresponsavel" class="inputUser" />
          </div>
          <br />
          <div class="inputBox">
            <label for="cpfdoresponsavel" class="labelinput">CPF do Responsável:</label>
            <input type="text" name="cpfdoresponsavel" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite um CPF no formato: xxx.xxx.xxx-xx" class="inputUser" required />
          </div>
          <br /><br /><br />
          <p>Possui Alergia a algum Medicamento?</p>
          <br />
          <div class="alergia1">
            <label for="opc3" class="labelinput">Sim,Qual?(Caso não tenha não é necessario responder.)</label>
            <input type="text" name="alergia" id="alergia" />
            <br /><br>
            <br />
          </div>
          <br />
          <p>Opcão de Pagamento</p>
          <br />
          <input type="radio" name="pagamentos" id="Carnê" value="Carnê" required />
          <label for="opc1.5">Carnê</label>
          <input type="radio" name="pagamentos" id="Pix" value="Pix" required />
          <label for="opc2.5">Pix</label>
          <input type="radio" name="pagamentos" id="Boleto" value="Boleto" required />
          <label for="opc3.5">Boleto</label>
          <input type="radio" name="pagamentos" id="Dinheiro" value="Dinheiro" required />
          <label for="opc4">Dinheiro</label>
          <input type="radio" name="pagamentos" id="Cartão" value="Cartão" required />
          <label for="opc5">Cartão</label>
          <br>
          <button class="submit" name="submit" type="submit" id="submit">
            Enviar
          </button>
      </fieldset>
    </form>
  </div>
  <a class="Voltar" href='opcoes.php'>Voltar</a>
</body>
</html>
