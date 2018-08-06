<?php
require 'connect.php';
//require 'school_studentsdb.php';
require 'glevels.php';

$stud_count = $_SESSION['studcount'];

?>


<script>
function prints(){
  window.print();

}
</script>



<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload = "prints();">


<table class="table table-striped table-bordered" id="studenttb" style="background-color:#fff;">
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
      </tr>
    </thead>
    <tbody>
      <?php
        $output = $_SESSION['output'];
        echo $output;

      ?>
        


    </tbody>

  </table>

  <h4>Total number of students = <?php echo $stud_count; ?></h4>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
            $("#studenttb").footable();
          </script>
</body>
</html>
