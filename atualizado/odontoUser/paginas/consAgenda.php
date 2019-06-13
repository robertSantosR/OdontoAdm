<?php 
	require'../objetos/obj_conshorario.php';
?>
<h3>Consulta horarios marcados </h3>
 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Dia</th>
      <th scope="col">Hora</th>
      <th scope="col">Doutor</th>  
      <th scope="col">Paciente</th>    
    </tr>
  </thead>
  <tbody>
   <?php
	 if(mysqli_num_rows($resultado) >0){
		foreach($resultado as $valor){
			$id = $valor['id_agenda'];
			echo '<tr><td>'.$valor['data'].'</td>
				<td>'.$valor['horario'].'</td>
				<td>'.ucfirst($valor['Funcionario']).'</td>
				<td>'.ucfirst($valor['paciente'])."</td>
				<td><a class='btn btn-primary' href=../objetos/obj_finaliza.php?id=$id>Finalizar</a></td>
				</tr>";
		}
	}
	  
	if(isset($_GET['finalizado'] )== 'ok'){
	 	echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  				<strong>Sucesso</strong> Usuario foi finalizado.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    				<span aria-hidden='true'>&times;</span>
				</button>
			</div>";
		
	}
	?>
	
	
  </tbody>
</table>
