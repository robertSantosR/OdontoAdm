<?php 
	if (isset($_GET['token']) &&  !empty($_GET['token'])) {
		require_once("obj_conexao_bd.php");
		$conexao = AbreConexaoBd();
		$token = addslashes($_GET['token']);
		$sql = "SELECT token FROM tb_usuario WHERE token = '$token' ";
		$resultado = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($resultado) > 0 ) {
			 if (isset($_POST['senha']) && !empty($_POST['senha'])) {
				$senha = md5(addslashes($_POST['senha']));
			

				

				$sql = "UPDATE tb_usuario SET senha = '$senha'  WHERE  token = '$token'";

				
				if (mysqli_query($conexao, $sql)) {
					$sqlUpdate = "UPDATE tb_usuario SET token = null  WHERE  token = '$token'";
					mysqli_query($conexao, $sqlUpdate);
					header('Location: ../odontoUser/index.php?s=y');
				}

			}
		}else{
			echo "esse link ja foi usado";
		}
				
		}else{
			header('Location: ../index.php');
		}


	
?>