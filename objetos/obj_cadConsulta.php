<?php 
	if(isset($_GET['data']) && !empty($_GET['data'])){
		require_once("obj_conexao_bd.php");
		$conexao = AbreConexaoBd();
		
		$idfuncionario =$_GET['idfuncionario'];
		$idUsuarios = $_GET['idUsuario'];
		$data = $_GET['data'];
		$data = date("Y-m-d", strtotime(str_replace("/", "-", $data) ));
		$hora = $_GET['hora'];
		$hora =date('h:i',strtotime($hora));
		
		$idAgenda = $_GET['idAgenda'];
		
		
	
		
		$sql = "INSERT INTO tb_consulta(id_Funcionarios, id_Usuario, id_agenda,id_Procedimento,data,hora) values('$idfuncionario','$idUsuarios','$idAgenda',1,'$data','$hora ')";
	
		 
			
		

		
		if(mysqli_query($conexao,$sql)){
			
			// delete
			
		  $sql ="delete from tb_agendadent where id_agenda = ".$idAgenda ;
			mysqli_query($conexao,$sql);
			
			echo "<script>
		    alert('com sucesso')
			
			location.href='../paginas/navegacao.php?pagina=consUser'
		   </script>";
		
			
			//header('location:../paginas/navegacao.php?pagina=consUser');
			
			
		}
	
		
	}


?>