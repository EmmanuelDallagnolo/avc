<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nanum+Gothic" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="../css/inseriprovastyle.css"/>
  <script src="../js/bootstrap/bootstrap.js"></script>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">

  </style>
  <?php
  include_once("../includes/banco_de_dados.php");
  $codigo = 0;
  print_r($_POST);
  if (isset($_POST['assuntoprova']) && isset($_POST['qtd_questoes'])) {
    echo "entrou";
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
    echo "<script>funcaoparte3("+$codigo+")</script>";
  }
  ?>
  <script type="text/javascript">
  function loadPagina(){
    if
    quantidadequestoes()

  }


  function funcaoparte3(codigo) {
    var formqtd = '<h1 id = "p1" class="h2 mb-3 font-weight-normal newFont" style="color:white;">Cadastro prova 3/3</h2>'
    formqtd += 'Codigo da prova: ' + codigo + ' esse codigo será enviado por e-mail.';
    document.getElementById('cadastroprova').innerHTML = formqtd;
  }
  function quantidadequestoes() {
    var formqtd = '<h1 id = "p1" class="h2 mb-3 font-weight-normal newFont" style="color:white;">Cadastro prova 1/3</h2>'
    formqtd += '<h3 id= "qtsquestoes">Quantas questoes serao inseridas na prova? </h3>'
    formqtd += '<input type="text" name="qtd_questoes" value="" id="qtd_questoes">'
    formqtd += '<input id= "botaook" type="button" name="name" value="OK" onclick="cadastrarprova();">'
    document.getElementById('cadastroprova').innerHTML = formqtd;
  }
  function cadastrarprova() {
    var form = '<form id="questionario" action="inseriprova.php" name ="questionario" method="POST">';
    form += '<h1 id = "p1" class="h2 mb-3 font-weight-normal newFont" style="color:white;">Cadastro prova 2/3</h2>'
    form += '<input type="text" placeholder="Assunto da prova" name="assuntoprova">'
    form += '<br>';
    form += '<br>';
    for(var i = 1; i <= document.getElementById('qtd_questoes').value; i++){
      form += i + ')<input type="text" id= "enun" name="enunciado_' + i + '" placeholder="Enunciado questão">';
      form += '<br>';
      form += '<br>';
      form+= '<div class="form-group row">';
      form+= '<label for="inputEmail3" class="col-sm-2 col-form-label">A)</label>';
      form+= '<div class="col-sm-10">';
      form+= '<input type="text" name="opcao1_' + i + '" ' + '>';
      form+= '</div>';
      form+= '</div>';
      form+= '<div class="form-group row">';
      form+= '<label for="inputEmail4" class= "col-sm-2 col-form-label">B)</label>';
      form+= '<div class="col-sm-10">';
      form+= '<input type="text" name="opcao2_' + i + '" ' + '>';
      form+= '</div>';
      form+= '</div>';
      form+= '<div class="form-group row">';
      form+= '<label for="inputEmail4" class= "col-sm-2 col-form-label">C)</label>';
      form+= '<div class="col-sm-10">';
      form+= '<input type="text" name="opcao3_' + i + '" ' + '>';
      form+= '</div>';
      form+= '</div>';
      form+= '<div class="form-group row">';
      form+= '<label for="inputEmail4" class= "col-sm-2 col-form-label">D)</label>';
      form+= '<div class="col-sm-10">';
      form+= '<input type="text" name="opcao4_' + i + '" ' + '>';
      form+= '</div>';
      form+= '</div>';
      form += 'Alternativa correta: <input type="text" id= "altcorrect" name="correta_' + i + '" placeholder="Alternativa correta">';
      form += '<br>';
      form += 'Peso da questão: <input type="text" name="pesoquestao_' + i + '" placeholder="Peso da questão">';
      form += '<input type="hidden" name="qtd_questoes" value='+document.getElementById('qtd_questoes').value+'>';
      form += '<br>';
      form += '<br>';
      form += '<br>';
      form += '<br>';
      form += '<br>';
      form += '<br>';
    }
    form += '<br>';
    form += '<input type="submit" id="finalizaprova"  ></input>';
    form += '</form>';
    document.getElementById('cadastroprova').innerHTML = form;
  }
  </script>
  <style media="screen">
  body{
    background-image: url("../imgs/fundojogo22_meio2.png");
    font-family: 'Indie Flower', cursive;
  }
  </style>
</head>
<body onload="loadPagina()">
  <img src="../imgs/fundojogo22_topo.png">
  <div class="cadastroprovas" id="cadastroprova">

  </div>
  <footer style="bottom: 0;"> <img src="../imgs/fundojogo22_rodape.png"> </footer>



</body>
</html>
