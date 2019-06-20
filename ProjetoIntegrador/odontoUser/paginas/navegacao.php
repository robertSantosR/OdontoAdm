<?php
 session_start();
  header('Content-Type: text/html; charset=UTF-8');



    if (!isset($_SESSION["user"]) || isset($_GET["sair"])) {
        session_destroy();
        header("location:../");
    }

    $pagina="";
    if(isset($_GET["pagina"])){
      $pagina = $_GET["pagina"];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php require_once("../objetos/dependencias_html.php"); ?>
</head>
<body>
 <header>
  <nav class="navbar navbar-expand-lg">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span><i class="fas fa-align-justify"></i></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php if($pagina=="home")echo "active";?>">
          <a class="nav-link" href="<?php echo $_SERVER["PHP_SELF"]."?pagina=home";?>">Home </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Clientes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <a class="dropdown-item" href="<?php echo $_SERVER["PHP_SELF"]."?pagina=consUser"; ?>">Consultar avaliação disponivel</a>
              <a class="dropdown-item" href="<?php echo $_SERVER["PHP_SELF"]."?pagina=perfil_usuario"; ?>">Perfil usuário</a>
          </div>

        </li>
         
  
          
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_SERVER["PHP_SELF"]."?sair=true"; ?>" tabindex="-1">Sair</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
 </header>
  
  
  
  
  
  <div class ="container">
      <?php
        switch($pagina){
         
		case "consUser":
          include("./consUser.php");
          break;
     
  case "home":
          include("./home.php");
          break;
			
      case "perfil_usuario":
          include("./perfil_usuario.php");
          break;
		default:
          include("./home.php");
          break;
        }
       ?>
    </div>
    


<footer>
		<p>Rua Salvador Branco de Andrade, 182 - Jardim Sao Miguel, Taboão da Serra - SP, 06760-100 <br>
		(31) 3224-7378 / (31) 98623-9711 (whatsapp) / (31) 3284-3223</p>
		<p class="esFooter">© Todos os direitos reservados | Responsável Técnica: Robert santos, Vagner campos ,Elias abner</p>
</footer>
</body>
</html>

