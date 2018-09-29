<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <?php
  include_once('includes/banco_de_dados.php');

    if ($_POST['pesquisajog'] == "") {
      echo $_POST['pesquisajog'];
      $jogadores = select("SELECT * FROM `jogadores` WHERE 1");
    }else {
      $jogadores = select("SELECT * FROM `jogadores` WHERE usuario = '{$_POST['pesquisajog']}'");

    }

function alteradados()
{
$alterou =  sql_delete_update("UPDATE jogadores SET nome = '{$_POST['nome']}',sobrenome = '{$_POST['sobrenome']}',usuario = '{$_POST['usuario']}',email = '{$_POST['email']}' nivel_prova = {$_POST['nivel_prova']}, nmr_prova = {$_POST['nmr_prova']},pontuacao = {$_POST['pontuacao']} WHERE usuario = {$_POST['pesquisajog']}");
}


  ?>
  <script type="text/javascript">
function loadjogadores() {
  form=  '<form class="" action="adminpage.php" onsubmit="alteradados()" method="post">'
  form+=  '<table  id="rankingjogadores">'
  form+=  '<tr>'
  form+=  '<th>Nome</th>'
  form+=  '<th>Sobrenome</th>'
  form+=  '<th>Usuario</th>'
  form+=  '<th>Data de cadastro</th>'
  form+=  '<th>E-mail</th>'
  form+=  '<th>Data de nascimento</th>'
  form+=  '<th>Nivel</th>'
  form+=  '<th>Fase</th>'
  form+=  '<th>Pontuação</th>'
  form+=  '</tr>'
  <?php foreach ($jogadores as $key => $value) {?>
    form+=  '<tr>'
    form+=  '<td><input type="text" name="nome" value="<?php echo $value["nome"] ?>"></td>'
    form+=  '<td><input type="text" name="sobrenome" value="<?php echo $value["sobrenome"] ?>"></td>'
    form+=  '<td><input type="text" name="usuario" value="<?php echo $value["usuario"] ?>"></td>'
    form+=  '<td><?php echo $value["data_cadastro"] ?></td>'
    form+=  '<td><input type="text" name="email" value="<?php echo $value["email"] ?>"></td>'
    form+=  '<td><?php echo $value["data_nasci"] ?></td>'
    form+=  '<td><input type="text" name="nivel_prova" style="width:30px;" value="<?php echo $value["nivel_prova"] ?>"></td>'
    form+=  '<td><input type="text" name="nmr_prova" style="width:30px;" value="<?php echo $value["nmr_prova"] ?>"></td>'
    form+=  '<td><input type="text" name="pontuacao" style="width:50px;" value="<?php echo $value["pontuacao"] ?>"></td>'
    form+=  '</tr>'
    <?php  } ?>
    form+=  '</table>'
    form+='<input type="submit" name="pesquisajogador" value="Alterar"></input>'
    form+= '<label for="pesquisajogador">Pesquisar Jogador</label>'
    form+= '<input type="text" name="pesquisajog" placeholder="usuario jogador" value=""></input>'
    form+='<input type="submit" name="pesquisajogador" value="Pesquisar"></input>'
    form+=  '</form>'
    document.getElementById('pageadminjogadores').innerHTML = form;

}

    </script>
  </head>
  <body onload="loadjogadores()">
    <div class="" id="pageadminjogadores">

    </div>


</body>
</html>
