<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="../css/signin.css"/>
  <link rel="stylesheet" type="text/css" href="../css/csestyle.css"/>
  <link rel="stylesheet" type="text/css" href="../css/provastyle.css"/>
  <link rel="stylesheet" type="text/css" href="../css/passounivelstyle.css"/>
  <link rel="stylesheet" type="text/css" href="../css/mostraprovastyle.css"/>
  <link rel="icon" href="../imgs/logo_jDA_icon.ico">
  <script src="../js/jquery.js"></script>
  <script src="../js/ajax.js"></script>
  <script src="../js/bootstrap/bootstrap.js"></script>
  <title></title>
  <style media="screen">
  #tutorial{
    margin: 0 auto;

  }
  body{
    background-image: url("../imgs/fundojogo.jpg");
    margin: 0 auto;
    background-repeat: no-repeat;
  }
  #botaofinalizartutorial{
    left: 327px;
    position: fixed;
    top: 504px;
    -moz-border-radius:17px;
    -webkit-border-radius:17px;
    border-radius:17px;
    color:#ffffff;
    font-size:20px;
    background-color: #545859;
  }

  </style>
  <script type="text/javascript">
  function fechatutorial(){
    window.location="../pages/avc.php";
  }
  $(document).ready(function(){
    $("#tutorial").carousel({interval: false});
  });
  </script>

</head>
<body>
  <div id="tutorial" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../imgs/tutorialmovimento.png" alt="1o slide">
        <a class="carousel-control-next" href="#tutorial" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../imgs/tutorialsaladeprova.png" alt="2o slide">
        <a class="carousel-control-next" href="#tutorial" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../imgs/tutorialdivinformacoes.png" alt="3o slide">
        <a class="carousel-control-next" href="#tutorial" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../imgs/tutorialbiblioteca.png" alt="4o slide">
        <button type="button" id="botaofinalizartutorial" class="btn btn-success" onclick="fechatutorial();">Finalizar tutorial</button>    </div>
      </div>

    </div>
  </body>
  </html>
