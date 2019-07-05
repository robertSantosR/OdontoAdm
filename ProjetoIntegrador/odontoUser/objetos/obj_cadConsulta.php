<?php 
	if(isset($_GET['idAgenda']) && !empty($_GET['idAgenda'])){
		require_once("obj_conexao_bd.php");
		$conexao = AbreConexaoBd();
				
		$idUsuarios = $_GET['idUsuario'];
		$idAgenda = $_GET['idAgenda'];
				
		 $sql ="UPDATE tb_agendadent SET tp_status = 2, id_usuario = '$idUsuarios' WHERE id_agenda ='$idAgenda'";
			mysqli_query($conexao,$sql);
			
		if(mysqli_query($conexao,$sql)){
						
			header('location:../paginas/navegacao.php?pagina=consUser&v=ok');
					
		}
		mysqli_close($conexao);	
	}


?>