<?php
$sch=mysqli_query($db,"SELECT school.school_name,diocese.diocese_name,school.school_id
FROM school
INNER JOIN diocese
ON school.diocese_id=diocese.diocese_id
INNER JOIN coordinator
ON school.school_id=coordinator.school_id
INNER JOIN account
ON coordinator.account_id=account.account_id
WHERE account.username='$username'");
$scn=mysqli_fetch_row($sch);
$id=$_GET['id'];
   $det=mysqli_query($db,"SELECT email,fname,lname FROM student WHERE stud_id='$id'");
   $em=mysqli_fetch_row($det);

		$email="cbcp.ecmi@gmail.com";
		if(isset($_POST['sendEmail']))
		{

            $sendTo = $_POST['sendTo'];
			$fromEmail = $_POST['fromEmail'];
			$fromName = $_POST['fromName'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			
			
		   $to = "somebody@example.com";
           $subject = "My subject";
           $txt = "Hello world!";
          $headers = "From: cbcp.ecmi@gmail.com" . "\r\n" .
           "CC: somebodyelse@example.com";

mail($sendTo,$subject,$message,$headers);
			
		    }
		
?>

<!-- require('PHPMailer/PHPMailerAutoload.php');
			
			
			
			$mail = new PHPMailer;
			
			$mail->isSMTP();
			$mail->Host = gethostbyname('smtp.gmail.com');
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = "cbcp.ecmi@gmail.com";
			$mail->Password = "cbcpecmi123";
			$mail->setFrom($fromEmail, $fromName);
			$mail->addAddress($sendTo, '');
			$mail->Subject = $subject;
			$mail->Body = $message."\n\n-----------------------------------------\nNOTE: If you have further questions, send a mail to:(".$fromEmail.")";
			
			if($mail->send()){
				header("Location:school_students.php"); -->