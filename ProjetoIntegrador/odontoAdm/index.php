<?php

//Inicia a sessao do sistema


//valida se o usuario esta logado
if(isset($_SESSION["user"])){
  //se já estiver logado, redireciona para a pagina inicial
    header("location:./paginas/navegacao.php");
}
//inclui o objeto login, utilizando para validar o acesso
require_once("./objetos/obj_login.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Senac - login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- colocar icone-->
    <link href="img/img01.jpg" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



</head>
<body>

<div class="container" style="width:500px;margin-left:24%;">


  <!-- Content here -->
  

    <br>
    <br>
  <form action="<?php echo $_SERVER["PHP_SELF"];//imprimi o nome do arquivo?>" method="post";>
  <div class="form-group" >

  <img src="img/logoCarro.jpg"  width="300px" style=" margin-left: 10%;">
 
  <h1>Login</h1>

  <?php 
    //verificar se a varivel mensagem não esta vazia se tiver conteudo exibe na tela
    if(!empty($mensagem))
    echo "<div class='alert alert-danger' role='alert'>
   $mensagem
  </div>";
  ?>

  
    <label for="email">E-mail <i class="fas fa-envelope"></i></label>
    <input type="email" class="form-control" id="email"   name="email"  placeholder="E-mail">
    
  </div>
  <div class="form-group" >
    <label for="senha">Senha <i class="fas fa-key"></i></label>
    <input type="password" class="form-control" id="senha"  name="senha" placeholder="Senha">
  </div>
  
  <button type="submit" class="btn btn-primary">Entrar <i class="fas fa-sign-in-alt"></i></button>
  


  
</form>
</div>

</body>
</html>




