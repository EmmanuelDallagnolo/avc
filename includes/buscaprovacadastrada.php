<?php
include_once("banco_de_dados.php");
session_start();
if (isset($_GET['codigo'])) {
  $arrayQuestoescadastradas = select("SELECT * FROM questoes_cadastradas WHERE provas_cadastradas_id = '{$_GET['codigo']}'");
  $arrayProvascadastradas = select("SELECT * FROM provas_cadastradas WHERE id='{$_GET['codigo']}'");

  $_SESSION["questoescadastradas"] = $arrayQuestoescadastradas;

  if($_GET['tipo'] == 1){
    echo json_encode($arrayQuestoescadastradas);
  }else {
    echo json_encode($arrayProvascadastradas);
  }
}



?>
