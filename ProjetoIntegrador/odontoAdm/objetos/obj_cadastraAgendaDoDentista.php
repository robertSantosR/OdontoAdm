<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php


	function retornaErro($mensagem){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erro!</strong> '.$mensagem.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
      </div>';
	}
	
	//abre coneção 
 require_once("obj_conexao_bd.php");
 $conexao = AbreConexaoBd();
 mysqli_autocommit($conexao, false);
	
 $sqlSelect = "SELECT * FROM tb_funcionarios WHERE id_Cargos = 2";
 
 $resultado = mysqli_query($conexao, $sqlSelect);


if(isset($_POST['dentista']) &&  !empty($_POST['dentista']) ){
	$totalAgenda = count($_POST['data']);
	$totalInserido = 0;

	for( $i = 0 ; $i < $totalAgenda; $i++){
			$data = $_POST['data'][$i];
			$data = date("Y-m-d", strtotime(str_replace("/", "-", $data) ));
			$dentista = $_POST['dentista'][$i];
		
			
			$hora = $_POST['hora'][$i];
			$sqlInsert = "INSERT INTO tb_agendaDent(id_funcionarios, data,horario, tp_status) values ('$dentista','$data','$hora', 1)";

			if (mysqli_query($conexao, $sqlInsert))
			{
				$totalInserido++;
			}
				
		
	}
	
	if ($totalAgenda == $totalInserido)
	{
		// se todos os insert, estão ok, confirma as alterações
		mysqli_commit($conexao);
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Sucesso!</strong> Usuario cadastrado.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
		  </div>';


	}else{
		// defaz as alterações em caso de erro
		mysqli_rollback($conexao);
		retornaErro("nao foi possivel cadastrar");
	} 
		
}
	
	
?>

