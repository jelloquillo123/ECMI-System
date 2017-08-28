<!DOCTYPE html>
<?php
  session_start();
  require 'connect.php';
   $id=$_GET['id'];
   $det=mysqli_query($db,"SELECT email,fname,lname FROM student WHERE stud_id='$id'");
   $em=mysqli_fetch_row($det);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/jquery-3.0.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <title>Feedback</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <!--External CSS-->
    <link rel="stylesheet" type="text/css" href="stylesdbms.css">
    <!-- Custom CSS -->
    <style>
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
	<?php
		$email="cbcp.ecmi@gmail.com";
		if(isset($_POST['sendEmail']))
		{
			require('PHPMailer/PHPMailerAutoload.php');
			
			$sendTo = $_POST['sendTo'];
			$fromEmail = $_POST['fromEmail'];
			$fromName = $_POST['fromName'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			
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
				header("Location:school_students.php");
		    }
		}
	?>
	<body>
	<br/><br/>

 <!-- Navigation--> 
    <nav class="navbar navbar-fixed-top navbar-inverse" style="padding:6px; font-family:mySecondFont; " role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="school_main.php">School</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="school_report.php">Reports</a>
                    </li>
                    <li>
                      <a href="school_students.php">Students</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="#div2">About Us</a>
                  </li>
                  <li>
                      <a href="#div3">Contact</a>
                  </li>
                  <li class="button">
                    <a href="index.php"><span class="glyphicon glyphicon-log-out"></span><b>Logout</b></a>
                  </li>
                </ul>
              </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container-fluid green" style="font-family:myFirstFont">
			<br />
			<div class="card-panel white z-depth-3">
				<div class="container-fluid">
        <div class="row">
					<div class="col-lg-4" style="padding-top:35px;">
						<img src="pictures/logo.jpg" class="img-responsive logo" alt="ECMI LOGO" />
					</div>
          <div class="col-lg-8 text-center">
				    <div class="page-header">
              <h1 class="display-3">ECMI-Sons and Daughters of OFW Program Website</h1>
            </div>
            <footer>
              <p style="font-size:17px;">
                The migrant is to be considered, not merely as an instrument of production but as a subject endowed with human dignity -Pope John Paul II
              </p>
            </footer>
          </div>
        </div>
        <!-- /.row -->
			</div>
		</div>
	</div>

	<div class="container-fluid green" style="font-family: roboto;">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
				<div class="card-panel white z-depth-3">
					<div class="row">
        				<div class="col-sm-5">
        				<h3 align="left">Feedback</h3><br/>
        				</div>
        			<div class="col-sm-offset-2 col-sm-5">
        		</div>
        	</div>
		<form method="post">
					<input type="hidden" name="fromEmail" value="<?php echo $email;?>" required/>
			<div class="row">
				<div class="col-sm-5">
					<h5>Email of Receiver:</h5>
				</div>
				<div class="col-sm-7">
					<input type="email" name="sendTo" value="<?php echo $em[0];?>" required/>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<h5>Name of Receiver:</h5>
				</div>
				<div class="col-sm-7">
				<input type="text" name="fromName" value="Parent of <?php echo $em[1]." ".$em[2];?>" required/>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<h5>Subject of Email:</h5>
				</div>
				<div class="col-sm-7">
				<input type="text" name="subject" value="Pre-Awareness Test Results" required/>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5">
					<h5>Compose:</h5>
				</div>
				<div class="col-sm-7">
				<textarea class="form-control" name="message" rows="5" placeholder="Enter Message Here . . ." required/></textarea>
				</div>
			</div>
			
			<div class="row">
			<div class="col-sm-offset-5 col-sm-4">
			<br/><br/>
			<input class="btn btn-lg green" type="submit" name="sendEmail" value="submit">
			</div>
			</div>
	</div>
	</div>	
	</div>
		
		</form>
	</body>
</html>