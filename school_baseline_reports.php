<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'connect.php';
require 'school_reportsdb.php';
require 'school_maindb.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SDOFP-ECMI</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/sdofp-styles.css">
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    var widthdata=350;
    var heightdata=300;

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(country);
      google.charts.setOnLoadCallback(yearsofstay);
      google.charts.setOnLoadCallback(parent);
      google.charts.setOnLoadCallback(parentjob);
      google.charts.setOnLoadCallback(totg);
      google.charts.setOnLoadCallback(Q1);
      google.charts.setOnLoadCallback(Q2);
      google.charts.setOnLoadCallback(Q3);
      google.charts.setOnLoadCallback(Q4);
      google.charts.setOnLoadCallback(Q5);
      google.charts.setOnLoadCallback(Q6);
      google.charts.setOnLoadCallback(Q7);
      google.charts.setOnLoadCallback(Q8);
      google.charts.setOnLoadCallback(Q9);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.



      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['Male', <?php echo $totm1[0];?>],
          ['Female', <?php echo $totf1[0];?>]
          ]);

        // Set chart options
        var options = {'title':'Range of SDOFP Population Gender',
        'width':widthdata,
        'height':heightdata,
        'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }


      function country() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['Asia', <?php echo $cnr1[0];?>],
          ['Europe', <?php echo $eur1[0];?>],
          ['North America', <?php echo $nar1[0];?>],
          ['Oceania', <?php echo $ocr1[0];?>],
          ['Others', <?php echo $otr1[0];?>],
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
          ['1-3 years', <?php echo $ytr1[0];?>],
          ['4-6 years', <?php echo $yrr1[0];?>],
          ['7-10 years', <?php echo $yer1[0];?>],
          ['11-15 years', <?php echo $yqr1[0];?>],
          ['16-20 years', <?php echo $ywr1[0];?>],
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
          ['Mother', <?php echo $pdf2[0];?>],
          ['Father',<?php echo $psm1[0];?>],
          ['Both', <?php echo $pnr1[0];?>]
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
          ['Landbased', <?php echo $lbm1[0];?>],
          ['Seabased',<?php echo $sbm1[0];?>]
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
      

      
      function totg() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['Grade 1', <?php echo $jr1[0];?>],
          ['Grade 2', <?php echo $jr2[0];?>],
          ['Grade 3', <?php echo $jr3[0];?>],
          ['Grade 4', <?php echo $jr4[0];?>],
          ['Grade 5', <?php echo $jr5[0];?>],
          ['Grade 6', <?php echo $jr6[0];?>],
          ['Grade 7', <?php echo $jr7[0];?>],
          ['Grade 8', <?php echo $jr8[0];?>],
          ['Grade 9', <?php echo $jr9[0];?>],
          ['Grade 10', <?php echo $jr10[0];?>]

          ]);

        // Set chart options
        var options = {'title':'Range of Sons and Daughters of OFW per grade level',
        'width':widthdata,
        'height':heightdata,
        'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('totg'));
        chart.draw(data, options);
      }
    
      
    </script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: #76ff03;" href="school_dashboard.php">School</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                  <p class="navbar-text" style="color: #e5e5e5;"><?php echo $scn[0]; ?></p>
                </li>                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $coor_name; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="school_students.php"><i class="glyphicon glyphicon-user"></i> Students</a>
                    </li>
                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#reports"><i class="fa fa-fw fa-bar-chart-o"></i>  Reports <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="reports" class="collapse">
                            <li>
                                <a href="school_baseline_reports.php">Baseline Data Summary Results</a>
                            </li>
                            <li>
                                <a href="school_pat_reports.php">Pre Awareness Test Summary Results</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


        <div id="main-body">

            <div class="container-fluid">


                <!-- /.row -->

                <div class="row" id="body-content">
                    <div class="col-lg-12">
                        <div class="well">
                            <h2>Baseline Data Summary Results</h2>
                            <h4><?php echo $scn[0]; ?></h4>

                            <div class="row" style="padding-top: 20px;">
                                <div class="col-lg-12">

                                  <div class="table-responsive">
                                    <table class="table table-hover table-bordered" style="background-color:#fff;">
                                      <tr>
                                        <th rowspan="2">GRADE/YEAR LEVEL</th>
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
                                        <th>16+</th>
                                      </tr>
                                      <tr>
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
                                      <tr>
                                        <td>GRADE 2</td>
                                        <td><?php echo $jr2[0];  ?></td>
                                        <td><?php echo $gen2[0];  ?></td>
                                        <td><?php echo $gen12[0];  ?></td>
                                        <td><?php echo $pp2[0]; ?></td>
                                        <td><?php echo $ps2[0]; ?></td>
                                        <td><?php echo $pn2[0]; ?></td>
                                        <td><?php echo $lb2[0]; ?></td>
                                        <td><?php echo $sb2[0]; ?></td>
                                        <td><?php echo $cn2[0]; ?></td>
                                        <td><?php echo $eu2[0]; ?></td>
                                        <td><?php echo $na2[0]; ?></td>
                                        <td><?php echo $oc2[0]; ?></td>
                                        <td><?php echo $ot2[0]; ?></td>
                                        <td><?php echo $yt2[0]; ?></td>
                                        <td><?php echo $yr2[0]; ?></td>
                                        <td><?php echo $ye2[0]; ?></td>
                                        <td><?php echo $yq2[0]; ?></td>
                                        <td><?php echo $yw2[0]; ?></td>
                                      </tr>
                                      <tr>
                                        <td>GRADE 3</td>
                                        <td><?php echo $jr3[0];  ?></td>
                                        <td><?php echo $gen3[0];  ?></td>
                                        <td><?php echo $gen13[0];  ?></td>
                                        <td><?php echo $pp3[0]; ?></td>
                                        <td><?php echo $ps3[0]; ?></td>
                                        <td><?php echo $pn3[0]; ?></td>
                                        <td><?php echo $lb3[0]; ?></td>
                                        <td><?php echo $sb3[0]; ?></td>
                                        <td><?php echo $cn3[0]; ?></td>
                                        <td><?php echo $eu3[0]; ?></td>
                                        <td><?php echo $na3[0]; ?></td>
                                        <td><?php echo $oc3[0]; ?></td>
                                        <td><?php echo $ot3[0]; ?></td>
                                        <td><?php echo $yt3[0]; ?></td>
                                        <td><?php echo $yr3[0]; ?></td>
                                        <td><?php echo $ye3[0]; ?></td>
                                        <td><?php echo $yq3[0]; ?></td>
                                        <td><?php echo $yw3[0]; ?></td>
                                      </tr>
                                      <tr>
                                        <td>GRADE 4</td>
                                        <td><?php echo $jr4[0];  ?></td>
                                        <td><?php echo $gen4[0];  ?></td>
                                        <td><?php echo $gen14[0];  ?></td>
                                        <td><?php echo $pp4[0]; ?></td>
                                        <td><?php echo $ps4[0]; ?></td>
                                        <td><?php echo $pn4[0]; ?></td>
                                        <td><?php echo $lb4[0]; ?></td>
                                        <td><?php echo $sb4[0]; ?></td>
                                        <td><?php echo $cn4[0]; ?></td>
                                        <td><?php echo $eu4[0]; ?></td>
                                        <td><?php echo $na4[0]; ?></td>
                                        <td><?php echo $oc4[0]; ?></td>
                                        <td><?php echo $ot4[0]; ?></td>
                                        <td><?php echo $yt4[0]; ?></td>
                                        <td><?php echo $yr4[0]; ?></td>
                                        <td><?php echo $ye4[0]; ?></td>
                                        <td><?php echo $yq4[0]; ?></td>
                                        <td><?php echo $yw4[0]; ?></td>
                                      </tr>
                                      <tr>
                                        <td>GRADE 5</td>
                                        <td><?php echo $jr5[0];  ?></td>
                                        <td><?php echo $gen5[0];  ?></td>
                                        <td><?php echo $gen15[0];  ?></td>
                                        <td><?php echo $pp5[0]; ?></td>
                                        <td><?php echo $ps5[0]; ?></td>
                                        <td><?php echo $pn5[0]; ?></td>
                                        <td><?php echo $lb5[0]; ?></td>
                                        <td><?php echo $sb5[0]; ?></td>
                                        <td><?php echo $cn5[0]; ?></td>
                                        <td><?php echo $eu5[0]; ?></td>
                                        <td><?php echo $na5[0]; ?></td>
                                        <td><?php echo $oc5[0]; ?></td>
                                        <td><?php echo $ot5[0]; ?></td>
                                        <td><?php echo $yt5[0]; ?></td>
                                        <td><?php echo $yr5[0]; ?></td>
                                        <td><?php echo $ye5[0]; ?></td>
                                        <td><?php echo $yq5[0]; ?></td>
                                        <td><?php echo $yw5[0]; ?></td>
                                      </tr>
                                      <tr>
                                        <td>GRADE 6</td>
                                        <td><?php echo $jr6[0];  ?></td>
                                        <td><?php echo $gen6[0];  ?></td>
                                        <td><?php echo $gen16[0];  ?></td>
                                        <td><?php echo $pp6[0]; ?></td>
                                        <td><?php echo $ps6[0]; ?></td>
                                        <td><?php echo $pn6[0]; ?></td>
                                        <td><?php echo $lb6[0]; ?></td>
                                        <td><?php echo $sb6[0]; ?></td>
                                        <td><?php echo $cn6[0]; ?></td>
                                        <td><?php echo $eu6[0]; ?></td>
                                        <td><?php echo $na6[0]; ?></td>
                                        <td><?php echo $oc6[0]; ?></td>
                                        <td><?php echo $ot6[0]; ?></td>
                                        <td><?php echo $yt6[0]; ?></td>
                                        <td><?php echo $yr6[0]; ?></td>
                                        <td><?php echo $ye6[0]; ?></td>
                                        <td><?php echo $yq6[0]; ?></td>
                                        <td><?php echo $yw6[0]; ?></td>
                                      </tr>
                                      <tr>
                                        <td>GRADE 7</td>
                                        <td><?php echo $jr7[0];  ?></td>
                                        <td><?php echo $gen7[0];  ?></td>
                                        <td><?php echo $gen17[0];  ?></td>
                                        <td><?php echo $pp7[0]; ?></td>
                                        <td><?php echo $ps7[0]; ?></td>
                                        <td><?php echo $pn7[0]; ?></td>
                                        <td><?php echo $lb7[0]; ?></td>
                                        <td><?php echo $sb7[0]; ?></td>
                                        <td><?php echo $cn7[0]; ?></td>
                                        <td><?php echo $eu7[0]; ?></td>
                                        <td><?php echo $na7[0]; ?></td>
                                        <td><?php echo $oc7[0]; ?></td>
                                        <td><?php echo $ot7[0]; ?></td>
                                        <td><?php echo $yt7[0]; ?></td>
                                        <td><?php echo $yr7[0]; ?></td>
                                        <td><?php echo $ye7[0]; ?></td>
                                        <td><?php echo $yq7[0]; ?></td>
                                        <td><?php echo $yw7[0]; ?></td>
                                      </tr>
                                      <tr>
                                        <td>GRADE 8</td>
                                        <td><?php echo $jr8[0];  ?></td>
                                        <td><?php echo $gen8[0];  ?></td>
                                        <td><?php echo $gen18[0];  ?></td>
                                        <td><?php echo $pp8[0]; ?></td>
                                        <td><?php echo $ps8[0]; ?></td>
                                        <td><?php echo $pn8[0]; ?></td>
                                        <td><?php echo $lb8[0]; ?></td>
                                        <td><?php echo $sb8[0]; ?></td>
                                        <td><?php echo $cn8[0]; ?></td>
                                        <td><?php echo $eu8[0]; ?></td>
                                        <td><?php echo $na8[0]; ?></td>
                                        <td><?php echo $oc8[0]; ?></td>
                                        <td><?php echo $ot8[0]; ?></td>
                                        <td><?php echo $yt8[0]; ?></td>
                                        <td><?php echo $yr8[0]; ?></td>
                                        <td><?php echo $ye8[0]; ?></td>
                                        <td><?php echo $yq8[0]; ?></td>
                                        <td><?php echo $yw8[0]; ?></td>
                                      </tr>
                                      <tr>
                                        <td>GRADE 9</td>
                                        <td><?php echo $jr9[0];  ?></td>
                                        <td><?php echo $gen9[0];  ?></td>
                                        <td><?php echo $gen19[0];  ?></td>
                                        <td><?php echo $pp9[0]; ?></td>
                                        <td><?php echo $ps9[0]; ?></td>
                                        <td><?php echo $pn9[0]; ?></td>
                                        <td><?php echo $lb9[0]; ?></td>
                                        <td><?php echo $sb9[0]; ?></td>
                                        <td><?php echo $cn9[0]; ?></td>
                                        <td><?php echo $eu9[0]; ?></td>
                                        <td><?php echo $na9[0]; ?></td>
                                        <td><?php echo $oc9[0]; ?></td>
                                        <td><?php echo $ot9[0]; ?></td>
                                        <td><?php echo $yt9[0]; ?></td>
                                        <td><?php echo $yr9[0]; ?></td>
                                        <td><?php echo $ye9[0]; ?></td>
                                        <td><?php echo $yq9[0]; ?></td>
                                        <td><?php echo $yw9[0]; ?></td>
                                      </tr>
                                      <tr>
                                        <td>GRADE 10</td>
                                        <td><?php echo $jr10[0];  ?></td>
                                        <td><?php echo $gen10[0];  ?></td>
                                        <td><?php echo $gen20[0];  ?></td>
                                        <td><?php echo $pp10[0]; ?></td>
                                        <td><?php echo $ps10[0]; ?></td>
                                        <td><?php echo $pn10[0]; ?></td>
                                        <td><?php echo $lb10[0]; ?></td>
                                        <td><?php echo $sb10[0]; ?></td>
                                        <td><?php echo $cn10[0]; ?></td>
                                        <td><?php echo $eu10[0]; ?></td>
                                        <td><?php echo $na10[0]; ?></td>
                                        <td><?php echo $oc10[0]; ?></td>
                                        <td><?php echo $ot10[0]; ?></td>
                                        <td><?php echo $yt10[0]; ?></td>
                                        <td><?php echo $yr10[0]; ?></td>
                                        <td><?php echo $ye10[0]; ?></td>
                                        <td><?php echo $yq10[0]; ?></td>
                                        <td><?php echo $yw10[0]; ?></td>
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
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="text-align: center;">
                                    <a href="print_school_baseline_reports.php" class="btn btn-primary"> Print <span class="glyphicon glyphicon-print"></span></a>
                                </div> 
                            </div>

                            <h3 align="center">Significant Findings</h3><hr>
                            <!-- Google Charts -->
                            <div id="charts">
                              <div class="row">
                                <div class="col-md-offset-1 col-md-3">
                                  <div id="chart_div"></div>
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
                        <!--/. Well -->
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/footable.min.js"></script>
    <script type="text/javascript">
      $("#schooltb").footable();
    </script>

</body>

</html>
