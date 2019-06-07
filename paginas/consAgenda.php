<?php 
	require'../objetos/obj_conshorario.php';
	


?>

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
			$id = $valor['id_Consulta'];
			echo '<tr><td>'.$valor['data'].'</td>
				<td>'.$valor['hora'].'</td>
				<td>'.$valor['Funcionario'].'</td>
				<td>'.$valor['paciente']."</td>
				<td><a class='btn btn-primary' href=../objetos/obj_finaliza.php?id=$id>Finalizar</a></td>
				</tr>";
		}
	}
	?>
  </tbody>
</table>
