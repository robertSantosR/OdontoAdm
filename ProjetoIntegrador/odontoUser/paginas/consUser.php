<h3>Consulta dispóniveis</h3>
			   <table class='table'>
				   <thead>
					<tr>

					  <th scope='col'>dia</th>
					  <th scope='col'>hora</th>
					  <th scope='col'>doutor</th>
					   <th scope='col'></th>
					</tr>
				 </thead>
				  <tbody>


	<?php 
		require '../objetos/obj_consultaUsuario.php';

		
if (isset($resultado) ) {

	foreach($resultado as $valor){
				$data = $valor['data'];
				$hora = $valor['horario'];
				$dentista = $valor['Funcionario'];
				$idDen = $valor['id_funcionarios'];
				$idAgenda = $valor['id_agenda'];
			

				echo "
					<tr>
						<td>".$data."</td>
						<td>".$hora."</td>
						<td>".ucfirst($dentista)."</td>
						
						   
						<td><a  href='../objetos/obj_cadConsulta.php?idAgenda=".$idAgenda."&idUsuario=".$idUsuario."' class='btn btn-primary'>Confirma</a></td>
						
					
					
					</tr>" ;
					}
		
}				
		
//VERIFICA SE A CONSULTA FOI MARCADA!
if(isset($_GET['v']) == 'ok'){
	echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
		<strong>Sucesso</strong> Sua consulta foi marcada.
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
		</button>
	</div>";
//verifica se o usuario cancelo a consulta
}elseif (isset($_GET['m']) == 'ok') {
	echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
		<strong>Sucesso</strong> Sua consulta foi Desmarcada.
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>";
		}
		

		mysqli_close($conexao);
?>

				  </tbody>
				</table> 
				<br><br>
				<p> <i>Caso quiser desmarcar por favor desmarca com <strong>24 horas de antecedência!</strong> </i></p>
<!--</form>-->
 