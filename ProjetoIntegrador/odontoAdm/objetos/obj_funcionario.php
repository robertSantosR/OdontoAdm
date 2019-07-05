<?php
  require_once("obj_conexao_bd.php");
  $conexao = AbreConexaoBd();

	function retornaErro($mensagem){
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erro!</strong> '.$mensagem.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
      </div>';
	}
	function retornaSucesso($mensagem){
			echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Sucesso!</strong>'.$mensagem.'
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
		  </div>';
		}

  $sqlSelect = "SELECT * FROM tb_cargos";
	

$resultado = mysqli_query($conexao, $sqlSelect);

if((isset($_POST['email']) && !empty($_POST['email'])) &&(isset($_POST['senha']) && !empty($_POST['senha'])) ){
	$email = addslashes($_POST['email']);
	$senha = addslashes(md5($_POST['senha']));
	$nome = addslashes($_POST['nome']);
	$dtNasc = addslashes($_POST['dtNasc']);
	$idCargo = addslashes($_POST['idCargo']);
	$cpf = addslashes($_POST['cpf']);
	$rg = addslashes($_POST['rg']);
	$celular = addslashes($_POST['celular']);
	$telefone = addslashes($_POST['telefone']);
	
	$sqlInsert = "INSERT INTO tb_funcionarios(id_Cargos, Funcionario, dataNascimento, Telefone, Celular, RG, CPF, senha) VALUES('$idCargo', '$nome', '$dtNasc', '$telefone', '$celular', '$rg', '$cpf', '$senha')";
	
	if(mysqli_query($conexao, $sqlInsert)){
		retornaSucesso('Usuario cadatrado com sucesso!');
	}else{
		retornaErro('Não foi possivel cadastrar o usuario');
	}
	
	
	
	
}elseif((isset($_POST['email']) && empty($_POST['email'])) &&(isset($_POST['senha']) && empty($_POST['senha'])) ){
	retornaErro('Campo obrigatorio');
}

mysqli_close($conexao);
   
?>