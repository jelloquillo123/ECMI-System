<?php
  session_start();
  require 'connect.php';
  require 'admin_schoolsdb.php';
  require 'admin_reportdb.php';

?>
<html lang="en">
  <head>   
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      var widthdata=350;
      var heightdata=300;

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(gendertable);
      google.charts.setOnLoadCallback(country);
      google.charts.setOnLoadCallback(yearsofstay);
      google.charts.setOnLoadCallback(parent);
      google.charts.setOnLoadCallback(parentjob);

     

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.



      function gendertable() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['Male', <?php echo $info[1];?>],
          ['Female', <?php echo $info[2];?>]
        ]);

        // Set chart options
        var options = {'title':'Range of SDOFP Population Gender',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('gendertable'));
        chart.draw(data, options);
      }


      function country() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['Asia', <?php echo $info[9];?>],
          ['Europe', <?php echo $info[10];?>],
          ['North America', <?php echo $info[11];?>],
          ['Oceania', <?php echo $info[12];?>],
          ['Others', <?php echo $info[13];?>],
        ]);

        // Set chart options
        var options = {'title':'Range of Country OFW Distribution',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('country'));
        chart.draw(data, options);
      }


      function yearsofstay() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['1-3 years', <?php echo $info[14];?>],
          ['4-6 years', <?php echo $info[15];?>],
          ['7-10 years', <?php echo $info[16];?>],
          ['11-15 years', <?php echo $info[17];?>],
          ['16-20 years', <?php echo $info[18];?>],
        ]);

        // Set chart options
        var options = {'title':'Range of Years of Stay of OFW',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('yearsofstay'));
        chart.draw(data, options);
      }


      function parent() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['Mother', <?php echo $info[4];?>],
          ['Father',<?php echo $info[5];?>],
          ['Both', <?php echo $info[6];?>]
        ]);

        // Set chart options
        var options = {'title':'Range of Parents OFW',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('parent'));
        chart.draw(data, options);
      }


      function parentjob() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['Landbased', <?php echo $info[7];?>],
          ['Seabased',<?php echo $info[8];?>]
        ]);

        // Set chart options
        var options = {'title':'Range of Parents OFW',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('parentjob'));
        chart.draw(data, options);
      }
      

      
    </script>

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
    #form-group-align{
      margin-left: 150px;
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
    </div>

    <div class="container-fluid cont-body">
      <div class="row">
        <div class="col-md-12">
          <div class="well">
            

            <div class="row">
              <div class="col-md-4">
                <h3 align="left" id="header_table">Baseline Data Summary Results</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <form method="POST">
                
                  <div class="col-md-6">
                    <select name="diocese" id="diocse" class="form-control input-md x">
                      <?php
                      $i=1;
                      while($dion=mysqli_fetch_row($dio)){
                        echo '
                              <option value="'.$dion[0].'">Diocese of '.$dion[1].'</option>
                              ';
                          $i=$i+1;
                      }
                      ?>
                    </select> 
                  </div>
                  <div class="col-md-3">
                    <input type="submit" class="btn btn-primary btn-md" align="center" name="medsubmit" value = "Select Diocese">
                  </div>
                  <div class="col-md-3">
                    <a href="admin_report_print.php" class="btn btn-primary"> PRINT <span class="glyphicon glyphicon-print"></span></a>
                  </div>
                
               </form>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
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
                      <th>Europe</th>
                      <th>North America</th>
                      <th>Oceania</th>
                      <th>Others</th>
                      <th>1-3</th>
                      <th>4-6</th>
                      <th>7-10</th>
                      <th>11-15</th>
                      <th>16-20</th>
                    </tr>     
                    


             <?php 
                     
                     while($school=mysqli_fetch_row($school_sql))
                     {   

$info1_sql=mysqli_query($db,"SELECT COUNT(stud_id) as 'all', 
(SELECT COUNT(*) FROM student WHERE school_id='$school[0]' AND gender='Male') as 'male',
(SELECT COUNT(*) FROM student WHERE school_id='$school[0]' AND gender='Female') as 'female',
(SELECT COUNT(*) FROM student WHERE school_id='$school[0]'),

(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'tatay' AND d.school_id = '$school[0]') as 'tatay',
(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'nanay' AND d.school_id = '$school[0]') as 'nanay',
(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'pareho' AND d.school_id = '$school[0]') as 'pareho',

(SELECT COUNT(*) FROM parent a INNER JOIN job b ON b.job_id = a.job_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.job_based = 'LB' AND d.school_id = '$school[0]') as 'LB',
(SELECT COUNT(*) FROM parent a INNER JOIN job b ON b.job_id = a.job_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.job_based = 'SB' AND d.school_id = '$school[0]') as 'SB',

(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'AS' AND d.school_id = '$school[0]') as 'AS',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'EU' AND d.school_id = '$school[0]') as 'EU',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'NA' AND d.school_id = '$school[0]') as 'NA',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'OC' AND d.school_id = '$school[0]') as 'OC',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code NOT IN('AS', 'EU', 'NA', 'OC') AND d.school_id = '$school[0]') as 'OTHERS',

(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE     a.years_stay = '1' AND d.school_id = '$school[0]') as '1st',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE     a.years_stay = '2' AND d.school_id = '$school[0]') as '2nd',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE     a.years_stay = '3'AND d.school_id = '$school[0]') as '3rd',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE 
    a.years_stay = '4' AND d.school_id = '$school[0]') as '4th',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE 
    a.years_stay = '5' AND d.school_id = '$school[0]') as '5th'

FROM parent a
JOIN family b ON b.parent_id = a.parent_id
JOIN student d ON d.fam_id = b.fam_id
WHERE d.school_id='$school[0]' ");
$info1=mysqli_fetch_row($info1_sql);

                       echo "<tr>
                              <td>".$school[1]."</td>
                              <td>".$info1[3]."</td>
                              <td>".$info1[1]."</td>
                              <td>".$info1[2]."</td>
                              <td>".$info1[4]."</td>
                              <td>".$info1[5]."</td>
                              <td>".$info1[6]."</td>
                              <td>".$info1[7]."</td>
                              <td>".$info1[8]."</td>
                              <td>".$info1[9]."</td>
                              <td>".$info1[10]."</td>
                              <td>".$info1[11]."</td>
                              <td>".$info1[12]."</td>
                              <td>".$info1[13]."</td>
                              <td>".$info1[14]."</td>
                              <td>".$info1[15]."</td>
                              <td>".$info1[16]."</td>
                              <td>".$info1[17]."</td>
                              <td>".$info1[18]."</td>";  
                     }

              

                       echo "<tr>
                              <td><b>TOTAL:</b> </td>
                              <td><b>".$info[3]."</b></td>
                              <td><b>".$info[1]."</b></td>
                              <td><b>".$info[2]."</b></td>
                              <td><b>".$info[4]."</b></td>
                              <td><b>".$info[5]."</b></td>
                              <td><b>".$info[6]."</b></td>
                              <td><b>".$info[7]."</b></td>
                              <td><b>".$info[8]."</b></td>
                              <td><b>".$info[9]."</b></td>
                              <td><b>".$info[10]."</b></td>
                              <td><b>".$info[11]."</b></td>
                              <td><b>".$info[12]."</b></td>
                              <td><b>".$info[13]."</b></td>
                              <td><b>".$info[14]."</b></td>
                              <td><b>".$info[15]."</b></td>
                              <td><b>".$info[16]."</b></td>
                              <td><b>".$info[17]."</b></td>
                              <td><b>".$info[18]."</b></td>";   
                   ?>  
                    <!-- <tr>
                      <td>GRADE 1</td>
                      <td><?php echo $jr1[0];  ?></td>
                      <td><?php echo $gen1[0];  ?></td>
                      <td><?php echo $gen11[0];  ?></td>
                      <td><?php echo $pp1[0]; ?></td>
                      <td><?php echo $ps1[0]; ?></td>
                      <td><?php echo $pn1[0]; ?></td>
                      <td><?php echo $lb1[0]; ?></td>
                      <td><?php echo $sb1[0]; ?></td>
                      <td><?php echo $cn1[0]; ?></td>
                      <td><?php echo $eu1[0]; ?></td>
                      <td><?php echo $na1[0]; ?></td>
                      <td><?php echo $oc1[0]; ?></td>
                      <td><?php echo $ot1[0]; ?></td>
                      <td><?php echo $yt1[0]; ?></td>
                      <td><?php echo $yr1[0]; ?></td>
                      <td><?php echo $ye1[0]; ?></td>
                      <td><?php echo $yq1[0]; ?></td>
                      <td><?php echo $yw1[0]; ?></td>
                    </tr>
                    

                    <tr style="font-weight: bold;">
                      <th>GRAND TOTAL</th>
                      <td><?php echo $cu1[0];?></td>
                      <td><?php echo $totm1[0];?></td>
                      <td><?php echo $totf1[0];?></td>
                      <td><?php echo $pdf2[0];?></td>
                      <td><?php echo $psm1[0];?></td>
                      <td><?php echo $pnr1[0];?></td>
                      <td><?php echo $lbm1[0];?></td>
                      <td><?php echo $sbm1[0];?></td>
                      <td><?php echo $cnr1[0];?></td>
                      <td><?php echo $eur1[0];?></td>
                      <td><?php echo $nar1[0];?></td>
                      <td><?php echo $ocr1[0];?></td>
                      <td><?php echo $otr1[0];?></td>
                      <td><?php echo $ytr1[0];?></td>
                      <td><?php echo $yrr1[0];?></td>
                      <td><?php echo $yer1[0];?></td>
                      <td><?php echo $yqr1[0];?></td>
                      <td><?php echo $ywr1[0];?></td>
                    </tr> -->
                    
                  </table>
                </div>
              </div>

            </div>
            <div class="row">
                <div class="col-md-offset-5 col-md-2">
                  <button class="btn btn-primary btn-md" type="button" data-toggle="collapse" data-target="#sigfindbase" aria-expanded="false" aria-controls="sigfindbase">Significant Findings <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></button>
                </div>
              </div>
          </div>
          <div class="collapse" id="sigfindbase">
            
            <div class="well">
              <h3 align="center">Significant Findings</h3><hr>
                <div class="row">
                    <div class="col-md-offset-1 col-md-3">
                      <div id="gendertable"></div>
                    </div>
                    <div class="col-md-3">
                      <div id="country"></div>
                    </div>
                    <div class="col-md-3">
                      <div id="yearsofstay"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-offset-1 col-md-3">
                      <div id="parent"></div>
                    </div>
                    <div class="col-md-3">
                      <div id="parentjob"></div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <div class="row">
    <div class="col-md-offset-2 col-md-8">
    <div class="well">

<?php
$an=$info[1]/$info[3];
$an1=$an*100;

$ansa=$info[2]/$info[3];
$ansa1=$ansa*100;

$ptot=$info[4]+$info[5];
$pans=$info[4]/$ptot;
$pans1=$pans*100;

$pansa=$info[5]/$ptot;
$pansa1=$pansa*100;

$asia="ASIA".$info[9];
$europe="EUROPE".$info[10];
$na="NORTH AMERICA".$info[11];
$oceania="OCENIA".$info[12];
$others="OTHERS".$info[13];





/*$cntry = array($info[9],$info[10],$info[11],$info[12],$info[13]);
sort($cntry,  SORT_NUMERIC);
foreach ($cntry as $key => $val) {
    echo "cntry[" . $key . "] = " . $val . "\n";
}
*/

?>






<h4 align="center">SUMMARY REPORT</h4>
<p align="center"> 1.
<?php


if($info[1]>$info[2])
{
echo "Male ANAK OFW HAS THE HIGHEST PERCENTAGE enrolled with ";
echo number_format((float)$an1, 2, '.', ''); 
}
else
{

echo "Female ANAK OFW HAS THE HIGHEST PERCENTAGE enrolled with ";
echo number_format((float)$ansa1, 2, '.', '');

}




?>

</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
<div class="input-field" align="center">


</div>
</div>
</div>
<br />
<p align="center">
  2.  <?php

    if($info[4]>$info[5])
    {  
      echo "Mother WORKING ABROAD IS THE HIGHEST with ";
      echo number_format((float)$pans1, 2, '.', '');
      echo "% than Father with ";
      echo number_format((float)$pansa1, 2, '.', '');
      echo "%";
    }
    else
   {

     echo "Father WORKING ABROAD IS THE HIGHEST with ";
      echo number_format((float)$pansa1, 2, '.', '');
      echo "% than Mother with ";
      echo number_format((float)$pans1, 2, '.', '');
      echo "%";


   }



  ?>
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="center">
    

    
  </div>
</div>
</div>
<br />
<p align="center">
3.</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="center">


    
  </div>
</div>
</div>
<br />
<p align="center">
4.</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="center">

  </div>
</div>
</div>
<br />
<p align="center">
5. 
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="center">
   


  </div>
</div>
</div>
<br />

<p align="center">
6.  
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="center">

  
  </div>

</div>
</div>
<br />
<p align="center">
7. 
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="center">
   
 

  </div>
</div>
</div>
<p align="center">
8. 
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="center">
  

  </div>
</div>
</div>
<p align="center">
9. 
</p>
<div class="row">
<div class="col-md-offset-2 col-md-6 col-md-offset-4">
  <div class="input-field" align="center">
    

    </div>


</div>
</div>
</div>



      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/footable.min.js"></script>
    <script type="text/javascript">
      $("#schooltb").footable();
    </script>
  </body>
</html>