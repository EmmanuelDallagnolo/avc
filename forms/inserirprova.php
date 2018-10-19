<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nanum+Gothic" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="../css/inserirprovastyle.css"/>
  <script src="../js/bootstrap/bootstrap.js"></script>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
  </style>
  <script type="text/javascript">

  function quantidadequestoes() {
    var formqtd = '<h1 id = "p1" class="h2 mb-3 font-weight-normal newFont" style="color:white;">Cadastro prova 1/3</h2>'
    formqtd += '<h3 id= "qtsquestoes">Quantas questões serão inseridas na prova? </h3>'
    formqtd += '<input type="text" name="qtd_questoes" value="" id="qtd_questoes">'
    formqtd += '<input id= "botaook" type="button" name="name" value="OK" onclick="cadastrarprova();">'
    document.getElementById('cadastroprova').innerHTML = formqtd;
  }
  function cadastrarprova() {
    var form = '<form id="questionario" action="../pages/codigoprova.php" name ="questionario" method="POST">';
    form += '<h1 id = "p1" class="h2 mb-3 font-weight-normal newFont" style="color:white;">Cadastro prova 2/3</h2>'
    form += '<textarea type="" id="assuprova" placeholder="Assunto da prova" name="assuntoprova" required></textarea>'
    form += '<br>';
    form += '<br>';
    for(var i = 1; i <= document.getElementById('qtd_questoes').value; i++){
      form += '<b id="numerosquestao">'+ i +')</b><textarea type=""  id= "enun" name="enunciado_' + i + '" placeholder="Enunciado questão" required></textarea>';
      form += '<br>';
      form += '<br>';
      form+= '<div class="form-group row">';
      form+= '<label for="inputEmail3" class="col-sm-2 col-form-label">A)</label>';
      form+= '<div class="col-sm-10">';
      form+= '<textarea type="" id="opcoes" name="opcao1_' + i + '" ' + ' required></textarea>';
      form+= '</div>';
      form+= '</div>';
      form+= '<div class="form-group row">';
      form+= '<label for="inputEmail4" class= "col-sm-2 col-form-label">B)</label>';
      form+= '<div class="col-sm-10">';
      form+= '<textarea type="" id="opcoes" name="opcao2_' + i + '" ' + ' required></textarea>';
      form+= '</div>';
      form+= '</div>';
      form+= '<div class="form-group row">';
      form+= '<label for="inputEmail4" class= "col-sm-2 col-form-label">C)</label>';
      form+= '<div class="col-sm-10">';
      form+= '<textarea type="" id="opcoes" name="opcao3_' + i + '" ' + ' required></textarea>';
      form+= '</div>';
      form+= '</div>';
      form+= '<div class="form-group row">';
      form+= '<label for="inputEmail4" class= "col-sm-2 col-form-label">D)</label >';
      form+= '<div class="col-sm-10">';
      form+= '<textarea type="" id="opcoes" name="opcao4_' + i + '" ' + ' required></textarea></textarea>';
      form+= '</div>';
      form+= '</div>';
      form += '<b id="textaltpeso">Alternativa correta: </b><input type="text" id= "altcorrect" name="correta_' + i + '" placeholder="Alternativa correta" required>';
      form += '<br>';
      form += '<b id="textaltpeso">Peso da questão: </b><input type="text" id="pesoquest" name="pesoquestao_' + i + '" placeholder="Peso da questão" required>';
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
</head>
<body onload="quantidadequestoes()">
  <img src="../imgs/fundojogo22_topo.png">
  <div class="cadastroprovas" id="cadastroprova">

  </div>
  <footer style="bottom: 0;"> <img src="../imgs/fundojogo22_rodape.png"> </footer>



</body>
</html>
