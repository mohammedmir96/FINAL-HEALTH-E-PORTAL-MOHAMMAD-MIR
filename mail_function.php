<?php	
	function sendMail2($email) {
		require('phpmailer/class.phpmailer.php');
		require('phpmailer/class.smtp.php');
	
		$message_body = "<h1>Thank You for registering in E-Hospital </h1><br/><br/>";
		$mail = new PHPMailer();
                $mail->AddReplyTo('healeportal2@gmail.com','E-Hospital');
                $mail->SetFrom('healtheportal2@gmail.com','E-Hospital');
                $mail->AddAddress($email);
                $mail->Subject="Your Registration is Success .Welcome to our Application";
                $mail->MsgHTML($message_body);
                $result=$mail->Send();
                if(!$result){
                   echo "Mailer Error:".$mail->ErrorInfo;
                   }
                else
                 {
                 return $result;
                 }
		$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'healthportal2@gmail.com'; // Your Gmail
	$mail->Password = 'pmzu yrgh myad cnty'; // App-specific password, not your regular Gmail password
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;	}
?>