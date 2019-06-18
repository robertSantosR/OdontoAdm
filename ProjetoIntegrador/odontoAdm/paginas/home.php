<?php 
   //$nome = $_SESSION["user"]["id_usuario"];
  $nome = $_SESSION["user"]["Funcionario"];
//$nome = $_SESSION["user"];
?>

<h6>Olá, <span class="badge badge-secondary"><?php echo ucfirst($nome);?></span></h6>


