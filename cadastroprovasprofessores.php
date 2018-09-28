
<html>
<head>
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
  </style>
  <script type="text/javascript">
  function cadastrarprova() {
    var form = '<form id="questionario" action="includes/cadastraprova.php" name ="questionario" method="POST" style="color:black;">';
    form += '<input type="text" placeholder="Assunto Da Prova" name="assuntoprova">'
    form += '<br>';
    form += '<br>';
    for(var i = 1; i <= document.getElementById('qtd_questoes').value; i++){
      form += i + ')<input type="text" name="enunciado_' + i + '" ' + '" placeholder="Enunciado questão">';
      form += '<br>';
      form += '<br>';
      form += 'A) <input type="text" name="opcao1_' + i + '" ' + '>';
      form += '<br>';
      form += 'B) <input type="text" name="opcao2_' + i + '" ' + '>';
      form += '<br>';
      form += 'C) <input type="text" name="opcao3_' + i + '" ' + '>';
      form += '<br>';
      form += 'D) <input type="text" name="opcao4_' + i + '" ' + '>';
      form += '<br>';
      form += '<br>';
      form += 'Alternativa correta: <input type="text" name="correta" placeholder="Alternativa correta">';
      form += '<br>';
      form += '<br>';
      form += 'Peso da questão: <input type="text" name="pesoquestao" placeholder="Peso da questão">';
      form += '<br>';
      form += '<br>';
    }
    form += '<br>';
    form += '<input type="text"  style="visibility:hidden;"name="qtd_questoes" value="'+ document.getElementById('qtd_questoes') +'">';
    form += '<input type="submit" id="finalizaprova" onsubmit=""  >Finalizar</input>';
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
