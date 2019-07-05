<?php 
	if (isset($_POST['nome']) && !empty($_POST['nome'])) {
		require_once("obj_conexao_bd.php");
		 $conexao = AbreConexaoBd();
		
		 $nome = $_POST['nome'];
		 $bairro = $_POST['bairro'];
		 $endereco = $_POST['endereco'];
		 $cep = $_POST['cep'];
		 $cidade= $_POST['cidade'];
		 $numero = $_POST['numero'];
		 $complemento = $_POST['complemento'];
		 $sexo = $_POST['sexo'];
		 $celular = $_POST['celular'];
		 $telefone = $_POST['telefone'];
		 $estado = $_POST['estado'];
		 $id =$_SESSION["user"]["id_usuario"];



		 $sql = "UPDATE tb_usuario SET paciente = '$nome', endereco = '$endereco', bairro = '$bairro', estado = '$estado' ,cep = ' $cep', cidade='$cidade', numero = '$numero', complemento = ' $complemento', sexo = '$sexo',Celular='$celular',Telefone = '$telefone' WHERE id_Usuario = $id";
		 
		 if (mysqli_query($conexao, $sql)) {
		 	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
		 	  <strong>Sucesso!</strong> seus dados foram atualizados.
		 	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		 	    <span aria-hidden="true">&times;</span>
		 	  </button>
		 	</div>';
		 }else{
		 	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		 	  <strong>erro!</strong> não foi possível atualizar os dados.
		 	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		 	    <span aria-hidden="true">&times;</span>
		 	  </button>
		 	</div>';
		}
		mysqli_close($conexao);
		}elseif (isset($_POST['nome']) && empty($_POST['nome'])) {
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			 	  <strong>erro!</strong> Preencha os campos.
			 	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			 	    <span aria-hidden="true">&times;</span>
			 	  </button>
			 	</div>';
		}
?>