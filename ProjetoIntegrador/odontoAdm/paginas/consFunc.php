<?php 
	require('../objetos/obj_consultaFuncionario.php');
?>



<h6> Consultar Funcionario</h6>
<form method="POST">
    
		<div class="form-group">
      <div class="row">
        <div class="col-md-6">
    		  <label for="nomeDentista"></label>

    		  <select id="nomeDentista" name="idDenstista" class="form-control">
      			<option selected disabled hidden>Selecione uma opção..</option>
            <option value="0" >Selecione todos Funcionarios</option>

      			<?php 
      					if(mysqli_num_rows($resultadoCargos) > 0 ){
      						foreach($resultadoCargos as $dadoCargo){
      							echo "<option value='".$dadoCargo['id_cargos']."'>".ucfirst($dadoCargo['nome'])."</option>";		
      						}
      					}
      			?>
      			  
      		  </select>

        </div>
        <div class="col-md-6">
          <input type="submit" value="Buscar" class="btn btn-primary" style="margin-top: 32px ">
        </div>
   		 </div> 
      
  </div>
</form>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Funcionario</th>
      <th scope="col">DRT</th>
      <th scope="col">Cargo</th>
    </tr>
  </thead>
  <tbody>
  <?php
    if (isset($resultado)) {
      foreach ($resultado as $valor) {
        echo '<tr>
             <td>'.$valor['Funcionario'].'</td>
             <td>'.$valor['id_Funcionarios'].'</td>
             <td>'.$valor['nome'].'</td>
      </tr>';

      }
  }
    ?>
  </tbody>
</table>
