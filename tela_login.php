<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css\Style-login.css">
  <title>Login</title>

  <script>
    // função do botão sair
    function cadastrar() {
      window.location.href = "cadastro_sistema.php";
    }

    // validar login site
    function logar() {
      var login = document.getElementById("login").value;
      var senha = document.getElementById("senha").value;
      // cadastrar usuario para acessar
      if (login == "admin" && senha == "admin") {
        alert("Seja Bem vindo(a) FacePass.");
        location.href = "tela_sistema.html";
      } else {
        alert("Usuário ou Senha incorreto!");
      }
    }
  </script>
</head>

<body>
  <main>
    <a href="tela_login.php">
      <img src="image\LOGO-FACE-PASS.png" alt="" />
    </a>
    <h1>Acessar sua conta</h1>

    <form id="login-form">
      <label for="name">
        <span>Nome</span>
        <input type="text" placeholder="Login" id="login" />
      </label>

      <label for="email">
        <span>Email</span>
        <input type="email" id="email" placeholder="Email" name="email" />
      </label>

      <label for="password">
        <span>Senha</span>
        <input type="password" placeholder="Senha" id="senha" />
      </label>

      <input class="botao-entrar" type="submit" value="Entrar" onclick="logar(); return false" />
    </form>
  </main>

  <section class="images">
    <h2 class="slogan">
      Reduza burocracias e fraudes <br />
      com uma selfie
    </h2>
    <img src="image\image-login.png" id="animated-image" alt="" /> <!--estrutura Flask puxar as imagens no html-->
  </section>

  <button class="cadastro" onclick="cadastrar()">Cadastro</button>

<section>
  
    <footer>
      Trabalho desenvolvido para apresentação do projetor integrador turma
      senac 303 ano 2023
    </footer>
</section>


</body>

</html>