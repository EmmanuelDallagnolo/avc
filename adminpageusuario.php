<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    session_start();
    include_once('includes/banco_de_dados.php');

      $jogadores = select("SELECT * FROM jogadores WHERE usuario = '{$_SESSION['usuario']['usuario']}'");
      ?>
      <script type="text/javascript">
      var form=  '<form class="" action="adminpage.php" method="post">';
      form+=  '<table  id="rankingjogadores">';
      form+=  '<tr>';
      form+=  '<th>Nome</th>';
      form+=  '<th>Sobrenome</th>';
      form+=  '<th>Usuario</th>';
      form+=  '<th>Data de cadastro</th>';
      form+=  '<th>E-mail</th>';
      form+=  '<th>Data de nascimento</th>';
      form+=  '<th>Nivel</th>';
      form+=  '<th>Fase</th>';
      form+=  '<th>Pontuação</th>';
      form+=  '</tr>';
      <?php foreach ($jogadores as $key => $value) {?>
        form+=  '<tr id="<?php echo $value["id"] ?>">'
        form+=  '<td><input type="text" name="nome" onfocusout="alteradados(this)" value="<?php echo $value["nome"] ?>"></td>'
        form+=  '<td><input type="text" name="sobrenome" onfocusout="alteradados(this)" value="<?php echo $value["sobrenome"] ?>"></td>'
        form+=  '<td><input type="text" name="usuario" onfocusout="alteradados(this)" value="<?php echo $value["usuario"] ?>"></td>'
        form+=  '<td><?php echo $value["data_cadastro"] ?></td>'
        form+=  '<td><input type="text" name="email" onfocusout="alteradados(this)" value="<?php echo $value["email"] ?>"></td>'
        form+=  '<td><?php echo $value["data_nasci"] ?></td>'
        form+=  '<td>style="width:30px;" <?php echo $value["nivel_prova"] ?></td>'
        form+=  '<td>style="width:30px;" <?php echo $value["nmr_prova"] ?></td>'
        form+=  '<td>style="width:50px;" <?php echo $value["pontuacao"] ?></td>'
        form+=  '</tr>'
        <?php  } ?>
        form+=  '</table>'
        form+='<input type="submit" name="pesquisajogador" value="Alterar"></input>'
        form+= '<label for="pesquisajogador">Pesquisar Jogador</label>'
        form+= '<input type="text" name="pesquisajog" placeholder="usuario jogador" value=""></input>'
        form+='<input type="submit" name="pesquisajogador" value="Pesquisar"></input>'
        form+=  '</form>'
        document.getElementById('perfilusuario').innerHTML = form;


    function alteradados(input){
      var id = input.parentElement.parentElement.id;
      var valor = input.value;
      var nomeInput = input.name;
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          //this.responseText
        }
      }

      xmlhttp.open("GET", "atualizaJogadores.php?id="+id+"&valor="+valor+"&nomeInput="+nomeInput, true);
      xmlhttp.send();
    }
      </script>
  </head>
  <body>
<div id="perfilusuario">

</div>
  </body>
</html>
