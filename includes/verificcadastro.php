<?php
session_start();
$jacadastrado = 0;
include_once("banco_de_dados.php");
$arrayUsuarios = select("SELECT * FROM jogadores");
if (isset($_POST["inputusuario"])) {
  foreach ($arrayUsuarios as $key => $value) {
    if ($value["usuario"] == $_POST["inputusuario"] || $value["email"] == $_POST["inputemail"]) {
      $jacadastrado += 1;
      echo "<script>alert('Usuario ja cadastrado')</script>";
      break;
    }
  }
  if ($jacadastrado == 0) {
    if ($_POST['inlineRadioOptions'] == "option1") {
      $sexo = '1';
    }else{
      $sexo = '2';
    }
    $data_atual = date('Y/m/d H:i:s');
    $cadastrou = php_insert("INSERT INTO jogadores VALUES (DEFAULT,'{$_POST['inputnome']}','{$_POST['inputsobrenome']}','{$_POST['inputusuario']}','$sexo','$data_atual','{$_POST['inputemail']}','{$_POST['inputsenha']}','{$_POST['inputdatanasc']}',1,1,0,0)");
    if ($cadastrou == 1) {
      echo "<script>alert('Cadastrado com sucesso')</script>";
      header("Location: ../index.php");
    }else{
      echo "<script>alert('Erro ao cadastrar')</script>";
    }
  }
}
//login
if(isset($_POST["email"])){
  foreach ($arrayUsuarios as $key => $value) {
    if ($value["email"] == $_POST["email"] && $value["senha"] == $_POST["senha"]) {
      $_SESSION["usuario"] = $value;
      if ($_POST["email"] == "emmanueldallagnolo@gmail.com" && $_POST["senha"] == "123") {
        header("Location: adminpage.php");
      }else {
        if (($value["nmr_prova"] == 1) && ($value["nivel_prova"] == 1)) {
          header("Location: tutorial.php");
        }else{
          header("Location: ../pages/avc.php");
        }
      }/* Redirect browser */
      exit();
      break;
    }
  }
  header("Location: ../index.php?erro=1");
}





?>
