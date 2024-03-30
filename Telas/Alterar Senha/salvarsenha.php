<?php

 session_start();


 include_once('../config.php');

 if(isset($_POST['update']))
 {
    $senha = $_POST['senha'];




    $sqlUpdate = "UPDATE usuarios SET senha='$senha'
    WHERE idusuarios=$_SESSION[idusuarios]";

    $result= $conexao->query($sqlUpdate);
 }
 header('location: ../pagina principal/index.php');

?>


