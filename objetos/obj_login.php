<?php  
    session_start();
    
    
    //inicializa variavel com vazio
    $menssagem = "";

    //verifica se esta defenido o post de email e senha
    if (isset($_POST["email"]) && isset($_POST["senha"])) {

        //importa o arquino de conexaoo com o banco de dados
        require_once("obj_conexao_bd.php");
        //recupera os valores enviados pelo formulario acessando pelo nome do input
        $email = addslashes($_POST["email"]);
        $senha = md5(addslashes($_POST["senha"]) );
        //criptografia em md5 da senha recebida do formulário
        //$senhaCriptografada = md5($senha);
        /* 
        
            abre conexão com o banco de dados utilizando a função AbreConexaoBD()
            disponibilada no arquivo obj_conexao_bd.php

            Armazena a conexao aberta na variavel $conexao
        
        */
        $conexao = AbreConexaoBD();
        /* 
        
            armazena o select de validação se o usuário es cadastrado
            na tabela tb_usuario com email e senha informados
            e o status do usuario é ativo
        
        */
        $sql = "SELECT id_usuario,paciente 
                  FROM tb_usuario 
                 WHERE email = '$email' 
                   AND senha = '$senha'";
                  
        
        //solicita a execução do select ao banco de dados
        //armanando o resultado da execução na variavel $resultado
        $resultado = mysqli_query($conexao, $sql);
		
	
        //valida se retornou algum registro
        if (mysqli_num_rows($resultado) > 0) {
            //se o usuario existe, inicio a sessão php
		
            // busca o resultado da execucao e armazeno na sessao
			
			 //$campo = mysqli_fetch_assoc($resultado);
		
			//$_SESSION["user"] = $campo['id_usuario'];
			
			
			//$campo = mysqli_fetch_assoc($resultado);
           $_SESSION["user"] = mysqli_fetch_assoc($resultado);
				//  $_SESSION["user"]['paciente'];
			  //$_SESSION["user"]['id_usuario'];
			
            //rediciona o usuário para pagina inicial
            header("location:paginas/navegacao.php");
        }
        else{
            //atribui mensagem de usuário inexistente
            $mensagem = "Login ou senha inválido!";
            }
        // fecha a conexao aberta para validar o usuário no banco de dados
        mysqli_close($conexao);
    }

?>