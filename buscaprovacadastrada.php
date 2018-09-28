<?php
include_once("includes/banco_de_dados.php");
session_start();
if (isset($_POST['codigoprova'])) {
  $arrayQuestoescadastradas = select("SELECT * FROM questoes_cadastradas WHERE provas_cadastradas_id = '{$_POST['codigoprova']}'");
  $arrayProvascadastradas = select("SELECT * FROM provas_cadastradas WHERE id='{$_POST['codigoprova']}'");

  $_SESSION["questoescadastradas"] = $arrayQuestoescadastradas;

  if($_GET['tipo'] == 1){
  echo json_encode($arrayQuestoescadastradas);
  }else {
  echo json_encode($arrayProvascadastradas);
  }
}



?>
