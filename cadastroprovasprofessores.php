<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <script type="text/javascript">
    function cadastrarprova() {
      var form = '<form id="questionario" name ="questionario" method="POST" style="color:white;">';
        form += '<input type="text" id="assuntoprova">'
      for(var i = 0; i < document.getElementById('qtd_questoes').value; i++){
        form +=  [i] + '<br>';
        form += '<xmp> '  + '<input type="text" >' + ' </xmp> <br>';
        form += '<div class="form-check">';
        form += '<input type="text" " id="aa" value="a" required >';
        form += '<label class="form-check-label" for="aa">';
        form += '<xmp>A) '  + arrayQuestoes[i].alternativa_a + ' </xmp>';
        form += '</label>';
        form += '</div>';

        form += '<div class="form-check">';
        form += '<input class="form-check-input" type="radio" name="provaradio_'  + arrayQuestoes[i].id + '" id="bb" value="b" required >';
        form += '<label class="form-check-label" for="bb">';
        form += '<xmp>B) '  + arrayQuestoes[i].alternativa_b + ' </xmp>';
        form += '</label>';
        form += '</div>';

        form += '<div class="form-check">';
        form += '<input class="form-check-input" type="radio" name="provaradio_'  + arrayQuestoes[i].id + '" id="cc" value="c" required >';
        form += '<label class="form-check-label" for="cc">';
        form += '<xmp>C) '  + arrayQuestoes[i].alternativa_c + ' </xmp>';
        form += '</label>';
        form += '</div>';

        form += '<div class="form-check">';
        form += '<input class="form-check-input" type="radio" name="provaradio_'  + arrayQuestoes[i].id + '" id="dd" value="d" required >';
        form += '<label class="form-check-label" for="dd">';
        form += '<xmp>D) '  + arrayQuestoes[i].alternativa_d + ' </xmp>';
        form += '</label>';
        form += '</div>';



      }
      form += '<button type="button" id="finalizaprova" onclick="" class="btn btn-secondary" >Finalizar</button>';
      form += '</form>';

      document.getElementById('cadastroprova').innerHTML = form;

    }
  </script>
</head>
<body>
  <div class="cadastroprovas" id="cadastroprova">
    <label for="qtd_questoes">Quantas questoes serao inseridas na prova: </label>
    <input type="text" name="qtd_questoes" value="" id="qtd_questoes">
    <input type="button" name="name" value="Ok" onclick="cadastrarprova();">
  </div>
</body>
</html>
