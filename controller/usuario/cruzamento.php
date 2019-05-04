<?php
if($_POST['tb_vereador']!=null){
$tb_vereador =$_POST['tb_vereador'];
}
if($_POST['tb_prefeito']!=null){
$tb_prefeito =$_POST['tb_prefeito'];
}
if($_POST['tb_proposta']!=null){
$tb_proposta = $_POST['tb_proposta'];
}
if($_POST['tb_projeto']!=null){
$tb_projeto = $_POST['tb_projeto'];}
if($_POST['tb_problema']){
$tb_problema = $_POST['tb_problema'];}
if($_POST['tb_bairro']!=null){
$tb_bairro = $_POST['tb_bairro'];}
?>    
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Rodrigo Garcia Topan Moreira">
    <meta name="description" content="Páginal Inicial de Apresentação">
    <title>CONSCIÊNCIA PÚBLICA</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-image: url('../img/representa.gif'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
      <?php include('../includes/menu.php');?>

     <br><br><br><br>
        <div class="container">
            <section id="bottom-title-news">
      <div class="card">
        <div class="card-body" align="left">
          <H1>RESULTADO DE CRUZAMENTO DE DADOS</H1>
        </div>
      </div>
      </section>
       <section class="jumbotron text-left">
          <p class="lead text-muted">Essa é a lista dos dados cruzados de diferentes locais. A ferramenta ideal para investigar e ficar por dentro do que acontece no seu municipio/bairro.</p>
           <!--Controlador de tamanho e margem da tabela-->
               <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                                <th>#</th>   
                                <th>Título</th>
                                <th>Data</th>
                                <th>Categoria</th>
                                <th>Ações</th>
                            </thead>
                          <tbody>                      
                            <?php
                             //Chamando banco de dados
                             include("../includes/conexao.php");
                             //selecionando o banco de dados
                             $bd = mysqli_select_db($conexao, "hack_santos");
                            //fazendo a seleção da tabela tb_evento
                            $sql = "select * from tb_problema as prob, tb_categoria as c, tb_vereador as v, tb_solucao as s, tb_relevancia as r, tb_projeto as p, tb_historico as h, tb_prefeito as pre, tb_aprovada as a";
                            //pegando os dados da tabela. Executando query
                            $resultado = mysqli_query($conexao, $sql);
                            while($linha = mysqli_fetch_array($resultado))
                            {
                               echo '<tr>';                  
                                   echo  '<td>'.$linha['cd_problema'].'</td>';
                                   echo  '<td>'.$linha['nm_titulo'].'</td>';
                                
                                   echo  '<td>'.$linha['dt_cadastro_problema'].'</td>'; 
                                    echo  '<td>'.$linha['nm_categoria'].'</td>';
                                   //Ações                                      
                                   echo  "<td><button type='button' class='btn btn-sm btn-info'  data-toggle='modal' data-target='#myModal$linha[cd_problema]'> Mostrar</button></td>"; 
                                                                       
                              echo "</tr>";
                              ?>
                                 <!--Inicio Modal.-->
                                  <div class="modal fade" id="myModal<?php echo $linha['cd_problema'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <center><h3 class="modal-title" id="myModalLabel">Problema: <?php echo $linha['cd_problema'];?></h3></center>
                                          </div>
                                          <div class="modal-body">
                                              <br><br>

                                               <b>Nome do problema:</b><?php echo $linha['nm_titulo'];?><br><hr>
                                               <b>Descrição do problema:</b><?php echo $linha['ds_problema'];?><br><hr>
                                                <b>Categoria do problema:</b><?php echo $linha['nm_categoria'];?><br><hr>
                                               <b>Bairro do prob.:</b><?php echo $linha['nm_bairro'];?><br><hr>
                                               <b>Cidade do prob.:</b>Santos<br><hr>
                                               <b>Data cadastro do prob:</b><?php echo $linha['dt_cadastro_problema'];?><br><hr>
                                               <b>Categoria:</b><?php echo $linha['nm_categoria'];?><br><hr>
                                               <b>Descrição categoria.</b><?php echo $linha['nm_bairro'];?><br><hr>
                                               <b>Vereador:</b><?php echo $linha['nm_vereador'];?><br><hr>
                                               <b>Email:</b><?php echo $linha['nm_email'];?><br><hr>
                                               <b>Eleito:</b><?php echo $linha['ds_status'];?><br><hr>
                                               <b>Plano Gov:</b><?php echo $linha['ds_plano_governo'];?><br><hr>
                                               <b>Plano Ação:</b><?php echo $linha['ds_plano_ação'];?><br><hr>
                                               <b>Solução:</b><?php echo $linha['nm_solucao'];?><br><hr>
                                               <b>Cad. Solução:</b><?php echo $linha['dt_cadastro_solucao'];?><br><hr>
                                               <b>Cód. Projeto:</b><?php echo $linha['cd_projeto'];?><br><hr>
                                               <b>Plano Ação:</b><?php echo $linha['ds_plano_acao'];?><br><hr>
                                              <b>Ação de compra:</b><?php echo $linha['ds_plano_acao'];?><br><hr>
                                          <!--<b>Data:</b><?php //echo $linha['dt_insercao'];?><br><br>-->             
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                <!--fim modal-->    
                                      <?php
                                }
                              mysqli_close($conexao);
                              ?>
                            </tbody>
                      </table>
                   </div>
             
        </div>
      </section>
      <br>
    </div>
      <?php include('../includes/dep_query.php');?>
  </body>
</html>
