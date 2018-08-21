<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'admin_authentication.php';
require 'connect.php';
require 'admin_maindb.php';
require 'admin_listdb.php';
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
                    <li class="active">
                        <a href="admin_list.php"><i class=" fa fa-dashboard"></i> Administrator</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>



        <div id="main-body">

            <div class="container-fluid">


                <!-- /.row -->

                <div class="row" id="body-content" style="height: 100%; min-height: 610px;">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="well" >
                            <div class="row">
                                
                                <div class="col-lg-5">
                                    <div style="padding-bottom: 20px;">
                                      <h2>List of Administrators</h2>        
                                    </div>
                                </div>
                                <div class="col-lg-offset-1 col-lg-6" style="text-align: right; padding-bottom: 20px;">
                                    <a href="admin_create.php" class="btn btn-primary"> Create Administrator <span class="glyphicon glyphicon-plus"></span></a>
                                </div>                                
                            </div>

                            <!--Start of Table Div-->
                            <div class="row">
                                <div class="col-lg-12">            
                                    <div class="table-responsive" id="show">
                                        <table class="table table-hover tablecenter" data-paging="true" data-sorting="true" data-filtering="true" id="admintb" style="background-color:#fff;">
                                          <thead>
                                            <tr>
                                              <th data-breakpoints="xs sm md lg">Administrator ID</th>
                                              <th>Last Name</th>
                                              <th>First Name</th>
                                              <th data-breakpoints="xs">Middle Name</th>
                                              <th data-breakpoints="xs sm">Username</th>    
                                              <th>Edit</th>
                                              <th>Delete</th>
                                              <th>Reset</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <?php
                                                while($admin=mysqli_fetch_row($admin_name_res)){
                                                  ?>
                                                  <th><?php echo $admin[3];?></th>
                                                  <td><?php echo $admin[2];?></td>
                                                  <td><?php echo $admin[0];?></td>
                                                  <td><?php echo $admin[1];?></td>
                                                  <td><?php echo $admin[4];?></td>                     
                                                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a href='admin_edit.php?id=<?php echo $admin[3];?>'>
                                                      <button class="btn btn-success btn-md" data-title="Edit" data-toggle="modal" data-target="#edit" name="edit"><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                                                    <td>
                                                      <button onclick="del(<?php echo $admin[3];?>)" class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" name="delete" title="Delete"><span class="glyphicon glyphicon-trash"></span></button></td>
                                                    <td>
                                                    <button onclick="resetpw(<?php echo $admin[5]; ?>)" class="btn btn-warning btn-md" data-title="passreset" data-toggle="modal" data-target="#passreset" name="passreset" title="Reset"><span class="glyphicon glyphicon-refresh"></span></button></a></td>    
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
            $("#admintb").footable();
          </script>
          <script type="text/javascript">
              function resetpw(x){
                  var reset_confirm= confirm('Are you sure you want to reset the password of this Administrator?\n Default password: sdofp_admin123');
                  if (reset_confirm==true){
                    window.location.href="reset_password_admin.php?id=" +x+" ";   
                  }
              }
          </script>
          <script language="javascript">
            function del(x) {
              var delo = confirm('Are you sure you want to delete?');
              if(delo == true)
              {
                window.location.href="delete_admin.php?id=" +x+" ";
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
