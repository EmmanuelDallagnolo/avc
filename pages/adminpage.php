<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="../css/signin.css"/>
  <link rel="stylesheet" type="text/css" href="../css/adminpagecss.css"/>
  <script src="../js/bootstrap/bootstrap.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nanum+Gothic" rel="stylesheet">
  <style media="screen">
  body{
    background-image: url('../imgs/fundoadmin.png');

  }
  </style>
  <?php
  include_once('../includes/banco_de_dados.php');

  if (isset($_POST['pesquisajog']) && $_POST['pesquisajog'] != "") {
    $jogadores = select("SELECT * FROM `jogadores` WHERE usuario = '{$_POST['pesquisajog']}'");
  }
  else {
    $jogadores = select("SELECT * FROM `jogadores` WHERE 1");
  }
  ?>
  <script type="text/javascript">
  function admlogin() {
    window.location="../index.php";
  }
  function loadjogadores() {
    var form = '<h1 id="titleadm">PAGINA ADM</h1>';
    form+=  '<form class="" id="formadminpage" action="adminpage.php" method="post">'
    form+=  '<table  id="rankingjogadores">'
    form+=  '<tr>'
    form+=  '<th id="titulos">Nome</th>'
    form+=  '<th id="titulos">Sobrenome</th>'
    form+=  '<th id="titulos">Usuario</th>'
    form+=  '<th id="titulos">Data de cadastro</th>'
    form+=  '<th id="titulos">E-mail</th>'
    form+=  '<th id="titulos">Data de nascimento</th>'
    form+=  '<th id="titulos">Nivel</th>'
    form+=  '<th id="titulos">Fase</th>'
    form+=  '<th id="titulos">Pontuação</th>'
    form+=  '</tr>'
    <?php foreach ($jogadores as $key => $value) {?>
      form+=  '<tr id="<?php echo $value["id"] ?>">'
      form+=  '<td><input type="text" name="nome" onfocusout="alteradados(this)" value="<?php echo $value["nome"] ?>"></td>'
      form+=  '<td><input type="text" name="sobrenome" onfocusout="alteradados(this)" value="<?php echo $value["sobrenome"] ?>"></td>'
      form+=  '<td><input type="text" name="usuario" onfocusout="alteradados(this)" value="<?php echo $value["usuario"] ?>"></td>'
      form+=  '<td id="titulos"><?php echo $value["data_cadastro"] ?></td>'
      form+=  '<td><input type="text" name="email" onfocusout="alteradados(this)" value="<?php echo $value["email"] ?>"></td>'
      form+=  '<td id="titulos" ><?php echo $value["data_nasci"] ?></td>'
      form+=  '<td id="pontuacao"><input type="text"  name="nivel_prova" onfocusout="alteradados(this)" style="width:30px;" value="<?php echo $value["nivel_prova"] ?>"></td>'
      form+=  '<td id="pontuacao"><input type="text"  name="nmr_prova" onfocusout="alteradados(this)" style="width:30px;" value="<?php echo $value["nmr_prova"] ?>"></td>'
      form+=  '<td id="pontuacao"><input type="text"  name="pontuacao" onfocusout="alteradados(this)" style="width:50px;" value="<?php echo $value["pontuacao"] ?>"></td>'
      form+=  '</tr>'
      <?php  } ?>
      form+= '</table>'
      form+= '<label style="font-size:20px; color: white;" for="pesquisajogador" style="color:white;">Pesquisar Jogador :</label>'
      form+= '<input type="text"  name="pesquisajog" placeholder="Usuario jogador" value=""></input>'
      form+= '<input type="submit" name="pesquisajogador" value="Pesquisar"></input>'
      form+= '</form>'
      form+= '<input type="button" id="btadmlogin" onclick="admlogin()" value="Login" ></input>'
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
