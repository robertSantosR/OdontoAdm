<?php
	require_once("../objetos/obj_funcionario.php");
?>
<h4>Cadastrar funcionario</h4>
<form method="post">
<div class="row">
		 
		<div class="form-group col-6">
			<label for="email">Email</label>
			<input type="text" class="form-control" name="email"id="email"  placeholder="Email..">
		</div>
			<div class="form-group col-6">
			<label for="password">senha</label>
			<input type="password" class="form-control" name="senha"id="senha"  placeholder="senha..">
		</div>
		 <div class="form-group col-6">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" id="nome"  placeholder="Nome..">
		 </div>
		<div class="form-group col-3">
			<label for="dtNasc">Data Nascimento</label>
			<input type="date" class="form-control" name="dtNasc"id="email"  placeholder="dtNasc..">
		</div>
		 <div class="form-group col-md-3">
			  <label for="inputState">State</label>
			  <select id="idCargo" name="idCargo" class="form-control">
				<option selected>Cargo ...</option>
				<?php 
					if(mysqli_num_rows($resultado) > 0 ){
						
						foreach($resultado as $valor){
							echo "<option value='".$valor['id_Cargos']."'>".$valor['nome']."</option>";
							
							
						}
						
					}
				  
				 
				  
				  ?>
			  </select>
		</div>
		<div class="form-group col-4">
			<label for="cpf">CPF</label>
			<input type="text" class="form-control" name="cpf" id="cpf"  placeholder="CPF..">
		 </div>
		 <div class="form-group col-4">
			<label for="rg">RG</label>
			<input type="text" class="form-control" name="rg" id="rg"  placeholder="RG..">
		 </div>
		 <div class="form-group col-4">
			<label for="celular">Celular</label>
			<input type="text" class="form-control" name="celular" id="celular"  placeholder="Celular">
		</div>
		 <div class="form-group col-4">
			<label for="telefone">telefone</label>
			<input type="text" class="form-control" name="telefone" id="telefone"  placeholder="telefone">
		</div>
   </div>
 
    
 
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
