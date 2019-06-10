<?php
session_start();
require_once("../objetos/obj_conexaoBD.php");

$menssagem = "";



if (!empty($_POST[ "email" ] ) && !empty( $_POST[ "senha" ] ) ) {

$email = $_POST[ "email" ];
$senha = $_POST[ "senha" ];
	// $email = $_POST[ "email" ];
	//$senha = $_POST[ "senha" ];
	
	


	//$senhaCriptografada = md5( $senha );
	//echo $senhaCriptografada;

	$conexao = abreConexaoBD();
	 $sql = "SELECT ID_USUARIO , EMAIL FROM tb_usuario where email = '$email' AND senha = '$senha'";

	$resultado = mysqli_query( $conexao, $sql );
 
	 
	
	if ( mysqli_num_rows( $resultado ) > 0 ) {
		
		//$campo = mysqli_fetch_assoc( $resultado );
		
		$_SESSION[ "user" ] = mysqli_fetch_assoc( $resultado );
		
		header( "location:navegacao.php" );
	} else{
		//echo $menssagem = "Login ou senha invalido!";
		  echo "<script>
		         alert('Login ou senha invalido!');
	             window.location.href ='../pag1.php' ;	   
		       </script>"	;
	
		

    
	mysqli_close( $conexao );
	
}
}
else{
	
	//echo "não esta preenchido";
	header( "location:../pag1.php" );
}

//$nome=$_SESSION["user"]['EMAIL'];

//echo $nome;


?>

