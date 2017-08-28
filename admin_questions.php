<?php
  session_start();
  require 'connect.php';

$dio=mysqli_query($db,"SELECT * FROM diocese ORDER BY diocese_name");
$scool=mysqli_query($db,"SELECT school.school_id,school.school_name,diocese.diocese_name 
       FROM school
       JOIN diocese
       ON school.diocese_id=diocese.diocese_id");
if(isset($_POST['submit']))
  {
    $s1 = $_POST['nschool'];
    $s2 = $_POST['diocese_name'];
    $s3 = $_POST['uname'];
    $s4 = $_POST['pword'];
    $s5 = $_POST['coor_fname'];
    $s6 = $_POST['coor_mname'];
    $s7 = $_POST['coor_lname'];
    $school=mysqli_query($db,"SELECT school_id from school");
   // $school1=mysqli_fetch_row($school);

    while($r=mysqli_fetch_assoc($school))
    {
      $schid=$r['school_id'];
    }

    $coord=mysqli_query($db,"SELECT account_id from account");
    //$coord1=mysqli_fetch_row($coord);

    while($s=mysqli_fetch_assoc($coord))
    {
      $coordid=$s['account_id'];
    }

    $schid=$schid+1;
    $coordid=$coordid+1;

     mysqli_query($db, "INSERT INTO school (school_name,diocese_id) 
       VALUES ('$s1','$s2')");
     mysqli_query($db,"INSERT INTO account (username,pword,user_id,account_id) 
       VALUES ('$s3','$s4','2','$coordid')");
     mysqli_query($db,"INSERT INTO coordinator (fname,mname,lname,school_id,account_id) 
       VALUES ('$s5','$s6','$s7','$schid','$coordid')" );
     header("Location:admin_schools.php");
  }


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css">
    <link href="css/dropdowns-enhancement.min.css" rel="stylesheet">

    <!--External CSS-->
    <link rel="stylesheet" type="text/css" href="stylesdbms.css">
    <!-- Custom CSS -->
    <style>


    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top navbar-inverse" style="padding:6px; font-family:mySecondFont; " role="navigation">
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
                      <a href="admin_students.php">Schools</a>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  
                  <li class="button">
                    <a href="index.php"><span class="glyphicon glyphicon-log-out"></span><b>Logout</b></a>
                  </li>
                </ul>
              </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    

    <!--Questions Page -->
    <div class="container-fluid green" style="font-family:mySecondFont;" id="div2">
    <div class="row">
    <div class="col-sm-offset-1 col-sm-10 col-sm-offset-1">
      <div class="well" align="center">
        <div class="row">
        <div class="col-sm-7">
        <h3 align="left">Questions</h3>
        </div>
        </div>

        <!--Grade Level and Submit button-->
        <div class="row">
        <div class="col-sm-offset-8 col-sm-3">
        <div class="form-group">
            <label for="grde_lvl">Grade Level</label>
            <select name="grd_lvl" id="grde_lvl" class="form-control input-md">
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
        </div>
        <div class="col-sm-offset-8 col-sm-3">
        <input type="submit" class="btn btn-primary btn-md" align="center" name="submit" align="center" value="Select">
        </div>
      </div>
      <br><br>

      <!--Questions List-->
      <div class="row">
      <div class="col-sm-5 col-sm-offset-3" align="left">

      <!--Sample Questions(for edit)-->

<?php

$qt1=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='grd_lvl' AND questions.q_num='1' ");
$qs1=mysqli_fetch_row($qt1);

$qt2=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='grd_lvl' AND questions.q_num='2' ");
$qs2=mysqli_fetch_row($qt2);

$qt3=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='grd_lvl' AND questions.q_num='3' ");
$qs3=mysqli_fetch_row($qt3);

$qt4=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='grd_lvl' AND questions.q_num='4' ");
$qs4=mysqli_fetch_row($qt4);

$qt5=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='grd_lvl' AND questions.q_num='5' ");
$qs5=mysqli_fetch_row($qt5);

$qt6=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='grd_lvl' AND questions.q_num='6' ");
$qs6=mysqli_fetch_row($qt6);

$qt7=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='grd_lvl' AND questions.q_num='7' ");
$qs7=mysqli_fetch_row($qt7);

$qt8=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='grd_lvl' AND questions.q_num='8' ");
$qs8=mysqli_fetch_row($qt8);

$qt9=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='grd_lvl' AND questions.q_num='9' ");
$qs9=mysqli_fetch_row($qt9);

?>







<div class="row">
<div class="col-sm-offset-10 col-sm-2">
<a href="edit_questions.php"><button class="btn btn-primary btn-xs green" name="edit_questions">Edit</button></a>
</div>
</div>
<p align="left">
1. <?php 
   echo $qs1[0];
?>
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
<div class="input-field" align="left">
  <p>
    <input id="a1" type="radio" name="q1" value="a" required>
    <label for="a1">a. <?php 
      echo $qs1[1];
?></label>
  </p>
  <p>
    <input id="b1" type="radio" name="q1" value="b" required>
    <label for="b1">b. <?php 
      echo $qs1[2];
?></label>
  </p>
  <p>
    <input id="c1" type="radio" name="q1" value="c" required>
    <label for="c1">c. <?php 
      echo $qs1[3];
?></label>
  </p>
  <p>
    <input id="d1" type="radio" name="q1" value="d" required>
    <label for="d1">d.<?php 
       echo $qs1[4];
?></label>
  </p>
  
</div>
</div>
</div>
<br />
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
<a href="edit_questions.php"><button class="btn btn-primary btn-xs green" name="edit_questions">Edit</button></a>
</div>
</div>
<p >
  2.<?php 
   echo $qs2[0];
?>
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a2" type="radio" name="q2" value="a" required>
      <label for="a2">a. <?php 
      echo $qs2[1];
?></label>
    </p>
    <p>
      <input id="b2" type="radio" name="q2" value="b" required>
      <label for="b2">b.<?php 
      echo $qs2[2];
?></label>
    </p>
    <p>
      <input id="c2" type="radio" name="q2" value="c" required>
      <label for="c2">c.<?php 
      echo $qs2[3];
?></label>
    </p>
    <p>
      <input id="d2" type="radio" name="q2" value="d" required>
      <label for="d2">d.<?php 
      echo $qs2[4];
?></label>
    </p>
    
  </div>
</div>
</div>
<br />
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
<a href="edit_questions.php"><button class="btn btn-primary btn-xs green" name="edit_questions">Edit</button></a>
</div>
</div>
<p>
3. <?php 
   echo $qs3[0];
?></p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a3" type="radio" name="q3" value="a" required>
      <label for="a3">a.<?php 
      echo $qs3[1];
?></label>
    </p>
    <p>
      <input id="b3" type="radio" name="q3" value="b" required>
      <label for="b3">b.<?php 
      echo $qs3[2];
?></label>
    </p>
    <p>
      <input id="c3" type="radio" name="q3" value="c" required>
      <label for="c3">c.<?php 
      echo $qs3[3];
?></label>
    </p>
    <p>
      <input id="d3" type="radio" name="q3" value="d" required>
      <label for="d3">d.<?php 
      echo $qs3[4];
?></label>
    </p>
    
  </div>
</div>
</div>
<br />
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
<a href="edit_questions.php"><button class="btn btn-primary btn-xs green" name="edit_questions">Edit</button></a>
</div>
</div>
<p >
4.<?php 
   echo $qs4[0];
?></p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a4" type="radio" name="q4" value="a" required>
      <label for="a4">a.<?php 
    echo $qs4[1];
?></label>
    </p>
    <p>
      <input id="b4" type="radio" name="q4" value="b" required>
      <label for="b4">b. <?php 
   echo $qs4[2];
?></label>
    </p>
    <p>
      <input id="c4" type="radio" name="q4" value="c" required>
      <label for="c4">c.<?php 
      echo $qs4[3];
?></label>
    </p>
    <p>
      <input id="d4" type="radio" name="q4" value="d" required>
      <label for="d4">d.<?php 
      echo $qs4[4];
?></label>
    </p>
    </div>
</div>
</div>
<br />
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
<a href="edit_questions.php"><button class="btn btn-primary btn-xs green" name="edit_questions">Edit</button></a>
</div>
</div>
<p>
5.<?php 
   echo $qs5[0];
?>
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a5" type="radio" name="q5" value="a" required>
      <label for="a5">a.<?php 
    echo $qs5[1];
?></label>
    </p>
    <p>
      <input id="b5" type="radio" name="q5" value="b" required>
      <label for="b5">b.<?php 
   echo $qs5[2];
?></label>
    </p>
    <p>
      <input id="c5" type="radio" name="q5" value="c" required>
      <label for="c5">c.<?php 
   echo $qs5[3];
?></label>
    </p>
    <p>
      <input id="c5" type="radio" name="q5" value="c" required>
      <label for="c5">c.<?php 
   echo $qs5[4];
?></label>
    </p>
  </div>
</div>
</div>
<br />
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
<a href="edit_questions.php"><button class="btn btn-primary btn-xs green" name="edit_questions">Edit</button></a>
</div>
</div>
<p>
6.<?php 
   echo $qs6[0];
?> 
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a6" type="radio" name="q6" value="a" required>
      <label for="a6">a.<?php 
   echo $qs6[1];
?></label>
    </p>
    <p>
      <input id="b6" type="radio" name="q6" value="b" required>
      <label for="b6">b.<?php 
   echo $qs6[2];
?></label>
    </p>
    <p>
      <input id="c6" type="radio" name="q6" value="c" required>
      <label for="c6">c. <?php 
   echo $qs6[3];
?></label>
    </p>
  </div>

</div>
</div>
<br />
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
<a href="edit_questions.php"><button class="btn btn-primary btn-xs green" name="edit_questions">Edit</button></a>
</div>
</div>
<p>
7. <?php 
   echo $qs7[0];
?>
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a7" type="radio" name="q7" value="a" required>
      <label for="a7">a.<?php 
   echo $qs7[1];
?></label>
    </p>
    <p>
      <input id="b7" type="radio" name="q7" value="b" required>
      <label for="b7">b. <?php 
   echo $qs7[2];
?></label>
    </p>
    <p>
      <input id="c7" type="radio" name="q7" value="c" required>
      <label for="c7">c. <?php 
   echo $qs7[3];
?></label>
    </p>
  </div>
</div>
</div>
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
<a href="edit_questions.php"><button class="btn btn-primary btn-xs green" name="edit_questions">Edit</button></a>
</div>
</div>
<p>
8.  <?php 
   echo $qs8[0];
?>
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a8" type="radio" name="q8" value="a" required>
      <label for="a8">a. <?php 
   echo $qs8[1];
?></label>
    </p>
    <p>
      <input id="b8" type="radio" name="q8" value="b" required>
      <label for="b8">b. <?php 
   echo $qs8[2];
?></label>
    </p>
    <p>
      <input id="c8" type="radio" name="q8" value="c" required>
      <label for="c8">c. <?php 
   echo $qs8[3];
?></label>
    </p>
  </div>
</div>
</div>
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
<a href="edit_questions.php"><button class="btn btn-primary btn-xs green" name="edit_questions">Edit</button></a>
</div>
</div>
<p>
9.<?php 
   echo $qs9[0];
?>
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a9" type="radio" name="q9" value="a" required>
      <label for="a9">a.<?php 
   echo $qs9[1];
?></label>
    </p>
    <p>
      <input id="b9" type="radio" name="q9" value="b" required>
      <label for="b9">b. <?php 
   echo $qs9[2];
?></label>
    </p>
    <p>
      <input id="c9" type="radio" name="q9" value="c" required>
      <label for="c9">c.<?php 
   echo $qs9[3];
?></label>
    </p>
  </div>
</div>
</div>





      </div>
      </div>
    
    </div>
    </div>
    </div>
  </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>

    <!-- Dropdowns Enhancement -->
    <script src="js/dropdowns-enhancement.js"></script>

</body>

</html>
