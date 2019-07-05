<?php 
  require '../objetos/obj_consultaUsuarios.php';
?>
<h3>Usuários cadastrados</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($resultado as $valor): ?>
      <tr>
        <td><?= $valor['paciente'];?></td>
        <td><?= $valor['Email'];?></td>
        <td><?= $valor['data_nascimento'];?></td>
      </tr>
   <?php endforeach; ?>
  </tbody>
</table>