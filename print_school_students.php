<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'school_authentication.php';
require 'connect.php';
require 'glevels.php';
require 'school_studentsdb.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
  table, th, td {
  border: 1px solid black;
  }
  </style>
</head>
<body onload="prints();">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h2>List of Students</h2>
        <h4>Total Number of Students: <?php echo $stud_total[0]; ?></h4>
        <h4><?php echo $scn[0]; ?></h4>

          <div class="table-responsive" style="padding-top: 15px;">
            <table class="table table-hover table-bordered" data-sorting="true" data-paging="true" data-filtering="true" id="studenttb" style="background-color:#fff;">
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
                    </tr><?php } ?>

                </tbody>
            </table>    
            <h5><b>Total of Students taken PAT: <?php echo $taken_total[0]; ?></b></h5>
            <h5><b>Total of Students not yet taken PAT: <?php echo $nt_total[0]; ?></b></h5>       
          </div>
        
      </div>
    </div>
  </div>

<script>
function prints(){
  window.print();

}
</script>

</body>
</html>
