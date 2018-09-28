<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <?php
  include_once("banco_de_dados.php");
  // echo "INSERT INTO provas_cadastradas VALUES ($rn,'{$_POST['assuntoprova']}')";

  function gerar_codigo(){

    $rn = rand();
    $arrayprovascadastradas = select("SELECT * FROM provas_cadastradas WHERE id= $rn");
    if($arrayprovascadastradas != 0){
      gerar_codigo();
    }
    else{
      return $rn;
    }
  }
  $codigo = gerar_codigo();
  // echo $codigo;
  $cadastraassuntoprova = php_insert("INSERT INTO provas_cadastradas VALUES ($codigo,'{$_POST['assuntoprova']}')");
  for($i = 1; $i <= $_POST['qtd_questoes']; $i++){
    // echo "INSERT INTO questoes_cadastradas VALUES (DEFAULT,'{$_POST['enunciado_'.$i]}','{$_POST['opcao1_'.$i]}','{$_POST['opcao2_'.$i]}','{$_POST['opcao3_'.$i]}','{$_POST['opcao4_'.$i]}','{$_POST['correta']}','{$_POST['pesoquestao']}')";
    $cadastraquestoesprova = php_insert("INSERT INTO questoes_cadastradas VALUES (DEFAULT, '{$_POST['enunciado_'.$i]}', '{$_POST['opcao1_'.$i]}', '{$_POST['opcao2_'.$i]}', '{$_POST['opcao3_'.$i]}', '{$_POST['opcao4_'.$i]}', '{$_POST['correta']}', '{$_POST['pesoquestao']}', $codigo)");
    }
    ?>

    <script type="text/javascript">
    function codigoprovas(){
      var form = 'Codigo da prova: ' + '<?php echo $codigo ?>' + ' esse codigo será enviado por e-mail.';
      document.getElementById('codigoprova').innerHTML = form;
    }
    </script>
    </head>
    <body onload="codigoprovas()">
    <div class="" id="codigoprova">
    </div>
    </body>
    </html>
