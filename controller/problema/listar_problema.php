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
          <H1>PROBLEMAS DO POVO</H1>
        </div>
      </div>
      </section>
       <section class="jumbotron text-left">
          <p class="lead text-muted">Essa é a lista dos problemas com maior repercurssão na comunidade. Aqui, nós explicamos os problemas, e elencamos os mais relevantes para a comunidade.</p>
          <p>
            <a href="#" class="btn btn-primary"> Buscar problemas do povo</a>
          </p>
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
                            $sql = "select p.cd_problema,p.nm_titulo, p.dt_cadastro_problema, p.ds_problema, c.nm_categoria, b.nm_bairro from tb_problema as p inner join tb_categoria as c on (p.cd_categoria_problema = c.cd_categoria)
                              inner join tb_bairro as b on (p.cd_problema = b.cd_problema_bairro) ORDER BY p.cd_problema DESC";
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
                                   echo  "<td><button type='button' class='btn btn-sm btn-info'  data-toggle='modal' data-target='#myModal$linha[cd_problema]'> Mostrar</button></td><td><form action='../usuario/curti.php' method='POST'><button type='submit' class='btn btn-sm btn-success' name='curti' value='<?php echo $linha[cd_problema];?>'> Curti</button></form></td><form action='../usuario/n_curti.php' method='POST'><td><button type='submit' name='n_curti' class='btn btn-sm btn-danger' value='<?php echo $linha[cd_problema]?>'> Não curti</button></td></form>"; 
                                                                       
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

                                               <b>Nome:</b><?php echo $linha['nm_titulo'];?><br><hr>
                                               <b>Descrição:</b><?php echo $linha['ds_problema'];?><br><hr>
                                                <b>Categoria:</b><?php echo $linha['nm_categoria'];?><br><hr>
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
