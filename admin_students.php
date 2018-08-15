<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'connect.php';
require 'admin_studentsdb.php';
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

<body  style="font-family: sans-serif;">

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
                    <li>
                        <a href="admin_schools_list.php"><i class="fa fa-graduation-cap"></i> Schools </a>
                    </li>
                    <li>
                        <a href="admin_diocese_list.php"><i class="fa fa-table"></i> Diocese</a>
                    </li>
                    <li class="active">
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
                    <div class="col-lg-12">
                        <div class="well">
                            <div class="row">
                                
                                <div class="col-md-5">
                                    <div style="padding-bottom: 20px;">
                                      <h2>List of Students</h2>
                                      <h4>Total number of students = <?php echo $total_student[0]; ?></h4>        
                                    </div>
                                    <div class="col-md-4">
                                      <select name="syear" id="syear" class="form-control input-md x">
                                          <option value=''>All Years</option>
                                          <option value=2017>2017</option>
                                          <option value=2018>2018</option>
                                      </select>
                                    
                                    </div>
                                    <div class="col-md-4">
                                      <select name="glevel" id="glevel" class="form-control input-md x">
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
                                    
                                    <div class="col-md-4">
                                      <select name="status" id="status" class="form-control input-md x">
                                          <option value="">All </option>
                                            <option value="taken">Taken</option>
                                            <option value="nottaken">Not taken</option>
                                      </select> 
                                    </div>
                                </div>
                            </div>

                            <!--Start of Table Div-->
                            <div class="row">
                                <div class="col-lg-12">            
                                    <div class="table-responsive" id="show">
                                        <table class="table table-hover tablecenter" data-paging="true" data-sorting="true" data-filtering="true" id="studenttb" style="background-color:#fff;">
                                          <thead>
                                            <tr>
                                              <th data-breakpoints="xs sm md lg">Student ID</th>
                                              <th>Last Name</th>
                                              <th>First Name</th>
                                              <th data-breakpoints="xs">Middle Name</th>
                                              <th data-breakpoints="xs sm">School</th>
                                              <th>Grade Level</th>
                                              <th data-breakpoints="xs">Test Status</th>
                                              <th data-breakpoints="xs sm md">Gender</th>
                                              <th data-breakpoints="xs sm md">Age</th>
                                              <th data-breakpoints="xs sm md lg">Username</th>    
                                              <th>Profile</th>
                                              <th>Delete</th>
                                            </tr>
                                          </thead>
                                          <tbody id="show">
                                            <tr>
                                              <?php
                                                while($stud=mysqli_fetch_row($to)){
                                                  ?>
                                                  <th><?php echo $stud[0];?></th>
                                                  <td><?php echo $stud[1];?></td>
                                                  <td><?php echo $stud[2];?></td>
                                                  <td><?php echo $stud[3];?></td>
                                                  <td><?php echo $stud[4];?></td>
                                                  <td><?php echo $stud[5];?></td>
                                                  <td><?php echo $stud[9] ?></td>
                                                  <td><?php echo $stud[6];?></td>
                                                  <td><?php echo $stud[7];?></td>
                                                  <td><?php echo $stud[8];?></td>                     
                                                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a href='edit_students_admin.php?id=<?php echo $stud[0];?>'>
                                                      <button class="btn btn-success btn-md" data-title="Edit" data-toggle="modal" data-target="#edit" name="edit"><span class="glyphicon glyphicon-user"></span></button></a></p></td>
                                                    <td>
                                                      <button onclick="del(<?php echo $stud[0];?>)" class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" name="delete" title="Delete"><span class="glyphicon glyphicon-trash"></span></button></td>
                                                
                                                 </tr>
                                                    <?php
                                                    
                                                  }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <!--end of table div-->

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

          <script src="js/footable.min.js"></script>
          <script type="text/javascript">
            $("#studenttb").footable();
          </script>
          <script language="javascript">
            function del(x) {
              var delo = confirm('Are you sure you want to delete?');
              if(delo == true)
              {
                window.location.href="delete_admin_students.php?id=" +x+" ";
              }

            }

            $(document).on("click", ".move-studid", function () {
             var myStudId = $(this).data('id');
             $(".modal-body #stud_id").val( myBookId );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
   });
 </script>
    
    <script>  
 $(document).ready(function(){  
      $('#glevel').change(function(){  
           var g_level = $(this).val();
           var year = $('#syear').val();
           var status = $('#status').val();
           $.ajax({  
                url:"glevel.php",  
                method:"POST",  
                data:{glevel:g_level, year:year, status:status},  
                success:function(data){  
                     $('#show').html(data);  
                }  
           });  
      });  
 });  
 </script>
 <script>  
 $(document).ready(function(){  
      $('#syear').change(function(){  
           var g_level = $('#glevel').val();
           var year = $(this).val();
           var status = $('#status').val();
           $.ajax({  
                url:"glevel.php",  
                method:"POST",  
                data:{glevel:g_level, year:year, status:status},  
                success:function(data){  
                     $('#show').html(data);  
                }  
           });  
      });  
 });  
 </script>

<script>  
 $(document).ready(function(){  
      $('#status').change(function(){  
           var g_level = $('#glevel').val();
           var year = $('#syear').val();
           var status = $(this).val();
           $.ajax({  
                url:"glevel.php",  
                method:"POST",  
                data:{glevel:g_level, year:year, status:status},  
                success:function(data){  
                     $('#show').html(data);  
                }  
           });  
      });  
 });  
 </script>

</body>

</html>
