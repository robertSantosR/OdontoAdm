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
		require_once("../objetos/obj_conexao_bd.php");
		$conexao = AbreConexaoBd();
		$idUsuario = $_SESSION['user']['id_usuario'];
		
		$validaStatus = 0;
		$sqlValida = "SELECT tb_f.Funcionario, tb_a.id_Usuario, tb_a.id_agenda, tp_status,DATE_FORMAT(data,'%d/%m/%Y') AS data, DATE_FORMAT(horario, '%H:%i') as horario FROM tb_agendadent tb_a INNER JOIN tb_funcionarios tb_f ON tb_a.id_funcionarios = tb_f.id_Funcionarios  WHERE id_Usuario = '$idUsuario' AND tp_status = 2";
		$resultadoValida = mysqli_query($conexao,$sqlValida);
	
	  if(mysqli_num_rows($resultadoValida)>0){
		  
		foreach($resultadoValida as $valorValida){
			$validaStatus = $valorValida['tp_status'];
			$validaData = $valorValida['data'];
			$validahorarios = $valorValida['horario'];
			$validaDentista = $valorValida['Funcionario'];
			$validaAgenda = $valorValida['id_agenda'];
			}
		}
					  
		if($validaStatus > 1){
			echo "<div class='alert alert-warning' role='alert'>
				  	Você tem uma consulta marcada as ".$validahorarios." no dia: ".$validaData." com o dentista: ".ucfirst($validaDentista)."!
				  	<a href='../objetos/obj_cancelaConsulta.php?id=$validaAgenda' class='btn btn-danger' style='float:right; '>Cancelar consulta!</a>  
				</div>";
			
		}else{			  
		$sql = " SELECT  tb_a.id_agenda,tb_a.data,DATE_FORMAT(data, '%d/%m/%Y') AS data, tb_a.id_funcionarios, tb_a.horario,DATE_FORMAT(horario,'%H:%i') as horario, tb_f.Funcionario FROM tb_agendadent AS tb_a INNER JOIN tb_funcionarios as tb_f on tb_f.id_Funcionarios = tb_a.id_funcionarios WHERE tp_status = 1 AND id_Usuario is NULL ";

					  
		$resultado = mysqli_query($conexao,$sql);

		if(mysqli_num_rows($resultado) > 0 ){

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
 