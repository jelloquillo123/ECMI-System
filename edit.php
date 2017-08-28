<?php
  session_start();
  require 'connect.php';

$id=$_GET['id'];
if(isset($_POST['submit']))
{
  $u1 = $_POST['ulname'];
  $u2 = $_POST['ufname'];
  $u3 = $_POST['umname'];
  $u4 = $_POST['uglevel'];
  $u5 = $_POST['ugender'];         
  $u6 = $_POST['uage'];
  mysqli_query($db,"UPDATE student 
    SET lname='$u1', fname='$u2', mname='$u3', g_level='$u4', gender='$u5', age='$u6'
    WHERE stud_id='$id'");
        echo "<script>
        alert('Successfully Updated.');
        window.location.href='school_students.php';
        </script>";
}

?>
<?php
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM student WHERE stud_id=$id");
 
while($res = mysqli_fetch_array($result))
{
$fname=$res[1];
$mname=$res[2];
$lname=$res[3];
$g_level=$res[4];
$gender=$res[6];
$age=$res[7];
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

    <title>EDIT STUDENT</title>

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

  <div class="container-fluid green">
    <div class="row">
    <div class="col-md-offset-3 col-md-6 col-md-offset-3">
      <div class="well" align="center">
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
   <div class="form-group">
    <label class="control-label col-sm-3" for="age">Age:</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="age" name="uage" min="4" max="20" maxlength="2" value="<?php echo $age ?>" required>
    </div>
  </div>

<div class="col-md-offset-2 col-md-3">
          <div class="form-group">
            <label for="glevel">Grade Level:</label>
            <select name="uglevel" id="glevel" class="form-control input-md" required>
            <option value="<?php echo $g_level; ?>">Grade <?php echo $g_level; ?></option>
            <?php
            $num=1;
            for($i=0;$i<10;$i++){
            ?>
            <option value="<?php echo $num; ?>">Grade <?php echo $num; ?></option>
            <?php
            $num=$num+1;
            }
            ?>
            </select>
          </div>
    </div>

    <div class="col-md-offset-2 col-md-3">
          <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="ugender" id="gender" class="form-control input-md" required>
            <option value="<?php echo $gender ?>"><?php echo $gender ?></option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
          </div>
    </div>

    <div class="row">
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4" align="middle">
    <br/> 
    <input type="submit" class="btn btn-primary btn-lg" align="center" name="submit" align="center" value="Edit Student">
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
