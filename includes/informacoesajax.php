<?php
include_once('banco_de_dados.php');
$alterou =  select("SELECT * FROM jogadores WHERE id = {$_SESSION['usuario']['id']}");
echo json_encode($alterou);
?>
