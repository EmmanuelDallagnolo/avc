
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nanum+Gothic" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"/>
  <script src="js/bootstrap/bootstrap.js"></script>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
  #opcao1{
    margin-left: 36px;
  }
  #opcao2{
    margin-left: 36px;
  }
  #opcao3{
    margin-left: 36px;
  }
  #opcao4{
    margin-left: 36px;
  }
  #p1 {
    text-align: center;
    font-size: 50px;
    margin-top: 23px;

  }

  #cadastroprova{
    text-align: center;
    margin-top: 96px;
    padding: 1px;
  }

}

#qtd_questoes{
  text-align: center;
  padding: 10px;
  font-size: 17px;
  width: 100px;
  height: 40px;
  margin-left: 27px;

}

#botaook{
  padding: -1px;
  margin-bottom: 168px;
}

#questionario {
  font-size: 19px;
  color:white;
  width: 500px;
  margin: 0 auto;
  /*background-image: url("imgs/quadro.jpg");*/1

}

#finalizaprova {

  margin-top: -90px;
}
#qtsquestoes {

  font-size: 34px;;
  color: white;
  margin-top: -1px;

}


}


</style>
<script type="text/javascript">
function funcaodoandrezinho() {
  var formqtd = '<h1 id = "p1" class="h2 mb-3 font-weight-normal newFont" style="color:white;">Cadastro prova 3/3</h2>'

  document.getElementById('cadastroprova').innerHTML = formqtd;
}
function quantidadequestoes() {
  var formqtd = '<h1 id = "p1" class="h2 mb-3 font-weight-normal newFont" style="color:white;">Cadastro prova 1/3</h2>'
  formqtd+= '<h3 id= "qtsquestoes">Quantas questoes serao inseridas na prova? </h3>'
  formqtd+= '<input type="text" name="qtd_questoes" value="" id="qtd_questoes">'
  formqtd+= '<input id= "botaook" type="button" name="name" value="OK" onclick="cadastrarprova();">'
  document.getElementById('cadastroprova').innerHTML = formqtd;
}
function cadastrarprova() {
  var form = '<form id="questionario" action="controllers/cadastraprova.php" name ="questionario" method="POST">';
  form+= '<h1 id = "p1" class="h2 mb-3 font-weight-normal newFont" style="color:white;">Cadastro prova 2/3</h2>'
  form += '<input type="text" placeholder="Assunto da prova" name="assuntoprova">'
  form += '<br>';
  form += '<br>';
  for(var i = 1; i <= document.getElementById('qtd_questoes').value; i++){
    form += i + ')<input type="text" id= "enun" name="enunciado_' + i + ' " ' + '" placeholder="Enunciado questão">';
    form += '<br>';
    form += '<br>';


    form+= '<div class="form-group row">';
    form+= '<label for="inputEmail3" class="col-sm-2 col-form-label">A)</label>';
    form+= '<div class="col-sm-10">';
    form+= '<input type="text" name="opcao1_' + i + ' " ' + '>';
    form+= '</div>';
    form+= '</div>';



    form+= '<div class="form-group row">';
    form+= '<label for="inputEmail4" class= "col-sm-2 col-form-label">B)</label>';
    form+= '<div class="col-sm-10">';
    form+= '<input type="text" name="opcao2_' + i + ' " ' + '>';
    form+= '</div>';
    form+= '</div>';



    form+= '<div class="form-group row">';
    form+= '<label for="inputEmail4" class= "col-sm-2 col-form-label">C)</label>';
    form+= '<div class="col-sm-10">';
    form+= '<input type="text" name="opcao3_' + i + ' " ' + '>';
    form+= '</div>';
    form+= '</div>';





    form+= '<div class="form-group row">';
    form+= '<label for="inputEmail4" class= "col-sm-2 col-form-label">D)</label>';
    form+= '<div class="col-sm-10">';
    form+= '<input type="text" name="opcao4_' + i + ' " ' + '>';
    form+= '</div>';
    form+= '</div>';


    form += 'Alternativa correta: <input type="text" id= "altcorrect" name="correta" placeholder="Alternativa correta">';
    form += '<br>';
    form += 'Peso da questão: <input type="text" name="pesoquestao" placeholder="Peso da questão">';
    form += '<br>';
    form += '<br>';
    form += '<br>';
    form += '<br>';
    form += '<br>';
    form += '<br>';
  }
  form += '<br>';
  form += '<input type="submit" id="finalizaprova" onclick="funcaodoandrezinho()"  ></input>';
  form += '</form>';

  document.getElementById('cadastroprova').innerHTML = form;

}

</script>
<style media="screen">

body{
  background-image: url("imgs/fundojogo22_meio2.png");

  font-family: 'Indie Flower', cursive;
}
</style>
</head>
<body onload="quantidadequestoes()">
  <img src="imgs/fundojogo22_topo.png">
  <div class="cadastroprovas" id="cadastroprova">

  </div>
  <footer style="bottom: 0;"> <img src="imgs/fundojogo22_rodape.png"> </footer>



</body>
</html>
