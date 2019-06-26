<?php 
	if (isset($_POST['email']) && !empty($_POST['email'])) {
		require_once("obj_conexao_bd.php");
		$conexao = AbreConexaoBd();
		
		$email = addslashes($_POST['email']);
		$sql = "SELECT Email FROM tb_usuario WHERE email = '$email'";
		$resultado = mysqli_query($conexao,$sql);				
	

		if (mysqli_num_rows($resultado) > 0) {
			echo "<div class='alert alert-danger' role='alert'>
			 			<strong>Erro</strong> email ja existe!
					</div>";
		}else{
				$nome = addslashes($_POST['nome']);
				$senha = md5(addslashes($_POST['senha']));
				$cpf = addslashes($_POST['cpf']);
				$dataNascimento = addslashes($_POST['data']);
				$dataNascimento = str_replace('/', '-',  $dataNascimento);
				//STR_TO_DATE JA FAZ ISSO!
				//$dataNascimento = date('Y-m-d', strtotime(str_replace('/', '-',  $dataNascimento)));
			    $telefone= addslashes($_POST['telefone']);
				$celular = addslashes($_POST['celular']);

				$sqlInsert = "INSERT INTO tb_usuario(email,senha,cpf,Telefone,Celular,paciente,data_nascimento) VALUES('$email', '$senha', '$cpf', '$telefone', '$celular', '$nome', STR_TO_DATE('$dataNascimento','%d-%m-%Y'))";

				if (mysqli_query($conexao,$sqlInsert)) {
					echo "<div class='alert alert-success' role='alert'>
			 			<strong>Sucesso</strong> email cadastrado!
					</div>";
				}else{
					echo "<div class='alert alert-danger' role='alert'>
			 			<strong>Erro</strong> Houve algum !
					</div>";
				}
		
		
		}

	}else if(isset($_POST['email']) && empty($_POST['email'])){
			echo "<div class='alert alert-danger' role='alert'>
			 			<strong>Erro</strong> Preencha os campos!
					</div>";
	}


	
?>