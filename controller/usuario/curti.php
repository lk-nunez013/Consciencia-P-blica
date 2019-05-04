<?php
$cd_problema = $_POST['curti'];
include('../includes/conexao.php');
	   mysqli_select_db($conexao,"hack_santos");
                $sql = "INSERT INTO curti VALUES (DEFAULT, '$cd_problema')";
                $salvar = mysqli_query($conexao,$sql);
                header("Location:../problema/listar_problema.php");
    mysqli_close($conexao);
?>