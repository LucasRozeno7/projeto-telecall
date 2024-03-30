


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo do banco de dados</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
</head>

<body>
    <?php
    include "../nav/nav.php";

    if(empty($_SESSION)){
        print" <script>location.href='../Pagina de erro/pgerror.php' </script";
     }
    ?>
    <main>
        <section class="bddarkmode">
            <h1>Modelo lógico</h1>
            <div><img src="./img/modelo logico.jpeg" alt="Modelo logico do banco de dados"></div>
            <h1>Modelo Conceitual</h1>
            <div><img src="./img/modelo conceitual.jpeg" alt="Modelo conceitual do banco de dados"></div>
        </section>

    </main>




    <?php
    include "../footer/footer.php"
    ?>

</body>

</html>