<?php 
	require_once("../objetos/obj_conexao_bd.php");
	$conexao = AbreConexaoBd();
	$sql = "SELECT paciente, Email, DATE_FORMAT(data_nascimento,'%d/%m/%Y') as data_nascimento FROM tb_usuario ORDER BY paciente ASC";
	$resultado = mysqli_query($conexao, $sql);

	mysqli_close($conexao);
?>