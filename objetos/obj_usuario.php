<?php

  function RetornaMenssagemErro($mensagem){
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erro!</strong> '.$mensagem.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
      </div>';
  }
  require_once("obj_conexao_bd.php");

  $conexao = AbreConexaoBd();

	//  $sqlSelect="SELECT id as id_usuario,nome,email,IF(tp_status=1,'Ativo','Inativo') AS tp_status
	//              FROM tb_usuario";
	//
	//  $resultado = mysqli_query($conexao,$sqlSelect);

if((isset($_POST["nome"]) && !empty($_POST["nome"])) && (isset($_POST["email"]) && !empty($_POST["email"]))){
  
    $nome = $_POST["nome"];
    $email = $_POST["email"];
	$cpf = $_POST["cpf"];
	$celular = $_POST["celular"];
	$cep = $_POST["cep"];
	$end = $_POST["end"];
	$num = $_POST["num"];
	$senha = $_POST['senha'];
	//$dtNasc = $_POST["dtNasc"];
	
	$complemento = $_POST["complemento"];
     
	$sqlInsert = "INSERT INTO tb_usuario(paciente,email,cpf,celular,cep,endereco,numero,complemento,telefone,senha) 
                  VALUES('$nome','$email','$cpf','$celular','$cep ','$end','$num','$complemento','112314','$senha')";
	
	

          if(mysqli_query($conexao,$sqlInsert)){
              //echo "Upload realizado com sucesso";
            
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sucesso!</strong> Usuario cadastrado.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
              </div>';
            }
              else{
                RetornaMenssagemErro("Não foi cadastrar o usuario");
              }
    }elseif(isset($_POST["nome"]) && empty($_POST["nome"]) ){
		echo RetornaMenssagemErro("Preencha os campos");
	}

      


?>