<?php
/* Parâmetros de conexão em ambiente de desenvolvimento, no nosso caso, o XAMPP*/
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "Vendas";

/* Configurações para conexão ao banco de dados*/

// Criando conexão com o banco usando a classe PDO
//PDO: (PHP Data Object): classe para manipulação de banco de dados
$conexao = new PDO(
    "mysql:host=$servidor;dbname=$banco;charset=utf8",
    $usuario, $senha
);