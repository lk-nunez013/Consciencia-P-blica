    <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
          <H1>CATEGORIAS</H1>
        </div>
      </div>
      </section>
         <section class="jumbotron text-left">
        <div class="container">
          <p class="lead text-muted">Listagem das categorias de áreas de investimento público disponíveis.</p>
           <!--Controlador de tamanho e margem da tabela-->
               <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                                <th>#</th>   
                                <th>Categoria</th>
                            </thead>
                          <tbody>                      
                            <?php
                             //Chamando banco de dados
                             include("../includes/conexao.php");
                             //selecionando o banco de dados
                             $bd = mysqli_select_db($conexao, "hack_santos");
                            //fazendo a seleção da tabela tb_evento
                            $sql = "select distinct * from tb_categoria";
                            //pegando os dados da tabela. Executando query
                            $resultado = mysqli_query($conexao, $sql);
                            while($linha = mysqli_fetch_array($resultado))
                            {
                               echo '<tr>';                  
                                   echo  '<td>'.$linha['cd_categoria'].'</td>';
                                   echo  '<td>'.$linha['nm_saude'].'</td>';
                                   echo  '<td>'.$linha['ds_categoria'].'</td>';
                                   echo  '<td>'.$linha['cd_usuario'].'</td>';
                                    
                                   //Ações                                      
                                   echo  "<td><a href='listar_itens.php'>Listar</a></td>"; 
                                                                       
                              echo "</tr>";
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
