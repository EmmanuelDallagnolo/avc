
<?php session_start();
include_once("mostraprovas.php");
include_once("ranking.php");
include_once("montaprova.php");
include_once("csebody.php");
include_once("passounivel.php");
include_once("montaprovascadastradas.php");
?>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/signin.css"/>
  <link rel="stylesheet" type="text/css" href="css/csestyle.css"/>
  <link rel="stylesheet" type="text/css" href="css/provastyle.css"/>
  <link rel="stylesheet" type="text/css" href="css/passounivelstyle.css"/>
  <link rel="stylesheet" type="text/css" href="css/mostraprovastyle.css"/>
  <link rel="stylesheet" type="text/css" href="css/jogostyle.css"/>
    <link rel="stylesheet" type="text/css" href="css/provacadastradastyle.css"/>
  <link rel="icon" href="imgs/logo_jDA_icon.ico">
  <script src="js/jquery.js"></script>
  <script src="js/ajax.js"></script>
    <script src="js/bootstrap/bootstrap.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nanum+Gothic" rel="stylesheet">

  <meta charset="UTF-8" />
  <title>A Vida Cobra os Estudos</title>

  <script src="js/collide.js"></script>
  <script src="js/sprite.js"></script>
  <script src="js/jogador.js"></script>
  <script src="js/script.js"></script>
  <script src="js/parede.js"></script>
  <script src="js/teleport.js"></script>
  <script src="js/camera.js"></script>
  <script src="js/cseteste.js"></script>
  <script src="js/prova.js"></script>
  <script src="js/provacadastrada.js"></script>


  <style media="screen">
  body{
    background-image: url("imgs/fundojogo.jpg");
    background-repeat: no-repeat;
  }
  #backgroundstatus{
    background-image: url("imgs/status.jpg");
  }
  </style>
  <script>
  function abrirprovacad() {
    criarProvacadastrada(document.getElementById("codigoprova").value);
    document.getElementById("codigoprovabotao").style.visibility = "hidden";
    document.getElementById("codigoprova").style.visibility = "hidden";
  }
  function fechacse() {
    document.getElementById("cse").style.visibility = "hidden";
    document.getElementById("csebd").style.visibility = "hidden";
  }
  function logout() {
    window.location = "http://localhost/challenge/index.php";
  }
  function abrirranking() {
  document.getElementById('divranking').style.visibility="visible";
  document.getElementById('fecharankjogo').style.visibility="visible";
  }

  </script>
</head>
<body>
  <div class=""id="backgroundstatus">
    <img src="imgs/home.png" id="iconhome" onclick="logout();" alt="" />
    <img src="imgs/ranking.png" id="iconranking" onclick="abrirranking();"alt="" />
    <h1 class="newFont" id="titulo">A VIDA COBRA OS ESTUDOS</h1>
    <input type="text" id="codigoprova"  name="codigoprovainput" placeholder="codigo prova" value="">
    <input type="button" id="codigoprovabotao" name="submitcodigoprova"  onclick="abrirprovacad();" value="Ok">
  </div>

  <canvas id="tela" width="800" height="600" style="z-index:-1;"></canvas>
</body>
</html>
