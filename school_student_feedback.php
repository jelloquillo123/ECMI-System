<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'school_authentication.php';
require 'connect.php';
require 'school_maindb.php';
require 'feedbackdb.php';
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

            <div class="container-fluid" style="height: 100%; min-height: 610px;">

                <div class="row" style="padding-top: 40px;">
                  <div class="col-lg-2">
                    <a href="school_students.php" class="btn btn-primary"><span class="glyphicon glyphicon-menu-left"></span> Return to List</a>
                  </div>
                </div>                
                <!-- /.row -->

                <div class="row" id="body-content">
                    <div class="col-lg-offset-1 col-lg-10">
                        <div class="well">
                            <div class="row">   
                               <div class="col-lg-6">
                                    <h2 style="padding-bottom: 20px;">Feedback</h2>

                               </div> 
                            </div>  
                                
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST">
                                        <input type="hidden" name="fromEmail" value="<?php echo $email;?>" required/>

                                        <div class="form-group row">
                                          <label class="control-label col-lg-3" for="sendTo">Email of Receiver:</label>
                                          <div class="col-lg-8">
                                            <input type="email" class="form-control" id="sendTo" name="sendTo" value="<?php echo $email;?>" required>
                                          </div>
                                        </div>

                                        <div class="form-group row">
                                          <label class="control-label col-lg-3" for="fromName">Name of Receiver:</label>
                                          <div class="col-lg-8">
                                            <input type="text" class="form-control" id="fromName" name="fromName" value="Parent of <?php echo $em[1]." ".$em[2];?>" required>
                                          </div>
                                        </div>

                                        <div class="form-group row">
                                          <label class="control-label col-lg-3" for="subject">Subject of Email:</label>
                                          <div class="col-lg-8">
                                            <input type="text" class="form-control" id="subject" name="subject" value="Pre-Awareness Test Results" required>
                                          </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4>Compose:</h4>
                                            </div>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="message" rows="9" required/>
    Good day! Mr/Mrs. <?php echo $em[2].". ";?>We have information regarding the results of your son/daughter's recent Pre-Awareness test results. 

    1. <?php echo $qs1[0];  ?>
       
       Answer:<?php echo $feed1[0]; ?> 
    
    2. <?php echo $qs2[0];  ?>

       Answer:<?php echo $feed2[0]; ?> 

    
    3. <?php echo $qs3[0];  ?>

       Answer:<?php echo $feed3[0]; ?>

    
    4. <?php echo $qs4[0];  ?>

       Answer:<?php echo $feed4[0]; ?>

    
    5. <?php echo $qs5[0];  ?>

       Answer:<?php echo $feed5[0]; ?>

    
    6. <?php echo $qs6[0];  ?>

       Answer:<?php echo $feed6[0]; ?>

    
    7. <?php echo $qs7[0];  ?>

       Answer:<?php echo $feed7[0]; ?>

    
    8. <?php echo $qs8[0];  ?>

       Answer:<?php echo $feed8[0]; ?>

    
    9. <?php echo $qs9[0];  ?>

    Answer: <?php echo $feed9[0]; ?> 
                                                </textarea>
                                            </div>
                                        </div>
                                        <div style="text-align: center; padding-top: 30px;">
                                            <input type="submit" name="sendEmail" class="btn btn-primary btn-lg" value="Submit">
                                        </div>
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
