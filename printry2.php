<script>
function prints(){
	window.print();

}
</script>
<style>
table, th, td {
	border: 1px solid black;
}
</style>

<?php
session_start();
  require 'connect.php';
  $username = ($_SESSION['username']);
  $sch=mysqli_query($db,"SELECT school.school_name,diocese.diocese_name,school.school_id
  FROM school
  INNER JOIN diocese
  ON school.diocese_id=diocese.diocese_id
  INNER JOIN coordinator
  ON school.school_id=coordinator.school_id
  INNER JOIN account
  ON coordinator.account_id=account.account_id
  WHERE account.username='$username'");
  $scn=mysqli_fetch_row($sch);
  $school=$scn[2];
  $stud=mysqli_query($db,"SELECT stud_id,lname,fname,mname,g_level,gender,age
  FROM student WHERE school_id='$school'");


?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/dropdowns-enhancement.min.css" rel="stylesheet">

    <!--External CSS-->
    <link rel="stylesheet" type="text/css" href="stylesdbms.css">
</head>

<body onload = "prints();">
  
      <div class="table-responsive">
      <div class="container-fluid">
      <div class="row">
      <div class="col-xs-5">
      <p style="font-size: 20px; font-weight: bold;"><?php echo $scn[0];   ?> </p>
      </div>
      <div class="col-xs-offset-2 col-xs-5">
      <p style="font-size: 20px; font-weight: bold;">Diocese of <?php echo $scn[1];  ?> </p>
      </div>
      </div>
      </div>
 <div class="table-responsive">
  <table class="table table-hover" style="background-color:#fff;">
  <thead>
  <tr>
    <th>Student ID</th>
    <th>Last Name</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Grade Level</th>
    <th>Gender</th>
    <th>Age</th>
    <th></th>
    <th></th>
  </tr>
  </thead>
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
  </tr>
  
  <?php
}
?>
   </div>
  </table>
  </body>  