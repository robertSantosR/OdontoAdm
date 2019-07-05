<?php
	require_once("obj_conexao_bd.php");
	$conexao = AbreConexaoBd();
	
	$sql = "SELECT DATE_FORMAT(data,'%d/%m/%Y') as data, DATE_FORMAT(horario,'%H:%i') as horario, tb_u.paciente, Funcionario,tb_a.id_agenda FROM tb_agendadent as tb_a INNER JOIN tb_usuario as tb_u on tb_a.id_Usuario = tb_u.id_Usuario INNER JOIN tb_funcionarios as tb_f on tb_a.id_funcionarios = tb_f.id_Funcionarios WHERE tp_status = 2";
	
	
	$resultado = mysqli_query($conexao,$sql); 

	
	mysqli_close($conexao);


?>