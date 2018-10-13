<!DOCTYPE html>
<?php session_start()?>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="../css/signin.css"/>
  <link rel="stylesheet" type="text/css" href="../css/perfilusuariocss.css"/>
  <link rel="icon" href="../imgs/logo_jDA_icon.ico">
  <script src="../js/jquery.js"></script>
  <script src="../js/ajax.js"></script>
  <script src="../js/bootstrap/bootstrap.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nanum+Gothic" rel="stylesheet">
  <meta charset="utf-8">
  <title>Perfil Usuario</title>
  <style media="screen">
  body {
    background-image: url('../imgs/fundoadmin.png');
  }
  </style>
  <?php
  include_once('../includes/banco_de_dados.php');
  ?>
  <script type="text/javascript">
  function admlogin() {
    window.location="avc.php";
  }
  function loadjogadores() {
    var form = '<h1 id="titleadm">Página Usuario</h1>';
    form+=  '<form class="" id="formadminpage" action="adminpage.php" method="post">'
    form+=  '<table  id="rankingjogadores">'
    form+=  '<tr>'
    form+=  '<th id="titulos">Nome</th>'
    form+=  '<th id="titulos">Sobrenome</th>'
    form+=  '<th id="titulos">Sexo</th>'
    form+=  '<th id="titulos">Usuario</th>'
    form+=  '<th id="titulos">Data de cadastro</th>'
    form+=  '<th id="titulos">E-mail</th>'
    form+=  '<th id="titulos">Data de nascimento</th>'
    form+=  '<th id="titulos">Pontuação</th>'
    form+=  '</tr>'
    form+=  '<tr id="<?php echo $_SESSION['usuario']['id'] ?>">'
    form+=  '<td><input type="text" name="nome" onfocusout="alteradados(this)" value="<?php echo $_SESSION['usuario']['nome'] ?>"></td>'
    form+=  '<td><input type="text" name="sobrenome" onfocusout="alteradados(this)" value="<?php echo $_SESSION['usuario']['sobrenome'] ?>"></td>'
    form+=  '<td><input type="text" name="sexo" onfocusout="alteradados(this)" value="<?php echo $_SESSION['usuario']['avatar'] ?>"></td>'
    form+=  '<td><input type="text" name="usuario" onfocusout="alteradados(this)" value="<?php echo $_SESSION['usuario']['usuario']?>"></td>'
    form+=  '<td id="titulos"><?php echo $_SESSION['usuario']['data_cadastro'] ?></td>'
    form+=  '<td><input type="text" name="email" onfocusout="alteradados(this)" value="<?php echo $_SESSION['usuario']['email'] ?>"></td>'
    form+=  '<td id="titulos" ><?php echo $_SESSION['usuario']['data_nasci'] ?></td>'
    form+=  '<td id="pontuacao"><?php echo $_SESSION['usuario']['pontuacao'] ?></td>'
    form+=  '</tr>'
    form+= '</table>'
    form+= '</form>'
    form+= '<input type="button" id="btadmlogin" onclick="admlogin()" value="Voltar" ></input>'
    document.getElementById('pageadminjogadores').innerHTML = form;
  }
  function alteradados(input){debugger;
    var id = input.parentElement.parentElement.id;
    var valor = input.value;
    var nomeInput = input.name;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        //this.responseText
      }
    }
    xmlhttp.open("GET", "../includes/atualizaJogadores.php?id="+id+"&valor="+valor+"&nomeInput="+nomeInput, true);
    xmlhttp.send();
  }
  </script>
</head>
<body onload="loadjogadores()">
  <div class="" id="pageadminjogadores">

  </div>


</body>
</html>
