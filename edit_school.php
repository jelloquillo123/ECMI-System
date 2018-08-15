<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'connect.php';
require 'admin_schoolsdb.php';
require 'edit_schooldb.php';
require 'admin_maindb.php';
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

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/sdofp-styles.css">
    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="css/footable.bootstrap.min.css" rel="stylesheet">
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
                <a class="navbar-brand" style="color: #76ff03;">Administrator</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li style="padding-bottom: 5px;">
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Change Password</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-plus"></i> Create Administrator</a>
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
                        <a href="admin_schools_list.php"><i class="fa fa-graduation-cap"></i> Schools </a>
                    </li>
                    <li>
                        <a href="admin_diocese_list.php"><i class="fa fa-table"></i> Diocese</a>
                    </li>
                    <li>
                        <a href="admin_students.php"><i class="glyphicon glyphicon-user"></i> Students</a>
                    </li>
                    <li>
                        <a href="admin_questions.php"><i class="fa fa-list"></i> Questions</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#reports"><i class="fa fa-fw fa-bar-chart-o"></i>  Reports <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="reports" class="collapse">
                            <li>
                                <a href="admin_baseline_reports.php">Baseline Data Summary Results</a>
                            </li>

                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>



        <div id="main-body">

            <div class="container-fluid" >


                <!-- /.row -->
                <div class="row" style="padding-top: 40px;">
                  <div class="col-lg-2">
                    <a href="admin_schools_list.php" class="btn btn-primary"><span class="glyphicon glyphicon-menu-left"></span> Return to List</a>
                  </div>
                </div>

                <div class="row" id="body-content">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="well">
                        <h3 align="left" id="edit_header">Edit School</h3>
                          <form class="form-horizontal" method="POST">
                            <div class="form-group">
                              <label class="control-label col-lg-3" for="nsch">Name of School:</label>
                              <div class="col-lg-9">
                                <input type="text" class="form-control" id="nsch" name="nsch" value="<?php echo $nsc ?>" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-lg-3" for="diocese" id="dio_label">Diocese:</label>
                              <div class="col-lg-5">
                                <select name="cdio" id="diocese" class="form-control">
                                  <option value="<?php echo $dioid ?>"> Diocese of <?php echo $dionm?></option>
                                  <?php
                                  $i=1;
                                  while($dion=mysqli_fetch_row($dio)){
                                  ?>
                                  <option value="<?php echo $dion[0] ?>"> Diocese of <?php echo $dion[1]?></option>
                                  <?php
                                  $i=$i+1;
                                  }
                                  ?>
                                </select> 
                              </div>
                            </div>
                            <h4 align="center" id="coor_header">Coordinator</h4>
                            <div class="form-group">
                              <label class="control-label col-lg-3" for="coor_fname">First Name:</label>
                              <div class="col-lg-9">
                                <input type="text" class="form-control" id="coor_fname" name="cfname" value="<?php echo $fname ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-lg-3" for="coor_mname">Middle Name:</label>
                              <div class="col-lg-9">
                                <input type="text" class="form-control" id="coor_mname" name="cmname" value="<?php echo $mname ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-lg-3" for="coor_lname">Last Name:</label>
                              <div class="col-lg-9">
                                <input type="text" class="form-control" id="coor_lname" name="clname" value="<?php echo $lname ?>">
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="coor_cnum">Contact Number:</label>
                                <div class="col-lg-7">
                                    <input type="number" class="form-control" id="coor_cnum" name="coor_cnum" value="<?php echo $coor_cnum; ?>" required>
                                </div>
                            </div>   
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="coor_email">Email:</label>
                                <div class="col-lg-7">
                                    <input type="email" class="form-control" id="coor_email" name="coor_email" value="<?php echo $coor_email; ?>">
                                </div>
                            </div>                             
                            <div class="form-group">
                              <label class="control-label col-lg-3" for="username">Username:</label>
                              <div class="col-lg-9">
                                <input type="text" class="form-control" id="uname" name="cuname" value="<?php echo $usrnm ?>">
                              </div>
                            </div>
                            <div class="form-group" style="padding-top: 30px;">
                              <br />
                              <div class="col-lg-6" style="text-align: center;">
                              <input type="submit" class="btn btn-primary btn-lg" name="submit" value = "Edit School">
                              </div>
                              <div class="col-lg-6" style="text-align: center;">
                              <input type="submit" class="btn btn-primary btn-lg" name="reset_pass" value = "Reset Password">
                              </div>
                            </div>
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