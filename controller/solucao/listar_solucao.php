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
          <H1>PROPOSTAS DO VEREADOR</H1>
        </div>
      </div>
      </section>
         <section class="jumbotron text-left">
        <div class="container">
          <p class="lead text-muted">Listagem de propostas para solucionar os problemas dos cidadãos. Avalie e comente caso te interesse que a proposta vire projeto.</p>
          <p>
            <a href="#" class="btn btn-primary"> Buscar propostas de vereadores</a>
          </p>
           <!--Controlador de tamanho e margem da tabela-->
               <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                                <th>#</th>   
                                <th>Título</th>
                                <th>Data</th>
                                <th>Bairro</th>
                                <th>Ações</th>
                            </thead>
                          <tbody>                      
                            <?php
                             //Chamando banco de dados
                             include("../includes/conexao.php");
                             //selecionando o banco de dados
                             $bd = mysqli_select_db($conexao, "hack_santos");
                            //fazendo a seleção da tabela tb_evento
                            $sql = "select s.cd_solucao,s.nm_solucao, s.dt_cadastro_solucao, s.ds_plano_acao, p.nm_titulo, b.nm_bairro from tb_solucao as s inner join tb_bairro as b on (s.cd_bairro_solucao = b.cd_bairro)
                                INNER JOIN tb_problema as p on s.cd_problema_solucao = p.cd_problema ORDER BY s.cd_solucao DESC";
                            //pegando os dados da tabela. Executando query
                            $resultado = mysqli_query($conexao, $sql);
                            while($linha = mysqli_fetch_array($resultado))
                            {
                               echo '<tr>';                  
                                   echo  '<td>'.$linha['cd_solucao'].'</td>';
                                   echo  '<td>'.$linha['nm_solucao'].'</td>';
                                   echo  '<td>'.$linha['dt_cadastro_solucao'].'</td>';
                                   echo  '<td>'.$linha['nm_bairro'].'</td>';  
                                   //Ações                                      
                                   echo  "<td><button type='button' class='btn btn-sm btn-info'  data-toggle='modal' data-target='#myModal$linha[cd_solucao]'> Mostrar</button></td><td><button type='button' class='btn btn-sm btn-info'  data-toggle='modal' data-target='#myResposta$linha[cd_solucao]'>Resposta</button></td>"; 
                                                                       
                              echo "</tr>";
                              ?>
                                 <!--Inicio Modal.-->
                                  <div class="modal fade" id="myModal<?php echo $linha['cd_solucao'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <center><h3 class="modal-title" id="myModalLabel"> Proposta: <?php echo $linha['cd_solucao'];?></h3></center>
                                          </div>
                                          <div class="modal-body">
                                              <br><br>
                                               <b>Nome:</b><?php echo $linha['nm_solucao'];?><br><hr>
                                               <b>Descrição:</b><?php echo $linha['ds_plano_acao'];?><br><hr>
                                               <b>Problema:</b><?php echo $linha['nm_titulo'];?><br><hr>
                                               <b>Bairro:</b><?php echo $linha['nm_bairro'];?><br><hr>
                                               <b>Cidade:</b>Santos<br><hr>
                                          <!--<b>Data:</b><?php //echo $linha['dt_insercao'];?><br><br>-->             
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                          </div>
                                        </div>
                                    </div>
                                  </div>

                                                                   <!--Inicio Modal.-->
                                  <div class="modal fade" id="myResposta<?php echo $linha['cd_solucao'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <center><h3 class="modal-title" id="myModalLabel"> Proposta: <?php echo $linha['cd_solucao'];?></h3></center>
                                          </div>
                                          <div class="modal-body">
                                              <div class="form-group">
                                               <b>Nome:</b><textarea rows="4" class="form-control" placeholder="Comente Aqui"></textarea>
                                               </div>
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
    </div>
      <?php include('../includes/dep_query.php');?>
  </body>
</html>
