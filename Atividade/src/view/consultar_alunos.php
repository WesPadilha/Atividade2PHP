<?php
require_once "../../valida_acesso.php";
require_once 'C:/xampp/htdocs/aulas/Atividade/src/models/CadastrarAluno.php';;

$cadastros = array();

$arquivo = fopen('../../arquivo.txt', 'r');

while(!feof($arquivo)) 
{
  //linhas  
  $registrados = fgets($arquivo);
  $cadastros[] = $registrados;
}

//fechar o arquivo aberto
fclose($arquivo);

// O restante do código permanece o mesmo, mas você pode querer otimizar o código CSS e HTML.
?>

<!-- O conteúdo do arquivo consultar_chamado.php permanece o mesmo, mas você pode querer otimizar o código CSS e HTML. -->
<html>
  <head>
    <meta charset="utf-8" />
    <title>CadAluno</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        CadAlun
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php foreach($cadastros as $cadastro) { ?>
              
                <?php

                  $cadastro_dados = explode('#', $cadastro);

                  //
                  if($_SESSION['perfil_id'] == 2) {
                    //só vamos exibir o chamado, se ele foi criado pelo usuário
                    if($_SESSION['id'] != $cadastro_dados[0]) {
                      continue;
                    }
                  }

                  if(count($cadastro_dados) < 3) {
                    continue;
                  }

                ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?=$cadastro_dados[1]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$cadastro_dados[2]?></h6>
                    <p class="card-text"><?=$cadastro_dados[3]?></p>

                  </div>
                </div>

              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>