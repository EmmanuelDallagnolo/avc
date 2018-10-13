<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/divinformacoesstyle.css">;
  <script src="../js/jquery.js"></script>
  <script src="../js/ajax.js"></script>
  <script type="text/javascript">
  var arrayinfo = new Array();
  function informacoes(){
    var id = '1';
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      debugger;
      if (this.readyState == 4 && this.status == 200) {
        arrayinfo = JSON.parse(this.responseText);
        debugger;
        var form = '<h3>Informações</h3>';
        form += '<b id="DIusuario">Usuário:' + arrayinfo[0].usuario + '</b>';
        form += '<br>';
        form += '<b id="DIpontuacao">Pontuação:' + arrayinfo[0].pontuacao + '</b>';
        form += '<br>';
        form += '<b id="DIprova">Prova:' + arrayinfo[0].nmr_prova + '</b>';
        form += '<br>';
        form += '<b id="DIfase">Fase:' + arrayinfo[0].nivel_prova + '</b>';
        document.getElementById('divinformacoes').innerHTML = form;
      }
    }
    xmlhttp.open("GET", "../includes/atualizaJogadores.php?id="+id, true);
    xmlhttp.send();
  }
  informacoes();
  </script>
</head>
<body>
  <div id="divinformacoes">


  </div>
</body>
</html>
