<?php
  session_start();
  require 'connect.php';
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
        <form method="POST">
        <!--Grade Level and Submit button-->
        <div class="row">
        <div class="col-sm-offset-8 col-sm-3">
        <div class="form-group">
            <label for="grdlvl">Grade Level</label>
            <select name="grdlvl" id="grde_lvl" class="form-control input-md">
            <option value=<?php echo $_POST['grdlvl']; ?>><?php echo 'Grade'." ".$_POST['grdlvl']; ?></option>
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
      </form>
      <br><br>

      <!--Questions List-->
      <div class="row">
      <div class="col-sm-5 col-sm-offset-3" align="left">

      <!--Sample Questions(for edit)-->

<?php
if(isset($_POST['submit'])){
$qt1=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='1' ");
$qs1=mysqli_fetch_row($qt1);

$qt2=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='2' ");
$qs2=mysqli_fetch_row($qt2);

$qt3=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='3' ");
$qs3=mysqli_fetch_row($qt3);

$qt4=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='4' ");
$qs4=mysqli_fetch_row($qt4);

$qt5=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='5' ");
$qs5=mysqli_fetch_row($qt5);

$qt6=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='6' ");
$qs6=mysqli_fetch_row($qt6);

$qt7=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='7' ");
$qs7=mysqli_fetch_row($qt7);

$qt8=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='8' ");
$qs8=mysqli_fetch_row($qt8);

$qt9=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='9' ");
$qs9=mysqli_fetch_row($qt9);

?>



<form method="POST">
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
</div>
</div>
1.<input type="text" name="q1" value="<?php 
   echo $qs1[0];
?>"> 
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
<div class="input-field" align="left">
  <p>
    a.<input type="text" name="a1" value="<?php 
      echo $qs1[1];?>">
  </p>
  <p>
    b.<input type="text" name="b1" value="<?php 
      echo $qs1[2];?>">
  </p>
  <p>
    c.<input type="text" name="c1" value="<?php 
      echo $qs1[3];?>">
  </p>
  <p>
    d.<input type="text" name="d1" value="<?php 
      echo $qs1[4];?>">
  </p>
</div>
</div>
</div>
<br/>
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
</div>
</div>
  2.<input type="text" name="q2" value="<?php 
   echo $qs2[0];
?>"> 
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
      <p>
    a.<input type="text" name="a2" value="<?php 
      echo $qs2[1];?>">
  </p>
  <p>
    b.<input type="text" name="b2" value="<?php 
      echo $qs2[2];?>">
  </p>
  <p>
    c.<input type="text" name="c2" value="<?php 
      echo $qs2[3];?>">
  </p>
  <p>
    d.<input type="text" name="d2" value="<?php 
      echo $qs2[4];?>">
  </p>
  </div>
</div>
</div>
<br />
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
</div>
</div>
3.<input type="text" name="q3" value="<?php 
   echo $qs3[0];
?>"> 
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
      <p>
    a.<input type="text" name="a3" value="<?php 
      echo $qs3[1];?>">
  </p>
  <p>
    b.<input type="text" name="b3" value="<?php 
      echo $qs3[2];?>">
  </p>
  <p>
    c.<input type="text" name="c3" value="<?php 
      echo $qs3[3];?>">
  </p>
  <p>
    d.<input type="text" name="d3" value="<?php 
      echo $qs3[4];?>">
  </p>
  </div>
</div>
</div>
<br />
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
</div>
</div>
4.<input type="text" name="q4" value="<?php 
   echo $qs4[0];
?>"> 
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
      <p>
    a.<input type="text" name="a4" value="<?php 
      echo $qs4[1];?>">
  </p>
  <p>
    b.<input type="text" name="b4" value="<?php 
      echo $qs4[2];?>">
  </p>
  <p>
    c.<input type="text" name="c4" value="<?php 
      echo $qs4[3];?>">
  </p>
  <p>
    d.<input type="text" name="d4" value="<?php 
      echo $qs4[4];?>">
  </p>
    </div>
</div>
</div>
<br />
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
</div>
</div>
5.<input type="text" name="q5" value="<?php 
   echo $qs5[0];
?>"> 
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
      <p>
    a.<input type="text" name="a5" value="<?php 
      echo $qs1[1];?>">
  </p>
  <p>
    b.<input type="text" name="b5" value="<?php 
      echo $qs1[2];?>">
  </p>
  <p>
    c.<input type="text" name="c5" value="<?php 
      echo $qs1[3];?>">
  </p>
  <p>
    d.<input type="text" name="d5" value="<?php 
      echo $qs1[4];?>">
  </p>
  </div>
</div>
</div>
<br />
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
</div>
</div>
6.<input type="text" name="q6" value="<?php 
   echo $qs6[0];
?>"> 
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
  <p>
    a.<input type="text" name="a6" value="<?php 
      echo $qs6[1];?>">
  </p>
  <p>
    b.<input type="text" name="b6" value="<?php 
      echo $qs6[2];?>">
  </p>
  <p>
    c.<input type="text" name="c6" value="<?php 
      echo $qs6[3];?>">
  </p>
  </div>

</div>
</div>
<br />
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
</div>
</div>
7.<input type="text" name="q7" value="<?php 
   echo $qs7[0];
?>">
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
          <p>
    a.<input type="text" name="a7" value="<?php 
      echo $qs7[1];?>">
  </p>
  <p>
    b.<input type="text" name="b7" value="<?php 
      echo $qs7[2];?>">
  </p>
  <p>
    c.<input type="text" name="c7" value="<?php 
      echo $qs7[3];?>">
  </p>
  </div>
</div>
</div>
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
</div>
</div>
8.<input type="text" name="q8" value="<?php 
   echo $qs8[0];
?>"> 
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
    a.<input type="text" name="a8" value="<?php 
      echo $qs8[1];?>">
  </p>
  <p>
    b.<input type="text" name="b8" value="<?php 
      echo $qs8[2];?>">
  </p>
  <p>
    c.<input type="text" name="c8" value="<?php 
      echo $qs8[3];?>">
  </p>
  </div>
</div>
</div>
<div class="row">
<div class="col-sm-offset-10 col-sm-2">
</div>
</div>
9.<input type="text" name="q9" value="<?php 
   echo $qs9[0];
?>"> 
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
  <p>
    a.<input type="text" name="a9" value="<?php 
      echo $qs9[1];?>">
  </p>
  <p>
    b.<input type="text" name="b9" value="<?php 
      echo $qs9[2];?>">
  </p>
  <p>
    c.<input type="text" name="c9" value="<?php 
      echo $qs9[3];?>">
  </p>
</form>
  </div>
</div>
</div>
<a href="edit_questions.php"><button class="btn btn-primary btn-xs green" name="save">Save</button></a>   
<?php
}
?>
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
