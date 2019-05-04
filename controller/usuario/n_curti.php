<?php
include("seguranca.php");
include("../includes/conexao.php");
$cd_problema = $_POST['n_curti'];
   mysqli_select_db($conexao,"hack_santos");
                $sql = "INSERT INTO n_curti VALUES (DEFAULT, $cd_problema)";
                $salvar = mysqli_query($conexao, $sql);
               
    mysqli_close($conexao);
?>