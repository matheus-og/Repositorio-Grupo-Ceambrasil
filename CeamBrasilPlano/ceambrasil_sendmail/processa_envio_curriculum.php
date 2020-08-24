<?php

	

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;



	class Mensagem {
		private $nome = null;
		private $email = null;		
		private $mensagem = null;
		private $arquivo = null;
		
		public $status = array('codigo_status' => null, 'descricao_status' => '');
		
		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		public function mensagemValida(){
			if(empty($this->nome) || empty($this->email)){
				return false;
			}

			return true;
		}
	}

	$mensagem = new Mensagem();

	/*DADOS PESSOAIS*/
	$mensagem->__set('nome', $_POST['nome']);
	$mensagem->__set('email', $_POST['email']);
	$mensagem->__set('celular', $_POST['celular']);
	$mensagem->__set('area_atuacao', $_POST['area_atuacao']);
	$mensagem->__set('apresentacao', $_POST['apresentacao']);
	$arquivo   = $_FILES['arquivo'];

	/*DADOS PESSOAIS*/

	if (!$mensagem->mensagemValida()) {
		header('Location: trabalhe_conosco.php');
	}else {	

		$verifica = true;

		



	$mail = new PHPMailer(true);
	try {
	    //Server settings
	    $mail->CharSet = 'UTF-8';
	    $mail->SMTPDebug = false;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'contatoceambrasil@gmail.com';                 // SMTP username
	    $mail->Password = 'ceambr123';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('contatoceambrasil@gmail.com', 'CeamBrasil Remetente');
	    $mail->addAddress('contatoceambrasil@gmail.com', 'CeamBrasil Remetente');     // Add a recipient


	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'CEAM BRASIL - Curriculum - ' . $mensagem->__get('area_atuacao') . ' - ' . $mensagem->__get('nome');

	    $mail->Body  = 'Nome Completo: '. $mensagem->__get('nome') .
	    			 '<br>E-mail: '. $mensagem->__get('email') . 
	    			 '<br>Celular: ' . $mensagem->__get('celular') .
	    			 '<br>Setor : ' . $mensagem->__get('area_atuacao') .
	    			 '<br>Apresentação : ' . $mensagem->__get('apresentacao');

        //Enviar Anexo	    			 
	    $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );

	
	    $mail->AltBody = 'Por favor, utilize um e-mail com suporte a HTML';
	    

	    $mail->send();
	    //header('Location: trabalhe_conosco.php');

	    $mensagem->status['codigo_status'] = 1;
	    $mensagem->status['descricao_status'] =  'E-mail enviado com sucesso';

	   

		} catch (Exception $e) {
			$mensagem->status['codigo_status'] = 2;
	    	$mensagem->status['descricao_status'] =  'Não foi possível enviar sua mensagem tente novamente mais tarde. Detalhes do erro' . $mail->ErrorInfo;

    		
		}

		

	}
		echo '<script> location.replace("trabalhe_conosco.php"); </script>';

?>




<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Refresh" content="2; url=http://www.ceambrasil.com.br/trabalhe_conosco.php">
	
	<meta charset="utf-8" />
    <title>App Mail Send</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<div class="py-3 text-center">		
		<h2>Send Mail - Debug</h2>		
	</div>
	
	<div class="row">
		<div class="col-md-12">

			<?php if($mensagem->status['codigo_status'] == 1) { ?>
				
				<div class="container">
					<h1 class="display-4 text-success">Sucesso</h1>
					<p><?= $mensagem->status['descricao_status'] ?></p>
				</div>

			<?php } ?>

			<?php if($mensagem->status['codigo_status'] == 2) { ?>
					<h1 class="display-4 text-danger">Ops!</h1>
					<p><?= $mensagem->status['descricao_status'] ?></p>
			<?php } ?>
		</div>
	</div>
	
</body>
</html>