<?php
    session_start();
    require 'connect.php';
$to=mysqli_query($db,"SELECT student.stud_id,student.lname,student.fname,student.mname,school.school_name,student.g_level,
student.gender,student.age,account.username,account.pword 
FROM student
JOIN school
ON student.school_id=school.school_id
JOIN account
ON student.account_id=account.account_id");
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
                      <a href="admin_schools.php">Schools</a>
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

    <!--Table Results -->

<div class="container-fluid green" style="font-family:mySecondFont;" id="div3">
    
    <div class="row">
    <div class="col-sm-12">
      <div class="well" align="center">
        <div class="row">
        <div class="col-sm-5" style="font-family: myFirstFont;">
        <h3 align="left">List of Students</h3>
        </div>
        <div class="col-sm-offset-5 col-sm-2">
        <a href="printry3.php"><button class="btn btn-primary" align="left"> Print</button></a>
        <!--Dropdown Sort -->
        <div class="dropdown">
  <br/><br/>
  <!--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort by
  <span class="caret"></span></button>
  -->
  <ul class="dropdown-menu">
  
    <li>School</li>
    <li>Diocese</li>
  </ul>
</div>
        </div>
        </div>
      <br />

<!-- Modal -->
  <div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-family: roboto;">Edit Student</h4>
        </div>
        <div class="modal-body">
        <div class="container-fluid">
        <form class="form-horizontal" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-3" for="stud_id">Student ID:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="stud_id" name="stud_id">
            </div>
          </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="lname">Last Name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="lname" name="lname">
            </div>
          </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="fname">First Name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="fname" name="fname">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="mname">Middle Name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="mname" name="mname">
            </div>
        </div>
        <div class="col-md-offset-2 col-md-3">
          <div class="form-group">
            <label for="glevel">Grade Level:</label>
            <select name="glevel" id="glevel" class="form-control input-md">
            <option value="1">Grade 1</option>
            <option value="2">Grade 2</option>
            <option value="3">Grade 3</option>
            <option value="4">Grade 4</option>
            <option value="5">Grade 5</option>
            <option value="6">Grade 6</option>
            <option value="7">Grade 7</option>
            <option value="8">Grade 8</option>
            <option value="9">Grade 9</option>
            <option value="10">Grade 10</option>
            </select>
          </div>
        </div>

        <div class="col-md-offset-2 col-md-3">
          <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" class="form-control input-md">
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
          </div>
        </div>
        <div class="row">
        <div class="col-md-offset-3 col-md-6 col-md-offset-3">
        <div class="form-group">
            <label class="control-label col-sm-3" for="age">Age:</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="age" name="age">
            </div>
        </div>
        </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="uname">Userame:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="uname" name="uname">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="pword">Password:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pword" name="pword">
            </div>
        </div>

        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-lg btn-primary teal" align="center" value="Save">
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
    <th>Student ID</th>
    <th>Last Name</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>School</th>
    <th>Grade Level</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Username</th>
    <th>Password</th>
  </tr>

  <tr>
  <?php
  while($to1=mysqli_fetch_row($to)){
  ?>
    <th><?php echo $to1[0];?></th>
    <td><?php echo $to1[1];?></td>
    <td><?php echo $to1[2];?></td>
    <td><?php echo $to1[3];?></td>
    <td><?php echo $to1[4];?></td>
    <td><?php echo $to1[5];?></td>
    <td><?php echo $to1[6];?></td>
    <td><?php echo $to1[7];?></td>
    <td><?php echo $to1[8];?></td>
    <td><?php echo $to1[9];?></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn red btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  </tr>
  <?php
    }
  ?>
  </tr>
</table>
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
