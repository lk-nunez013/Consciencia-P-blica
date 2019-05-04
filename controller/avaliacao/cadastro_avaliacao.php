<?php
include("../includes/seguranca.php");
//entrada de formulário
$nr_importancia = $_POST['nr_importancia'];
$cd_solucao_relevancia = $_POST['cd_solucao_relevancia'];
$cd_usuario_relevancia = $_POST['cd_usuario_relevancia'];
        include("../includes/conexao.php");
        mysqli_select_db($conexao,"hack_santos");
                $sql = "INSERT INTO tb_usuario VALUES (DEFAULT, '$nr_importancia', '$cd_solucao_relevancia','$cd_usuario_relevancia')";
                $salvar = mysqli_query($conexao,$sql);
                header("Location:listar_avaliacao.php");
    mysqli_close($conexao);
?>