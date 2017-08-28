<?php
  session_start();
  require 'connect.php';

$id=$_GET['id'];
if(isset($_POST['submit']))
{
    $u1 = $_POST['upword'];
    $u2 = $_POST['cpword'];
  if($u2==$u1)
  {
    mysqli_query($db,"UPDATE account 
    SET pword='$u1'
    WHERE account_id='$id'");
        echo "<script>
        alert('Successfully Changed Password.');
        window.location.href='school_students.php';
        </script>";
  }
  else{
    echo "<script>
    alert('Unmatched Password! Try Again.');
    </script>";
  }
}
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT student.account_id, account.pword FROM student 
  INNER JOIN account ON student.account_id=account.account_id WHERE account.account_id='$id'"); 
while($res = mysqli_fetch_array($result))
{
$acc=$res[0];
$pw=$res[1];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RESET PASSWORD</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--External CSS-->
    <link rel="stylesheet" href="stylesdbms.css">
    <link rel="stylesheet" href="css/materialize.min.css">

    <!-- Custom CSS -->
    <style>


    #div2{
    padding-top:50px;
    padding-bottom: 50px;
    background-color:#fff;
    }
    #well2{
      color:#000000;
    }
    #div3{
      padding-top:50px;
      padding-bottom: 50px;
      background-color:#fff;
      font-family: roboto;
    }

    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Navigation -->
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
                <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="school_report.php">Reports</a>
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
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    

  <div class="container-fluid green">
    <div class="row">
    <div class="col-md-offset-3 col-md-6 col-md-offset-3">
    <br><br>
      <div class="well" align="center">
        <div class="row">
        <div class="col-sm-12">
        <!--<h3 align="left">Reset Student Account</h3>-->
        </div>
        <div class="col-sm-offset-2 col-sm-5">
        </div>
        </div>
      <br />
  <form class="form-horizontal" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-3" for="pword">New Password:</label>
    <div class="col-sm-8">
      <input type="Password" class="form-control" id="pword" name="upword" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pword">Confirm Password:</label>
    <div class="col-sm-8">
      <input type="Password" class="form-control" id="pword" name="cpword" required>
    </div>
  </div>
   

    <div class="row">
    <div class="col-sm-offset-3 col-sm-4 col-sm-offset-4" align="middle">
    <br/> 
    <input type="submit" class="btn btn-primary btn-lg" align="center" name="submit" align="center" value="Change Password">
    </div>
    </div>
</div>
</form>
    </div>
    </div>
    </div>
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
