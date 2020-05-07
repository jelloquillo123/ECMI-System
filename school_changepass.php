<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'school_authentication.php';
require 'connect.php';
require 'school_maindb.php';
require 'school_changepassdb.php';
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
    <style type="text/css">
      .error_message{
        color:red;
      }
    </style>

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
                <li>
                  <p class="navbar-text" style="color: #e5e5e5;"><?php echo $scn[0]; ?></p>
                </li>                
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
                    <li>
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

            <div class="container-fluid" style="height: 100%; min-height: 610px;">
                <!-- /.row -->
                <div class="row" style="padding-top: 100px;">
                  <div class="col-lg-offset-3 col-lg-6">
                    <div class="well">
                      <h4 align="left" style="padding-bottom: 20px;">Change Password</h4>
                      <form class="form-horizontal" method="POST">
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="opword">Old Password:</label>
                          <div class="col-sm-8">
                            <input type="Password" class="form-control" id="opword" name="opword" required>
                            <span class="error_message"><?php echo $error_message; ?></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="npword">New Password:</label>
                          <div class="col-sm-8">
                            <input type="Password" class="form-control" id="npword" name="npword" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="cpword">Confirm Password:</label>
                          <div class="col-sm-8">
                            <input type="Password" class="form-control" id="cpword" name="cpword" required>
                            <span class="error_message"><?php echo $error_message_same; ?></span>
                          </div>
                        </div>
                        <div style="text-align: center;">
                          <input type="submit" onclick="return confirm('Please confirm you want to change your password')" class="btn btn-primary" name="submit" value="Change Password">
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