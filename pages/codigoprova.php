<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nanum+Gothic" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="../css/inseriprovastyle.css"/>
  <script src="../js/bootstrap/bootstrap.js"></script>
  <?php
  include_once("../includes/banco_de_dados.php");
  $codigo = 0;
  if (isset($_POST['assuntoprova']) && isset($_POST['qtd_questoes'])) {
    function gerar_codigo(){
      $rn = rand();
      $arrayprovascadastradas = select("SELECT * FROM provas_cadastradas WHERE id= $rn");
      if($arrayprovascadastradas != 0){
        gerar_codigo();
      }
      else{
        return $rn;
      }
    }
    $codigo = gerar_codigo();
    $cadastraassuntoprova = php_insert("INSERT INTO provas_cadastradas VALUES ($codigo,'{$_POST['assuntoprova']}')");
    for($i = 1; $i <= $_POST['qtd_questoes']; $i++){
      $inserequestoes =  php_insert("INSERT INTO questoes_cadastradas VALUES (DEFAULT, '{$_POST['enunciado_'.$i]}', '{$_POST['opcao1_'.$i]}', '{$_POST['opcao2_'.$i]}', '{$_POST['opcao3_'.$i]}', '{$_POST['opcao4_'.$i]}', '{$_POST['correta_'.$i]}', '{$_POST['pesoquestao_'.$i]}', $codigo)");
    }
  }
  ?>
  <script type="text/javascript">
  function funcaoparte3(codigo) {
    var formqtd = '<h1 id = "p1" class="h2 mb-3 font-weight-normal newFont" style="color:white;">Cadastro prova 3/3</h1>'
    formqtd += '<b id = "codigoprovatext" class="newFont" style="color:white;">Codigo da prova: ' + '<?php echo $codigo ?>' + ' esse codigo será enviado por e-mail.</b>';
    document.getElementById('cadastroprova2').innerHTML = formqtd;
  }
  </script>
  <style media="screen">

  </style>
</head>
<body onload="funcaoparte3()">
  <img src="../imgs/fundojogo22_topo.png">
  <div class="cadastroprovas" id="cadastroprova2">

  </div>
  <footer style="bottom: 0;"> <img src="../imgs/fundojogo22_rodape.png"> </footer>
</body>
</html>
