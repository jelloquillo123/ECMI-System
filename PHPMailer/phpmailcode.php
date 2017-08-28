<?php

	require ('PHPMailer/PHPMailerAutoload.php');


	$sendTo = $_POST['sendTo'];
	$fromEmail = $_POST['fromEmail'];
	$fromName = $_POST['fromName'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];$sendTo = $_POST['sendTo'];

	$mail = new PHPMailer;


	//Main Host Server
	$mail->isSMTP();
	$mail->Host = gethostbyname('smtp.gmail.com');
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "ucres.test@gmail.com";
	$mail->Password = "plmucres";

	//Sender
	$mail->setFrom($fromEmail, $fromName);

	//Receiver
	$mail->addAddress($sendTo, '');

	//Set the subject line
	$mail->Subject = $subject;

	//Message
	$mail->Body = $message;


	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
	}
?>