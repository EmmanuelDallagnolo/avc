
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


  <style media="screen">
  #prova_cadastrada{
    visibility: hidden;
    position: fixed;
    height: 600px;
    width: 800px;
    background-color: black;
    margin-left: 400px;
    margin-top: 100px;
    overflow: auto;

    padding-left: 25px;
        top: 0px;

  }
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
    document.getElementById('prova_cadastrada').style.visibilty="visible";
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
      <input type="text" id="codigoprova" placeholder="codigo prova" value="">
      <input type="button" name="submitcodigoprova" onclick="abrirprovacad()" value="Ok">

  </div>

  <canvas id="tela" width="800" height="600" style="z-index:-1;"></canvas>
</body>
</html>
