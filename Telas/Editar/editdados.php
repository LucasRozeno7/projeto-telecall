<?php

if (!empty($_GET['iddados'])) {

    include_once('../config.php');

    $iddados = $_GET['iddados'];

    $sqlSelect = "SELECT * FROM dados WHERE iddados=$iddados";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {

            $nome = $user_data['nome'];
            $nomemae = $user_data['nomemae'];
            $celular = $user_data['celular'];
            $telfixo = $user_data['telfixo'];
            $cpf = $user_data['cpf'];
            $datanasc = $user_data['datanasc'];
            $genero = $user_data['genero'];
            $email = $user_data['email'];
            $cep = $user_data['cep'];
            $rua = $user_data['rua'];
            $numero = $user_data['numero'];
            $bairro = $user_data['bairro'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
        }
    } else {
        header('location: ../dados/dados.php');
    }
}

session_start();

if (empty($_SESSION['tipo'])) {
    print " <script>location.href='../Pagina de erro/pgerror.php' </script";
}





?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados pessoais</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
</head>

<body>
    <main>

        <form action="saveEdit.php" class="formulario" method="POST">
            <div class="voltar">
                <a href="../dados/dados.php">Voltar</a>
            </div>
            <h2>Alterar Dados pessoais</h2>
            <div>

                <div class="campo">
                    <label for="iddados">ID</label>
                    <input type="text" id="iddados" name="iddados" value="<?php echo $iddados ?>">
                </div>


                <div class="campo">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome" onkeyup="semnumero(this)" maxlength="80" value="<?php echo $nome ?>">
                </div>

                <div class="campo">
                    <label for="nomemae">Nome da mãe</label>
                    <input type="text" id="nomemae" name="nomemae" onkeyup="semnumero(this)" maxlength="80" value="<?php echo $nomemae ?>">

                </div>
                <div class="campo">
                    <label for="cel">Celular</label>
                    <input type="tel" id="celular" name="celular" title="Digite o Celular" onkeyup="ajustaCelular(this)" value="<?php echo $celular ?>">

                </div>
                <div class="campo">
                    <label for="fixo">Telefone fixo</label>
                    <input type="tel" id="fixo" name="telfixo" name="telfixo" onkeyup="ajustaTelefone(this)" value="<?php echo $telfixo ?>">

                </div>
                <div class="campo">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" onblur="validarCPF(this)" onkeyup="ajustaCpf(this)" value="<?php echo $cpf ?>">
                </div>

                <div class="campo">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $email ?>">
                </div>

                <div class="campo">
                    <label for="datanascimento">Data de nascimento</label>
                    <input type="date" id="datanasc" name="datanasc" value="<?php echo $datanasc ?>">
                </div>

                <div class="campo">
                    <p>Gênero:</p>
                    <select name="genero" id="genero">
                        <option value="<?php echo $genero ?>"> <?php echo $genero ?> </option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>


                <h2>Alterar Endereço</h2>

                <div class="campo">
                    <label>CEP</label>
                    <input name="cep" type="text" id="cep" maxlength=" 9" value="<?php echo $cep ?>">
                </div>
                <div class="campo">
                    <label>Rua</label>
                    <input name="rua" type="text" id="rua" value="<?php echo $rua ?>">
                </div>


                <div class="campo">
                    <label>Numero</label>
                    <input type="text" id="numero" name="numero" value="<?php echo $numero ?>">
                </div>

                <div class="campo">
                    <label>Bairro</label>
                    <input name="bairro" type="text" id="bairro" value="<?php echo $bairro ?>">
                </div>

                <div class="campo">
                    <label>Cidade</label>
                    <input name="cidade" type="text" id="cidade" value="<?php echo $cidade ?>">
                </div>

                <div class="campo">

                    <label>Estado</label>
                    <select name="estado" type="text" id="estado">
                        <option value="<?php echo $estado ?>"> <?php echo $estado ?> </option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>

                <div class="botaodiv">
                    <input class="botao" type="submit" name="update" id="update" value="Salvar Alteraçoes">

                </div>



        </form>
    </main>


</body>

</html>