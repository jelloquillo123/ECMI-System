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
                <li>
                  <p class="navbar-text" style="color: #e5e5e5;"><?php echo $scn[0]; ?></p>
                </li>                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $coor_name; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="school_changepass.php"><i class="fa fa-fw fa-gear"></i> Change Password</a>
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

                <div class="row" id="body-content">
                    <div class="col-lg-12">
                        <div class="well">
                            <div class="row">   
                               <div class="col-lg-6">
                                    <h2>List of Students</h2>
                                    <h4>Total number of students = <?php echo $stud_total[0]; ?></h4>
                               </div> 
                               <div class="col-lg-6" style="text-align: right; padding-bottom: 20px;">
                                    <a href="school_student_add.php" class="btn btn-primary"> Add Student <span class="glyphicon glyphicon-plus"></span></a>
                               </div>
                            </div>  
                                
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-8 " style="padding-bottom: 20px;">
                                  <select name="glevels" id="glevels" class="form-control input-md">
                                    <option value="">All Grade Levels</option>
                                    <?php
                                    $i=1;
                                    while($i<=11){
                                      echo '
                                      <option value="'.$i.'">Grade '.$i.'</option>
                                      ';
                                      $i=$i+1;
                                    }
                                    ?>
                                  </select>
                                
                                </div>  
                            </div>

                               
                            

                            <!--Start of Table Div-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive" id="show2"></div>            
                                    <div class="table-responsive" id="show">
                                        <table class="table table-hover" data-sorting="true" data-paging="true" data-filtering="true" id="studenttb" style="background-color:#fff;">
                                            <thead>
                                                <th>Student ID</th>
                                                <th>Last Name</th>
                                                <th data-breakpoints="xs sm">First Name</th>
                                                <th data-breakpoints="xs sm md">Middle Name</th>
                                                <th data-breakpoints="xs">Grade Level</th>
                                                <th data-breakpoints="xs sm md">Gender</th>
                                                <th data-breakpoints="xs md sm">Age</th>
                                                <th data-breakpoints="lg md sm xs">Parents Email</th>
                                                <th data-breakpoints="xs sm">Test status</th>
                                                <th>Feedback</th>
                                                <th>Profile</th>
                                                <th>Delete</th>
                                                <th>Reset</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                  <?php
                                                  while($stu=mysqli_fetch_row($stud)){
                                                    ?>
                                                    <th><?php echo $stu[0]; ?></th>
                                                    <td><?php echo $stu[1]; ?></td>
                                                    <td><?php echo $stu[2]; ?></td>
                                                    <td><?php echo $stu[3]; ?></td>
                                                    <td><?php echo $stu[4]; ?></td>
                                                    <td><?php echo $stu[5]; ?></td>
                                                    <td><?php echo $stu[6]; ?></td>
                                                    <td><?php echo $stu[8]; ?></td>
                                                    <td><?php echo $stu[9]; ?></td>

                                                    <td align="center"><?php echo "<a href='school_student_feedback.php?id=$stu[0]'>";?><button class="btn btn-primary btn-md" name="feedback" title="Feedback"><span class="glyphicon glyphicon-comment"></span></button></a></td>

                                                    <td><p data-placement="top" data-toggle="tooltip" title="Profile"><?php echo "<a href='edit_students_school.php?id=$stu[0]'>";?>
                                                      <button class="btn btn-success btn-md" data-title="Edit" data-toggle="modal" data-target="#edit" name="edit"><span class="glyphicon glyphicon-user"></span></button></a></p></td>

                                                    <td>
                                                    <button onclick="del(<?php echo $stu[0];?>)" class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" name="delete" title="Delete"><span class="glyphicon glyphicon-trash"></span></button></td>

                                                    <td><?php echo "<a href='resetpw.php?id=$stu[7]'>";?>
                                                    <button class="btn btn-warning btn-md" data-title="passreset" data-toggle="modal" data-target="#passreset" name="passreset" title="Reset"><span class="glyphicon glyphicon-refresh"></span></button></a></td>
                                                </tr><?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="text-align: center;">
                                        <a href="print_school_students.php" class="btn btn-primary">Print <span class="glyphicon glyphicon-print"></span></a>
                                    </div>
                                </div>
                            </div>
                        <!--end of table div-->


                        </div>
                        <!--End of Well-->
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

    <script src="js/footable.js"></script>
    <script type="text/javascript">
      $("#studenttb").footable();
    </script>
    <script language="javascript">
      function del(x) {
        var delo = confirm('Are you sure you want to delete?');
        if(delo == true)
        {
          window.location.href="delete_school_students.php?id=" +x+" ";
        }

      }
    </script>
    <script>  
     $(document).ready(function(){  
      $('#glevels').change(function(){  
       var g_level = $(this).val();  
       $.ajax({  
        url:"glevels.php",  
        method:"POST",  
        data:{glevels:g_level},  
        success:function(data){
          $('#show').hide();  
         $('#show2').html(data);  
       }  
     });  
     });  
    });  
    </script>

</body>

</html>