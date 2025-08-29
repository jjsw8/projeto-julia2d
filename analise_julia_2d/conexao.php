<?php

//configuração do banco 
$host = "localhost"; 
$usuario = "root";
$senha = "";
$banco = "banco de dados";

//conexão MySQL
$conexao = mysql_connect ($host, $usuario, $senha, $banco);

if (!$conexao) {
    die ("Erro a conectar :" . mysqli_connect_error())
}

//SENSITIVE CASE suportar acentos e Ç
mysqli_set_charset($conexao, "utf8");
?>
