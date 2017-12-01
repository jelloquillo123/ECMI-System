<?php 
  session_start();
  require 'connect.php';
  $username = ($_SESSION['username']);
  $password = ($_SESSION['password']);
  $stud=mysqli_query($db,"SELECT student.stud_id,student.fname,student.mname,student.lname,student.g_level,student.gender,student.age,student.fam_id
  FROM student 
  JOIN account
  ON student.account_id=account.account_id
  WHERE account.username='$username' and account.pword='$password'");
  $stud_det=mysqli_fetch_row($stud);
  $cou=mysqli_query($db,"SELECT country_id,country_name FROM country");
  $par=mysqli_query($db,"SELECT job_id,job_name FROM job");
  
   



  if(isset($_POST['submit']))
  {
    $v1 = $_POST['q1'];
    $v2 = $_POST['q2'];
    $v3 = $_POST['q3'];
    $v4 = $_POST['q4'];
    $v5 = $_POST['q5'];
    $v6 = $_POST['q6'];
    $v7 = $_POST['q7'];
    $v8 = $_POST['q8'];
    $v9 = $_POST['q9'];
    $p1 = $_POST['parent'];
    $p2 = $_POST['country'];
    $p3 = $_POST['work'];
    $p4 = $_POST['duration'];
    $p5 = $_POST['when'];
   


//$st=mysqli_query($db,"SELECT stud_id FROM student 
//JOIN account
//ON student.account_id=account.account_id WHERE username='$username'");



$d=mysqli_fetch_row($st);

$pare=mysqli_query($db,"SELECT parent_id FROM parent");
while($pp=mysqli_fetch_assoc($pare))
    {
      $pares=$pp['parent_id'];
    }

      $pares=$pares+1;
    
    mysqli_query($db,"INSERT INTO parent
    (parent_who,country_id,job_id,years_stay,parent_when)
    VALUES ('$p1','$p2','$p3','$p4','$p5')");
    

    mysqli_query($db, "INSERT INTO pre_test 
    (stud_id,question_1,question_2,question_3,question_4,question_5,question_6,question_7,question_8,question_9) 
    VALUES ('$stud_det[0]','$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9')");
    
     mysqli_query($db, "INSERT INTO family (fam_id,parent_id)
        VALUES ('$stud_det[7]','$pares')");

    header("Location:student.php");
  }
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
    <link href="css/footable.bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="stylessdofp.css">

    <style type="text/css">
    .content_body{
      background-color: #00c853;
    }
    </style>
    
  </head>
<body data-spy="scroll">
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
                <a class="navbar-brand" href="student.php">Student</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <p class="navbar-text" style="color: #f5f5f5;"><?php echo $stud_det[1]." ".$stud_det[2]." ".$stud_det[3] ?></p>
                      <li class="button">
                        <a href="index.php"><span class="glyphicon glyphicon-log-out"></span><b> Logout</b></a>
                      </li>
                </ul>
              </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <div class="container-fluid content_body" style="background-color: #00c853; margin-top: 60px; padding-bottom: 20px;">
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
          
        </div>
      </div>
    </div>
<?php 
if($stud_det[4] =='1' || $stud_det[4] =='2' || $stud_det[4] =='3')
{
?>
	<!--Pre-Awareness Testing Form -->
  <div class="container-fluid content_body" style="font-family:mySecondFont;">
    <div class="row">
    <div class="col-md-offset-1 col-md-10 col-md-offset-1">

  <div class="well">

	<div class="row">
	<div class="col-sm-4">
    <h4 style="font-family:papyrus;" align="left"><b>Sons and Daughters of OFW</b></h4>
  </div>
  <div class="col-sm-offset-4 col-sm-4">
    <h5 align="right"><b>ECMI INSTRUMENT 2A</b></h5>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-4">
    <h5 align="left"><b>Pre-Awareness Test(PAT)</b></h5>
  </div>
  </div>
  <hr />
  <div class="well">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" class="form-inline">
  				<div class="form-group">
  					<label for="name">Pangalan: </label>
  					<?php echo $stud_det[1]." ".$stud_det[2]." ".$stud_det[3]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?>
            <label for="age">Edad:</label>
            <?php echo $stud_det[6]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?>
            <label for="gender">Kasarian:</label>
            <?php echo $stud_det[5]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?>
            <label for="grade">Baitang:</label>
            <?php echo $stud_det[4]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?>
  				</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
          <div class="form-group">
          <div class="radio">
            <label for="parentgender">Magulang na nagtatrabaho sa ibang bansa(Tatay/Nanay/Pareho):</label>
            <select name="parent" id="parentgender" class="form-control input-sm" required>
            <option value="">Pumili...</option>
            <option value="nanay">Nanay</option>
            <option value="tatay">Tatay</option>
            <option value="pareho">Pareho</option>
            </select>
            </div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
            <label for="parent_country">Saang bansa nagtatrabaho:</label>
            <select name="country" id="parent_country" class="form-control input-sm" required>
            <option value="" >Pumili...</option>
            <?php
            while($res=mysqli_fetch_row($cou)){
            ?>
            <option style="font-family: arial" value="<?php echo $res[0];?>"><?php echo $res[1];?></option>
            <?php
            }
            ?>
            </select>
            </div>
          </div>
       </div>
    <div class="row">
      <div class="col-md-6">
          <div class="form-group">
            <label for="parent_work">Anong trabaho:</label>
            <select name="work" id="parent_work" class="form-control input-sm" required>
            <option value="">Pumili</option>
            <?php while($p=mysqli_fetch_row($par)){
            ?>
            <option value="<?php echo $p[0]?>"><?php echo $p[1];?></option>
            <?php
            }
            ?>
            </select>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
            <label for="duration">Ilang taon ng nagtatrabaho sa ibang bansa:</label>
            <select name="duration" id="duration" class="form-control input-sm" required>
            <option value="">Pumili...</option>
            <option value="1">1-3 years</option>
            <option value="2">4-6 years</option>
            <option value="3">7-10 years</option>
            <option value="4">10-15 years</option>
            <option value="5">16-20 years</option>
           
            </select>
          </div>
    </div>
    </div>  
    <div class="row">
    <div class="col-md-6">
            <div class="form-group">
            <label for="when">Gaano kadalas umuwi:</label>
            <select name="when" id="when" class="form-control input-sm" required>
            <option value="">Pumili...</option>
            <option value="1">1 beses sa isang taon</option>
            <option value="2">2 beses sa isang taon</option>
            <option value="3">3 beses sa isang taon</option>
            <option value="4">4 beses sa isang taon</option>
            <option value="5">5 beses sa isang taon</option>
            </select>
            </div>
      </div>
    </div>






<?php

$qt1=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group=$stud_det[4] AND questions.q_num='1' ");
$qs1=mysqli_fetch_row($qt1);

$qt2=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group=$stud_det[4] AND questions.q_num='2' ");
$qs2=mysqli_fetch_row($qt2);

$qt3=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group=$stud_det[4] AND questions.q_num='3' ");
$qs3=mysqli_fetch_row($qt3);

$qt4=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group=$stud_det[4] AND questions.q_num='4' ");
$qs4=mysqli_fetch_row($qt4);

$qt5=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group=$stud_det[4] AND questions.q_num='5' ");
$qs5=mysqli_fetch_row($qt5);

$qt6=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group=$stud_det[4] AND questions.q_num='6' ");
$qs6=mysqli_fetch_row($qt6);

$qt7=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group=$stud_det[4] AND questions.q_num='7' ");
$qs7=mysqli_fetch_row($qt7);

$qt8=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group=$stud_det[4] AND questions.q_num='8' ");
$qs8=mysqli_fetch_row($qt8);

$qt9=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group=$stud_det[4] AND questions.q_num='9' ");
$qs9=mysqli_fetch_row($qt9);

?>



<h4 align="center">Piliin ang mga naaangkop na sagot.</h4>
<p > 1.

<?php
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
    <label for="b1">b.<?php
echo $qs1[2];

?></label>
  </p>
  <p>
    <input id="c1" type="radio" name="q1" value="c" required>
    <label for="c1">c.<?php
echo $qs1[3];

?></label>
  </p>
  <p>
    <input id="d1" type="radio" name="q1" value="d" required>
    <label for="d1">d. <?php
echo $qs1[4];

?></label>
  </p>
  <p>
    <input id="e1" type="radio" name="q1" value="e" required>
    <label for="e1">e. kwik kwik</label>
  </p>
</div>
</div>
</div>
<br />
<p >
  2.  <?php
echo $qs2[0];

?>
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a2" type="radio" name="q2" value="a" required>
      <label for="a2">a.<?php
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
      <label for="c2">c. <?php
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
      <label for="b4">b.<?php
echo $qs4[2];

?></label>
    </p>
    <p>
      <input id="c4" type="radio" name="q4" value="c" required>
      <label for="c4">c.<?php
echo $qs4[3];

?> </label>
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
<p>
5. <?php
echo $qs5[0];

?>
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a5" type="radio" name="q5" value="a" required>
      <label for="a5">a. <?php
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
      <label for="c5">d.<?php
echo $qs5[4];

?></label>
    </p>


  </div>
</div>
</div>
<br />
<p>
6.	<?php
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
      <label for="b6">b. <?php
echo $qs6[2];

?></label>
    </p>
    <p>
      <input id="c6" type="radio" name="q6" value="c" required>
      <label for="c6">c. <?php
echo $qs6[3];

?></label>
    </p>

        <p>
      <input id="c6" type="radio" name="q6" value="c" required>
      <label for="c6">d. <?php
echo $qs6[4];

?></label>
    </p>
  </div>

</div>
</div>
<br />
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
      <label for="a7">a. <?php
echo $qs7[1];

?></label>
    </p>
    <p>
      <input id="b7" type="radio" name="q7" value="b" required>
      <label for="b7">b.<?php
echo $qs7[2];

?></label>
    </p>
    <p>
      <input id="c7" type="radio" name="q7" value="c" required>
      <label for="c7">c.<?php
echo $qs7[3];

?></label>
    </p>
  <p>
      <input id="c7" type="radio" name="q7" value="c" required>
      <label for="c7">d.<?php
echo $qs7[4];

?></label>
    </p>

  </div>
</div>
</div>
<p>
8. <?php
echo $qs8[0];

?>
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="left">
    <p>
      <input id="a8" type="radio" name="q8" value="a" required>
      <label for="a8">a.<?php
echo $qs8[1];

?></label>
    </p>
    <p>
      <input id="b8" type="radio" name="q8" value="b" required>
      <label for="b8">b.<?php
echo $qs8[2];

?></label>
    </p>
    <p>
      <input id="c8" type="radio" name="q8" value="c" required>
      <label for="c8">c.<?php
echo $qs8[3];

?></label>
    </p>

    <p>
      <input id="c8" type="radio" name="q8" value="c" required>
      <label for="c8">d.<?php
echo $qs8[4];

?></label>
    </p>
  </div>
</div>
</div>
<p>
9. <?php
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
      <label for="b9">b.<?php
echo $qs9[2];

?></label>
    </p>
    <p>
      <input id="c9" type="radio" name="q9" value="c" required>
      <label for="c9">c.<?php
echo $qs9[3];

?></label>
    </p>
  <p>
      <input id="c9" type="radio" name="q9" value="c" required>
      <label for="c9">d.<?php
echo $qs9[4];

?></label>
    </p>


  </div>
</div>
</div>

<!--Pre-Awareness Button  -->
<div class="container">
    <div class="row">
    <div class="col-sm-offset-5 col-sm-2 col-sm-offset-5" align="middle">
    <input type="submit" name="submit" class="btn btn-lg btn-primary green" align="center" value="Submit">
    </div>
    </div>
</div>
</form>
<?php
}
else if($stud_det[4] =='4' || $stud_det[4] =='5' || $stud_det[4] =='6')
{
?>
  
<?php
}
?>



	
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>

</body>
</html>
