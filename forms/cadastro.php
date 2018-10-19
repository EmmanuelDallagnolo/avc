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
  <title>Cadastro</title>
  <style media="screen">
  body {
    background-image: url("../imgs/fundojogo.jpg");
    background-repeat: no-repeat;
  }
  #cadernocadastro{
    background-image: url("../imgs/caderno.png");
  }
  </style>
  <?php
  include_once("../includes/banco_de_dados.php");
  if(isset($_GET["erro"]) && $_GET["erro"] == 2){
    echo "<script>alert('Usuario ja cadastrado')</script>";
  }
  ?>
</head>
<body class="text-center">
  <div class="" id="cadernocadastro">
    <form class="form-signin" action="../includes/verificcadastro.php" method="post">
      <br>
      <br>
      <h1 class="h1 mb-3 font-weight-normal newFont" id= "caderson" style="color:black;">Cadastro</h1>
      <div class="form-group row" id="nome_cadastro_row">
        <label for="inputnome" id="nome_cadastro" class="col-2  col-form-label newFont">Nome</label>
        <div class="col-10">
          <input type="text" id="inputnome" class="form-control inputForm" name="inputnome" autofocus required>
        </div>
      </div>
      <div class="form-group row" id="sobrenome_cadastro_row">
        <label for="inputsobrenome" id="sobrenome_cadastro" class="col-3 col-form-label newFont">Sobrenome</label>
        <div class="col-9">
          <input type="text" id="inputsobrenome" class="form-control inputForm" name="inputsobrenome" required>
        </div>
      </div>
      <div class="form-group row" id="sexo_cadastro_row">
        <label id="sexo_cadastro" class="col-2 col-form-label newFont">Sexo</label>
        <div class="col-10">
          <div id="masc_radio">
            <div class="form-check form-check-inline" >
              <input class="form-check-input " type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label newFont" for="inlineRadio1">Masculino</label>
            </div>
            <div class="form-check form-check-inline" id="fem_radio">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label newFont" for="inlineRadio2">Feminino</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row" id="usuario_cadastro_row">
        <label for="inputusuario" id="usuario_cadastro" class="col-2 col-form-label newFont">Usuário</label>
        <div class="col-10">
          <input type="text" id="inputusuario" class="form-control inputForm" name="inputusuario" required>
        </div>
      </div>
      <div class="form-group row" id="email_cadastro_row">
        <label for="inputemail" id="email_cadastro" class="col-3 col-form-label newFont">E-mail</label>
        <div class="col-9">
          <input type="email" id="inputemail" class="form-control inputForm" name="inputemail" required>
        </div>
      </div>
      <div class="form-group row" id= "senha_cadastro_row">
        <label for="inputsenha" id= "senha_cadastro" class="col-2 col-form-label newFont">Senha</label>
        <div class="col-10">
          <input type="password" id="inputsenha" class="form-control inputForm" name="inputsenha" required pattern="[a-z]{0-12}" placeholder="Maximo 12 caractere" onchange="form.inputcsenha.pattern = this.value;">
        </div>
      </div>
      <div class="form-group row" id="csenha_cadastro_row">
        <label for="inputcsenha" id= "csenha_cadastro" class="col-5 col-form-label newFont">Confirmar senha</label>
        <div class="col-7 ">
          <input type="password" id="inputcsenha" class="form-control inputForm" name="inputcsenha" required pattern="[a-z]{12}" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'As senhas näo conferem' : '')">
        </div>
      </div>
      <div class="form-group row" id="dnasc_cadastro_row">
        <label for="inputdatanasc" id="dnasc_cadastro" class="col-6 col-form-label newFont">Data de nascimento</label>
        <div class="col-6">
          <input type="date" id="input_datanasc_row" class="form-control inputForm" name="inputdatanasc" required>
        </div>
      </div>
      <br>
      <button id= "botao_cadastrar" class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button><br>
      <a href="../index.php" style="color:black; margin-left: 71px;">Já é cadastrado? Faça login aqui!</a>
    </form>
  </div>
</body>
</html>
