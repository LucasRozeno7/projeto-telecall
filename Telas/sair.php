<?php 
 session_start();
 unset($_SESSION['usuario']);
 unset($_SESSION['senha']);
 unset($_SESSION['idusuarios']);
 unset($_SESSION['tipo']);
 header("location: pagina principal/index.php")
?>