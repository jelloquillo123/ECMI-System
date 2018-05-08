<?php
session_start();
require 'connect.php';
$to=mysqli_query($db,"SELECT student.stud_id,student.lname,student.fname,student.mname,school.school_name,student.g_level,
  student.gender,student.age,account.username,account.pword 
  FROM student
  JOIN school
  ON student.school_id=school.school_id
  JOIN account
  ON student.account_id=account.account_id");
$total_studentq=mysqli_query($db,"SELECT COUNT(student.stud_id)FROM student");
$total_student=mysqli_fetch_row($total_studentq);
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
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

  <!--Table Results -->

  <div class="row">
    <div class="col-md-12">
      <div class="well">
        <div class="row">
             <div class="row">
             <div class="col-md-offset-5 col-md-2" style="padding-left: 100px;">
            <!-- <a href="printry3.php"><button class="btn btn-primary" align="left"> Print <span class="glyphicon glyphicon-print"></span></button></a> -->
            </div>
          </div>
          <div class="col-md-5" style="font-family: myFirstFont;">
            <h3>List of Students</h3>
            <h4>Total number of students = <?php echo $total_student[0]; ?></h4>
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
          <br />
          <div class="table-responsive" id="show">
            <table class="table table-hover tablecenter" data-paging="true" data-sorting="true" data-filtering="true" id="studenttb" style="background-color:#fff;">
              <thead>
                <tr>
                  <th>Student ID</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>School</th>
                  <th>Grade Level</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="show">
                <tr>
                  <?php
                    while($toti=mysqli_fetch_row($to)){
                      ?>
                      <th><?php echo $toti[0];?></th>
                      <td><?php echo $toti[1];?></td>
                      <td><?php echo $toti[2];?></td>
                      <td><?php echo $toti[3];?></td>
                      <td><?php echo $toti[4];?></td>
                      <td><?php echo $toti[5];?></td>
                      <td><?php echo $toti[6];?></td>
                      <td><?php echo $toti[7];?></td>
                      <td><?php echo $toti[8];?></td>
                      <td><?php echo $toti[9];?></td>
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a href='edit_students_admin.php?id=<?php echo $toti[0];?>'>
                          <button class="btn btn-success btn-md" data-title="Edit" data-toggle="modal" data-target="#edit" name="edit"><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                        <td>
                          <button onclick="del(<?php echo $toti[0];?>)" class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" name="delete"><span class="glyphicon glyphicon-trash"></span></button></td>
                    
                     </tr>
                        <?php
                        
                      }
                    ?>
                </tbody>
              </table>
        
        
                  </div>
              </div>
            </div>
          </div>
          <!-- /.container -->
    </div>

          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
          <script src="js/jquery-3.1.1.min.js"></script>
          <!-- Include all compiled plugins (below), or include individual files as needed -->
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
