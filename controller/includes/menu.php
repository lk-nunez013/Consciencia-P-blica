<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
session_start();
//VERIFICACAO PARA VER SE O USUARIO ESTÁ LOGADO
if(($_SESSION['email_usuario']=="") || ($_SESSION['senha_usuario']=="")){
?>
    <header>
    <div class="container">
     <div class="pos-f-t fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../principal/index.php">CONSCIÊNCIA PÚBLICA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="../problema/listar_problema.php">Problemas</a><!--Listar problemas-->
              </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../solucao/listar_solucao.php">Propostas</a><!--Listar propostas-->
                  </li>             
             <li class="nav-item">
                <a class="nav-link" href="../projeto_vereador/listar_projeto_vereador.php">Projetos</a><!--listar projetos-->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../aprovados_prefeito/listar_aprovados.php">Aprovados</a><!--listar aprovados-->
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Comunidade
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../usuario/cadastro_cidadao.php">Criar Conta</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../usuario/entrar.php">Entrar Usuário</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../usuario/entrar.php">Entrar Vereador</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../usuario/entrar.php">Entrar Prefeito</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
<?php
}
else{
  $login = $_SESSION['email_usuario'];
?>
    <header>
    <div class="container">
     <div class="pos-f-t fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../principal/index.php">CONSCIÊNCIA PÚBLICA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="../problema/listar_problema.php">Problemas</a><!--Listar problemas-->
              </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../solucao/listar_solucao.php">Propostas</a><!--Listar propostas-->
                  </li>             
             <li class="nav-item">
                <a class="nav-link" href="../projeto_vereador/listar_projeto_vereador.php">Projetos</a><!--listar projetos-->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../aprovados_prefeito/listar_aprovados.php">Aprovados</a><!--listar aprovados-->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../problema/cad_problema.php">Cadastrar Problema</a><!--listar aprovados-->
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo "Seja bem vindo(a) ".$login?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../includes/destruirSessao.php">Sair</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
<?php
}
    ?>