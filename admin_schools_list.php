<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'connect.php';
require 'admin_schoolsdb.php';
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
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Change Password</a>
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

            <div class="container-fluid">


                <!-- /.row -->

                <div class="row" id="body-content">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="well">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h2 style="padding-bottom: 20px;">List of Schools</h2>
                                </div>
                                <div class="col-lg-6" style="text-align: right; padding-bottom: 20px;">
                                    <a href="admin_schools_add.php" class="btn btn-primary"> Add School <span class="glyphicon glyphicon-plus"></span></a>
                                </div>
                            </div>
                            <div class="table-responsive">
                              <table class="table table-hover tablecenter" data-sorting="true" data-filtering="true" data-paging="true" id="schooltb" style="background-color:#fff;">
                                <thead>
                                  <tr>
                                    <th data-breakpoints="xs sm md lg">School ID</th>
                                    <th>School Name</th>
                                    <th data-breakpoints="xs sm" style="text-align: center;">Diocese</th>
                                    <th style="text-align: center;">Edit</th>
                                    <th style="text-align: center;">Delete</th>
                                    <th style="text-align: center;">Expand</th>
                                  </tr>  
                                </thead>
                                <?php 
                                while($sc=mysqli_fetch_row($scool)){
                                  ?>
                                  <tr>
                                    <th><?php echo $sc[0]?></th>
                                    <td><?php echo $sc[1]?></td>
                                    <td ><?php echo $sc[2]?></td>

                                      <td><button onclick="edit_sch(<?php echo $sc[0];?>)" class="btn btn-success btn-md" name="edit"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                                      <td><button onclick="del_sch(<?php echo $sc[0];?>)" class="btn btn-danger btn-md" name="delete" title="Delete"><span class="glyphicon glyphicon-trash"></span></button></td>
                                      <td><button onclick="expand_sch(<?php echo $sc[0];?>)" class="btn btn-info btn-md" name="expand"><span class="glyphicon glyphicon-new-window"></span></button></a></td>
                                      </tr>
                                      <?php
                                    }
                                    ?>
                              </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="text-align: center;">
                                    <a href="print_admin_schools.php" class="btn btn-primary"> Print <span class="glyphicon glyphicon-print"></span></a>
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

    <!-- FooTable JavaScript -->
      <script src="js/footable.min.js"></script>
      <script type="text/javascript">
        $("#schooltb").footable();
      </script>
      <script type="text/javascript">
        $("#diocesetb").footable();
      </script>

      
      <script language="javascript">
        function del_sch(x) {
          var delo = confirm('Are you sure you want to delete?');
          if(delo == true)
          {
            window.location.href="delete_school.php?id=" + x +"";
          }

        }
        
        function edit_sch(x) {
          window.location.href ="edit_school.php?id=" + x + "";
        }

        function expand_sch(x) {
          window.location.href = "admin_showsch.php?id=" + x + "";
        }

        function del_diocs(x){
          var delete_sure = confirm('Are you sure you want to delete?');
          if (delete_sure == true){
            window.location.href = "delete_diocese.php?id=" + x + "";
          }
          
        }


      </script>

</body>

</html>
