<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="main-login">
      <div class="left-login">
        <img
          src="CETEC-Logo-Vertical_png_2-removebg-preview.png"
          alt="Logo do CETEC"
          width="150px"
          class="Logo1-login-left"
        />
        <br /><br /><br />
        <h1>Faça Login <br />E entre no nosso Sistema.</h1>
        <br /><br /><br /><br />
        <img
          src="image-depositphotos-bgremover.png"
          alt="Logo da Conexão Esportiva"
          class="Logo2-login-left"
        />
      </div>
      <div class="right-login">
        <div class="card-login">
          <h1>LOGIN</h1>
          <form action="testlogin.php" method="POST">
          <div class="textfield">
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" placeholder="Usuário" />
          </div>
          <div class="textfield">
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Senha" />
          </div>
          <button class="btn-login" name="submit" type="submit">Login</button>
        </div>
        </form>
      </div>
    </div>
  </body>
</html>
