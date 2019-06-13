<?php 
   //$nome = $_SESSION["user"]["id_usuario"];
  $nome = $_SESSION["user"]["paciente"];
//$nome = $_SESSION["user"];
 require '../objetos/obj_consultaUsuario.php';
?>

<h6>Olá, <span class="badge badge-secondary"><?php echo ucfirst($nome);?></span></h6>
<br><br>
<div id="carouselExampleSlidesOnly"  class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="../img/bem-vindo-nato.jpg" height="300" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/sorriso-2.jpg" height="300" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/banner_libere.jpg"  height="300" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
