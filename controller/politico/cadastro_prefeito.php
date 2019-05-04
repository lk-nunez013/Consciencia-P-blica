<?php
include("../includes/seguranca.php");
//entrada de formulário
$cd_prefeito = $_POST['c_nome'];
$nm_prefeito = $_POST['c_email'];
$cd_rg=$_POST['c_rg']; 
$cd_cpf=$_POST['c_cpf'];
$cd_solucao_aprovada_p = $_POST['cd_solucao_aprovado_p'];
        include("../includes/conexao.php");
        mysqli_select_db($conexao,"bd_resolv");
                $sql = "INSERT INTO tb_prefeito VALUES (DEFAULT, '$nm_prefeito','cd_rg',$nm_email','$cd_solucao_aprovada_p')";
                $salvar = mysqli_query($conexao,$sql);
                header("Location:listar_prefeito.php");
    mysqli_close($conexao);
?>