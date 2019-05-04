<?php
$hostname = "localhost";
$user = "root";
$password = "root";
$database = "hack_santos";
$conexao = mysqli_connect($hostname,$user,$password,$database);
mysqli_set_charset($conexao,'utf8');
if (!$conexao){
    print "Falha na Conexão com o Banco de Dados";
}
