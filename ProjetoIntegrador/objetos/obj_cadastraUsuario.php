<?php 
	if (isset($_POST['email']) && !empty($_POST['email'])) {
		require_once("obj_conexao_bd.php");
		$conexao = AbreConexaoBd();
		$cpf = addslashes($_POST['cpf']);
		$email = addslashes($_POST['email']);
		

		$sql = "SELECT Email FROM tb_usuario WHERE email = '$email' OR cpf = '$cpf'";
		$resultado = mysqli_query($conexao,$sql);

		if (mysqli_num_rows($resultado) > 0) {
			echo "<div class='alert alert-danger' role='alert'>
			 			<strong>Erro</strong> email ou cpf já existe!
					</div>";
		}else{
				$nome = addslashes($_POST['nome']);
				$senha = md5(addslashes($_POST['senha']));
				
				$sexo = addslashes($_POST['sexo']);
				$cep = addslashes($_POST['cep']);
				
				$bairro = addslashes($_POST['bairro']);
				$endereco = addslashes($_POST['endereco']);
				$cidade = addslashes($_POST['cidade']);
				$numero = addslashes($_POST['numero']);
				$complemento = addslashes($_POST['complemento']);
				$estado = addslashes($_POST['estados']);
				$dataNascimento = addslashes($_POST['data']);
				$cidade = addslashes($_POST['cidade']);
				
				//STR_TO_DATE JA FAZ ISSO!
				//$dataNascimento = date('Y-m-d', strtotime(str_replace('/', '-',  $dataNascimento)));
			    $telefone= addslashes($_POST['telefone']);
				$celular = addslashes($_POST['celular']);

				$sqlInsert = "INSERT INTO tb_usuario(email,senha,cpf,Telefone,Celular,paciente,data_nascimento,endereco, cep, numero, complemento, bairro, sexo, estado, cidade) VALUES('$email', '$senha', '$cpf', '$telefone', '$celular', '$nome', STR_TO_DATE('$dataNascimento','%Y-%m-%d'), '$endereco', '$cep', '$numero', '$complemento', '$bairro', '$sexo', '$estado', '$cidade')";	
				
				if (mysqli_query($conexao,$sqlInsert)) {
					echo "<div class='alert alert-success' role='alert'>
			 			<strong>Sucesso</strong> email cadastrado!
					</div>";
				}else{
					echo "<div class='alert alert-danger' role='alert'>
			 			Houve algum erro !
					</div> <br>";
					echo $sqlInsert;
				}
		
		
		}
		mysqli_close($conexao);
	}else if(isset($_POST['email']) && empty($_POST['email'])){
			echo "<div class='alert alert-danger' role='alert'>
			 			<strong>Erro</strong> Preencha os campos!
					</div>";
	}


?>