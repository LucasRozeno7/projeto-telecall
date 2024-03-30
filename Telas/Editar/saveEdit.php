<?php 
include_once('../config.php');

if(isset($_POST['update']))
{
    $iddados = $_POST['iddados'];
    $nome = $_POST['nome'];
    $nomemae = $_POST['nomemae'];
    $celular = $_POST['celular'];
    $telfixo = $_POST['telfixo'];
    $cpf = $_POST['cpf'];
    $datanasc = $_POST['datanasc'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];   
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sqlUpdate = "UPDATE dados SET nome='$nome', nomemae='$nomemae', celular='$celular', telfixo='$telfixo', cpf='$cpf', datanasc='$datanasc', genero= '$genero', 
    email='$email', cep='$cep', rua='$rua', numero='$numero',bairro='$bairro',cidade='$cidade',estado='$estado'
    WHERE iddados='$iddados' ";
      
    $result = $conexao->query($sqlUpdate);

      
}
header('location:../dados/dados.php');

?>