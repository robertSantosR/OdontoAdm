<?php 
	if(isset($_GET['id']) && !empty($_GET['id'])){
		require_once("obj_conexao_bd.php");
		$conexao = AbreConexaoBd();
		
		$id = addslashes($_GET['id']);
		$sql = "DELETE FROM tb_consulta WHERE id_Consulta = $id";
		
		 if(mysqli_query($conexao, $sql)){
			  echo "excluido "; 
			 header('location: ../paginas/navegacao.php?pagina=consAgenda');
			
		 }
		
		
	}

?>