<?php
function select($pQuery){

	$conexao = mysqli_connect("localhost", "root", "root", "bd_avc");

	$dados = mysqli_query($conexao, $pQuery) or die("Sua query retornou um erro");


	$arraySelect = array();
	if ($dados->num_rows > 0) {

		while($row = $dados->fetch_assoc()) {
			$arraySelect[] = $row;
		}
	}
	else {
		return 0;
	}

	mysqli_close($conexao);

	return $arraySelect;
}
function php_insert($pQuery){


	$conexao = mysqli_connect("localhost", "root", "root", "bd_avc");

	$dados = mysqli_query($conexao,$pQuery) or die("Error ao realizar o insert");

	mysqli_close($conexao);

	return $dados;
}
function sql_delete_update($pQuery){

	$conexao = mysqli_connect("localhost", "root", "root", "bd_avc");

	$dados = mysqli_query($conexao,$pQuery) or die("erro ao executar a query");

	$atualizadas = mysqli_affected_rows($conexao);

	if($atualizadas > 0){
		return $atualizadas." registros alterados/deletados com sucesso"."<br>";
	}else {
		return "nenhum registro foi atualizado/deletado"."<br>";
	}

}


?>
