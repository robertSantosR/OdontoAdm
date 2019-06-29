

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<link rel="stylesheet" href="assets/css/style.css">
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
        <li class="nav-item active"> <a class="nav-link" href="index.php">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#equipe">Nossa equipe</a> </li>
        <li class="nav-item"> <a class="nav-link " href="#tratamento">tratamento</a> </li>
        <li class="nav-item"> <a class="nav-link " href="#contatos">contatos</a> </li>
        <li class="nav-item"> <a class="nav-link " href="#cadastre">Cadastre-se</a> </li>
        
        <li class="nav-item"> <a class="nav-link " href="odontoUser">Login</a> </li>
        <li class="nav-item"> <a class="nav-link " href="paginas/esqueciMinhasenha.php">Esqueci minha senha</a> </li>
        <li class="nav-item">
		
     	</li>
      </ul>
    </div>
  </nav>
  



</header>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active"> <img src="assets/img/dentista1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>

      <div class="carousel-item"> <img src="assets/img/dentista2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      <div class="carousel-item"> <img src="assets/img/dentista.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
     <div class="carousel-item"> <img src="assets/img/Logo.jpg" height="640" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
  </div>
</div>
<main>
  <section>
    <div class="container-fluid">
      <h3 class="text-info">Nossas salas com ambiente agradável!</h3>
      <div class="row">
        <div class="col-md-6 imagem" >
        <div class="imgPrincipal">
         <img id="imgPrincipal" src="assets/img/consutorio1.jpg" width="488" height="288"  alt=""> 
         </div>
       		<div class="img1">
       			<img src="assets/img/consutorio1.jpg" alt="" >
       			<img src="assets/img/consutorio2.jpg" alt="">
       			<img src="assets/img/consutorio3.jpg" alt="" >
       			<img src="assets/img/consutorio4.jpg" alt="">
       			<img src="assets/img/consutorio5.jpg" alt="" >
       		</div>
        </div>
    
         <div class="col-xs-6">
          <div class="col-12">
            <form class="formulario" method="POST" id="cadastre">
              <h3 class="text-info text-center">Cadastre-se</h3>
           
             
              <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="nome"></label>
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
                    </div>
                  <div class="col-md-6">
                    <label for="email"></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                </div>
              </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                    <label for="senha"></label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="senha..">
                     <div id="senhaBarra" class="progress" style="display: none;">
                        <div id="senhaForca" class="progress-bar progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <label for="senha"></label>
                      <input type="password" class="form-control" id="senha" name="senha" placeholder="Confirma senha">
                    </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-5">
                    <label for="cpf"></label>
                    <input type="text" class="form-control " id="cpf" name="cpf" placeholder="cpf...">
                  </div>
                  <div class="col-md-4">
                    <label for="data"></label>
                    <input type="text" class="form-control" id="data"  name="data" placeholder="Data de Nascimento ">
                  </div>
                   <div class="col-md-3">
                    <label id="sexo"></label>
                      <select class="form-control" name="sexo" id="sexo">
                          <option value="" selected disabled hidden>Sexo</option>
                          <option value="m">Masculino</option>
                          <option value="f">feminino</option>
                      </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">              
                    <label for="telefone"></label>
                    <input type="text" class="form-control" id="telefone"  name="telefone" placeholder="Telefone ">
                  </div>
                  <div class="col-md-6">
                    <label for="celular"></label>
                    <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular ">
                  </div>
                 </div>
              </div>

               <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <label for="cep"></label>
                    <input type="text" class="form-control" id="cep" name="cep" placeholder="cep ">
                  </div>
                  
                  <div class="col-md-6">
                    <label for="bairro"></label>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="bairro ">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-8">
                    <label for="endereco"></label>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="endereco ">  
                  </div>
                   <div class="col-md-4">
                    <label for="cidade"></label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="cidade ">  
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                    <label for="numero"></label>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="número ">
                  </div>
                  <div class="col-md-4">
                    <label for="complemento"></label>
                    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="complemento ">
                  </div>
                  <div class="col-md-4">
                     <label for="estados"></label>
                      <select class="form-control" id="estados" name="estados">
                        <option value="" disabled selected hidden>Estados</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                      </select>
                    </div>
                  </div>
                </div>
              <div class="textcenter">
                <button type="submit" id="cadastra" class="btn btn-outline-info">Cadastre-se</button>
              </div>

            </form>
            </div>
            </div>
          </div>
            <?php 
                require 'objetos/obj_cadastraUsuario.php';
              ?>
         
              
        
  
    

    <article>

        <div class="row">
         <div class="col-md-6" id="tratamento">

        <h3 class="text-info">Nossos tratamento</h3>
        <ul >
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
            <p><i>Os procedimentos são feitos por um clínico geral.</i></p>
              <br><br>
             <div id="contatos">
              <h3 class="text-info">Contatos</h3>
              <strong>Contatos: (11) 3224-7378 <i class="fab fa-whatsapp"></i><br>
               (31) 98623-9711 <i class="fas fa-phone"></i><br>
                (11) 3284-3223 <i class="fas fa-phone"></i></strong>
               <br><br>
               <p>Onde somos encontrados!</p>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.766339920387!2d-46.77461388487014!3d-23.61271146937607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5443d07c0669%3A0xb8422f47f59e5cf8!2sSenac+Tabo%C3%A3o+da+Serra!5e0!3m2!1spt-BR!2sbr!4v1561768596994!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>

           
          <div class="col-xl-6" id="equipe">
     
            <h3 class="text-info">Conheça nossa equipe de dentistas</h3>

             <p>A Cury Clínica Odontológica conta com uma equipe especializada de dentistas em Curitiba, todos com formação diferenciada. Há mais de 10 anos, a clínica fornece aos seus pacientes os mais diversos tratamentos dentários em um único local. Para cada caso, você encontrará aqui um dentista especializado, evitando o seu deslocamento entre clínicas odontológicas. Conheça um pouco mais sobre cada um desses profissionais:</p>

        <img src="assets/img/ftdentistas.jpg" alt="">
            <p>Dr. Diego Rocha</p>

        <p>
        Formado pela Universidade Estadual de Maringá, atua nas áreas de Próteses e de estética dental, podendo fazer tratamentos com todos os tipos de próteses.
        Dr. Rodrigo Dutra.</p>

        <p>Formado pela faculdade de Odontologia de São Paulo, atua nas áreas de Próteses (também todos os tipos) e de estética bucal (restaurações, lentes de contato dentárias, facetas).</p>

        <p>Dra. Ellen Dutra.</p>

        <p>Formada pela UNIPLAC, do Distrito Federal, desde 2004, atua nas áreas de clareamento dental e restaurações estéticas..</p>

        
  
    
        </div>
        
    
    </article>
 
    
  </section>
</main>
<footer>
   
		Rua Salvador Branco de Andrade, 182 - Jardim Sao Miguel, Taboão da Serra - SP, 06760-100 <br>
		(31) 3224-7378 / (31) 98623-9711 (whatsapp) / (31) 3284-3223 
		<p class="esFooter">© Todos os direitos reservados | Responsável Técnica: Robert santos, Vagner campos ,Elias abner</p>
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
<script src="assets/js/script.js"></script>
</body>
</html>