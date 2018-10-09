<?php
include_once('banco_de_dados.php');
$alterou =  sql_delete_update("UPDATE jogadores SET {$_GET['nomeInput']} = '{$_GET['valor']}' WHERE id = {$_GET['id']}");
?>
