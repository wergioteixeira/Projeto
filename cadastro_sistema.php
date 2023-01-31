<?php

if (isset($_POST['submit'])) {

    include_once('config.php');

    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
    $cpf = mysqli_real_escape_string($conexao, $_POST['CPF']);
    $data = mysqli_real_escape_string($conexao, $_POST['data_nascimento']);
    $tipoCarteira = mysqli_real_escape_string($conexao, $_POST['Tipo_Carteira']);



    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, telefone, cpf, data_nascimento, Tipo_Carteira) VALUES ('$nome', '$email', '$telefone', '$cpf', '$data', '$tipoCarteira')");


    if ($result) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro ao inserir dados.";
    }

}

?>
<!-- Inicio HTML -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\Style-cadastro-sistema.css">
    <title>Cadastro Sistema</title>

    <script>

        // função do botão sair 
        function voltar() {
            window.location.href = "tela_login.php"
        }

        // validar login site
        function logar() {
            var login = document.getElementById("login").value;
            var senha = document.getElementById("senha").value;
            // usuario login
            if (login == "admin" && senha == "admin") {
                alert('Seja Bem vindo(a) FacePass.');
                location.href = 'tela_sistema.html'
            }
            if (login == "Wergio" && senha == "wergio") {
                alert('Seja Bem vindo(a) FacePass.');
                location.href = 'tela_sistema.html'

            }

            else {
                alert('Usuário ou Senha incorreto!');
            }
        }

    </script>
</head>

<body>
    <main>
        <!-- Logo da empresa -->
        <a href="cadastro_sistema.php">
            <img src="image\LOGO-FACE-PASS.png" alt="">
        </a>

        <h1>Faça seu cadastro</h1>
        <!--Formulario Cadastro Usuário-->
        <form id="login-form" action="cadastro_sistema.php" method="post" enctype="multipart/form-data">
            <label for="name">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Telefone de Contato*</label>
            <input type="tel" id="phone" name="telefone" pattern="[0-9]{11}" required>

            <label for="text">CPF*</label>
            <input type="text" name="CPF" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" title="Insira um CPF 
          válido, no formato 000.000.000-00" required>

            <label for="text">Data de Nascimento*</label>
            <input type="date" name="data_nascimento" list="opcao2" required>


            <label for="text">Tipo de Carteira*</label>
            <input type="text" name="Tipo_Carteira" list="opcoes" required>
            <datalist id="opcoes">
                <option value="Cartão Meia Passagem"></option>
                <option value="Cartão Estudantil"></option>
                <option value="Pessoa com Deficiência"></option>
                <option value="Cartão Idoso"></option>
            </datalist>
        

            <input class="botao-cadastrar" type="submit" name="submit" value="Cadastrar" />


        </form>

    </main>

    <section class="images">
        <h2 class="slogan">Sem cartões, sem problemas: <br> use a biometria facial no transporte
            público. </h2>
        <p class="texto-sobre">
            A Face Pass é uma empresa de tecnologia que oferece soluções avançadas de
            biometria facial para o transporte público. Com o objetivo de tornar a mobilidade
            urbana mais rápida, segura e eficiente, desenvolvemps uma tecnologia de
            reconhecimento facial precisa e de alta velocidade que pode ser utilizada em
            transportes públcios.

            Os usuários podem desfrutar de uma experiência mais rápida e conveniente, sem
            precisar de cartões ou bilhetes. Além disso, permite o acesso a benefícios
            exclusivos, como descontos e
            promoções personalizadas. A segurança é outra vantagem da tecnologia. Com o
            reconhecimento facial, é possível evitar fraudes e garantir a segurança
            dos usuários e dos equipamentos. Melhorando a segurança do transporte público.

            A Face Pass está comprometida em tornar a mobilidade urbana mais fácil e
            segura para todos. A empresa está ajudando
            a melhorar a eficiência do transporte público e a tornar as viagens mais
            agradáveis para os usuários.</p>
        <br>

        </p>
        <img src="image\imagem tela-cadastro.png" id="animated-image" alt="">

    </section>

    <button class="voltar" onclick="voltar()" ; return false>Voltar</button>

</body>

</html>