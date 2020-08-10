<?php

	

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;


	//print_r($_POST);

	class Mensagem {
		private $nome = null;
		private $email = null;		
		private $mensagem = null;
		
		

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
	$mensagem->__set('apresentacao', $_POST['apresentacao']);



	/*DADOS PESSOAIS*/

	if (!$mensagem->mensagemValida()) {
		echo "Mensagm é inválida";
		header('Location: contato.php');
	}else {
		header('Location: contato.php');
		
		$verifica = true;
	//echo $mensagem->__get('nome');
	//die;


	$mail = new PHPMailer(true);
	try {
	    //Server settings
	    $mail->SMTPDebug = true;                                 // Enable verbose debug output
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
	    //$mail->addAddress('ellen@example.com');               // Name is optional
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Cotacao - ' . $mensagem->__get('nome');

	    $mail->Body    = 'Nome Completo: '. $mensagem->__get('nome') .
	    			 '<br>E-mail: '. $mensagem->__get('email') . 
	    			 '<br>Celular: ' . $mensagem->__get('celular') .
	    			 '<br>Mensagem : ' . $mensagem->__get('apresentacao');

	    $mail->AltBody = 'Por favor, utilize um e-mail com suporte a HTML';

	    $mail->send();

	    $mensagem->status['codigo_status'] = 1;
	    $mensagem->status['descricao_status'] =  'E-mail enviado com sucesso';

	    //echo 'Message has been sent';


		} catch (Exception $e) {
			$mensagem->status['codigo_status'] = 2;
	    	$mensagem->status['descricao_status'] =  'Não foi possível enviar sua mensagem tente novamente mais tarde. Detalhes do erro' . $mail->ErrorInfo;

    		
		}

		if ($mensagem->mensagemValida()) {
		echo "Mensagm é inválida";
		header('Location: contado.php');
	}
		
		//header('Location: ../../../htdocs/CeamBrasilPlano/contato.php');
	

}

	

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>App Mail Send</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<div class="py-3 text-center">
		<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
		<h2>Send Mail</h2>
		<p class="lead">Seu app de envio de e-mails particular!</p>
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