<?php
	require 'src/Exception.php';
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	//use PHPMailer\PHPMailer\SMTP;
	
	if(isset($_POST['btnSend'])) {
		$email = $_POST['txtEmail'] ?? '';
		$subject = $_POST['txtSubject'] ?? '';
		$content = $_POST['txtContent'] ?? '';
		
		$email = strip_tags($email);
		$subject = strip_tags($subject);
		
		// validate du lieu
		$checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
		if($checkEmail && !empty($subject) && !empty($content)){
			// dung thu vien php mailer
			$mail = new PHPMailer(true);
			try {
				//Server settings
				//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
				$mail->isSMTP();                                            // Send using SMTP
				$mail->Host       = 'smtp.googlemail.com ';                    // Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
				$mail->Username   = 'trieuntgvt3h@gmail.com';                     // SMTP username
				$mail->Password   = 'trieunt1204';                               // SMTP password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
				$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
				
				//Recipients
				$mail->setFrom('trieuntgvt3h@gmail.com', 'Demo PHP Send mail');
				$mail->addAddress($email); // Name is optional
				
				// dinh kem file
				$mail->addAttachment('../public/img/iphone-8.jpg');
				$mail->addAttachment('../public/img/samsung-s10.jpg');
				
				// Content
				$mail->isHTML(true);     // Set email format to HTML
				$mail->Subject = $subject;
				$mail->Body    = $content;
				
				if($mail->send()){
					header("Location: ../index.php?state=success");
				} else {
					header("Location: ../index.php?state=fail");
				}
	
				
				
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
			
		} else {
			header("Location: ../index.php?state=error");
		}
	}