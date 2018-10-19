<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="../css/signin.css"/>
  <link rel="stylesheet" type="text/css" href="../css/cadastrostyle.css"/>
  <link rel="icon" href="../imgs/logo_jDA_icon.ico">
  <script src="../js/jquery.js"></script>
  <script src="../js/ajax.js"></script>
  <script src="../js/bootstrap/bootstrap.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nanum+Gothic" rel="stylesheet">
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
  body {
    background-image: url("../imgs/fundo.png");
  }
  #textoquemsomos{
    text-align: center;
    margin-top: 147px;
    margin-left: 288px;
    margin-right: 305px;
  }
  #voltarlogin{
    margin-top: 85px;
  }
  </style>
  <script>
  function logout() {
    window.location = "../index.php";
  }
  </script>
</head>
<body class="text-center" style="color:white"; >

  <div id="textoquemsomos">
    <img class="mb-4" src="../imgs/logo.png" id="logoquemsomos" alt="" width="120" height="150"class="col-3 col-form-label newFont">
    <h1 class="h1 mb-3 font-weight-normal newFont" style="color:white;">Quem somos:</h1>
    <p>A Vida Cobra os Estudos tem como papel principal estimular e interessar os alunos ao aprendizado,
    através de um "game". O jogo proposto visa mostrar a trilha de um estudante. Nesta trilha,
    o jogador terá acesso a informações de diferentes cursos com diferentes assuntos abordados
    (HTML, JavaScript, entre outros), se atender com êxito aos requisitos mínimos de aprovação
    ao final ira receber um diploma de conclusão do jogo.</p>
      <img src="../imgs/home.png" id="voltarlogin" onclick="logout();" alt="" />
    </div>

  </body>
  </html>
