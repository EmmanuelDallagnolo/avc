<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/signin.css"/>
  <link rel="stylesheet" type="text/css" href="css/rankingstyle.css"/>
  <link rel="icon" href="imgs/logo_jDA_icon.ico">
  <script src="js/jquery.js"></script>
  <script src="js/ajax.js"></script>
  <script src="js/bootstrap/bootstrap.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nanum+Gothic" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="description" content="pagina de jogo online">
  <meta name="author" content="senaigames">
  <title>Login</title>
  <style media="screen">
  body {
    background-image: url("imgs/cadernologin.png");
    background-repeat: no-repeat;
    background-position: center;
  }





</style>
<?php
include_once("pages/ranking.php");
if(isset($_GET["erro"]) && $_GET["erro"] == 1){
  echo "<script>alert('Usuario ou senha incorreto')</script>";
}
?>
<script type="text/javascript">
function abreranking() {
  document.getElementById('divranking').style.visibility="visible";
  document.getElementById('botaosairranking').style.visibility="visible"
}
</script>
</head>
<body class="text-center" >


  <form class="form-signin" id="agoravai" method="post" action="includes/verificcadastro.php">
    <img class="mb-4" src="imgs/logo.png" alt="" width="150" height="180">
    <h1 class="h1 mb-3 font-weight-normal newFont" style="color:white;">A vida cobra os estudos</h1>
    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required autofocus>
    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <a href="forms/cadastro.php" style="color:white;">Ainda não sou cadastrado</a><br>
    <img src="imgs/icongold.png" id="rankingopen" onclick="abreranking()">
    <!-- <p class="mt-5 mb-3 text-muted">copelraite 2017-2018</p> -->
  </form>
</body>
</html>
