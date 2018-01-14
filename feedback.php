<!DOCTYPE html>
<?php
  session_start();
  require 'connect.php';
  require 'feedbackdb.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ECMI-SDOFP</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/footable.bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="stylessdofp.css">

    <style type="text/css">

    </style>
    
  </head>
<body data-spy="scroll">
<!-- Navigation -->
    <nav class="navbar navbar-fixed-top navbar-default" style="padding:6px; font-family:mySecondFont; " role="navigation">
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
                      <a href="school_students.php">Students</a>
                  </li>
                  <li>
                  		<a href="school_main.php"> Reports</a>
                  </li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li>
                  <p class="navbar-text" style="color: #f5f5f5;"><?php echo $scn[0]; ?></p>
                </li>
                  <li class="button">
                    <a href="index.php"><span class="glyphicon glyphicon-log-out"></span><b> Logout</b></a>
                  </li>
                </ul>
              </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <div class="container-fluid" style="background-color: #00c853; padding-top: 50px; padding-bottom: 20px;">
      <div class="row">
        <!--Banner Main-->
        <div class="col-md-offset-1 col-md-10">
          <div class="row">
            <div class="col-md-12" style="font-family:myFirstFont;">
                <br />
                  <div class="well" style="background-color: white;">
                  <div class="row">
                    <div class="col-lg-4" style="padding-top:15px;">
                      <a href="school_main.php"><img src="pictures/logo.jpg" class="img-responsive logo" alt="ECMI LOGO" /></a>
                    </div>
                    <div class="col-lg-8 text-center" style="padding-top: 15px;">
                        <h1>ECMI-Sons and Daughters of OFW Program Website</h1>               
                      <footer>
                        <p style="font-size:17px;">
                          The migrant is to be considered, not merely as an instrument of production but as a subject endowed with human dignity -Pope John Paul II
                        </p>
                      </footer>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <br><br>
        </div>
      </div>

	<?php

$qt1=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='1' ");
$qs1=mysqli_fetch_row($qt1);

$qt2=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='2' ");
$qs2=mysqli_fetch_row($qt2);

$qt3=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='3' ");
$qs3=mysqli_fetch_row($qt3);

$qt4=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='4' ");
$qs4=mysqli_fetch_row($qt4);

$qt5=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='5' ");
$qs5=mysqli_fetch_row($qt5);

$qt6=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='6' ");
$qs6=mysqli_fetch_row($qt6);

$qt7=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='7' ");
$qs7=mysqli_fetch_row($qt7);

$qt8=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='8' ");
$qs8=mysqli_fetch_row($qt8);

$qt9=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='9' ");
$qs9=mysqli_fetch_row($qt9);

$sql_ans=mysqli_query($db,"SELECT * FROM pre_test INNER JOIN student ON pre_test.stud_id=student.stud_id  WHERE pre_test.stud_id='$id' ");
$ans=mysqli_fetch_row($sql_ans);


?>







		<div class="row">
			<div class="col-sm-offset-1 col-sm-10">
				<div class="well">
					<div class="row">
        				<div class="col-sm-5">
        				<h3 align="left">Feedback</h3><br/>
        				</div>
        			</div>
        			<div class="row">
        			<div class="col-sm-offset-1 col-sm-10">
		<form method="post">
					<input type="hidden" name="fromEmail" value="<?php echo $email;?>" required/>
			<div class="row">
				<div class="col-sm-3">
					<h4>Email of Receiver:</h4>
				</div>
				<div class="col-sm-8">
					<input type="email" name="sendTo" value="<?php echo $em[0];?>" required/>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<h4>Name of Receiver:</h4>
				</div>
				<div class="col-sm-8">
				<input type="text" name="fromName" value="Parent of <?php echo $em[1]." ".$em[2];?>" required/>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<h4>Subject of Email:</h4>
				</div>
				<div class="col-sm-8">
				<input type="text" name="subject" value="Pre-Awareness Test Results" required/>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<h4>Compose:</h4>
				</div>
				<div class="col-sm-8">
				<textarea class="form-control" name="message" rows="9" required/>Good day! Mr/Mrs. <?php echo $em[2].". ";?>We have information regarding the results of your son/daughter's recent Pre-Awareness test results. 

        1. <?php echo $qs1[0];  ?>
           
           Answer:<?php echo $ans[2]; ?> 
        
        2. <?php echo $qs2[0];  ?>

           Answer:

        
        3. <?php echo $qs3[0];  ?>

           Answer:

        
        4. <?php echo $qs4[0];  ?>

           Answer:

        
        5. <?php echo $qs5[0];  ?>

           Answer:

        
        6. <?php echo $qs6[0];  ?>

           Answer:

        
        7. <?php echo $qs7[0];  ?>

           Answer:

        
        8. <?php echo $qs8[0];  ?>

           Answer:

        
        9. <?php echo $qs9[0];  ?>

           Answer: 

       </textarea>
        </div>
			</div>
			
			<div class="row">
			<div class="col-md-offset-4 col-md-4" style="padding-top: 50px;">
			<input class="btn btn-lg btn-success" type="submit" name="sendEmail" value="Submit">
			</div>
			</div>
			</div>
			</div>

	</div>
	</div>	
		
		</form>
	</body>
</html>