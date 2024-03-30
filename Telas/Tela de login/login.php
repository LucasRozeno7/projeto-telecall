<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Login</title>


</head>

<body>

  <?php
  include "../nav/nav.php";

  if(!empty($_SESSION)){
    print" <script>location.href='../Pagina de erro/pgerror.php' </script";
 }

  ?>



  <main class="login">
    <form class="container" action="./testelogin.php" method="POST">
      <img src="img/download.png">
      <h1>Login</h1>

      <div class="form">
        <label class="label-login" for="usuario">Nome de usuario</label>
        <i class="bx bxs-user"></i>
        <input class="input-login" type="text" id="usuario" name="usuario" placeholder="Seu login:" maxlength="6" required>

        <label class="label-password" for="password">Senha</label>
        <i class="bx bxs-key"></i>
        <input class="input-password" type="password" id="senha" name="senha" placeholder="Sua senha:" maxlength="8" required>
        <input type="checkbox" onclick="Mostrarsenha()">Mostrar senha
        <a href="../Tela de cadastro/Cadastro.php" class="link">Cadastre-se!</a>

        <input class="button" type="submit" name="submit" value="Login">
        <input class="button" type="reset" value="Limpar">

      </div>
    </form>



  </main>


  <?php
  include "../footer/footer.php"

  ?>


  <script>
    function Mostrarsenha() {
      var senha = document.getElementById("senha");
      if (senha.type == "password"){
        senha.type = "text";
      } else {
        senha.type = "password";
      }
    }
  </script>






</body>

</html>