<!DOCTYPE html>
<?php include_once("includes/banco_de_dados.php");
$Usuariospontuacao = select("SELECT * FROM jogadores ORDER BY pontuacao DESC");
$posicao = 0;?>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" type="text/css" href="css/rankingstyle.css"/>
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <style media="screen">
  #divranking{
    background-image: url("imgs/fundoranking.png");
  }
  </style>
  <meta charset="utf-8">
  <title>Ranking</title>
  <script type="text/javascript">
function fecharanking() {
  document.getElementById('divranking').style.visibility="hidden";
  document.getElementById('botaosairranking').style.visibility="hidden";
  document.getElementById('fecharankjogo').style.visibility="hidden";
}
  </script>
</head>
<body>
  <div id="divranking">
      <img class="mb-4" src="imgs/logo.png" id="logoranking" alt="" width="120" height="150">
      <img class="mb-4" src="imgs/livrodourado.png" id="icongold" alt="" width="30" height="30">
      <img class="mb-4" src="imgs/livroprata.png" id="iconsilver" alt="" width="30" height="30">
      <img class="mb-4" src="imgs/livrobronze.png" id="iconbronze" alt="" width="30" height="30">
    <h1 id="ranktitulo">RANKING</h1>
    <table  id="rankingjogadores">
      <tr>
        <th>Posição</th>
        <th>Usuário</th>
        <th>Pontuação</th>
      </tr>
      <?php foreach ($Usuariospontuacao as $key => $value) {
        $posicao += 1;?>
        <tr>
          <td><?php echo $posicao ?></td>
          <td><?php echo $value["usuario"] ?></td>
          <td><?php echo $value["pontuacao"] ?></td>
        </tr>
      <?php  } ?>
    </table>
  </div>
  <button type="button" id="botaosairranking" onclick="fecharanking();" name="button">HOME</button>
  <button type="button" name="btfecharanking" id="fecharankjogo" onclick="fecharanking();">SAIR RANK</button>
</body>
</html>
