<?php
//função que realiza e retorna a conexão com o banco de dados configurados
function abreConexaoBD(){
//IP ou DNS do servidor
$host ="127.0.0.1";
//banco de dados que dera ser selecionado na conexão
$banco_de_dados ="odonto"; 
//Usuário do bandco de dados
$usuario = "root";
//senha do banco de dados
$senhaBd="";

    //realiza a conexao com o banco de dados utilizando os parametros definidos
    $conexao =  mysqli_connect($host,$usuario,$senhaBd,$banco_de_dados);
    //define o encode da conexao
    mysqli_set_charset($conexao,"utf8");
    if(!$conexao){
        //mata a execução e exibe a mensagem de erro
        die("Não foi possivel conectar ao banco de dados!");
    }
    //se a conexao foi com sucesso, retorna a mesma
    return $conexao;
}
/*
função redundante - não utilizar
function fechaConexaoBD($conexao){
    myqli_close($conexao);
}
*/
?>