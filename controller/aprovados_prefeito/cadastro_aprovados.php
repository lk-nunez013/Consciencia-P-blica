<?php
include("../includes/seguranca.php");
//entrada de formulário
$cd_projeto_aprovada = $_POST['cd_projeto_aprovada'];

        include("../includes/conexao.php");
        mysqli_select_db($conexao,"hack_santos");
                $sql = "INSERT INTO tb_aprovada VALUES(DEFAULT,'cd_projeto_aprovada');";
                $salvar = mysqli_query($conexao,$sql);
                header("Location:listar_aprovados.php");
    mysqli_close($conexao);


?>