<?php 
	require_once("../objetos/obj_conexao_bd.php");
	$conexao = AbreConexaoBd();

	if (isset($_POST['dataInical']) && !empty($_POST['dataInical'])) {
		$dataInical = $_POST['dataInical'];
		$dataFinal = $_POST['dataFinal'];

		$sql = "SELECT DATE_FORMAT(data,'%d/%m/%Y') AS data, DATE_FORMAT(horario, '%H:%i') AS horario, Funcionario, paciente FROM tb_agendadent tb_a INNER JOIN tb_funcionarios tb_f ON tb_a.id_funcionarios = tb_f.id_Funcionarios INNER JOIN tb_usuario tb_u ON tb_a.id_usuario = tb_u.id_Usuario WHERE data BETWEEN STR_TO_DATE('$dataInical', '%Y-%m-%d') AND STR_TO_DATE('$dataFinal', '%Y-%m-%d') ORDER BY data ASC";
		
		
		$resultado = mysqli_query($conexao, $sql);
		
		if (mysqli_num_rows($resultado) > 0) {
			$valor1 = 0;
			foreach ($resultado as $valor) {
				$valor1 += count($valor['data']);
			}
		echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
				<strong>Busca realizada! </strong>Houve ".$valor1." resultado.
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
		}else{
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				<strong>Não houve resultados!</strong>
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
		}

	}elseif(isset($_POST['dataInical']) && empty($_POST['dataInical'])){
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				<strong>Preencha os campos!</strong>
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
	}
	mysqli_close($conexao);
?>