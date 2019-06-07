<?php
	require_once("obj_conexao_bd.php");
	$conexao = AbreConexaoBd();
	
	$sql = "SELECT tb_c.id_Consulta, tb_f.Funcionario, tb_u.paciente,tb_c.data,DATE_FORMAT(data, '%d/%m/%Y') as data,tb_c.hora, DATE_FORMAT(hora,'%H:%i') as hora FROM tb_consulta tb_c INNER JOIN tb_funcionarios tb_f on tb_c.id_Funcionarios = tb_f.id_Funcionarios INNER JOIN tb_usuario tb_u on tb_u.id_Usuario = tb_c.id_Usuario";
	
	
	$resultado = mysqli_query($conexao,$sql); 

	
	


?>