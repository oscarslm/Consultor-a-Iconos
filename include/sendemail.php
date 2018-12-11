<?php

require_once('phpmailer/PHPMailerAutoload.php');

$toemails = array();

$toemails[] = array(
				'email' => 'roberto.franco.briones1@gmail.com', // Your Email Address
				'name' => 'Iconos Web' // Your Name
			);

// Form Processing Messages
$message_success = 'Recibimos <strong>exitosamente</strong> tu mensaje. Tendrás una respuesta tan pronto como sea posible';

// Add this only if you use reCaptcha with your Contact Forms
$recaptcha_secret = '6LcCFSYUAAAAAPzQ5Qx1do47RXbz31BSmgGbO0rv'; // Your reCaptcha Secret

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

// If you intend you use SMTP, add your SMTP Code after this Line


if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if( $_POST['template-contactform-email'] != '' ) {

		$name = isset( $_POST['template-contactform-name'] ) ? $_POST['template-contactform-name'] : '';
		$email = isset( $_POST['template-contactform-email'] ) ? $_POST['template-contactform-email'] : '';
		$phone = isset( $_POST['template-contactform-phone'] ) ? $_POST['template-contactform-phone'] : '';
		$service = isset( $_POST['template-contactform-service'] ) ? $_POST['template-contactform-service'] : '';
		$subject = isset( $_POST['template-contactform-subject'] ) ? $_POST['template-contactform-subject'] : '';
		$genero = isset( $_POST['genero'] ) ? $_POST['genero'] : '';
		$message = isset( $_POST['template-contactform-message'] ) ? $_POST['template-contactform-message'] : '';

		$subject = isset($subject) ? $subject : 'New Message From Contact Form';

		$botcheck = $_POST['template-contactform-botcheck'];

		if( $botcheck == '' ) {

			$mail->SetFrom( $email , $name );
			$mail->AddReplyTo( $email , $name );
			foreach( $toemails as $toemail ) {
				$mail->AddAddress( $toemail['email'] , $toemail['name'] );
			}
			$mail->Subject = $subject;

			$name = isset($name) ? "<strong>Nombre:</strong> $name<br><br>" : '';
			$email = isset($email) ? "<strong>Email:</strong> $email<br><br>" : '';
			$phone = isset($phone) ? "<strong>Teléfono:</strong> $phone<br><br>" : '';
			$genero = isset($genero) ? "<strong>Género:</strong> $genero<br><br>" : '';
			$service = isset($service) ? "<strong>Servicio:</strong> $service<br><br>" : '';
			$message = isset($message) ? "<strong>Mensaje:</strong> $message<br><br>" : '';

			$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Enviado desde: ' . $_SERVER['HTTP_REFERER'] : '';

			$body = "$name $email $phone $genero $service $message $referrer";

			// Runs only when File Field is present in the Contact Form
			if ( isset( $_FILES['template-contactform-file'] ) && $_FILES['template-contactform-file']['error'] == UPLOAD_ERR_OK ) {
				$mail->IsHTML(true);
				$mail->AddAttachment( $_FILES['template-contactform-file']['tmp_name'], $_FILES['template-contactform-file']['name'] );
			}

			// Runs only when reCaptcha is present in the Contact Form
			if( isset( $_POST['g-recaptcha-response'] ) ) {
				$recaptcha_response = $_POST['g-recaptcha-response'];
				$response = file_get_contents( "https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $recaptcha_response );

				$g_response = json_decode( $response );

				if ( $g_response->success !== true ) {
					echo '{ "alert": "error", "message": "Captcha no válido, por favor intenta de nuevo." }';
					die;
				}
			}

			// Uncomment the following Lines of Code if you want to Force reCaptcha Validation

			// if( !isset( $_POST['g-recaptcha-response'] ) ) {
			// 	echo '{ "alert": "error", "message": "Captcha not Submitted! Please Try Again." }';
			// 	die;
			// }

			$mail->MsgHTML( $body );
			$sendEmail = $mail->Send();

			if( $sendEmail == true ):
				echo '{ "alert": "success", "message": "' . $message_success . '" }';
			else:
				echo '{ "alert": "error", "message": "El email <strong>no pudo</strong> ser enviado debido a un error inesperado. Por favor intenta de nuevo más tarde.<br /><br /><strong>Motivo:</strong><br />' . $mail->ErrorInfo . '" }';
			endif;
		} else {
			echo '{ "alert": "error", "message": "Bot <strong>Detected</strong>.! Clean yourself Botster.!" }';
		}
	} else {
		echo '{ "alert": "error", "message": "Por favor <strong>completa</strong> todos los campos e intenta de nuevo." }';
	}
} else {
	echo '{ "alert": "error", "message": "Ocurrió un <strong>error inesperado</strong>. Por favor intenta de nuevo más tarde." }';
}

?>