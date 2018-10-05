
<?php
session_start();
include_once("includes/banco_de_dados.php");
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>

</head>
<body>
  <pre>
<?php
    if (isset($_SESSION["usuario"])) {
      $arrayQuestoesUsuario = select("SELECT * FROM jogadores_has_questoes INNER JOIN questoes on (jogadores_has_questoes.questoes_id=questoes.id) WHERE jogadores_id = ' {$_SESSION["usuario"]["id"]}'");

      //print_r($arrayQuestoesUsuario);

      $nmrquestao = 0;
      $notaProva = [];
      foreach ($arrayQuestoesUsuario as $key => $value){

           if(!isset($notaProva[$value["provas_id"]])){
              $notaProva[$value["provas_id"]] = 0;
            }
           if($value["resposta"]==$value["correta"]){
              $notaProva[$value["provas_id"]]++;
           }

       }


       print_r($notaProva);
}
  ?>
</pre>
  </body>
  </html>
