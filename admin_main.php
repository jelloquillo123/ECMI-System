<?php
session_start();
require 'connect.php';
require 'admin_schoolsdb.php';
require 'admin_dsc.php';
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

    <link rel="stylesheet" href="stylessdofp.css">
  
  <style type="text/css">
    #edit_header{
      margin-bottom: 50px;
    }
    #coor_header{
      margin-top: 50px;
      margin-bottom: 30px;
    }
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
          <a href="index.php"><span class="glyphicon glyphicon-log-out"></span><b> Logout</b></a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container-fluid" id="cont-banner">
  <div class="row">
    <!--Banner Main-->
    <div class="col-md-offset-1 col-md-10">
      <div class="row">
        <div class="col-md-12" style="font-family:myFirstFont;">
          <br />
          <div class="well" style="background-color: white;">
            <div class="row">
              <div class="col-lg-4" style="padding-top:15px;">
                <a href="admin_main.php"><img src="pictures/logo.jpg" class="img-responsive logo" alt="ECMI LOGO" /></a>
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
    <li role="presentation" style="background-color: white; border-radius: 5px;"><a href="#div4" aria-controls="div4" role="tab" data-toggle="tab">Add Diocese</a></li>
    <li role="presentation" style="background-color: white; border-radius: 5px;"><a href="#div5" aria-controls="div5" role="tab" data-toggle="tab">List of Diocese</a></li>
  </ul>
  
  <div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="div2">
      <div class="row" style="padding-top: 20px;">
        <div class="col-md-offset-3 col-md-6">
          <div class="well">
            <div class="row" style="font-family: myFirstFont;">
              <div class="col-md-6">                         
                <h3 align="left" >Add Participating School</h3>
              </div>
            </div>
            <br />
            <form onsubmit="return confirm('Are you sure you want to add this school?');" class="form-horizontal" method="POST">
              <h4 align="center">School</h4>
              <div class="row">
                <div class="col-md-offset-1 col-md-10">     
                  <div class="form-group">
                    <label class="control-label col-md-3" for="school_name">Name of School:</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="school_name" name="nschool" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-offset-1 col-md-10">

                      <div class="form-group">
                        <label class="control-label col-md-2" for="diocese">Diocese:</label>
                        <div class="col-md-9" style="padding-left: 30px;">
                          <select name="diocese" id="diocese" class="form-control" required>
                            <option>Select Diocese</option>
                            <?php
                            $i=1;
                            while($dion=mysqli_fetch_row($dio)){
                              ?>
                              <option value="<?php echo $dion[0] ?>"> Diocese of <?php echo $dion[1]?></option>
                              <?php
                              $i=$i+1;
                            }
                            ?>
                          </select> 
                        </div>
                      </div>

                    </div>
                  </div>
                  <br/>
                  <h4 align="center">Coordinator</h4>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="coor_fname">First Name:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="coor_fname" name="coor_fname" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="coor_mname">Middle Name:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="coor_mname" name="coor_mname" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="coor_lname">Last Name:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="coor_lname" name="coor_lname" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="username">Username:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="username" name="uname" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="pword">Password:</label>
                    <div class="col-sm-9">
                      <input type="Password" class="form-control" id="pword" name="pword" required>
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





    <div role="tabpanel" class="tab-pane fade" id="div3">
      <div class="row" style="padding-top: 20px;">
        <div class="col-md-offset-1 col-md-10">
          <div class="well">
            <div class="row" style="font-family: myFirstFont;">
              <div class="col-md-5">
                <h3 align="left">List of Participating Schools</h3>
              </div>
              <div class="col-md-offset-6 col-md-1" style="position: relative; top:10px; right: 15px;">
                <a href="printry4.php"><button class="btn btn-primary">Print <span class="glyphicon glyphicon-print"></span></button></a>
              </div>
            </div>
            <br />
            <div class="table-responsive">
              <table class="table table-hover tablecenter" data-sorting="true" data-filtering="true" data-paging="true" id="schooltb" style="background-color:#fff;">
                <thead>
                  <tr>
                    <th>School ID</th>
                    <th>School Name</th>
                    <th>Diocese</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Expand</th>
                  </tr>  
                </thead>
                <?php 
                while($sc=mysqli_fetch_row($scool)){
                  ?>
                  <tr>
                    <th><?php echo $sc[0]?></th>
                    <td><?php echo $sc[1]?></td>
                    <td><?php echo $sc[2]?></td>

                      <td><button onclick="edit_sch(<?php echo $sc[0];?>)" class="btn btn-success btn-md" name="edit"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                      <td><button onclick="del_sch(<?php echo $sc[0];?>)" class="btn btn-danger btn-md" name="delete" title="Delete"><span class="glyphicon glyphicon-trash"></span></button></td>
                      <td><button onclick="expand_sch(<?php echo $sc[0];?>)" class="btn btn-info btn-md" name="expand"><span class="glyphicon glyphicon-new-window"></span></button></a></td>
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


        <div role="tabpanel" class="tab-pane" id="div4">
          <div class="row" style="padding-top: 20px;">
            <div class="col-md-offset-3 col-md-6">
              <div class="well">
                <div class="row" style="font-family: myFirstFont;">
                  <div class="col-md-6">  
                    <h3 align="left" >Add Diocese</h3>
                  </div>
                </div>
                <br />
                <form onsubmit="return confirm('Are you sure you want to add this diocese?');" class="form-horizontal" method="POST">
                  <h4 align="center">Diocese</h4>
                  <div class="row">
                    <div class="col-md-offset-1 col-md-10">     
                      <div class="form-group">
                        <label class="control-label col-md-3" for="dioname">Name of Diocese:</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="dioname" name="dioname" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                      <br />
                      <div class="col-md-offset-4 col-md-2">
                        <input type="submit" class="btn btn-primary btn-lg green" align="center" name="diocese_submit" value = "Add Diocese">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div role="tabpanel" class="tab-pane fade" id="div5">
          <div class="row" style="padding-top: 20px;">
            <div class="col-md-offset-1 col-md-10">
              <div class="well">
                <div class="row" style="font-family: myFirstFont;">
                  <div class="col-md-5">
                    <h3 align="left">List of Diocese</h3>
                  </div>
                  <div class="col-md-offset-4 col-md-2" id="btn-plcmnt1">
                    <!-- <a href="printry4.php"><button class="btn btn-primary">Print <span class="glyphicon glyphicon-print"></span></button></a> -->
                  </div>
                </div>
                <br />
                <div class="table-responsive">
                  <table class="table table-hover tablecenter" data-sorting="true" data-filtering="true" data-paging="true" id="diocesetb" style="background-color:#fff;">
                    <thead>
                      <tr>
                        <th>Diocese ID</th>
                        <th>Diocese Name</th>
                        <th># of Schools Included</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr> 
                    </thead>
                    <?php 
                    $dios=mysqli_query($db,"SELECT * FROM diocese ORDER BY diocese_id");
                    $cnt=mysqli_query($db,"SELECT ");
                    while($dioo=mysqli_fetch_row($dios)){

                     $num_school_sql=mysqli_query($db,"SELECT COUNT(*) from school WHERE diocese_id='$dioo[0]'");
                     $num_school=mysqli_fetch_row($num_school_sql);

                     ?>
                     <tr>


                      <th><?php echo $dioo[0]?></th>
                      <td><?php echo $dioo[1]?></td>
                      <td><?php echo $num_school[0]?></td>
                      <td><?php echo "<a href='edit_school.php?id=$sc[0]'>";?>
                        <button class="btn btn-success btn-md" data-title="Edit" data-toggle="modal" data-target="#edit" name="edit"><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>

                        <!--<td><?php echo "<a href='edit_school.php?id=$sc[0]'";?>class="btn btn-success btn-md"</a><span class="glyphicon glyphicon-pencil"></span></td>-->

                        <td><button onclick="del_diocs(<?php echo $dioo[0];?>)" class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" name="delete"><span class="glyphicon glyphicon-trash"></span></button></td>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
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
