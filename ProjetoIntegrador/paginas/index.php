<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<link rel="stylesheet" href="css/style.css">
<!-- icones -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- BOOTSTRAP CSS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg  fixed-top " >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span><i class="fas fa-align-justify"></i></span> </button>
    <a class="navbar-brand" href="index.html">Odonto</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav flex-row ml-md-auto d-md-flex">
        <li class="nav-item active"> <a class="nav-link" href="index.html">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="paginas/NossaEquipe.html">Nossa equipe</a> </li>
        <li class="nav-item"> <a class="nav-link " href="paginas/Tratamento.html">tratamento</a> </li>
        
        <li class="nav-item"> <a class="nav-link " href="#">Cadastre-se</a> </li>
        
        <li class="nav-item"> <a class="nav-link " href="#">Login</a> </li>
        <li class="nav-item">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
				Logion
			</button>
     	</li>
      </ul>
    </div>
  </nav>
  


<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</header>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active"> <img src="img/dentista1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item"> <img src="img/dentista2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item"> <img src="img/dentista.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<main>
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 imagem" >
        <div class="imgPrincipal">
         <img id="imgPrincipal" src="img/consutorio1.jpg" width="488" height="288"  alt=""> 
         </div>
       		<div class="img1">
       			<img src="img/consutorio1.jpg" alt="" >
       			<img src="img/consutorio2.jpg" alt="">
       			<img src="img/consutorio3.jpg" alt="" >
       			<img src="img/consutorio4.jpg" alt="">
       			<img src="img/consutorio5.jpg" alt="" >
       		</div>
        </div>
        
        <div class="col-md-6" id="teste">
          <form class="formulario" >
            <div class="form-group" >
              <label for="email"></label>
              <input type="email" class="form-control" id="email"  placeholder="Email">
            </div>
            <div class="form-group">
              <label for="nome"></label>
              <input type="text" class="form-control" id="nome" placeholder="Nome Completo">
            </div>
            <div class="form-group">
              <label for="data"></label>
              <input type="text" class="form-control" id="data" placeholder="Data de Nascimento ">
            </div>
            <div class="form-group">
              <label for="telefone"></label>
              <input type="text" class="form-control" id="telefone" placeholder="Telefone ">
            </div>
            <div class="form-group">
              <label for="celular"></label>
              <input type="text" class="form-control" id="celular" placeholder="Celular ">
            </div>
            <div class="textcenter">
              <button type="submit" class="btn btn-outline-info">Agende sua avaliação</button>
            </div>
          </form>
        </div>
      </div>
      
    </div>
    <article>
      <ul class="container-fluid">
        <li class="estilizacao">
          	<h5>Implantodontia (Implantes)</h5>
          	<div>A implantodontia é a especialidade odontológica que reabilita a saúde bucal quando há perda de um ou mais dentes. Os implantes são cilindros metálicos (titânio) que, ao serem instalados nos ossos maxilares, substituem as raízes de dentes ausentes.</div>
        </li>
        <li class="estilizacao" >
          <h5>Ortodontia </h5>
         <div>A implantodontia é a especialidade odontológica que reabilita a saúde bucal quando há perda de um ou mais dentes. Os implantes são cilindros metálicos (titânio) que, ao serem instalados nos ossos maxilares, substituem as raízes de dentes ausentes.</div>
        </li>
        <li class="estilizacao">
          <h5>Prótese Dentária </h5>
          <div>A especialidade de prótese dentária é responsável por reestruturar os tecidos bucais e dentes perdidos, seja por acidentes ou doenças periodontais, por peças artificiais - fixas ou removíveis.</div>
        </li>
        <li class="estilizacao">
          <h5>Clínico Geral </h5>
          <div>A especialidade de prótese dentária é responsável por reestruturar os tecidos bucais e dentes perdidos, seja por acidentes ou doenças periodontais, por peças artificiais - fixas ou removíveis.</div>
        </li>
        <li class="estilizacao">
          <h5>Odontopediatria </h5>
          <div>A Odontopediatria é o tratamento odontológico preventivo completo para crianças.</div>
        </li>
        <li class="estilizacao">
          <h5> Periodontia (Limpeza) </h5>
          <div>Especialidade odontológica responsável pela prevenção e tratamento das doenças que acometem os tecidos de sustentação e proteção dos dentes (tratamento da gengiva e do osso).</div>
        </li>
        <li class="estilizacao">
          <h5>Dentística </h5>
         <div>A dentística é a área da odontologia que atua sobre os dentes para conquistar a harmonização do sorriso. As técnicas utilizadas influenciam na alteração do formato dos dentes, seja no tamanho, no alinhamento ou clareando (como o Clareamento Dental).</div>
        </li>
      </ul>
    </article>
    <div class="container-fluid">
    	<p><i>Os procedimentos são feitos por um clínico geral.</i></p>
    </div>
    <div class="container-fluid">
    	<p>somos encontrados aqui!</p>
 	 	<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.766339920387!2d-46.77461388487013!3d-23.61271146937607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5443d07c0669%3A0xb8422f47f59e5cf8!2sSenac+Tabo%C3%A3o+da+Serra!5e0!3m2!1spt-BR!2sbr!4v1556586111397!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
   		-->
   </div>
  </section>
</main>
<footer>
   <div class="container">
		Rua Salvador Branco de Andrade, 182 - Jardim Sao Miguel, Taboão da Serra - SP, 06760-100 <br>
		(31) 3224-7378 / (31) 98623-9711 (whatsapp) / (31) 3284-3223 
		<p class="esFooter">© Todos os direitos reservados | Responsável Técnica: Robert santos, Vagner campos ,Elias abner</p>
      </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<!-- jquery --> 
<script
	  src="https://code.jquery.com/jquery-3.4.0.min.js"
	  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
	  crossorigin="anonymous"></script> 
<!-- mascara --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script> 
<script src="js/script.js"></script>
</body>
</html>