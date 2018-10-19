<?php
session_start();
include_once("../includes/banco_de_dados.php");
?>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="../css/signin.css"/>
  <link rel="stylesheet" type="text/css" href="../css/mostraprovastyle.css"/>
  <link rel="icon" href="../imgs/logo_jDA_icon.ico">
  <script src="../js/jquery.js"></script>
  <script src="../js/ajax.js"></script>
  <script src="../js/bootstrap/bootstrap.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nanum+Gothic" rel="stylesheet">
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
  body {
    background-image: url("../imgs/fundo.png");
  }
  </style>
  <script>
  function voltar() {
    window.location = "avc.php";
  }
  </script>
</head>
<body>

  <?php
  if (isset($_SESSION["usuario"])) {
    $arrayQuestoesUsuario = select("SELECT questoes.provas_id, questoes.id, questoes.correta, questoes.peso, jogadores_has_questoes.resposta FROM jogadores_has_questoes INNER JOIN questoes on (jogadores_has_questoes.questoes_id=questoes.id) WHERE jogadores_has_questoes.jogadores_id = ' {$_SESSION["usuario"]["id"]}'");
    $arrayUsuarios = select("SELECT * FROM jogadores");
    $nmrquestao = 0;
    $nota = array();
    foreach($arrayQuestoesUsuario as $dados){
      if(empty($nota[$dados["provas_id"]])){
        $nota[$dados["provas_id"]] = 0;
      }

      if($dados["correta"]==$dados["resposta"]){
        $nota[$dados["provas_id"]] += $dados["peso"];
      }
    }
  }
   ?>

  <img class="mb-4" src="../imgs/logo.png" id="logonotas" alt="" width="120" height="150"class="col-3 col-form-label newFont">
  <h1 class="h1 mb-3 font-weight-normal newFont" id= "notascss" style="color:white";>Notas:</h1>
  <div id="divtabela">
    <table class="table" style="color:white";>
      <thead>
        <tr>
          <th id="notasfont" scope="col">Usuário:</th>
          <th id="notasfont" scope="col">Html:</th>
          <th id="notasfont" scope="col">PHP:</th>
          <th id="notasfont" scope="col">CSS:</th>
          <th id="notasfont" scope="col">Java Script:</th>
          <th id="notasfont" scope="col">SQL:</th>
          <th id="notasfont" scope="col">JQuery:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th id="notasfont" scope="row"><?php echo $_SESSION['usuario']['usuario']?></th>
          <?php
          for($cont=1; $cont<7; $cont++){
            $notaprova = (isset($nota[$cont]))?$nota[$cont]:0;
            echo "<td id='notasfont'>".$notaprova."</td>";
          }
           ?>
        </tr>
      </tbody>
    </div>
    <img src="../imgs/home.png" id="voltarjogocss" onclick="voltar();" alt="" />
  </body>
  </html>
