<?php 
	require_once("../objetos/obj_conexao_bd.php");
	$conexao = AbreConexaoBd();

       $selectCargo="SELECT id_cargos,nome FROM tb_cargos";

       $resultadoCargos = mysqli_query($conexao, $selectCargo);

		if (isset($_POST['idDenstista']) && empty($_POST['idDenstista']) ) {

			$sql = "SELECT 
	        funcionario.Funcionario,
	        funcionario.id_Funcionarios,
	        cargos.nome
	   		FROM
	        tb_funcionarios funcionario
	        INNER JOIN
	        tb_cargos cargos ON funcionario.id_cargos = cargos.id_cargos ORDER BY cargos.nome ASC;";
		
			$resultado = mysqli_query($conexao, $sql);
		}elseif (isset($_POST['idDenstista']) && !empty($_POST['idDenstista'])) {
			$id = addslashes($_POST['idDenstista']);

			$sql = "SELECT id_Funcionarios, Funcionario, nome FROM tb_funcionarios tb_f INNER JOIN tb_cargos tb_c ON tb_f.id_cargos = tb_c.id_cargos WHERE tb_c.id_cargos = $id ";

			$resultado = mysqli_query($conexao, $sql);
		}
mysqli_close($conexao);
?>