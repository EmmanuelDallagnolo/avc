<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/divinformacoesstyle.css">;
  <script src="../js/jquery.js"></script>
  <script src="../js/ajax.js"></script>
  <script>
  function informacoes() {
    setTimeout(function(){
      $(function(){
        $.ajax({
          url: "../includes/informacoesajax.php",
        })
        .done(function( data ) {
          var arrayinfo = new Array();
          arrayinfo = JSON.parse(data);
          var form = '<h3>Informações</h3>';
          form += '<b id="DIusuario">Usuário: ' + arrayinfo[0].usuario + '</b>';
          form += '<br>';
          form += '<b id="DIpontuacao">Pontuação: ' + arrayinfo[0].pontuacao + '</b>';
          form += '<br>';
          if (arrayinfo[0].nmr_prova == 1) {
            form += '<b id="DIprova">Prova: HTML</b>';
            form += '<br>';
            form += '<b id="DIfase">Nível: Fácil</b>';
          }
          if (arrayinfo[0].nmr_prova == 2) {
            form += '<b id="DIprova">Prova: PHP</b>';
            form += '<br>';
            form += '<b id="DIfase">Nível: Fácil</b>';
          }
          if (arrayinfo[0].nmr_prova == 3) {
            form += '<b id="DIprova">Prova: CSS</b>';
            form += '<br>';
            form += '<b id="DIfase">Nível: Fácil</b>';
          }
          if (arrayinfo[0].nmr_prova == 4) {
            form += '<b id="DIprova">Prova: JS</b>';
            form += '<br>';
            form += '<b id="DIfase">Nível: Médio</b>';
          }
          if (arrayinfo[0].nmr_prova == 5) {
            form += '<b id="DIprova">Prova: SQL</b>';
            form += '<br>';
            form += '<b id="DIfase">Nível: Médio</b>';
          }
          if (arrayinfo[0].nmr_prova == 6) {
            form += '<b id="DIprova">Prova: jQuery</b>';
            form += '<br>';
            form += '<b id="DIfase">Nível: Médio</b>';
          }

          $("#divinformacoes").html(form);
        });
      });
      informacoes();
    }, 1000);
  }
informacoes();

  </script>
</head>
<body>
  <div id="divinformacoes">


  </div>
</body>
</html>
