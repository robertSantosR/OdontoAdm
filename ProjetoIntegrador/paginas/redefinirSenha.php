
<!DOCTYPE html>
<html>
<head>
	<title>Esqueci minha senha</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg  fixed-top " >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span><i class="fas fa-align-justify"></i></span> </button>
    <a class="navbar-brand" href="../index.php">Odonto</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav flex-row ml-md-auto d-md-flex">
        <li class="nav-item active"> <a class="nav-link" href="../index.php">Home</a> </li>
        <li class="nav-item"> <a class="nav-link " href="../odontoUser">Login</a> </li>
        
      </ul>
    </div>
  </nav>
  



</header>

   <div class="container" style="margin-top: 140px;">
  
	<form method="POST" style=" border:1px solid #f3f3f3; padding: 50px 50px 0 50px;	background: #FFF">

		 <div class="form-group "  >
		 	<p>Digite uma nova senha</p>
		 	<hr>
		  	<div class="row">
		  		<div class="col-8" style="margin: auto">
				    <label for="senha">nova senha</label>
				    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite um senha">
				    <label for="confimaSenha">Confirma senha</label>
				    <input type="password" class="form-control" id="confimaSenha" name="confimaSenha" placeholder="Digite a senha novamente"><br>
				  <button type="submit" class="btn btn-dark">Confirmar</button>
			  	</div> 
		    </div>
			<hr>
		</div>
		
	</form>
		
  </div>
  <?php 
	require '../objetos/obj_redefinirSenha.php';
?>

 <footer>
   <div class="container">
		Rua Salvador Branco de Andrade, 182 - Jardim Sao Miguel, Taboão da Serra - SP, 06760-100 <br>
		(31) 3224-7378 / (31) 98623-9711 (whatsapp) / (31) 3284-3223 
		<p class="esFooter">© Todos os direitos reservados | Responsável Técnica: Robert santos, Vagner campos ,Elias abner</p>
      </div>
</footer> 
</body>
</html>
