<?php
  session_start();
  require 'connect.php';
  require 'editdb_sch.php';

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



    <div class="container-fluid" style="background-color: #00c853; padding-top: 20px; padding-bottom: 20px;">
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
          
        </div>
      </div>

  
    <div class="row" style="padding-top:20px; ">
    <div class="col-md-offset-3 col-md-6">
      <div class="well">
        <div class="row">
        <div class="col-sm-5">
        <h3 align="left">Edit Student</h3>
        </div>
        <div class="col-sm-offset-2 col-sm-5">
        </div>
        </div>
      <br />
  <form class="form-horizontal" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-3" for="lname">Last Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lname" name="ulname" value="<?php echo $lname ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="fname">First Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="fname" name="ufname" value="<?php echo $fname ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="mname">Middle Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="mname" name="umname" value="<?php echo $mname ?>" required>
    </div>
  </div>
  <!--<div class="form-group">
    <label class="control-label col-sm-3" for="uname">Username:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="uname" name="uuname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pword">Password:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="pword" name="upword">
    </div>
  </div>-->

<div class="col-md-offset-2 col-md-3">
          <div class="form-group">
            <label for="glevel">Grade Level:</label>
            <select name="uglevel" id="glevel" class="form-control input-md" required>
            <?php
            $num=1;
            for($i=0;$i<10;$i++){
                if($num == $g_level){
            ?>
            <option value="<?php echo $num; ?>" selected>Grade <?php echo $num; ?></option>
            <?php
                }
            else{
            ?>
             <option value="<?php echo $num; ?>">Grade <?php echo $num; ?></option>
            <?php
            }
            $num=$num+1;
            }
            ?>
            </select>
          </div>
    </div>

    <div class="row">
    <div class="col-md-offset-2 col-md-3">
          <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="ugender" id="gender" class="form-control input-md" required>
            <option value="Male" <?php if($gender == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if($gender == 'Female') echo 'selected'; ?>>Female</option>
            </select>
          </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-offset-4 col-md-4 ">
    <br/>
    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Edit Student">
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
  

    </div>
    
  

    

    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
</body>
</html>
