<?php
  session_start();
  require 'connect.php';

$dio=mysqli_query($db,"SELECT * FROM diocese ORDER BY diocese_name");
$scool=mysqli_query($db,"SELECT school.school_id,school.school_name,diocese.diocese_name 
       FROM school
       JOIN diocese
       ON school.diocese_id=diocese.diocese_id");
if(isset($_POST['submit']))
  {
    $s1 = $_POST['nschool'];
    $s2 = $_POST['diocese_name'];
    $s3 = $_POST['uname'];
    $s4 = $_POST['pword'];
    $s5 = $_POST['coor_fname'];
    $s6 = $_POST['coor_mname'];
    $s7 = $_POST['coor_lname'];
    $school=mysqli_query($db,"SELECT school_id from school");
   // $school1=mysqli_fetch_row($school);

    while($r=mysqli_fetch_assoc($school))
    {
      $schid=$r['school_id'];
    }

    $coord=mysqli_query($db,"SELECT account_id from account");
    //$coord1=mysqli_fetch_row($coord);

    while($s=mysqli_fetch_assoc($coord))
    {
      $coordid=$s['account_id'];
    }

    $schid=$schid+1;
    $coordid=$coordid+1;

     mysqli_query($db, "INSERT INTO school (school_name,diocese_id) 
       VALUES ('$s1','$s2')");
     mysqli_query($db,"INSERT INTO account (username,pword,user_id,account_id) 
       VALUES ('$s3','$s4','2','$coordid')");
     mysqli_query($db,"INSERT INTO coordinator (fname,mname,lname,school_id,account_id) 
       VALUES ('$s5','$s6','$s7','$schid','$coordid')" );
     header("Location:admin_schools.php");
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

    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css">
    <link href="css/dropdowns-enhancement.min.css" rel="stylesheet">

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
                <a class="navbar-brand" href="admin_main.php">Administrator</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                      <a href="admin_students.php">Students</a>
                  </li>
                  <li>
                      <a href="admin_questions.php">Questions</a>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  
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
<div class="container-fluid green">
<br>
<br>
<div class="row">
<div class="col-sm-12">
<div class="card-panel light-green lighten-5 z-depth-3">
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-pills justified" role="tablist">
    <li role="presentation" class="active"><a href="#div2" aria-controls="div2" role="tab" data-toggle="tab">Add School</a></li>
    <li role="presentation"><a href="#div3" aria-controls="div3" role="tab" data-toggle="tab">List of Students</a></li>
    
  </ul>

<!-- Tab panes -->
    <div class="tab-content ">
    <div role="tabpanel" class="tab-pane active light-green lighten-5" id="div2">
    <!--Table Results -->
    <div class="container-fluid light-green lighten-5" style="font-family:mySecondFont;" id="div2">
    
    <div class="row">
    <div class="col-sm-offset-2 col-sm-8">
      <div class="well" align="center">
        <div class="row" style="font-family: myFirstFont;">
        <div class="col-sm-12">
        <h3 align="left">Add Participating School</h3>
        </div>
        </div>
      <br />
  <form class="form-horizontal" method="POST">
  <h5 align="center">School</h5>
  <div class="form-group">
    <label class="control-label col-sm-3" for="school_name">Name of School:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="school_name" name="nschool">
    </div>
  </div>
    <label class="control-label col-sm-3">Diocese:</label>
    <div class="row">
  <div class="col-sm-3">
    <div class="btn-group">
  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" name="diocese">Diocese <span class="caret"></span>
  </button>
    <ul class="dropdown-menu scrollable-menu" role="menu">
    <?php
    $i=1;
    while($dion=mysqli_fetch_row($dio)){
    ?>
      <li><input type="radio" id="diocs_name<?php echo $i; ?>" name="diocese_name" value="<?php echo $dion[0]?>"><label for="diocs_name<?php echo $i; ?>">
      Diocese of <?php echo $dion[1]?></label></li>
      <?php
      $i=$i+1;
      }
      ?>
    </ul>
      <!-- Other items -->
  </div>
</div>
</div>
  <br/>
  <h5 align="center">Coordinator</h5>
  <div class="form-group">
    <label class="control-label col-sm-3" for="coor_fname">First Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="coor_fname" name="coor_fname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="coor_mname">Middle Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="coor_mname" name="coor_mname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="coor_lname">Last Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="coor_lname" name="coor_lname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="username">Username:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="username" name="uname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="pword">Password:</label>
    <div class="col-sm-9">
      <input type="Password" class="form-control" id="pword" name="pword">
    </div>
  </div>


    

  <div class="form-group">
    <br />
    <div class="col-sm-offset-2 col-sm-8">
    <input type="submit" class="btn btn-primary btn-lg green" align="center" name="submit" value = "Add School">
    </div>
  </div>
  </form>
    </div>
    </div>
    </div>
  </div>


</div>

<div role="tabpanel" class="tab-pane light-green lighten-5" id="div3">
<div class="container-fluid light-green lighten-5" style="font-family:mySecondFont;" id="div3">
    
    <div class="row">
    <div class="col-sm-12">
      <div class="well" align="center">
        <div class="row" style="font-family: myFirstFont;">
        <div class="col-sm-12">
        <h3 align="left">List of Participating Schools</h3>
        </div>
        </div>
      <br />

 <!-- Modal -->
  <div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-family: roboto;">Edit School</h4>
        </div>
        <div class="modal-body">
        <div class="container-fluid">
        <form class="form-horizontal" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-3" for="lname">School Name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="lname" name="ulname">
            </div>
          </div>
           <label class="control-label col-sm-3">Diocese:</label>
    <div class="row">
  <div class="col-sm-3">
    <div class="btn-group">
  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" name="diocese">Diocese <span class="caret"></span>
  </button>
    <ul class="dropdown-menu scrollable-menu" role="menu">
    <?php
    $i=1;
    while($dion=mysqli_fetch_row($dio)){
    ?>
      <li><input type="radio" id="diocs_name<?php echo $i; ?>" name="diocese_name" value="<?php echo $dion[0]?>"><label for="diocs_name<?php echo $i; ?>">
      Diocese of <?php echo $dion[1]?></label></li>
      <?php
      $i=$i+1;
      }
      ?>
      <!-- Other items -->
    </ul>
  </div>
</div>
</div>
  <br/>
        </div>
        <div class="modal-footer">
          <input type="submit" name="save" class="btn btn-lg btn-primary teal" align="center" value="Save">
          <button type="button" class="btn btn-default red" data-dismiss="modal">Close</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="table-responsive">
  <table class="table table-hover" style="background-color:#fff;">
  <tr>
    <th>School ID</th>
    <th>School Name</th>
    <th>Diocese</th>
  </tr>
<?php 
while($sc=mysqli_fetch_row($scool)){
?>
  <tr>
    <th><?php echo $sc[0]?></th>
    <td><?php echo $sc[1]?></td>
    <td><?php echo $sc[2]?></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn red btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>
<?php
  }
?>
</table>
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

    <!-- Dropdowns Enhancement -->
    <script src="js/dropdowns-enhancement.js"></script>

</body>

</html>
