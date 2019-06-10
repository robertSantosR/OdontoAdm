<?php 
	function abreConexaoBD() {

		$host = "10.131.46.22";
		$banco_de_dados = "odonto";
		$usuario = "odonto";
		$senhaBd = "123";

		$conexao = mysqli_connect( $host, $usuario, $senhaBd, $banco_de_dados );
		mysqli_set_charset( $conexao, "utf8" );
		if ( !$conexao ) {
			die( "Não foi possivel conectar ao banco de dados!" );
		}

		return $conexao;
	}

$teste ="elias";

//abreConexaoBD();
?>