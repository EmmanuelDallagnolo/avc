
<?php
include_once("includes/banco_de_dados.php");
?>
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8">
  <title></title>
  <script>
  function passounivel() {
    document.getElementById('passnivel').style.visibility="visible";
    setTimeout(function () {
      document.getElementById('passnivel').style.visibility="hidden";
    }, 3000);
  }
  function npassounivel() {;
    document.getElementById('npassnivel').style.visibility="visible";
    setTimeout(function () {
      document.getElementById('npassnivel').style.visibility="hidden";
    }, 3000);
  }
  function fechaprova() {
    document.getElementById("prova").style.visibility = "hidden";

  }
  function submitProva(){
    var xmlhttp = new XMLHttpRequest();

    var formElement = document.forms[0];
    var formData = new FormData(formElement);

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        criarProva();
        debugger;
        if(this.responseText == "1"){
          passounivel();
        }else if(this.responseText == "2"){
          npassounivel();
        }

      }
    };
    xmlhttp.open("POST", "validaprova.php", true);
    xmlhttp.send(formData);
    document.getElementById('prova').style.visibility="hidden";
  }

  var arrayQuestoes = new Array();
  var arrayProva = new Array();
  criarProva();


  function criarProva(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

        arrayProva = JSON.parse(this.responseText);
        criarQuestoes();
      }
    }

    xmlhttp.open("GET", "buscaProva.php?tipo=0", true);
    xmlhttp.send();
  }

  function criarQuestoes(){


    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        arrayQuestoes = JSON.parse(this.responseText);


        var form = '<form id="questionario" name ="questionario" method="POST" style="color:white;">';
        form += arrayProva[0].nome + '<br>';
        for(var i = 0; i < arrayQuestoes.length; i++){

          form += '<xmp> '  + arrayQuestoes[i].enunciado + ' </xmp> <br>';
          form += '<div class="form-check">';
          form += '<input class="form-check-input" type="radio" name="provaradio_'  + arrayQuestoes[i].id + '" id="aa" value="a" required >';
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
        form += '<button type="button" id="finalizaprova" onclick="submitProva()" class="btn btn-secondary" >Finalizar</button>';
        form += '</form>';

        document.getElementById('prova').innerHTML = form;


        prova.scrollTop = 0;

        //this.responseText
      }
    };
    xmlhttp.open("GET", "buscaProva.php?tipo=1", true);
    xmlhttp.send();


  }
  </script>

</head>
<body>

  <div id="prova">


  </div>
</body>
</html>
