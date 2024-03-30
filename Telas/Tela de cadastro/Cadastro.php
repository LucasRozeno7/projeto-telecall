<?php

if (isset($_POST['submit'])) {


   include_once('../config.php');

   $nome = $_POST['nome'];
   $nomemae = $_POST['nomemae'];
   $celular = $_POST['cel'];
   $fixo = $_POST['fixo'];
   $cpf = $_POST['cpf'];
   $datanascimento = $_POST['datanascimento'];
   $genero = $_POST['genero'];
   $cep = $_POST['cep'];
   $rua = $_POST['rua'];
   $num = $_POST['num'];
   $bairro = $_POST['bairro'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['uf'];
   $email = $_POST['email'];
   $usuario =  $_POST['login'];
   $senha = $_POST['senha'];

   $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario,senha) VALUES ('$usuario','$senha')");
   $result2 = mysqli_query($conexao, "INSERT INTO dados(nome,nomemae,celular,telfixo,cpf,datanasc,genero,email,cep,rua,numero,bairro,cidade,estado) VALUES ('$nome','$nomemae','$celular','$fixo','$cpf',
   '$datanascimento','$genero','$email','$cep','$rua','$num','$bairro','$cidade','$estado')");
}
session_start();
if (!empty($_SESSION)) {
   print " <script>location.href='../Pagina de erro/pgerror.php' </script";
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
   <title>Cadastro</title>
   <link rel="stylesheet" href="style.css">
</head>


<body>

   <main class="corpo">
      <div class="formulario">

         <form name="form" id="form" action="Cadastro.php" method="POST">
            <div class="form-header">
               <h1>Cadastre-se</h1>
               <a href="../Pagina principal/index.php"> <img src="img/imagen.png"></a>
            </div>
            <h2>Dados pessoais</h2>
            <div class="inputgroup">
               <div class="inputbox">
                  <label for="nome">Nome completo</label>
                  <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" onkeyup="semnumero(this)" minlength="15" maxlength="80" class="invalido">
                  <p class="error errorH" id="msgnome">Nome inválido minimo 15 letras</p>
               </div>
               <div class="inputbox">
                  <label for="nomemae">Nome da mãe</label>
                  <input type="text" id="nomemae" name="nomemae" placeholder="Digite nome da mãe" onkeyup="semnumero(this)" minlength="15" maxlength="80">
                  <p class="error errorH" id="msgnomemae">Digite nome materno</p>
               </div>
               <div class="inputbox">
                  <label for="cel">Celular</label>
                  <input type="tel" id="cel" name="cel" title="Digite o Celular" maxlength="18" placeholder="Ex.(55)21 99999-9999" onkeyup="ajustaCelular(this)">
                  <p class="error errorH" id="msgcel">Celular inválido</p>
               </div>
               <div class="inputbox">
                  <label for="fixo">Telefone fixo</label>
                  <input type="tel" id="fixo" name="fixo" name="fixo" maxlength="17" placeholder="Ex.(55)21 9999-9999" onkeyup="ajustaTelefone(this)">
                  <p class="error errorH" id="msgfixo">Telefone fixo inválido</p>
               </div>
               <div class="inputbox">
                  <label for="cpf">CPF</label>
                  <input type="text" id="cpf" name="cpf" onblur="validarCPF(this)" maxlength="14" placeholder=" Ex. xxx.xxx.xxx-xx" onkeyup="ajustaCpf(this)">
                  <p class="error errorH" id="msgcpf">CPF inválido</p>
               </div>
               <div class="inputbox">
                  <label for="datanascimento">Data de nascimento</label>
                  <input type="date" id="datanascimento" name="datanascimento">
                  <p class="error errorH" id="msgdata">Idade minima 18 anos</p>
               </div>
               <div class="gender-input">
                  <p>Gênero:</p>
                  <select name="genero" id="genero" type="text">
                     <option value="">--</option>
                     <option value="Masculino">Masculino</option>
                     <option value="Feminino">Feminino</option>
                     <option value="Outro">Outro</option>
                  </select>
                  <p class="error errorH" id="msggenero"> campo vazio</p>
               </div>
               <div class="inputgroup2">
                  <div class="divcep">
                     <div class="inputbox">
                        <h2>Endereço</h2>
                        <label>CEP</label>
                        <input name="cep" type="text" id="cep" value="" maxlength=" 9" onblur="pesquisacep(this.value);" style="max-width: 150px;" placeholder="Digite seu CEP">
                        <p class="error errorH" id="msgcep">CEP não encontrado ou inválido</p>
                     </div>
                  </div>
                  <div class="inputbox">
                     <label>Rua</label>
                     <input name="rua" type="text" id="rua" placeholder="Rua">
                     <p class="error errorH">campo vazio</p>
                  </div>
                  <div class="inputbox">
                     <label>Numero</label>
                     <input type="text" id="num" name="num" style="max-width: 50px;" placeholder="Nº">
                     <p class="error errorH" id="msgnum">campo vazio</p>
                  </div>
                  <div class="inputbox">
                     <label>Bairro</label>
                     <input name="bairro" type="text" id="bairro" placeholder="Bairro">
                     <p class="error errorH">campo vazio</p>
                  </div>
                  <div class="inputbox">
                     <label>Cidade</label>
                     <input name="cidade" type="text" id="cidade" placeholder="Cidade">
                     <p class="error errorH">campo vazio</p>
                  </div>
                  <div class="inputbox">
                     <label>Estado</label>
                     <select name="uf" type="text" id="uf">
                        <option value="">--</option>
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
                     <p class="error errorH">campo vazio</p>
                  </div>
               </div>
               <h2>Conta</h2>
               <div class="inputgroup2">
                  <div class="inputbox">
                     <label for="email">Email(opcional)</label>
                     <input type="email" id="email" name="email" placeholder=" Exemplo@exemplo.com">
                     <p class="error errorH">Email inválido</p>
                  </div>
                  <div class="inputbox">
                     <label for="login">Usuário</label>
                     <input type="text" id="login" name="login" maxlength="6" placeholder="Login com 6 caracteres" onkeyup="ajustasenha(this)">
                     <p class="error errorH" id="msglogin">Digite um Usuário com 6 letras</p>
                  </div>
                  <div class="inputbox">
                     <label for="senha">Digite uma senha</label>
                     <input type="password" id="senha" name="senha" maxlength="8" placeholder="Senha com 8 letras" onkeyup="ajustasenha(this)">
                     <p class="error errorH" id="msgsenha">Digite uma senha de 8 letras</p>
                  </div>


                  <div class=" inputbox">
                     <label for="senha2">Confirme sua senha</label>
                     <input type="password" id="senha2" name="senha2" maxlength="8" placeholder="Digite a mesma senha" onkeyup="ajustasenha(this)">
                     <p class="error errorH" id="msgsenha2">As senhas devem ser iguais</p>
                  </div>
                  <div class="mostrarsenha">
                     <label for="">Mostrar senha</label>
                     <input type="checkbox" onclick="Mostrarsenha()" style=" width: 50px; margin-left: 0px;">
                  </div>

               </div>
            </div>
            <div class="btn">
               <input class="button" type="submit" name="submit" id="submit" value="Cadastrar">
               <input class="button" type="reset" value="Limpar">
            </div>




         </form>
      </div>

      </div>
   </main>




   <script>
      //Validaçoes dos campos


      const formulario = document.getElementById("form")

      formulario.onsubmit = e => {
         var nome = document.getElementById("nome").value
         var nomemae = document.getElementById("nomemae").value
         var cel = document.getElementById('cel').value
         var fixo = document.getElementById('fixo').value
         var cpf = document.getElementById('cpf').value
         var genero = document.getElementById('genero').value
         var num = document.getElementById('num').value
         var login = document.getElementById('login').value
         var senha = document.getElementById('senha').value
         var senha2 = document.getElementById('senha2').value

         if (nome.length <= 15) {

            e.preventDefault()
            document.getElementById("nome").focus()
            document.getElementById("nome").style.border = "5px solid red";
            document.getElementById("msgnome").classList.remove("errorH");
            return
         }
         if (nomemae.length <= 15) {
            e.preventDefault()
            document.getElementById("nomemae").focus()
            document.getElementById("nomemae").style.border = "5px solid red";
            document.getElementById("msgnomemae").classList.remove("errorH");
            return
         }
         if (cel.length <= 17) {
            e.preventDefault()
            document.getElementById("cel").focus()
            document.getElementById("cel").style.border = "5px solid red";
            document.getElementById("msgcel").classList.remove("errorH");
            return
         }
         if (fixo.length <= 16) {
            e.preventDefault()
            document.getElementById("fixo").focus()
            document.getElementById("fixo").style.border = "5px solid red";
            document.getElementById("msgfixo").classList.remove("errorH");
            return
         }

         if (CpfValido(cpf)) {

         } else {
            e.preventDefault()
            document.getElementById("cpf").focus()
            document.getElementById("cpf").style.border = "5px solid red";
            document.getElementById("msgcpf").classList.remove("errorH");
            return false
         }

         if (genero === "") {
            e.preventDefault()
            document.getElementById("genero").focus()
            document.getElementById("genero").style.border = "5px solid red";
            document.getElementById("msggenero").classList.remove("errorH");
            return
         }
         if (cep.value === "") {
            e.preventDefault()
            document.getElementById("cep").focus()
            document.getElementById("cep").style.border = "5px solid red";
            document.getElementById("msgcep").classList.remove("errorH");
            return
         }
         if (num === "") {
            e.preventDefault()
            document.getElementById("num").focus()
            document.getElementById("num").style.border = "5px solid red";
            document.getElementById("msgnum").classList.remove("errorH");
            return
         }
         if (login.length <= 5) {
            e.preventDefault()
            document.getElementById("login").focus()
            document.getElementById("login").style.border = "5px solid red";
            document.getElementById("msglogin").classList.remove("errorH");
            return
         }
         if (senha.length <= 7) {
            e.preventDefault()
            document.getElementById("senha").focus()
            document.getElementById("senha").style.border = "5px solid red";
            document.getElementById("msgsenha").classList.remove("errorH");
            return
         }
         if (senha2 != senha) {
            e.preventDefault()
            document.getElementById("senha2").focus()
            document.getElementById("senha2").style.border = "5px solid red";
            document.getElementById("msgsenha2").classList.remove("errorH");
            return
         }

         var data = document.getElementById("datanascimento").value; // pega o valor do input
         // compara as datas e calcula a idade
         var hoje = new Date();
         var nasc = new Date(data);
         var idade = hoje.getFullYear() - nasc.getFullYear();
         var m = hoje.getMonth() - nasc.getMonth();
         if (m < 0 || (m === 0 && hoje.getDate() < nasc.getDate())) idade--;



         if (datanascimento.value == "") {
            e.preventDefault()
            document.getElementById("datanascimento").focus()
            document.getElementById("datanascimento").style.border = "5px solid red";
            document.getElementById("msgdata").classList.remove("errorH");

         }


         if (idade < 17) {

            e.preventDefault()
            document.getElementById("datanascimento").focus()
            document.getElementById("datanascimento").style.border = "5px solid red";
            document.getElementById("msgdata").classList.remove("errorH");

         }
        
      }



      // function para validar o cpf

      function CpfValido(cpf) {
         cpf = cpf.replace(/[^\d]+/g, '');
         if (cpf == "00000000000") return false;
         if (cpf.length != 11) return false;

         var soma = 0;
         var resto;

         for (i = 1; i <= 9; i++) {
            soma = soma + (parseInt(cpf.substring(i - 1, i)) * (11 - i));
         }

         resto = (soma * 10) % 11;
         if ((resto == 10) || (resto == 11))
            resto = 0;

         if (resto != parseInt(cpf.substring(9, 10)))
            return false;

         soma = 0;
         for (i = 1; i <= 10; i++) {
            soma = soma + (parseInt(cpf.substring(i - 1, i)) * (12 - i))
         };

         resto = (soma * 10) % 11;
         if ((resto == 10) || (resto == 11))
            resto = 0;

         if (resto != parseInt(cpf.substring(10, 11)))
            return false;

         return true;
      }





      //TIRAR OS ERROS
      nome.addEventListener("input", () => {
         nome.style.border = ""
         nome.nextElementSibling.classList.add('errorH')
      })

      nomemae.addEventListener("input", () => {
         nomemae.style.border = ""
         nomemae.nextElementSibling.classList.add('errorH')
      })

      cel.addEventListener("input", () => {
         cel.style.border = ""
         cel.nextElementSibling.classList.add('errorH')
      })

      fixo.addEventListener("input", () => {
         fixo.style.border = ""
         fixo.nextElementSibling.classList.add('errorH')
      })

      cpf.addEventListener("input", () => {
         cpf.style.border = ""
         cpf.nextElementSibling.classList.add('errorH')
      })

      datanascimento.addEventListener("input", () => {
         datanascimento.style.border = ""
         datanascimento.nextElementSibling.classList.add('errorH')
      })

      genero.addEventListener("input", () => {
         genero.style.border = ""
         genero.nextElementSibling.classList.add('errorH')
      })

      cep.addEventListener("input", () => {
         cep.style.border = ""
         cep.nextElementSibling.classList.add('errorH')
      })

      num.addEventListener("input", () => {
         num.style.border = ""
         num.nextElementSibling.classList.add('errorH')
      })

      login.addEventListener("input", () => {
         login.style.border = ""
         login.nextElementSibling.classList.add('errorH')
      })

      senha.addEventListener("input", () => {
         senha.style.border = ""
         senha.nextElementSibling.classList.add('errorH')
      })

      senha2.addEventListener("input", () => {
         senha2.style.border = ""
         senha2.nextElementSibling.classList.add('errorH')
      })



      //ENDEREÇO VIACEP

      function limpa_formulário_cep() {
         //Limpa valores do formulário de cep.

         document.getElementById('cep').value = ("");
         document.getElementById('rua').value = ("");
         document.getElementById('bairro').value = ("");
         document.getElementById('cidade').value = ("");
         document.getElementById('uf').value = ("");



      }


      function meu_callback(conteudo) {
         if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.

            document.getElementById('rua').value = (conteudo.logradouro);
            document.getElementById('bairro').value = (conteudo.bairro);
            document.getElementById('cidade').value = (conteudo.localidade);
            document.getElementById('uf').value = (conteudo.uf);


         } //end if.
         else {
            //CEP não Encontrado.
            limpa_formulário_cep();

         }
      }

      function pesquisacep(valor) {

         //Nova variável "cep" somente com dígitos.
         var cep = valor.replace(/\D/g, '');

         //Verifica se campo cep possui valor informado.
         if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

               //Preenche os campos com "..." enquanto consulta webservice.
               document.getElementById('rua').value = "...";
               document.getElementById('bairro').value = "...";
               document.getElementById('cidade').value = "...";
               document.getElementById('uf').value = "...";


               //Cria um elemento javascript.
               var script = document.createElement('script');

               //Sincroniza com o callback.
               script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

               //Insere script no documento e carrega o conteúdo.
               document.body.appendChild(script);

            } //end if.
            else {
               //cep é inválido.


               limpa_formulário_cep();


            }
         } //end if.
         else {
            //cep sem valor, limpa formulário.

            limpa_formulário_cep();

         }
      };





      //Mascaras

      function ajustaCpf(v) {
         v.value = v.value.replace(/\D/g, "");
         v.value = v.value.replace(/^(\d{3})(\d)/, "$1.$2");
         v.value = v.value.replace(/(\d{3})(\d)/, "$1.$2");
         v.value = v.value.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
      }


      function ajustaTelefone(v) {
         v.value = v.value.replace(/\D/g, "");
         v.value = v.value.replace(/^(\d\d)(\d)/g, "($1) $2");
         v.value = v.value.replace(/(\d{2})(\d)/, "$1 $2");
         v.value = v.value.replace(/(\d{4})(\d)/, "$1-$2");
      }

      function ajustaCelular(v) {
         v.value = v.value.replace(/\D/g, "");
         v.value = v.value.replace(/^(\d\d)(\d)/g, "($1) $2");
         v.value = v.value.replace(/(\d{2})(\d)/, "$1 $2");
         v.value = v.value.replace(/(\d{5})(\d)/, "$1-$2");
      }

      function ajustasenha(v) {
         v.value = v.value.replace(/[^\w\.]|\d/g, '');
      }

      function semnumero(v) {
         v.value = v.value.replace(/[0-9+=!@?#$%¨&*_()]/g, '');
      }

      function semletra(v) {
         v.value = v.value.replace(/\D/g, "");
      }


      //Funçao pra mostrar senha

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