<?php
    session_start();
    require 'connect.php';
   $dio=mysqli_query($db,"SELECT * FROM diocese ORDER BY diocese_name");
    $dion=mysqli_fetch_row($dio);
    
      if(isset($_POST['submit'])){
        $tots=mysqli_query($db,"SELECT school.school_name,diocese.diocese_name 
            FROM school 
            JOIN diocese ON school.diocese_id=diocese.diocese_id
            WHERE diocese_id='$dion[0]'");
        $tots1=mysqli_fetch_row($tots);
?>
    <!--Table Results -->
    <div class="container-fluid green" style="font-family:mySecondFont;" id="div2">
    <br />
    <br />
    <div class="row">
    <div class="col-sm-12">
      <div class="well" align="center">
        <div class="row">
        <div class="col-sm-5">
        <h3 align="left">Baseline Data Summary Results</h3>
        <h3 align="left">Diocese of <?php echo $dion[1];?></h3>
        </div>
      <br/>
      <div class="table-responsive">
      <table class="table table-hover table-bordered" style="background-color:#fff;">
      <tr>
        <th rowspan="2">SCHOOL</th>
        <th colspan="3">Number of SDO</th>
        <th colspan="5">SDO Parents Category</th>
        <th colspan="5">Country</th>
        <th colspan="5">Years of Stay Overseas</th>
      </tr>
      <tr>
        <th>Total</th>
        <th>Male</th>
        <th>Female</th>
        <th>Mother</th>
        <th>Father</th>
        <th>Both</th>
        <th>LB</th>
        <th>SB</th>
        <th>Asia</th>
        <th>Middle East</th>
        <th>USA</th>
        <th>Europe</th>
        <th>Others</th>
        <th>1-3</th>
        <th>4-6</th>
        <th>7-10</th>
        <th>11-15</th>
        <th>16-20</th>
      </tr>
      <?php 
      while($tots1=mysqli_fetch_row($tots)){
        echo "<tr>";
        echo "<td>".$tots1[0]."</td>";
        echo "</tr>";
        }
        ?>
      <tr>
        <th>GRAND TOTAL</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      </table>
    </div>
    </div>
    </div>
    </div>
  </div>
<div class="container-fluid green" style="font-family:mySecondFont;" id="div3">
    <br />
    <br />
    <div class="row">
    <div class="col-sm-12">
      <div class="well" align="center">
        <div class="row">
        <div class="col-sm-5">
        <h3 align="left">Pre Awareness Test Summary Baseline</h3>
        </div>
        <div class="col-sm-offset-2 col-sm-5">
        </div>
        </div>
      <br />
  <div class="table-responsive">
  <table class="table table-hover table-bordered" style="background-color:#fff;">
  <tr>
    <th rowspan="3">GRADE/YEAR LEVEL</th>
    <th colspan="35">Questionnaires Number</th>
  </tr>
  <tr>
    <th colspan="5">PAT Question 1</th>
    <th colspan="5">PAT Question 2</th>
    <th colspan="5">PAT Question 3</th>
    <th colspan="5">PAT Question 4</th>
    <th colspan="3">PAT Question 5</th>
    <th colspan="3">PAT Question 6</th>
    <th colspan="3">PAT Question 7</th>
    <th colspan="3">PAT Question 8</th>
    <th colspan="3">PAT Question 9</th>
  </tr>
  <tr>
    <!--Question1-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question2-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question3-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question4-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question5-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question6-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question7-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question8-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question9-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
  </tr>
  <tr>
    <th>GRADE 4</th>
    <td><?php echo $dion[0];?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>GRADE 5</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>GRADE 6</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Sub Total</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>GRADE 7</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>GRADE 8</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>GRADE 9</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>GRADE 10</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Sub Total</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
</div>
<?php
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
    <link rel="stylesheet" href="css/materialize.min.css">

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
                        <a href="#div2">Diocese Results</a>
                    </li>
                    <li>
                        <a href="#div3">PAT Summary Results</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="admin_schools.php">Schools</a>
                  </li>
                  <li>
                      <a href="admin_students.php">Students</a>
                  </li>
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
    <div class="container-fluid green" style="font-family:myFirstFont">
      <br />
      <div class="card-panel white z-depth-3">
        <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4" style="padding-top:35px;">
            <img src="pictures/logo.jpg" class="img-responsive logo" alt="ECMI LOGO" />
          </div>
          <div class="col-lg-8 text-center">
            <div class="page-header">
              <h1 class="display-3">ECMI-Sons and Daughters of OFW Program Website</h1>
            </div>
            <footer>
              <p style="font-size:17px;">
                The migrant is to be considered, not merely as an instrument of production but as a subject endowed with human dignity -Pope John Paul II
              </p>
            </footer>
          </div>
        </div>
        <!-- /.row -->
      </div>
    </div>
  </div>
        <div class="col-sm-offset-3 col-sm-2">
        <div class="dropdown">
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
        <div class="col-sm-2">
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
    </div>
        



	
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>

</body>

</html>
