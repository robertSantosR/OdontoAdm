<?php 
  require '../objetos/obj_perfil_usuario.php';
?>
<h2>Perfil do usuário</h2>
<form method="POST">
  <div class="form-row">
   
    <div class="col-md-4 mb-3">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="EX:João" name="nome" value="<?= ucfirst($_SESSION['user']['paciente'])?>"  required>
    </div>
    
     <div class="col-md-4 mb-3">
      <label for="cep">cep</label>
      <input type="text" class="form-control"  id="cep" name="cep" placeholder="EX:11111-1111"  value="<?= $_SESSION['user']['cep'] ?>" required>
    </div>

    <div class="col-md-4 mb-3">
      <label for="bairro">Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairro" placeholder="EX:jd paulita" value="<?= $_SESSION['user']['bairro'] ?>" required>
    </div>
    
  
   
  </div>
  <div class="form-row">
   <div class="col-md-4 mb-3">
      <label for="estado">estado</label>
      <div class="form-group">
        <select name="estado" class="form-control" id="estado">
          <option value="" selected disabled>Selecione um estado</option>
          <option value="AC"  <?php if($_SESSION['user']['estado'] == "AC"){ echo "selected";} ?> >Acre</option>
          <option value="AL"  <?php if($_SESSION['user']['estado'] == "AL"){ echo "selected";} ?>>Alagoas</option>
          <option value="AP"  <?php if($_SESSION['user']['estado'] == "AP"){ echo "selected";} ?>>Amapá</option>
          <option value="AM" <?php if($_SESSION['user']['estado'] == "AM"){ echo "selected";} ?>>Amazonas</option>
          <option value="BA" <?php if($_SESSION['user']['estado'] == "BA"){ echo "selected";} ?>>Bahia</option>
          <option value="CE" <?php if($_SESSION['user']['estado'] == "CE"){ echo "selected";} ?>>Ceará</option>
          <option value="DF" <?php if($_SESSION['user']['estado'] == "DF"){ echo "selected";} ?>>Distrito Federal</option>
          <option value="ES" <?php if($_SESSION['user']['estado'] == "ES"){ echo "selected";} ?>>Espírito Santo</option>
          <option value="GO" <?php if($_SESSION['user']['estado'] == "GO"){ echo "selected";} ?>>Goiás</option>
          <option value="MA" <?php if($_SESSION['user']['estado'] == "MA"){ echo "selected";} ?>>Maranhão</option>
          <option value="MT" <?php if($_SESSION['user']['estado'] == "MT"){ echo "selected";} ?>>Mato Grosso</option>
          <option value="MS" <?php if($_SESSION['user']['estado'] == "MS"){ echo "selected";} ?>>Mato Grosso do Sul</option>
          <option value="MG" <?php if($_SESSION['user']['estado'] == "MG"){ echo "selected";} ?>>Minas Gerais</option>
          <option value="PA" <?php if($_SESSION['user']['estado'] == "PA"){ echo "selected";} ?>>Pará</option>
          <option value="PB" <?php if($_SESSION['user']['estado'] == "PB"){ echo "selected";} ?>>Paraíba</option>
          <option value="PR" <?php if($_SESSION['user']['estado'] == "PR"){ echo "selected";} ?>>Paraná</option>
          <option value="PE" <?php if($_SESSION['user']['estado'] == "PE"){ echo "selected";} ?>>Pernambuco</option>
          <option value="PI" <?php if($_SESSION['user']['estado'] == "PI"){ echo "selected";} ?>>Piauí</option>
          <option value="RJ" <?php if($_SESSION['user']['estado'] == "RJ"){ echo "selected";} ?>>Rio de Janeiro</option>
          <option value="RN" <?php if($_SESSION['user']['estado'] == "RN"){ echo "selected";} ?>>Rio Grande do Norte</option>
          <option value="RS" <?php if($_SESSION['user']['estado'] == "RS"){ echo "selected";} ?>>Rio Grande do Sul</option>
          <option value="RO" <?php if($_SESSION['user']['estado'] == "RO"){ echo "selected";} ?>>Rondônia</option>
          <option value="RR" <?php if($_SESSION['user']['estado'] == "RR"){ echo "selected";} ?>>Roraima</option>
          <option value="SC" <?php if($_SESSION['user']['estado'] == "SC"){ echo "selected";} ?>>Santa Catarina</option>
          <option value="SP"<?php if($_SESSION['user']['estado'] == "SP"){ echo "selected";} ?>>São Paulo</option>
          <option value="SE" <?php if($_SESSION['user']['estado'] == "SE"){ echo "selected";} ?>>Sergipe</option>
          <option value="TO" <?php if($_SESSION['user']['estado'] == "TO"){ echo "selected";} ?>>Tocantins</option>
        </select>
      </div>
    </div>
   
      <div class="col-md-4 mb-3">
      <label for="cidade">Cidade</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="EX:São paulo" aria-describedby="inputGroupPrepend2" value="<?= $_SESSION['user']['cidade'] ?>" >
      </div>
    </div>


    <div class="col-md-4 mb-3">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control"  id="endereco" name="endereco" placeholder="EX:rua damiao.." value="<?= $_SESSION['user']['endereco'] ?>" required>
    </div>

    
  </div>   
 
    <div class="form-row">
    
   
     <div class="col-md-4 mb-3">
      <label for="numero">número</label>
      <input type="text" class="form-control"  id="numero" name="numero" placeholder="EX:11111" value="<?= $_SESSION['user']['numero'] ?>" required>
    </div>
   
    
    
       <div class="col-md-4 mb-3">
      <label for="complemento">Complemento</label>
      <input type="text" class="form-control"  id="complemento" name="complemento" placeholder="EX:11111" value="<?= $_SESSION['user']['complemento'] ?>" required>
    </div>

  </div>
  
  
  	<div class="form-row">
      
      <div class="col-md-4 mb-3">
      <label for="celular">Celular</label>
      <input type="text" class="form-control"  id="celular" name="celular" placeholder="EX:11111-1111" value="<?= $_SESSION['user']['Celular'] ?>" required>
    </div>
  
    
    <div class="col-md-4 mb-3">
      <label for="telefone">Telefone</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="EX:4002-8922" value="<?= $_SESSION['user']['Telefone'] ?>" required>
      </div>
    </div>
     <?php 
          switch ($_SESSION['user']['sexo']) {
            case 'm':
              $check = 'selected';
              break;
            case 'f':
              $check1 = 'selected';
              break;
          }
      ?>
     <div class="form-group col-md-4">
      <label for="sexo">Sexo</label>
      <select id="sexo" name="sexo" class="form-control">


        
        <option selected>...</option>
        <option value="m" <?php if(isset($check))echo $check; ?> >Masculino</option>
        <option value="f" <?php if(isset($check1))echo $check1; ?> >Feminino</option>
      </select>
    </div>
    

  </div>


  
  
  
    <input type="submit" class="btn btn-success" value="Atualizar"> 

  
</form>
  </div>
 			
<br>

<hr>
