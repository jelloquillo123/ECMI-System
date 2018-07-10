<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'connect.php';
require 'admin_questionsdb.php';
require 'admin_maindb.php';
?>
DOCTYPE html>
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
                <a class="navbar-brand" style="color: #76ff03;" href="admin_dashboard.php">Administrator</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Change Password</a>
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
                        <a href="admin_dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="admin_schools_list.php"><i class="fa fa-graduation-cap"></i> Schools </a>
                    </li>
                    <li>
                        <a href="admin_diocese_list.php"><i class="fa fa-table"></i> Diocese</a>
                    </li>
                    <li>
                        <a href="admin_students.php"><i class="glyphicon glyphicon-user"></i> Students</a>
                    </li>
                    <li class="active">
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
                            <h2 style="padding-bottom: 40px;">Questions</h2>
                            <!--Grade Level and Submit button-->
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-inline">
                                <div class="row">
                                    <div class="col-lg-offset-8 col-lg-4">
                                      <div class="form-group">
                                          <label for="grdlvl">Grade Level</label>
                                          <select name="grdlvl" id="grde_lvl" class="form-control input-md">

                                          <option value=<?php echo $_POST['grdlvl']; ?>><?php echo 'Grade'." ".$_POST['grdlvl'];?></option>
                                          <option value="1">Grade 1</option>
                                          <option value="2">Grade 2</option>
                                          <option value="3">Grade 3</option>
                                          <option value="4">Grade 4</option>
                                          <option value="5">Grade 5</option>
                                          <option value="6">Grade 6</option>
                                          <option value="7">Grade 7</option>
                                          <option value="8">Grade 8</option>
                                          <option value="9">Grade 9</option>
                                          <option value="10">Grade 10</option>
                                          <option value="11">Grade 11</option>
                                          </select>
                                      </div>
                                      <input type="submit" class="btn btn-primary" name="submit" value="Select">   
                                    </div>   
                                </div>
                            </form>

                            <div class="row">
                                <div class="col-lg-12">
                                  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-inline">
                                    <div class="well">
                                      <div class="row">
                                        <div class="col-lg-10" id="question1" style="padding-top: 35px;">
                                          <div class="form-group">
                                            <label for="q1">1.</label><input type="text" size="80" class="form-control" id="q1" name="q1" value="<?php echo $qs1[0]; ?>"> <br>
                                            <div style="padding-left: 30px;">
                                              <label for="a1">a.</label><input type="text" class="form-control" id="a1" name="a1" value="<?php echo $qs1[1];?>"> <br>
                                        
                                              <label for="b1">b.</label><input type="text" class="form-control" id="b1" name="b1" value="<?php echo $qs1[2];?>"> <br>
                                           
                                              <label for="c1">c.</label><input type="text" class="form-control" id="c1" name="c1" value="<?php echo $qs1[3];?>"> <br>
                                              
                                              <label for="d1">d.</label><input type="text" class="form-control" id="d1" name="d1" value="<?php echo $qs1[4];?>"> <br>   
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-10" id="question2" style="padding-top: 35px;">
                                          <div class="form-group">
                                            <label for="q2">2.</label><input type="text" size="80" class="form-control" id="q2" name="q2" value="<?php echo $qs2[0]; ?>"> <br>
                                            <div style="padding-left: 30px;">
                                              <label for="a2">a.</label><input type="text" class="form-control" id="a2" name="a2" value="<?php echo $qs2[1];?>"> <br>
                                        
                                              <label for="b2">b.</label><input type="text" class="form-control" id="b2" name="b2" value="<?php echo $qs2[2];?>"> <br>
                                           
                                              <label for="c2">c.</label><input type="text" class="form-control" id="c2" name="c2" value="<?php echo $qs2[3];?>"> <br>
                                              
                                              <label for="d2">d.</label><input type="text" class="form-control" id="d2" name="d2" value="<?php echo $qs2[4];?>"> <br>   
                                            </div>
                                          </div>
                                        </div>

                                         <div class="col-lg-10" id="question3" style="padding-top: 35px;">
                                          <div class="form-group">
                                            <label for="q3">3.</label><input type="text" size="80" class="form-control" id="q3" name="q3" value="<?php echo $qs3[0]; ?>"> <br>
                                            <div style="padding-left: 30px;">
                                              <label for="a3">a.</label><input type="text" class="form-control" id="a3" name="a3" value="<?php echo $qs3[1];?>"> <br>
                                        
                                              <label for="b3">b.</label><input type="text" class="form-control" id="b3" name="b3" value="<?php echo $qs3[2];?>"> <br>
                                           
                                              <label for="c3">c.</label><input type="text" class="form-control" id="c3" name="c3" value="<?php echo $qs3[3];?>"> <br>
                                              
                                              <label for="d3">d.</label><input type="text" class="form-control" id="d3" name="d3" value="<?php echo $qs3[4];?>"> <br>   
                                            </div>
                                          </div>
                                        </div>
                                       
                                        <div class="col-lg-10" id="question4" style="padding-top: 35px;">
                                          <div class="form-group">
                                            <label for="q4">4.</label><input type="text" size="80" class="form-control" id="q4" name="q4" value="<?php echo $qs4[0]; ?>"> <br>
                                            <div style="padding-left: 30px;">
                                              <label for="a4">a.</label><input type="text" class="form-control" id="a4" name="a4" value="<?php echo $qs4[1];?>"> <br>
                                        
                                              <label for="b4">b.</label><input type="text" class="form-control" id="b4" name="b4" value="<?php echo $qs4[2];?>"> <br>
                                           
                                              <label for="c4">c.</label><input type="text" class="form-control" id="c4" name="c4" value="<?php echo $qs4[3];?>"> <br>
                                              
                                              <label for="d4">d.</label><input type="text" class="form-control" id="d4" name="d4" value="<?php echo $qs4[4];?>"> <br>   
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-10" id="question5" style="padding-top: 35px;">
                                          <div class="form-group">
                                            <label for="q5">5.</label><input type="text" size="80" class="form-control" id="q5" name="q5" value="<?php echo $qs5[0]; ?>"> <br>
                                            <div style="padding-left: 30px;">
                                              <label for="a5">a.</label><input type="text" class="form-control" id="a5" name="a5" value="<?php echo $qs5[1];?>"> <br>
                                        
                                              <label for="b5">b.</label><input type="text" class="form-control" id="b5" name="b5" value="<?php echo $qs5[2];?>"> <br>
                                           
                                              <label for="c5">c.</label><input type="text" class="form-control" id="c5" name="c5" value="<?php echo $qs5[3];?>"> <br>
                                              
                                              <label for="d5">d.</label><input type="text" class="form-control" id="d5" name="d5" value="<?php echo $qs5[4];?>"> <br>   
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-10" id="question6" style="padding-top: 35px;">
                                          <div class="form-group">
                                            <label for="q6">6.</label><input type="text" size="80" class="form-control" id="q6" name="q6" value="<?php echo $qs6[0]; ?>"> <br>
                                            <div style="padding-left: 30px;">
                                              <label for="a6">a.</label><input type="text" class="form-control" id="a6" name="a6" value="<?php echo $qs6[1];?>"> <br>
                                        
                                              <label for="b6">b.</label><input type="text" class="form-control" id="b6" name="b6" value="<?php echo $qs6[2];?>"> <br>
                                           
                                              <label for="c6">c.</label><input type="text" class="form-control" id="c6" name="c6" value="<?php echo $qs6[3];?>"> <br>   
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-10" id="question7" style="padding-top: 35px;">
                                          <div class="form-group">
                                            <label for="q7">7.</label><input type="text" size="80" class="form-control" id="q7" name="q7" value="<?php echo $qs7[0]; ?>"> <br>
                                            <div style="padding-left: 30px;">
                                              <label for="a7">a.</label><input type="text" class="form-control" id="a7" name="a7" value="<?php echo $qs7[1];?>"> <br>
                                        
                                              <label for="b7">b.</label><input type="text" class="form-control" id="b7" name="b7" value="<?php echo $qs7[2];?>"> <br>
                                           
                                              <label for="c7">c.</label><input type="text" class="form-control" id="c7" name="c7" value="<?php echo $qs7[3];?>"> <br>   
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-10" id="question8" style="padding-top: 35px;">
                                          <div class="form-group">
                                            <label for="q8">8.</label><input type="text" size="80" class="form-control" id="q8" name="q8" value="<?php echo $qs8[0]; ?>"> <br>
                                            <div style="padding-left: 30px;">
                                              <label for="a8">a.</label><input type="text" class="form-control" id="a8" name="a8" value="<?php echo $qs8[1];?>"> <br>
                                        
                                              <label for="b8">b.</label><input type="text" class="form-control" id="b8" name="b8" value="<?php echo $qs8[2];?>"> <br>
                                           
                                              <label for="c8">c.</label><input type="text" class="form-control" id="c8" name="c8" value="<?php echo $qs8[3];?>"> <br>   
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-lg-10" id="question9" style="padding-top: 35px;">
                                          <div class="form-group">
                                            <label for="q9">9.</label><input type="text" size="80" class="form-control" id="q9" name="q9" value="<?php echo $qs9[0]; ?>"> <br>
                                            <div style="padding-left: 30px;">
                                              <label for="a9">a.</label><input type="text" class="form-control" id="a9" name="a9" value="<?php echo $qs9[1];?>"> <br>
                                        
                                              <label for="b9">b.</label><input type="text" class="form-control" id="b9" name="b9" value="<?php echo $qs9[2];?>"> <br>
                                           
                                              <label for="c9">c.</label><input type="text" class="form-control" id="c9" name="c9" value="<?php echo $qs9[3];?>"> <br>   
                                            </div>
                                          </div>
                                        </div>


                                      </div>
                                    </div>
                                  </form>
                                </div>
                            </div>

                        </div>
                        <!--/. Well -->
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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
