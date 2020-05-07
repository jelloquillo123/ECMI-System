<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'admin_authentication.php';
require 'connect.php';
require 'admin_createdb.php';
require 'admin_dsc.php';
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

    <!-- Morris Charts CSS -->
   <link href="css/footable.bootstrap.min.css" rel="stylesheet">

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
          color: red;
          font-size: 15px;
          font-family: myFirstFont;
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
                <a class="navbar-brand" style="color: #76ff03;">Administrator</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li style="padding-bottom: 5px;">
                            <?php echo"<a href='admin_changepass.php?id=$acc_id'>"?><i class="fa fa-fw fa-gear"></i> Change Password</a>
                        </li>
                        <li>
                            <a href="admin_create.php"><i class="fa fa-plus"></i> Create Administrator</a>
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
                    <li>
                        <a href="admin_list.php"><i class=" fa fa-dashboard"></i> Administrator</a>
                    </li>                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>



        <div id="main-body">

            <div class="container-fluid" style="height: 100%; min-height: 610px;">


                <!-- /.row -->
                <div class="row" style="padding-top: 40px;">
                  <div class="col-lg-2">
                    <a href="admin_list.php" class="btn btn-primary"><span class="glyphicon glyphicon-menu-left"></span> Return to List</a>
                  </div>
                </div>

                <div class="row" id="body-content">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="well">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form onsubmit="return confirm('Are you sure you want to add this Administrator?');" class="form-horizontal" method="POST">

                                    <h2 style="padding-bottom: 20px;">Signup Admin Account</h2>
                                    <div class="form-group">
                                        <label class="control-label col-lg-3" for="coor_fname">First Name:</label>
                                        <div class="col-lg-7 col-sm-5">
                                            <input type="text" class="form-control" id="coor_fname" name="fname" required>
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="coor_mname">Middle Name:</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" id="coor_mname" name="mname" required>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="coor_lname">Last Name:</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" id="coor_lname" name="lname" required>
                                        </div>
                                    </div>                                     
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="username">Username:</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" id="username" name="uname" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <br />
                                        <div style="text-align: center;">
                                            <input type="submit" class="btn btn-primary btn-lg" name="submit" value = "Submit">
                                        </div>
                                    </div>
                                    <h6><b>Note: <br>Default Password: sdofp_admin123 </b></h6>
                                 </form>
                                </div>
                            </div>             
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
