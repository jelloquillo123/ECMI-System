<?php
  session_start();
  require 'connect.php';
  require 'school_studentsdb.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ECMI-SDOFP</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/footable.bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="stylessdofp.css">

    <style type="text/css">
.buttonstyle {
  background-color: green;
  border-radius: 10px;
}
.buttonstylered{
  background-color: red;
  border-radius: 10px;
}

    </style>
    
  </head>
  <body data-spy="scroll" >
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
                <a class="navbar-brand" href="school_main.php">School</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                      <a href="school_main.php">Reports</a>
                  </li>
                  <li>
                      <a href="school_students.php">Students</a>
                  </li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li>
                  <p class="navbar-text" style="color: #f5f5f5;"><?php echo $scn[0]; ?></p>
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


      <ul class="nav nav-pills" role="tablist">
        <li role="presentation" style="background-color: white; border-radius: 5px;" class="active"><a href="#div2" aria-controls="div2" role="tab" data-toggle="tab">Add Student</a></li>
        <li role="presentation" style="background-color: white; border-radius: 5px;"><a href="#div3" aria-controls="div3" role="tab" data-toggle="tab">List of Students</a></li>
      </ul>

      <div class="tab-content">
        
        <div role="tabpanel" class="tab-pane active" id="div2">
          <div class="row" style="padding-top: 20px;">
            <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
              <div class="well">
                <div class="row">
                  <div class="col-sm-12">
                    <h3 align="left" style="font-family: myFirstFont;">Add Student</h3>
                  </div>
                </div>
                <br />
                <form onsubmit="return confirm('Are you sure you want to add this student?');" class="form-horizontal" method="POST">
                  <div class="form-group row">
                    <label class="control-label col-sm-3" for="studnum">Student Number:</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="studnum" name="studnum" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-sm-3" for="lname">Last Name:</label>
                    <div class="col-sm-8">
                      <input type="char" class="form-control" id="lname" name="lname" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-sm-3" for="fname">First Name:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="fname" name="fname" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-sm-3" for="mname">Middle Name:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="mname" name="mname" required>
                    </div>
                  </div>
                  <!--<div class="form-group">
                    <label class="control-label col-sm-3" for="uname">Username:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="uname" name="uname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="pword">Password:</label>
                    <div class="col-sm-8">
                      <input type="Password" class="form-control" id="pword" name="pword">
                    </div>
                  </div>-->
                  <div class="form-group row">
                    <label class="control-label col-sm-3" for="bday">Birthdate:</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" id="bday" name="bday" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label col-sm-3" for="email">Parents Email:</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                  </div>



                    <div class="col-md-offset-2 col-md-3">
                      <div class="form-group">
                        <label for="glevel">Grade Level:</label>
                        <select name="glevel" id="glevel" class="form-control input-md" required>
                        <?php
                        $num=1;
                        for($i=0;$i<10;$i++){
                        ?>
                        <option value="<?php echo $num; ?>">Grade <?php echo $num; ?></option>
                        <?php
                        $num=$num+1;
                        }
                        ?>
                        </select>
                      </div>
                    </div>

                  <div class="col-md-offset-2 col-md-3">
                    <div class="form-group">
                      <label for="gender">Gender:</label>
                      <select name="gender" id="gender" class="form-control input-md">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-sm-offset-4 col-sm-2">
                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Add Student">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
  


        <div role="tabpanel" class="tab-pane" id="div3">
          <div class="row" style="padding-top: 20px;">
            <div class="col-md-offset-1 col-md-10">
              <div class="well">
                <div class="row" style="font-family: myFirstFont;">
                  <div class="col-sm-5">
                    <h3 align="left">List of Students</h3>
                    <h4>Total number of students = <?php echo $stud_total[0]; ?></h4>
                  </div>
                  <div class="col-md-offset-5 col-md-2">
                    <a href="printry2.php"><button class="btn btn-primary" style="font-family: mySecondFont;" id="btn-plcmnt"> Print <span class="glyphicon glyphicon-print"></span></button></a>
                  </div>
                </div>
                
                <div class="table-responsive">
                  <table class="table table-hover tablecenter" data-sorting="true" data-paging="true" data-filtering="true" id="studenttb" style="background-color:#fff;">
                    <thead>
                    <tr>
                      <th>Student ID</th>
                      <th>Last Name</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Grade Level</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>Parents Email</th>
                      <th>Test status</th>
                      <th>Feedback</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>Reset</th>
                    </tr>
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

                      <td align="center"><?php echo "<a href='feedback.php?id=$stu[0]'>";?><button class="btn btn-primary btn-md" name="feedback"><span class="glyphicon glyphicon-comment"></span></button></a></td>

                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><?php echo "<a href='edit_students.php?id=$stu[0]'>";?>
                      <button class="btn btn-success btn-md" data-title="Edit" data-toggle="modal" data-target="#edit" name="edit"><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                      
                      <td>
                      <button onclick="del(<?php echo $stu[0];?>)" class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" name="delete"><span class="glyphicon glyphicon-trash"></span></button></td>
                      
                      <td><?php echo "<a href='resetpw.php?id=$stu[7]'>";?>
                      <button class="btn btn-warning btn-md" data-title="passreset" data-toggle="modal" data-target="#passreset" name="passreset"><span class="glyphicon glyphicon-refresh"></span></button></a></td>
                    </tr>
                    <!--<!-- Modal Delete 
                      <div class="modal fade" id="delete" role="dialog">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                          <form action="delete.php" method="POST">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title" style="font-family: roboto;">Delete Student</h4>
                            </div>
                            <div class="modal-body">
                            <div class="container-fluid">
                            <h6>Are you sure you want to delete this Student?</h6><br/><br/>
                            <div class="modal-footer">
                              <?php echo "<a href='delete.php?id=$stu[0]'>";?>
                              <button class="btn btn-default teal" name="delete1">Yes</button></a>
                              <button type="button" class="btn btn-default red" data-dismiss="modal">No</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      </form>
                      </div>
                      </div>
                      -->
                    <?php
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


<!--End of Container-Fluid-->
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
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
        window.location.href="delete.php?id=" +x+" ";
        }
        
      }
    </script>
  </body>