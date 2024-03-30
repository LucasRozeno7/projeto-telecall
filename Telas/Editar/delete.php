<?php

    if(!empty($_GET['iddados']))
    {
        include_once('../config.php');

        $iddados = $_GET['iddados'];

        $sqlSelect = "SELECT *  FROM dados WHERE iddados=$iddados";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM dados WHERE iddados=$iddados";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    
    header('location: ../dados/dados.php');
   
?>

