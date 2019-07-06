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
		
   </div>

  
   		<div class="form-group">
   		  <div class="row">
   		<div class="form-group col-4">
			<label for="cpf">CPF</label>
			<input type="text" class="form-control" name="cpf" id="cpf"  placeholder="CPF..">
		 </div>
		 <div class="form-group col-4">
			<label for="celular">Celular</label>
			<input type="text" class="form-control" name="celular" id="celular"  placeholder="Celular">
		</div>
		 <div class="col-md-3 form-group" >
                     <label for="sexo"></label>
                      <select class="form-control" id="sexo" name="sexo" >
                        <option value="" disabled selected hidden>Selecione o sexo</option>
                        <option value="m">Masculino</option>
                        <option value="f">feminino</option>
                      </select>
         </div>
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
			<input type="text" class="form-control" name="end" id="endereco"  placeholder="Endereço.." disabled>
		 </div>
		 <div class="form-group col-5">
			<label for="endereco">bairro</label>
			<input type="text" class="form-control" name="end" id="bairro"  placeholder="bairro.." disabled>
		 </div>
		  
	 </div>
	  <div class="form-group">
                <div class="row">
                  <div class="col-md-8">
                    <label for="endereco"></label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="cidade" disabled>  
                  </div>
                   <div class="col-md-4">
                     <label for="estados"></label>
                      <select class="form-control" id="estados" name="estados" disabled>
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
  <button type="submit" id="cadastraCliente" class="btn btn-primary">Cadastrar</button>
</form>
