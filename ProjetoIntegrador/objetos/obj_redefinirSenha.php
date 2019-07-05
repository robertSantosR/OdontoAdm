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
					header('refresh:5; url=http://localhost:8081/ProjetoIntegrador/odontoUser/');
					 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				             <strong>Sucesso!</strong> senha alterada.
				             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                <span aria-hidden="true">&times;</span>
				             </button>
				          </div>';
				}

			}
		}else{
			 header( "refresh:5;url=http://localhost:8081/ProjetoIntegrador/odontoUser/" ); 
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Erro!</strong> Esse link esta expirado.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
						</button>
			   </div>';
			
		}
				
		}else{
			header('Location: ../index.php');
		}
		
mysqli_close($conexao);
?>