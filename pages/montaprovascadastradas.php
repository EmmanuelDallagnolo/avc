
<?php
include_once("../includes/banco_de_dados.php");
?>
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8">
  <title></title>
  <script>
  function submitProvacadastrada(){
    debugger;
    var xmlhttp = new XMLHttpRequest();

    var formElement = document.forms[0];
    var formData = new FormData(formElement);

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        alert("UHUL nota enviado");
        var formBuscaProva = '<input type="text" id="codigoprova" placeholder="Codigo prova" value=""><input type="button" id="codigoprovabotao" onclick="criarProvacadastrada()" value="Ok">';
        document.getElementById('provacadastrada').innerHTML = formBuscaProva;
      }
    };
    xmlhttp.open("POST", "../includes/validaprovacadastrada.php", true);
    xmlhttp.send(formData);
    document.getElementById('provacadastrada').style.visibility="hidden";
  }

  var $arrayQuestoescadastradas = new Array();
  var arrayProvacadastrada = new Array();
  var codigoProva;


  function criarProvacadastrada(){
    codigoProva = document.getElementById("codigoprova").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

        arrayProvacadastrada = JSON.parse(this.responseText);
        criarQuestoescadastradas();
      }
    }

    xmlhttp.open("POST", "../includes/buscaprovacadastrada.php?tipo=0&codigo="+codigoProva, true);
    xmlhttp.send();
  }


  function criarQuestoescadastradas(){


    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        $arrayQuestoescadastradas = JSON.parse(this.responseText);


        var form = '<form id="questionario" name ="questionario" method="POST" style="color:black;">';
        form += '<h1>' + arrayProvacadastrada[0].nome + '</h1><br>';
        for(var i = 0; i < $arrayQuestoescadastradas.length; i++){

          form += '<xmp class="alinhamentoTexto"> ' + $arrayQuestoescadastradas[i].enunciado + ' </xmp> <br>';
          form += '<div class="form-check">';
          form += '<input class="form-check-input" type="radio" name="provaradio_'  + $arrayQuestoescadastradas[i].id + '" id="aa" value="a" required >';
          form += '<label class="form-check-label" for="aa">';
          form += '<xmp id="alternativas" class="alinhamentoTexto">A) '  + $arrayQuestoescadastradas[i].alternativa_a + ' </xmp>';
          form += '</label>';
          form += '</div>';

          form += '<div class="form-check">';
          form += '<input class="form-check-input" type="radio" name="provaradio_'  + $arrayQuestoescadastradas[i].id + '" id="bb" value="b" required >';
          form += '<label class="form-check-label" for="bb">';
          form += '<xmp id="alternativas" class="alinhamentoTexto">B) '  + $arrayQuestoescadastradas[i].alternativa_b + ' </xmp>';
          form += '</label>';
          form += '</div>';

          form += '<div class="form-check">';
          form += '<input class="form-check-input" type="radio" name="provaradio_'  + $arrayQuestoescadastradas[i].id + '" id="cc" value="c" required >';
          form += '<label class="form-check-label" for="cc">';
          form += '<xmp id="alternativas" class="alinhamentoTexto">C) '  + $arrayQuestoescadastradas[i].alternativa_c + ' </xmp>';
          form += '</label>';
          form += '</div>';

          form += '<div class="form-check">';
          form += '<input class="form-check-input" type="radio" name="provaradio_'  + $arrayQuestoescadastradas[i].id + '" id="dd" value="d" required >';
          form += '<label class="form-check-label" for="dd">';
          form += '<xmp id="alternativas" class="alinhamentoTexto">D) '  + $arrayQuestoescadastradas[i].alternativa_d + ' </xmp>';
          form += '</label>';
          form += '</div>';



        }
        form += '<button type="button" id="finalizaprova" onclick="submitProvacadastrada()" class="btn btn-secondary" >Finalizar</button>';
        form += '</form>';

        document.getElementById('provacadastrada').innerHTML = form;


        prova.scrollTop = 0;

        //this.responseText
      }
    };
    xmlhttp.open("POST", "../includes/buscaprovacadastrada.php?tipo=1&codigo="+codigoProva, true);
    xmlhttp.send();
  }
  </script>

</head>
<body>

  <div id="provacadastrada">
    <input type="text" id="codigoprova" placeholder="Codigo prova" value="">
    <input type="button" id="codigoprovabotao" onclick="criarProvacadastrada()" value="Ok">

  </div>
</body>
</html>
