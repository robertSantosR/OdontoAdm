<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cadastre-se</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/calendar.css">
<!-- icones -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- BOOTSTRAP CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
<div>
<header>
  <nav class="navbar navbar-expand-lg fixed-top" >
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span><i class="fas fa-align-justify"></i></span> </button>
    
    <a class="navbar-brand" href="../index.html">Odonto</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
     
      <ul class="navbar-nav flex-row ml-md-auto d-md-flex">
        <li class="nav-item active"> <a class="nav-link" href="../index.html">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="NossaEquipe.html">Nossa equipe</a> </li>
        <li class="nav-item"> <a class="nav-link " href="Tratamento.html">tratamento</a> </li>
        <li class="nav-item"> <a class="nav-link " href="#">Cadastre-se</a> </li>
        <li class="nav-item"> <a class="nav-link " href="#">Login</a> </li>
      </ul>
      
    </div>
	</nav>
	
<div class="card mb-3">
  <img src="../img/dentista2.png" class="card-img-top" alt="..." height= 55%>
	</div>
	
</header>
			
	
	<hr>
	


<div class="container" style="margin-top: 60px">
	
	<h2 class="text-info">Se Registre!!</h2>
	
<form>
  <div class="form-row">
   
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nome</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="EX:João"  required>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Sobrenome</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="EX:Correia" required>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">E-mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="EX:AdmOdonto@gmail.com" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    
  </div>
  
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Bairro</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="EX:Botofogo" required>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Cidade</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="EX:Rio De Janeiro" required>
    </div>
    
    <div class="col-md-4 mb-3">
     
      <label for="validationDefaultUsername">Estado</label>
      
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="EX:Rio De Janeiro" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    
  </div>
  
  	<div class="form-row">
    
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Celular</label>
      <input type="text" class="form-control"  id="validationDefault02" placeholder="EX:11111-1111" required>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Telefone</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="EX:4002-8922" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    
     <div class="form-group col-md-4">
      <label for="inputState">Sexo</label>
      <select id="inputState" class="form-control">
        <option selected>...</option>
        <option>Masculino</option>
        <option>Feminino</option>
      </select>
    </div>
    
  </div>
  
  	<div class="form-row">
  	
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Data De Nascimento</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="EX:01/01/2001" required>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Usuario</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="EX:Josisvaldo" required>
      </div>
      
     <div class="col-md-4 mb-3">
      <label for="validationDefault02">CPF</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="EX:111.111.111-11" required>
    </div>
    
  </div>
  
    <button type="button" class="btn btn-success">Cadastre-se</button>

  
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

