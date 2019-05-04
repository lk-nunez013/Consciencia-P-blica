<?php
include("../includes/seguranca.php");
//entrada de formulário
$c_titulo = $_POST['c_titulo'];
$cd_categoria_problema = $_POST['cd_categoria_problema'];
$c_descricao =$_POST['c_descricao']; 
        include("../includes/conexao.php");
        mysqli_select_db($conexao,"hack_santos");
                $sql = "INSERT INTO tb_problema values (DEFAULT, '$c_titulo', NOW(), '$cd_categoria_problema', '$c_descricao')";
                $salvar = mysqli_query($conexao,$sql);
               header("Location:cad_problema.php")
    mysqli_close($conexao);
?>