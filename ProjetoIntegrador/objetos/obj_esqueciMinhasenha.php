<?php 

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';	

	
		if (isset($_POST['email']) && !empty($_POST['email'])) {
		require_once("obj_conexao_bd.php");
		$conexao = AbreConexaoBd();
		$email = addslashes($_POST['email']);

		$sql = "SELECT Email, id_Usuario FROM tb_usuario WHERE Email = '$email'";
		$resultado = mysqli_query($conexao, $sql);
		
		if (mysqli_num_rows($resultado) > 0) {
			$resultado = mysqli_fetch_assoc($resultado);
			$id =  $resultado['id_Usuario'];
			//gera uma token unico
			$token = md5(uniqid(mt_rand(),true));
			$sqlInsert = "UPDATE tb_usuario SET token = '$token' WHERE id_Usuario = $id";
			mysqli_query($conexao, $sqlInsert);
			
			$mail = new PHPMailer();
			
			
			// configura para envio via SMTP
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = "odontotopsenac@gmail.com";
			$mail->Password = "senac123";

			// remetente
			$mail->setFrom("odontotopsenac@gmail.com", "Odonto - Redefinir senha");
			// destinatário
			$mail->addAddress("robertsantosrrs@gmail.com", "");
					

			// e-mail no formato HTML
			 $mail->isHTML(true); 

			// assunto
		$mail->Subject = 'Trocar senha';
		// corpo da mensagem em HTML
		$mail->Body = "Altere sua senha http://localhost:8081/ProjetoIntegrador/paginas/redefinirSenha.php?token=$token. <b>Se não foi você Entre em contato com o suporte!</b>";
		// corpo da mensagem em texto comum, para clientes de e-mail sem suporte a HTML
		$mail->AltBody = 'http://localhost:8081/ProjetoIntegrador/paginas/redefinirSenha.php?token=$token. Se não foi você Entre em contato com o suporte!';

		if (!$mail->send())
		{
		    echo 'A mensagem não pôde ser enviada.';
		    echo 'Erro: ' . $mail->ErrorInfo;
		}
		else
		   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				 	<strong>Sucesso!</strong> um link foi mandado para o seu email para redifinir a senha.
			 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>';
		}else{

		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 	<strong>Erro!</strong> Não encotramos você.
			 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>';
	
		}

	}
?>