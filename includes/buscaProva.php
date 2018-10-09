<?php
include_once("banco_de_dados.php");
session_start();

$arrayUsuarios = select("SELECT * FROM jogadores");
foreach ($arrayUsuarios as $key => $value) {
  if ($value["email"] == $_SESSION["usuario"]["email"]) {
    $arrayQuestoes = select("SELECT * FROM questoes WHERE provas_id = '{$value['nmr_prova']}'");
    $arrayProvas = select("SELECT * FROM provas WHERE id='{$value['nmr_prova']}'");
  }
}
$_SESSION["questoes"] = $arrayQuestoes;

if($_GET['tipo'] == 1){
  echo json_encode($arrayQuestoes);
}else {

  echo json_encode($arrayProvas);
}

?>
