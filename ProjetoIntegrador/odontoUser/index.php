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

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg fixed-top" >
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span><i class="fas fa-align-justify"></i></span> </button>
    
    <a class="navbar-brand" href="../index.php">Odonto</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
     
      <ul class="navbar-nav flex-row ml-md-auto d-md-flex">
        <li class="nav-item active"> <a class="nav-link" href="../index.php">Home</a> </li>
        <li class="nav-item"> <a class="nav-link " href="../index.php">Cadastre-se</a> </li>
        <li class="nav-item"> <a class="nav-link " href="./">Login</a> </li>
      </ul>
      
    </div>
  </nav>
  
  
  
</header>
      
  
 
  
    <div class="container" style="margin-top: 80px; ">
     <hr>
      <h2 class="text-info" align="center">Faça seu Login!!</h2>
      <?php 
    //verificar se a varivel mensagem não esta vazia se tiver conteudo exibe na tela
    if(!empty($mensagem))
    echo "<div class='alert alert-danger mx-auto col-6' role='alert' style='text-align:center'>
   $mensagem
  </div>";
  ?>
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email/Usuario</label>
    <input type="email" class="form-control" name="email"  placeholder="EX:adm123@hotmail.com">
    <small id="emailHelp" class="form-text text-muted">Use seu email ou usuario.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" name="senha" placeholder="Senha">
     <small id="emailHelp" class="form-text text-muted">Use sua senha.</small>
  </div>
  <div class="form-group form-check">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <a href="esqueciMinhaSenha.php" class="btn btn-primary">Esqueci minha senha</a>
</form>
 
  
   </div>

    
<br>
<br>

<hr>


<footer>
    <div class="row">
       <div class="container">
    Rua Salvador Branco de Andrade, 182 - Jardim Sao Miguel, Taboão da Serra - SP, 06760-100 <br>
    (31) 3224-7378 / (31) 98623-9711 (whatsapp) / (31) 3284-3223 
    <p class="esFooter">© Todos os direitos reservados | Responsável Técnica: Robert santos, Vagner campos ,Elias abner</p>
      </div>
    </div>
</footer>
 
</body>
</html>


  

  
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
</body>
</html>




