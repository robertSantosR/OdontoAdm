<?php 
require_once('../objetos/prochorario.php');
?>
 <form>
   <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Data</label>
      <input type="text" class="form-control" id="data" placeholder="DD/MM/YYYY">
    
    
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Horário</label>
      <select id="hora" class="form-control">
        <option selected value="0">Selecione uma Hora..</option>
        <?php 
		//hora inicial
		$horaInicial = new DateTime('09:00');

		//hora final
		$horaFinal = new DateTime('18:00');

		echo 'Hora Inicial: '.$horaInicial->format('H:i')."<br />";

		//O valor é somado dentro do while, para evitar que repita a hora final
		while($horaInicial->add(new DateInterval('PT20M')) < $horaFinal) {   
		  echo '<option value="'.$horaInicial->format('H:i').'">';
			echo  $horaInicial->format('H:i');
		   echo '</option>'	;

			}
//echo 'Hora Final: '.$horaFinal->format('H:i')."<br />";

	?>
      </select>
    </div>
    
		<div class="form-group col-md-4">
		  <label for="nomeDen">Dentista</label>
		  <select id="nomeDen" class="form-control">
			<option selected value="0">Selecione um dentista..</option>
			<?php 
					if(mysqli_num_rows($resultado) > 0 ){
						
						foreach($resultado as $valor){
							echo "<option value='".$valor['id_Funcionarios']."'>".ucfirst($valor['Funcionario'])."</option>";
							
							
						}
						
					}
				  
				 
				  
				  ?>
			
		  </select>
            
   		 </div> 
    </div>
	<button type="button" id="enviar" class="btn btn-dark">Inserir agenda!</button>
</form>

<form method="POST">

<table class="table table-striped" id="adicionar">
  <thead>
    <tr>
      <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">Doutor</th>
     </tr>
    </thead>
    <tfoot>
    	 <tr>
    	 	<td colspan="3">  <button type="submit" class="btn btn-primary">Confirma</button> </td>
    	 </tr>
    	
    </tfoot>
  <tbody>
  
  </tbody>
</table>

</form>

 	<!-- mascara --> 
 	<script src="https://cdnjs.com/libraries/jquery.mask"></script>
 	<script src="../js/script.js"></script>

