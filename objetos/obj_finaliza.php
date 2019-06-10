<?php 
	if(isset($_GET['id']) && !empty($_GET['id'])){
		require_once("obj_conexao_bd.php");
		$conexao = AbreConexaoBd();
		
		$id = addslashes($_GET['id']);
		$sql = "UPDATE tb_agendadent SET tp_status = 1 WHERE id_agenda = $id" ;
		
		echo $sql;
		 if(mysqli_query($conexao, $sql)){
			 header('location: ../paginas/navegacao.php?pagina=consAgenda&finalizado=ok');
			
		 }
		
		
	}

?>