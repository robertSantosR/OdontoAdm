<?php
//require('../objetos/obj_cadConsulta.php');
?>
<!--<form method="POST" >-->
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
		
		/*$sql = "SELECT DATE_FORMAT(horario, '%H:%i') AS horario, DATE_FORMAT(data, '%d/%m/%Y') AS data ,id_funcionarios,id_agenda   FROM tb_agendadent";
		*/			  
		$sql = " SELECT  tb_a.id_agenda,tb_a.data,DATE_FORMAT(data, '%d/%m/%Y') AS data, tb_a.id_funcionarios, tb_a.horario,DATE_FORMAT(horario,'%H:%i') as horario, tb_f.Funcionario FROM tb_agendadent AS tb_a INNER JOIN tb_funcionarios as tb_f on tb_f.id_Funcionarios = tb_a.id_funcionarios";

					  
		$resultado = mysqli_query($conexao,$sql);

		if(mysqli_num_rows($resultado) > 0 ){

			foreach($resultado as $valor){
				$data = $valor['data'];
				$hora = $valor['horario'];
				$dentista = $valor['Funcionario'];
				$idDen = $valor['id_funcionarios'];
				$idAgenda = $valor['id_agenda'];
				$idUsuario = $_SESSION['user']['id_usuario'];
				


				echo "
					<tr>
						<td>".$data."</td>
						<td>".$hora."</td>
						<td>".$dentista."</td>
						
						   
						<td><a  href='../objetos/obj_cadConsulta.php?data=".$data."&hora=".$hora."&idfuncionario=".$idDen."&idAgenda=".$idAgenda."&idUsuario=".$idUsuario."' class='btn btn-primary'>Confirma</a></td>
						
					
					
					</tr>" ;
				
				

			}

		}

		mysqli_close($conexao);
	?>



				  </tbody>
				</table> 
<!--</form>-->
 