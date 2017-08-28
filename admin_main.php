<?php
  session_start();
  require 'connect.php';
  require 'admin_schoolsdb.php'
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ECMI-SDOFP</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/footable.bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="styles(sdofp).css">

    <style type="text/css">

    </style>
    
  </head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top navbar-default" style="padding:6px; font-family:mySecondFont; " role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin_main.php">Administrator</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li>
                      <a href="admin_students.php">Students</a>
                  </li>
                  <li>
                      <a href="admin_questions.php">Questions</a>
                  </li>
                  <li>
                      <a href="admin_report.php">Reports</a>
                  </li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li>
                  <p class="navbar-text" style="color: #f5f5f5;"></p>
                </li>
                  <li class="button">
                    <a href="admin_main.php"><span class="glyphicon glyphicon-log-out"></span><b> Logout</b></a>
                  </li>
                </ul>
              </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container-fluid" style="background-color: #00c853; padding-top: 60px; padding-bottom: 20px;">
      <div class="row">
        <!--Banner Main-->
        <div class="col-md-offset-1 col-md-10">
          <div class="row">
            <div class="col-md-12" style="font-family:myFirstFont;">
                <br />
                  <div class="well" style="background-color: white;">
                  <div class="row">
                    <div class="col-lg-4" style="padding-top:15px;">
                      <a href="school_main.php"><img src="pictures/logo.jpg" class="img-responsive logo" alt="ECMI LOGO" /></a>
                    </div>
                    <div class="col-lg-8 text-center" style="padding-top: 15px;">
                        <h1>ECMI-Sons and Daughters of OFW Program Website</h1>               
                      <footer>
                        <p style="font-size:17px;">
                          The migrant is to be considered, not merely as an instrument of production but as a subject endowed with human dignity -Pope John Paul II
                        </p>
                      </footer>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <br><br>
        </div>
      </div>

      <ul class="nav nav-pills justified" role="tablist">
        <li role="presentation" style="background-color: white; border-radius: 5px;" class="active"><a href="#div2" aria-controls="div2" role="tab" data-toggle="tab">Add School</a></li>
        <li role="presentation" style="background-color: white; border-radius: 5px;"><a href="#div3" aria-controls="div3" role="tab" data-toggle="tab">List of Schools</a></li>
      </ul>


        
          <div class="tab-content">

            <div role="tabpanel" class="tab-pane active light-green lighten-5" id="div2">
              <div class="row" style="padding-top: 20px;">
                <div class="col-md-offset-3 col-md-6">
                  <div class="well">
                    <div class="row" style="font-family: myFirstFont;">
                      <div class="col-md-6">
                        <h3 align="left">Add Participating School</h3>
                      </div>
                    </div>
                    <br />
                    <form class="form-horizontal" method="POST">
                      <h4 align="center">School</h4>
                      <div class="row">
                        <div class="col-md-offset-1 col-md-10">     
                          <div class="form-group">
                            <label class="control-label col-md-3" for="school_name">Name of School:</label>
                            <div class="col-md-9">
                              <input type="text" class="form-control" id="school_name" name="nschool">
                            </div>
                          </div>
                            <div class="row">
                          <label class="control-label col-md-3">Diocese:</label>
                            <div class="col-md-9">
                              <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" name="diocese">Diocese <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu scrollable-menu" role="menu">
                                <?php
                                $i=1;
                                while($dion=mysqli_fetch_row($dio)){
                                ?>
                                  <li><input type="radio" id="diocs_name<?php echo $i; ?>" name="diocese_name" value="<?php echo $dion[0]?>"><label for="diocs_name<?php echo $i; ?>">
                                  Diocese of <?php echo $dion[1]?></label></li>
                                <?php
                                $i=$i+1;
                                }
                                ?>
                                </ul>
                              </div>
                            </div>
                            </div>
                          <br/>
                          <h4 align="center">Coordinator</h4>
                          <div class="form-group">
                            <label class="control-label col-sm-3" for="coor_fname">First Name:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="coor_fname" name="coor_fname">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3" for="coor_mname">Middle Name:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="coor_mname" name="coor_mname">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3" for="coor_lname">Last Name:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="coor_lname" name="coor_lname">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3" for="username">Username:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="username" name="uname">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3" for="pword">Password:</label>
                            <div class="col-sm-9">
                              <input type="Password" class="form-control" id="pword" name="pword">
                            </div>
                          </div>
                          <div class="form-group">
                            <br />
                            <div class="col-md-offset-4 col-md-2">
                            <input type="submit" class="btn btn-primary btn-lg green" align="center" name="submit" value = "Add School">
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>      
                  </div>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane light-green lighten-5" id="div3">
              <div class="row" style="padding-top: 20px;">
                <div class="col-md-offset-1 col-md-10">
                  <div class="well">
                    <div class="row" style="font-family: myFirstFont;">
                      <div class="col-md-5">
                        <h3 align="left">List of Participating Schools</h3>
                      </div>
                    </div>
                    <br />

                    <!-- Modal -->
                    <div class="modal fade" id="edit" role="dialog">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="font-family: roboto;">Edit School</h4>
                          </div>

                          <div class="modal-body">
                            <div class="container-fluid">
                              <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                  <label class="control-label col-sm-3" for="lname">School Name:</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="lname" name="ulname">
                                  </div>
                                </div>
                                <label class="control-label col-sm-3">Diocese:</label>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <div class="btn-group">
                                      <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" name="diocese">Diocese <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu scrollable-menu" role="menu">
                                      <?php
                                      $i=1;
                                      while($dion=mysqli_fetch_row($dio)){
                                      ?>
                                        <li><input type="radio" id="diocs_name<?php echo $i; ?>" name="diocese_name" value="<?php echo $dion[0]?>"><label for="diocs_name<?php echo $i; ?>">
                                        Diocese of <?php echo $dion[1]?></label></li>
                                        <?php
                                        $i=$i+1;
                                        }
                                        ?>
                                        <!-- Other items -->
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>

                          <div class="modal-footer">
                            <input type="submit" name="save" class="btn btn-lg btn-primary teal" align="center" value="Save">
                            <button type="button" class="btn btn-default red" data-dismiss="modal">Close</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive">
                      <table class="table table-hover" data-paging="true" id="schooltb" style="background-color:#fff;">
                        <tr>
                          <th>School ID</th>
                          <th>School Name</th>
                          <th>Diocese</th>
                        </tr>
                          <?php 
                          while($sc=mysqli_fetch_row($scool)){
                          ?>
                        <tr>
                          <th><?php echo $sc[0]?></th>
                          <td><?php echo $sc[1]?></td>
                          <td><?php echo $sc[2]?></td>
                          <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                          <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn red btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>
                        <?php
                          }
                        ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>

	
    <!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/footable.min.js"></script>
    <script type="text/javascript">
      $("#schooltb").footable();
    </script>

</body>

</html>
