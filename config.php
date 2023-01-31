<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cadastro';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
// echo "Conexão estabelecida com sucesso";

?>


<!-- Esse código é uma conexão PHP com o banco de dados MySQL. Ele começa definindo as variáveis que são usadas para conectar ao banco de dados, incluindo o nome do host (localhost), o nome de usuário (root), a senha (que está vazia nesse caso) e o nome do banco de dados (cadastro).

Em seguida, ele cria uma nova instância da classe mysqli, passando essas variáveis como parâmetros, para estabelecer a conexão com o banco de dados. Se a conexão não puder ser estabelecida, uma mensagem de erro é exibida e a execução do script é interrompida. Caso contrário, a mensagem "Conexão estabelecida com sucesso" é exibida. -->
