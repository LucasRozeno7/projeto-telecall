<?php

include_once('../config.php');

$sql = "SELECT * FROM dados ORDER BY iddados DESC";

$result = $conexao->query($sql);


if(!empty($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM dados WHERE nome LIKE '%$data%' ORDER BY iddados DESC";
    
}else
{

$sql = "SELECT * FROM dados ORDER BY iddados DESC";

}

$result = $conexao->query($sql);



?>






<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Usuario</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
</head>



<style>
   .campo {
    display: flex;
    justify-content: center;
    margin: 20px;
    
}

.campo input {
    border: white;
    margin: 0.6rem 0;
    padding: 0.8rem 1.2rem;
    border-radius: 10px;
    box-shadow: 1px 1px 10px #000000c1;

}
.campo input:hover {
    background-color: #eeeeee75;
    transform: scale(1.1)
}

.campo input:focus-visible {
    outline: 3px solid #0170B9;
} 

.campo button{
    border: 0;
    width: 50px;
    height: 50px;
    margin: 5px 5px 5px 15px;
    border-radius: 4px;
    font-weight: 900;
    background: linear-gradient(135deg, #2676EF, #40A9F4);
    cursor: pointer;

}
.campo button:hover{
    transform: scale(1.1);
    color: #003b71
   
}


.campo img {
    width: 25px;
    
}

.pdf img{
    width: 45px;
}

</style>

<body>
    <main>
    <?php
    include "../nav/nav.php";
    if (empty($_SESSION['tipo'])){
        print" <script>location.href='../Pagina de erro/pgerror.php' </script";
     }
    ?>
        <h1 class="pdf" >Dados pessoais <a href="../PDF/pdf.php"><img src="img/baixar-pdf.png" alt="Baixar PDF"></a> </h1>
        <div class="campo">
            <input type="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar">
            <button onclick="searchData()" ><img src="img/pesquisar-alt.png" alt="Pesquisar"> </button>
            

        </div>

        <table>

            <tr class="titulo">

                <td>ID</td>
                <td>Nome</td>
                <td>nome materno</td>
                <td>Celular</td>
                <td>Telefone Fixo</td>
                <td>CPF</td>
                <td>Data de nascimento</td>
                <td>Genero</td>
                <td>Email</td>
                <td>CEP</td>
                <td>Rua</td>
                <td>Numero</td>
                <td>Bairro</td>
                <td>Cidade</td>
                <td>Estado</td>
                <td>Editar/Deletar</td>

            </tr>

            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['iddados'] . "</td>";
                echo "<td>" . $user_data['nome'] . "</td>";
                echo "<td>" . $user_data['nomemae'] . "</td>";
                echo "<td>" . $user_data['celular'] . "</td>";
                echo "<td>" . $user_data['telfixo'] . "</td>";
                echo "<td>" . $user_data['cpf'] . "</td>";
                echo "<td>" . $user_data['datanasc'] . "</td>";
                echo "<td>" . $user_data['genero'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>" . $user_data['cep'] . "</td>";
                echo "<td>" . $user_data['rua'] . "</td>";
                echo "<td>" . $user_data['numero'] . "</td>";
                echo "<td>" . $user_data['bairro'] . "</td>";
                echo "<td>" . $user_data['cidade'] . "</td>";
                echo "<td>" . $user_data['estado'] . "</td>";
                 echo "<td> 
                <a href='../Editar/editdados.php?iddados=$user_data[iddados]'><img src='img/editar.png' alt='Editar' style='width:25px; margin:5px;'></a> 
                <a href='../Editar/delete.php?iddados=$user_data[iddados]'><img src='img/excluir.png' alt='Excluir' style='width: 25px; margin:5px;'></a>
                </td>";
                echo "</tr>";
            }
            ?>


    </main>



  


</body>

<script>
  var search = document.getElementById('pesquisar');


  function searchData()
  {
    window.location= 'dados.php?search='+ search.value;
  }





</script>



</html>