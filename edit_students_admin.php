<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'admin_authentication.php';
require 'connect.php';
require 'editdb_admin.php';
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
                    <a href="admin_students.php" class="btn btn-primary"><span class="glyphicon glyphicon-menu-left"></span> Return to List</a>
                  </div>
                </div>

                <div class="row" id="body-content">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="well">
                            <div class="row">
                                
                                <div class="col-md-5">
                                    <div style="padding-bottom: 20px;">
                                      <h2>Edit Student</h2>
                                    </div>
                                    
                                </div>
                            </div>

                            <form class="form-horizontal" method="POST">

                              <div class="form-group">
                                <label class="control-label col-lg-3" for="lname">Last Name:</label>
                                <div class="col-lg-8">
                                  <input type="text" name="ulname" class="form-control" id="lname" value="<?php echo $lname; ?>" required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-lg-3" for="fname">First Name:</label>
                                <div class="col-lg-8">
                                  <input type="text" name="ufname" class="form-control" id="fname" value="<?php echo $fname; ?>" required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-lg-3" for="mname">Middle Name:</label>
                                <div class="col-lg-8">
                                  <input type="text" name="umname" class="form-control" id="mname" value="<?php echo $mname; ?>" required>
                                </div>
                              </div>

                              <div class="row">        
                                <div class=" col-lg-offset-1 col-lg-3">
                                    <div class="form-group">
                                      <label for="glevel">Grade Level:</label>
                                      <select name="uglevel" id="glevel" class="form-control input-md" required>
                                      <?php
                                      $num=1;
                                      for($i=0;$i<10;$i++){
                                          if($num == $g_level){
                                      ?>
                                      <option value="<?php echo $num; ?>" selected>Grade <?php echo $num; ?></option>
                                      <?php
                                          }
                                      else{
                                      ?>
                                       <option value="<?php echo $num; ?>">Grade <?php echo $num; ?></option>
                                      <?php
                                      }
                                      $num=$num+1;
                                      }
                                      ?>
                                      </select>
                                    </div>
                                </div> 

                                <div class="col-lg-offset-3 col-lg-4">
                                    <div class="form-group">
                                      <label for="gender">Gender:</label>
                                      <select name="ugender" id="gender" class="form-control input-md" required>
                                     <option value="Male" <?php if($gender == 'Male') echo 'selected'; ?>>Male</option>
                                      <option value="Female" <?php if($gender == 'Female') echo 'selected'; ?>>Female</option>
                                      </select>
                                    </div>
                                </div>
                              </div>

      
                           

                              <div class="row" style="padding-top: 20px;">
                                <div class="col-lg-12" style="text-align: center;">
                                  <input onclick="confirm('Are you sure you want to edit this student?');" type="submit" name="name_submit" class="btn btn-lg btn-primary" value="Edit Student">
                                </div>
                              </div>                             

                            </form>


                        </div>
                    </div>
                </div>

                <?php
                if ($t_stat == "Not taken"):
                ?>
                <div class="row" style="display: none;">
                  <div class="col-lg-8 col-lg-offset-2">
                    <div class="well">
                      <div class="row">
                        <div class="col-md-5" style="padding-bottom: 20px;">
                          <h2>Student PAT Result</h2>
                        </div>                       
                      </div>
                      <div class="row">
                        <div class="col-lg-10">
                          <p align="left" style="font-size:18px;"> 1.

                          <?php
                          echo $qs1[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed1[0]; ?> 
                          </p>
                          <br />
                          <p align="left" style="font-size:18px;">
                            2.  <?php
                          echo $qs2[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed2[0]; ?> 
                          </p>
                          <br />
                          <p align="left" style="font-size:18px;">
                          3. <?php
                          echo $qs3[0];

                          ?></p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed3[0]; ?> 
                          </p>
                          <br />
                          <p align="left" style="font-size:18px;">
                          4.<?php
                          echo $qs4[0];

                          ?></p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed4[0]; ?> 
                          </p>
                          <br />
                          <p align="left" style="font-size:18px;">
                          5. <?php
                          echo $qs5[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed5[0]; ?> 
                          </p>
                          <br />

                          <p align="left" style="font-size:18px;">
                          6.  <?php
                          echo $qs6[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed6[0]; ?> 
                          </p>
                          <br />
                          <p align="left" style="font-size:18px;">
                          7. <?php
                          echo $qs7[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed7[0]; ?> 
                          </p>
                          <p align="left" style="font-size:18px;">
                          8. <?php
                          echo $qs8[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed8[0]; ?> 
                          </p>
                          <p align="left" style="font-size:18px;">
                          9. <?php
                          echo $qs9[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed9[0]; ?> 
                          </p>                          
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <?php
                else :
                ?>
                <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                    <div class="well">
                      <div class="row">
                        <div class="col-md-5" style="padding-bottom: 20px;">
                          <h2>Student PAT Result</h2>
                        </div>                       
                      </div>
                      <div class="row">
                        <div class="col-lg-10">
                          <p align="left" style="font-size:18px;"> 1.

                          <?php
                          echo $qs1[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed1[0]; ?> 
                          </p>
                          <br />
                          <p align="left" style="font-size:18px;">
                            2.  <?php
                          echo $qs2[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed2[0]; ?> 
                          </p>
                          <br />
                          <p align="left" style="font-size:18px;">
                          3. <?php
                          echo $qs3[0];

                          ?></p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed3[0]; ?> 
                          </p>
                          <br />
                          <p align="left" style="font-size:18px;">
                          4.<?php
                          echo $qs4[0];

                          ?></p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed4[0]; ?> 
                          </p>
                          <br />
                          <p align="left" style="font-size:18px;">
                          5. <?php
                          echo $qs5[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed5[0]; ?> 
                          </p>
                          <br />

                          <p align="left" style="font-size:18px;">
                          6.  <?php
                          echo $qs6[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed6[0]; ?> 
                          </p>
                          <br />
                          <p align="left" style="font-size:18px;">
                          7. <?php
                          echo $qs7[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed7[0]; ?> 
                          </p>
                          <p align="left" style="font-size:18px;">
                          8. <?php
                          echo $qs8[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed8[0]; ?> 
                          </p>
                          <p align="left" style="font-size:18px;">
                          9. <?php
                          echo $qs9[0];

                          ?>
                          </p>
                          <p align="left" style="font-size:18px; font-weight:bold;">
                              Answer: <?php echo $feed9[0]; ?> 
                          </p>                          
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <?php
                endif; 
                ?>

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