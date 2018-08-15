<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'connect.php';
require 'school_studentsdb.php';
require 'school_maindb.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SDOFP-ECMI</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="css/sdofp-styles.css">

    <link href="css/footable.bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: #76ff03;">School</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $coor_name; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <?php echo"<a href='school_changepass.php?id=$accid[0]'>"?><i class="fa fa-fw fa-gear"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="school_students.php"><i class="glyphicon glyphicon-user"></i> Students</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#reports"><i class="fa fa-fw fa-bar-chart-o"></i>  Reports <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="reports" class="collapse">
                            <li>
                                <a href="school_baseline_reports.php">Baseline Data Summary Results</a>
                            </li>
                            <li>
                                <a href="school_pat_reports.php">Pre Awareness Test Summary Results</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>



        <div id="main-body">

            <div class="container-fluid">
                <!-- /.row -->

                <div class="row" style="padding-top: 40px;">
                  <div class="col-lg-2">
                    <a href="school_students.php" class="btn btn-primary"><span class="glyphicon glyphicon-menu-left"></span> Return to List</a>
                  </div>
                </div>


                <div class="row" id="body-content">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="well">
                            <h2 style="padding-bottom: 40px;">Add Student</h2>
                          <form onsubmit="return confirm('Are you sure you want to add this student?');" class="form-horizontal" method="POST"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-group row">
                              <label class="control-label col-sm-3" for="studnum">Student Number:</label>
                              <div class="col-sm-8">
                                <input type="number" class="form-control" id="studnum" name="studnum" value="<?php echo $n0; ?>" required>
                                <span class="error_message"><?php echo $error_message; ?></span>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="control-label col-sm-3" for="lname">Last Name:</label>
                              <div class="col-sm-8">
                                <input type="char" class="form-control" id="lname" name="lname" value="<?php echo $n1; ?>" required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="control-label col-sm-3" for="fname">First Name:</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $n2; ?>"required>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="control-label col-sm-3" for="mname">Middle Name:</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $n3; ?>" required>
                              </div>
                            </div>

                            <div class="form-group row">
                            <label class="control-label col-sm-3" for="bday">Birthdate:</label>
                                <div class="col-sm-8">
                                  <input type="date" class="form-control" id="bday" name="bday" value="<?php echo $n8; ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                            <label class="control-label col-sm-3" for="email">Parents Email:</label>
                                <div class="col-sm-8">
                                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $n9; ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-2 col-md-3 col-sm-offset-2 col-sm-3 ">
                                    <div class="form-group">
                                      <label for="glevel">Grade Level:</label>
                                      <select name="glevel" id="glevel" class="form-control input-md" required>
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
                                <div class="col-md-offset-2 col-md-3 col-sm-offset-2 col-sm-3">
                                    <div class="form-group">
                                      <label for="gender">Gender:</label>
                                      <select name="gender" id="gender" class="form-control input-md">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      </select>
                                    </div>
                                </div>                              
                            </div>
                            <div class="form-group" style="text-align: center;">
                                <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Add Student">                                
                            </div>
                            <h6><b>Note: <br>Default Username is Student Number<br>Default Password: sdofp-ecmi </b></h6>
                            
                          </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
