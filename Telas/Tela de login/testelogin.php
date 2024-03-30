<?php
session_start();
if (empty($_POST) or (empty($_POST['usuario']) or (empty($_POST['senha'])))) {
  header('location: login.php');
}

include('../config.php');
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha='$senha' ";
$res = $conexao->query($sql) or die($conexao->error);

$row = $res->fetch_object();

$qtd = $res-> num_rows;

if($qtd > 0){
  $_SESSION['usuario'] = $usuario;
  $_SESSION['senha'] = $senha;
  $_SESSION['tipo'] = $row->tipo;
  $_SESSION['idusuarios'] = $row->idusuarios;
  header('location: ../pagina principal/index.php');

}else{
  print"<script> alert('Erro') </script>";
  header('location: login.php');
  
}


?>


