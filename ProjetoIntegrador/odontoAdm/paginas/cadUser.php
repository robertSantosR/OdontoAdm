<?php
  require_once("../objetos/obj_usuario.php");
?>

<h4>Cadastrar Usuário</h4>
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
		<div class="form-group col-4">
			<label for="cpf">CPF</label>
			<input type="text" class="form-control" name="cpf" id="cpf"  placeholder="CPF..">
		 </div>
		 <div class="form-group col-4">
			<label for="celular">Celular</label>
			<input type="text" class="form-control" name="celular" id="celular"  placeholder="Celular">
		</div>
   </div>
 
    <div class="row">
		  <div class="form-group col-4">
			<label for="cep">Cep</label>
			<input type="text" class="form-control" name="cep" id="cep"   placeholder="Cep..">
		</div>
		  	<div class="form-group col-3">
				<label for="complemento">Complemento</label>
				<input type="text" class="form-control" name="complemento" id="complemento"  placeholder="Complemento..">
			 </div>
		
		 <div class="form-group col-3">
			<label for="num">Número</label>
			<input type="text" class="form-control" name="num" id="num"  placeholder="Número..">
		</div>
	 </div>
	   <div class="row">
		  
	    <div class="form-group col-7">
			<label for="endereco">Endereço</label>
			<input type="text" class="form-control" name="end" id="endereco"  placeholder="Endereço..">
		 </div>
		 <div class="form-group col-5">
			<label for="endereco">bairro</label>
			<input type="text" class="form-control" name="end" id="endereco"  placeholder="Endereço..">
		 </div>
		  
	 </div>
 
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
