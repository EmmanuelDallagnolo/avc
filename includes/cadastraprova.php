<?php
session_start();
include_once("banco_de_dados.php");
$cadastraassuntoprova = php_insert("INSERT INTO provas_cadastradas VALUES (DEFAULT,'{$_POST['assuntoprova']}')");
for($i = 1; $i <= 2; $i++){
  echo "INSERT INTO questoes_cadastradas VALUES (DEFAULT,'{$_POST['enunciado_'.$i]}','{$_POST['opcao1_'.$i]}','{$_POST['opcao2_'.$i]}','{$_POST['opcao3_'.$i]}','{$_POST['opcao4_'.$i]}','{$_POST['correta']}','{$_POST['pesoquestao']}')";
  // $cadastraquestoesprova = php_insert("INSERT INTO questoes_cadastradas VALUES (DEFAULT,'{$_POST['enunciado_'.$i]}','{$_POST['opcao1_'.$i]}','{$_POST['opcao2_'.$i]}','{$_POST['opcao3_'.$i]}','{$_POST['opcao4_'.$i]}','{$_POST['correta']}','{$_POST['pesoquestao']}')");
}
?>
