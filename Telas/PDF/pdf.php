<?php

include_once('../config.php');

$sql = "SELECT * FROM dados ORDER BY iddados DESC";

$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $html = "<table border='1'>";
    $html .= "<tr>  ";
    $html .= "<td>ID</td>";
    $html .= "<td>Nome</td>";
    $html .= "<td>nome materno</td>";
    $html .= "<td>Celular</td>";
    $html .= "<td>Telefone Fixo</td>";
    $html .= "<td>CPF</td>";
    $html .= "<td>Data de nascimento</td>";
    $html .= "<td>Genero</td>";
    $html .= "<td>Email</td>";
    $html .= "<td>CEP</td>";
    $html .= "<td>Rua</td>";
    $html .= "<td>Numero</td>";
    $html .= "<td>Bairro</td>";
    $html .= "<td>Cidade</td>";
    $html .= "<td>Estado</td>";
    $html .= "</tr>";
    while ($row = $result->fetch_object()) {
        $html .= "<tr>";
        $html .= "<td>" . $row->iddados . "</td>";
        $html .= "<td>" . $row->nome . "</td>";
        $html .= "<td>" . $row->nomemae . "</td>";
        $html .= "<td>" . $row->celular . "</td>";
        $html .= "<td>" . $row->telfixo . "</td>";
        $html .= "<td>" . $row->cpf . "</td>";
        $html .= "<td>" . $row->datanasc . "</td>";
        $html .= "<td>" . $row->genero . "</td>";
        $html .= "<td>" . $row->email . "</td>";
        $html .= "<td>" . $row->cep . "</td>";
        $html .= "<td>" . $row->rua . "</td>";
        $html .= "<td>" . $row->numero . "</td>";
        $html .= "<td>" . $row->bairro . "</td>";
        $html .= "<td>" . $row->cidade . "</td>";
        $html .= "<td>" . $row->estado . "</td>";
        $html .= "</tr>";
    }

    $html .= "</table>";
} else {
    $html = 'nenhum dado registrado';
}


   use Dompdf\Dompdf;

   require_once 'dompdf/autoload.inc.php';

  $dompdf = new Dompdf();

$dompdf ->loadhtml("$html");

 $dompdf ->set_option('default','sans');

$dompdf -> setPaper('A4', 'landscape');

$dompdf -> render();

 $dompdf-> stream();



?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Usuario</title>
</head>



<body>




</body>



</html>