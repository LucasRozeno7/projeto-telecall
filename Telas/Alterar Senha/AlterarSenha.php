<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Alterar senha</title>


</head>

<style>
  .error {
    color: #e63636;
    font-size: 14px;
    margin: 0;
}

.errorH {
    display: none;
}

</style>

<body>

  <?php
  include "../nav/nav.php";


  include_once('../config.php');


$sqlSelect = "SELECT * FROM dados WHERE iddados=$_SESSION[idusuarios]";

$result = $conexao->query($sqlSelect);

if ($result->num_rows > 0) {
  while ($user_data = mysqli_fetch_assoc($result)) {
    $usuario = $_SESSION['usuario'];
    $senha = $_SESSION['senha'];
    $idusuarios = $_SESSION['idusuarios'];
  }
}


if(empty($_SESSION)){
  print" <script>location.href='../Pagina de erro/pgerror.php' </script";
}
?>



  <main class="login">
    <form class="container" action="salvarsenha.php" id="form" method="POST">
      <img src="img/download.png">
      <h1>Altere sua senha</h1>

      <div class="form">

        <label class="label-password" for="password">Nova senha</label>
        <i class="bx bxs-key"></i>
        <input class="input-password" type="password" id="senha" name="senha" placeholder="Sua senha:" maxlength="8" required>

        <label class="label-password" for="password">Digite novamente</label>
        <i class="bx bxs-key"></i>
        <input class="input-password" type="password" id="senha2" name="senha2" placeholder="Sua senha:" maxlength="8" required>
        <p class="error errorH" id="msgsenha2">As senhas devem ser iguais</p>
        <input type="checkbox" onclick="Mostrarsenha()">Mostrar senha

        <input class="button" type="submit" name="update" id="update" value="Mudar">
        <input class="button" type="reset" value="Limpar">

      </div>
    </form>



  </main>


  <?php
  include "../footer/footer.php"

  ?>




  <script>
    const formulario = document.getElementById("form")

    formulario.onsubmit = e => {
      var senha = document.getElementById('senha').value
      var senha2 = document.getElementById('senha2').value

      if (senha2 != senha) {
        e.preventDefault()
        document.getElementById("senha2").focus()
        document.getElementById("senha2").style.border = "5px solid red";
        document.getElementById("msgsenha2").classList.remove("errorH");
        return
      }

    }


    senha2.addEventListener("input", () => {
         senha2.style.border = ""
         senha2.nextElementSibling.classList.add('errorH')
      })



    function Mostrarsenha() {

      if (senha.type == "password" && senha2.type == "password") {
        senha.type = "text";
        senha2.type = "text";
      } else {
        senha.type = "password";
        senha2.type = "password";
      }
    }
  </script>

</body>

</html>