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
	$mail->CharSet = 'UTF-8';
	$mensagem->__set('nome', $_POST['nome']);
	$mensagem->__set('email', $_POST['email']);
	$mensagem->__set('celular', $_POST['celular']);
	$mensagem->__set('cidade', $_POST['cidade']);

	$mensagem->__set('plano_empresarial', $_POST['plano_empresarial']);
	$mensagem->__set('possui_plano', $_POST['possui_plano']);

	/*DADOS PESSOAIS*/

	if (!$mensagem->mensagemValida()) {
		echo "Mensagm é inválida";
		header('Location: planos.php');
	}else {
		header('Location: cotado.php');
		
		$verifica = true;
	//echo $mensagem->__get('nome');
	//die;

	/*COTACAO IDADE*/
	$mensagem->__set('0-18', $_POST['0-18']);
	$mensagem->__set('19-23', $_POST['19-23']);
	$mensagem->__set('24-28', $_POST['24-28']);
	$mensagem->__set('29-33', $_POST['29-33']);
	$mensagem->__set('34-38', $_POST['34-38']);
	$mensagem->__set('39-43', $_POST['39-43']);
	$mensagem->__set('44-48', $_POST['44-48']);
	$mensagem->__set('49-53', $_POST['49-53']);
	$mensagem->__set('54-59', $_POST['54-59']);
	$mensagem->__set('maisde59', $_POST['maisde59']);
	/*COTACAO IDADE*/



	




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
	    //$mail->addAddress('ellen@example.com');               // Name is optional
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'CEAM BRASIL - Cotacao - ' . $mensagem->__get('nome');

	    $mail->Body    = 'Nome Completo: '. $mensagem->__get('nome') .
	    			 '<br>E-mail: '. $mensagem->__get('email') . 
	    			 '<br>Celular: ' . $mensagem->__get('celular') . 
	    			 '<br>Cidade: ' . $mensagem->__get('cidade') .
	    			 '<br><br>Checkbox (Plano empresarial): ' . $mensagem->__get('plano_empresarial') .
	    			 '<br>Checkbox (Possui plano): ' . $mensagem->__get('possui_plano') .
	    			 '<br><br>Faixa Etária: <br>' . 
	    			 '<br>0-18: ' . $mensagem->__get('0-18') .
	    			 '<br>19-23: ' . $mensagem->__get('19-23') .
	    			 '<br>24-28: ' . $mensagem->__get('24-28') .
	    			 '<br>29-33: ' . $mensagem->__get('29-33') .
	    			 '<br>34-38: ' . $mensagem->__get('34-38') . 
	    			 '<br>39-43: ' . $mensagem->__get('39-43') .
	    			 '<br>44-48: ' . $mensagem->__get('44-48') .
	    			 '<br>49-53: ' . $mensagem->__get('49-53') .
	    			 '<br>54-59: ' . $mensagem->__get('54-59') .
	    			 '<br>Mais de 59: ' . $mensagem->__get('maisde59');

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
		header('Location: cotado.php');
	}
		
		//header('Location: ../../../htdocs/CeamBrasilPlano/contato.php');
	

}

	

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	
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