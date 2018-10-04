<?php session_start();
include_once("includes/banco_de_dados.php");
//tava dando erro com o numero da prova
$arrayUsuarios = select("SELECT * FROM jogadores WHERE id = {$_SESSION['usuario']['id']}");
foreach ($arrayUsuarios as $key => $value) {
  $_SESSION["usuario"] = $value;
}
$pontos = 0;
foreach($_SESSION["questoescadastradas"] as $key=>$value){
  $escolha = @$_POST['provaradio_'.$value["id"]]; // Usado @, já que vai ser testado em seguida.
  if ($escolha == 'a') {
    $resposta = 'A';
  }else if($escolha == 'b') {
    $resposta = 'B';
  }else if ($escolha == 'c') {
    $resposta = 'C';
  }else if ($escolha == 'd'){
    $resposta = 'D';
  }
   $prova_finalizada = php_insert("INSERT INTO jogadores_has_questoes_cadastradas VALUES ({$_SESSION["usuario"]["id"]}, {$value["id"]}, '{$resposta}')");

  if ($resposta == $value["correta"]) {
    $pontos += 1;
  }
}
?>
