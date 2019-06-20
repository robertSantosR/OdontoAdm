<h3>Relatórios dos paciente</h3>

<h5>Digite uma data</h5>
<form method="POST" >
  <div class="row">
    <div class="col-4">
      <input type="date" class="form-control" name='dataInical' id="dataInical" placeholder="11/11/1111 data inicial...">
    </div>
    <span>Entre</span>
    <div class="col-4"> 
      <input type="date" class="form-control" name='dataFinal' id="dataFinal" placeholder="11/11/1111 data final...">
    </div>
    <input type="submit" value="Enviar" class="btn btn-primary">
  </div>

</form>

 <br><br>
 <?php 
require '../objetos/obj_relatorio.php';
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Dia</th>
      <th scope="col">Paciente</th>
      <th scope="col">Funcionario</th>
      <th scope="col">Horario</th>
    </tr>
  </thead>
  <tbody>
  <?php if(isset($resultado) && mysqli_num_rows($resultado) > 0): ?>
    <?php foreach($resultado as $valor): ?>
        <tr>
          <td><?= $valor['data']?></td>
          <td><?= $valor['paciente']?></td>
          <td><?= $valor['Funcionario']?></td>
           <td><?= $valor['horario']?></td>
        </tr>
    <?php endforeach; ?>
  <?php endif; ?>

  </tbody>
</table>