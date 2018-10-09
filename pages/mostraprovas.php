
<?php
include_once("../includes/banco_de_dados.php");
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>

</style>
<script type="text/javascript">
function mostraprovas() {
  document.getElementById("divmostraprova").style.visibility = "visible";
}
function fechamostraprovas() {
  document.getElementById("divmostraprova").style.visibility = "hidden";
}
</script>
</head>
<body>
  <?php $arrayUsuarios = select("SELECT * FROM jogadores");
  foreach ($arrayUsuarios as $key => $value) {
    if ($value["email"] == $_SESSION["usuario"]["email"]) {
      $arrayQuestoesUsuario = select("SELECT * FROM jogadores_has_questoes WHERE jogadores_id = '{$value['id']}'");

    }
  } ?>
  <div class="" id="divmostraprova">

    <?php
    $nmrquestao = 0;
    foreach ($arrayQuestoesUsuario as $key => $value){
      $Resposta = select("SELECT * FROM questoes WHERE id='{$value['questoes_id']}'");
      $nmrquestao += 1;?>
      <xmp><?php echo  $nmrquestao,')',$value["resposta"];; ?> </xmp>
      <br>
      <?php } ?>
      <button type="button" id="mostraprovasbt" onclick="fechamostraprovas();" name="button">Back</button>

    </div>
  </body>
  </html>
