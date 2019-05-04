<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="I.A,inteligência artificial, tensorflow, redes neurais, aprendizado de máquina, machine learning">
    <meta name="author" content="Rodrigo Garcia Topan Moreira">
    <meta name="description" content="Páginal Inicial de Apresentação do projeto">
    <title>CONSCIÊNCIA PÚBLICA</title>
    <link rel="stylesheet" type="text/css" href="css/projeto2.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-image: url('../img/representa.gif'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<?php include('../includes/menu.php');?>
<div class="row">
		<div class="container col-md-6 col-sm-12">
			 <main role="main">
				<section id="top-title" align="left">
				<br>
						<section id="top-title">
						<br><br><br>
							<div class="card">
							  <div class="card-body">
							    <H2 class="display-4">CADASTRO DE PROBLEMA</H2>
							    <H3 class="lead"> Aqui você pode prestar sua queixa, fazer algum comentário e até mesmo vinculá-lo a um candidato</H3>
							  </div>
							</div>
						</section>
							
							<div class="card">
							  <div class="jumbotron">

								  <form action="cadastrar_problema.php" method="post">
									  <div class="form-group">
										<label>Título:</label>
										<input type="text" class="form-control" name="c_titulo" placeholder="Digite o título">
								  </div>
								  <div class="form-group">
								  <label>Categoria:</label>
								  	<select name="cd_categoria_problema" class="form-control">
								  		<option name="cd_categoria_problema" value="1">Saúde</option>
								  		<option name="cd_categoria_problema" value="2">Segurança</option>
								  		<option name="cd_categoria_problema" value="3">Educação</option>
								  	</select>
								  </div>
									  <div class="form-group">
										<label for="exampleInputPassword1">Descrição problema:</label>
										<textarea rows="3" cols="4" type="text" class="form-control" name="c_descricao" placeholder="Digite uma descrição sobre o problema"></textarea>
									  </div>
									  <button type="submit" class="btn btn-primary">Cadastrar problema</button>		
								</form>
									<!--form login fim-->
							 </div>
						   </div>
				</section>
		    </main>
		</div>
		</div>
		<br>	    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>