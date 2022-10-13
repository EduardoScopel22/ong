<?php
    include_once('config.php');

    if(!empty($_GET['idaluno']))
    {
        $idaluno = $_GET['idaluno'];
        $sqlSelect = "SELECT * FROM aluno WHERE idaluno=$idaluno";
        $result = $mysql->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
              $nomealuno = $user_data['nome'];
              $rgaluno = $user_data['rg'];
              $cpfaluno = $user_data['cpf'];
              $datanasc = $user_data['datadenascimento'];
              $nomemae = $user_data['nomedamae'];
              $cpfmae = $user_data['cpfdamae'];
              $nomepai = $user_data['nomedopai'];
              $cpfpai = $user_data['cpfdopai'];
              $celular = $user_data['telefone'];
              $endereco = $user_data['endereço'];
              $email = $user_data['email'];
              $telefonefixo = $user_data['telefonefixo'];
              $nomeresponsavel = $user_data['nomedoresponsavel'];
              $cpfresponsavel = $user_data['cpfdoresponsavel'];
              $alergia = $user_data['alergia'];
              $pagamento = $user_data['pagamentos'];
            }
        }
        else
        {
            header('Location: consulta.php');
        }
    }
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
          <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required />
        </div>
        <br />
        <div class="inputBox">
          <label for="datadenascimento" class="labelinput">Data de Nascimento:</label>
          <input type="date" name="datadenascimento" id="datadenascimento" class="inputdatadenascimento" value=<?php echo $nomealuno;?> required />
        </div>
        <br />
        <div class="inputBox">
          <label for="rg" class="labelinput">Nº do RG:</label>
          <input type="text" name="rg" \ pattern="\d{2}\.\d{3}\.\d{3}-\d{1}" \ title="Digite um RG no formato: xx.xxx.xxx-x" class="inputUser" value=<?php echo $rgaluno;?> required />
        </div>
        <br />
        <div class="inputBox">
          <label for="cpf" class="labelinput">Nº do CPF:</label>
          <input type="text" name="cpf" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite um CPF no formato: xxx.xxx.xxx-xx" class="inputUser" value=<?php echo $cpfaluno;?> required />
        </div>
        <br />
        <div class="inputBox">
          <label for="nomedamae" class="labelinput">Nome da Mãe:</label>
          <input type="text" name="nomedamae" id="nomedamae" class="inputUser" value=<?php echo $nomemae;?> required />
        </div>
        <br />
        <div class="inputBox">
          <label for="cpfdamae" class="labelinput">CPF da Mãe:</label>
          <input type="text" name="cpfdamae" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite um CPF no formato: xxx.xxx.xxx-xx" class="inputUser" value=<?php echo $cpfmae;?> required />
        </div>
        <br />
        <div class="inputBox">
          <label for="nomedopai" class="labelinput">Nome do Pai:</label>
          <input type="text" name="nomedopai" id="nomedopai" class="inputUser" value=<?php echo $nomepai;?> required />
        </div>
        <br />
        <div class="inputBox">
          <label for="cpfdopai" class="labelinput">CPF do Pai:</label>
          <input type="text" name="cpfdopai" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite um CPF no formato: xxx.xxx.xxx-xx" class="inputUser" value=<?php echo $cpfpai;?> required />
          <br />
          <br />
          <div class="inputBox">
            <label for="telefone" class="labelinput">Celular para Contato:</label>
            <input type="tel" name="telefone" id="telefone" class="inputUser" pattern="\d{5}-\d{4}" title="Digite um Telefone no formato: xxxxx-xxxx" value=<?php echo $celular;?> required />
          </div>
          <br />
          <div class="inputBox">
            <label for="endereço" class="labelinput">Endereço Completo:</label>
            <input type="text" name="endereço" id="endereço" class="inputUser" value=<?php echo $endereco;?> required />
          </div>
          <br />
          <div class="inputBox">
            <label for="email" class="labelinput">E-mail:</label>
            <input type="email" name="email" id="email" class="inputUser" value=<?php echo $email;?> required />
          </div>
          <br />
          <div class="inputBox">
            <label for="telefonefixo" class="labelinput">Fone Residencial:</label>
            <input type="tel" name="telefonefixo" id="telefonefixo" class="inputUser" pattern="\d{4}-\d{4}" title="Digite um Telefone no formato: (+xx)xxxx-xxxx" value=<?php echo $telefonefixo;?> />
          </div>
          <br /><br />
          <div class="inputBox">
            <label for="nomedoresponsavel" class="labelinput">Nome do Responsável:</label>
            <input type="text" name="nomedoresponsavel" id="nomedoresponsavel" class="inputUser" value=<?php echo $nomeresponsavel;?> />
          </div>
          <br />
          <div class="inputBox">
            <label for="cpfdoresponsavel" class="labelinput">CPF do Responsável:</label>
            <input type="text" name="cpfdoresponsavel" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite um CPF no formato: xxx.xxx.xxx-xx" class="inputUser" value=<?php echo $cpfresponsavel;?> required />
          </div>
          <br /><br /><br />
          <p>Possui Alergia a algum Medicamento?</p>
          <br />
          <div class="alergia1">
            <label for="opc3" class="labelinput">Sim,Qual?(Caso não tenha não é necessario responder.)</label>
            <input type="text" name="alergia" id="alergia" value=<?php echo $alergia;?> />
            <br /><br>
            <br />
          </div>
          <br />
          <p>Opcão de Pagamento</p>
          <br />
          <input type="radio" name="pagamentos" id="Carnê" value="Carnê" <?php echo ($pagamentos == 'Carnê') ? 'checked' : '';?> required />
          <label for="opc1.5">Carnê</label>
          <input type="radio" name="pagamentos" id="Pix" value="Pix" <?php echo ($pagamentos == 'Pix') ? 'checked' : '';?> required />
          <label for="opc2.5">Pix</label>
          <input type="radio" name="pagamentos" id="Boleto" value="Boleto" <?php echo ($pagamentos == 'Boleto') ? 'checked' : '';?> required />
          <label for="opc3.5">Boleto</label>
          <input type="radio" name="pagamentos" id="Dinheiro" value="Dinheiro" <?php echo ($pagamentos == 'Dinheiro') ? 'checked' : '';?> required />
          <label for="opc4">Dinheiro</label>
          <input type="radio" name="pagamentos" id="Cartão" value="Cartão" <?php echo ($pagamentos == 'Cartão') ? 'checked' : '';?> required />
          <label for="opc5">Cartão</label>
            <br>
            <button class="submit" name="submit" type="submit" id="submit">
              Enviar
            </button>
          </fieldset>
        </form>
      </div>
      <a class="Voltar" href='consulta.php'>Voltar</a>
    </body>
  </html>
