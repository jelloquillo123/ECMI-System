<?php
    session_start();
    require 'connect.php';
    require 'school_maindb.php'
?>


<!DOCTYPE html>
<html lang="en">
  <head>
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
      


      function Q1() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['A. Galit', <?php echo $s1[0]; ?>],
          ['B. Masaya',<?php echo $s2[0];?>],
          ['C. Malungkot',<?php echo $s3[0];?>],
          ['D. Walang Naramdaman',<?php echo $s4[0];?>],
          ['E. Masama ang loob',<?php echo $s5[0];?>]
        ]);

        // Set chart options
        var options = {'title':'Question 1',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('Q1'));
        chart.draw(data, options);
      }


      function Q2() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['A. Galit', <?php echo $s6[0]; ?>],
          ['B. Masaya',<?php echo $s7[0];?>],
          ['C. Malungkot',<?php echo $s8[0];?>],
          ['D. Walang Naramdaman',<?php echo $s9[0];?>],
          ['E. Masama ang loob',<?php echo $s10[0];?>]
        ]);

        // Set chart options
        var options = {'title':'Question 2',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('Q2'));
        chart.draw(data, options);
      }

      function Q3() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['A. Galit', <?php echo $s11[0]; ?>],
          ['B. Masaya',<?php echo $s12[0];?>],
          ['C. Malungkot',<?php echo $s13[0];?>],
          ['D. Walang Naramdaman',<?php echo $s14[0];?>],
          ['E. Masama ang loob',<?php echo $s15[0];?>]
        ]);

        // Set chart options
        var options = {'title':'Question 3',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('Q3'));
        chart.draw(data, options);
      }


      function Q4() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['A. Sulat', <?php echo $s16[0]; ?>],
          ['B. Telepono',<?php echo $s17[0];?>],
          ['C. Cellphone',<?php echo $s18[0];?>],
          ['D. Voice Tape',<?php echo $s19[0];?>],
          ['E. Email',<?php echo $s20[0];?>]
        ]);

        // Set chart options
        var options = {'title':'Question 4',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('Q4'));
        chart.draw(data, options);
      }

      function Q5() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['A. Masasayang balita tungkol sa pag-aaral at ng pamilya', <?php echo $s21[0]; ?>],
          ['B. Di magagandang balita tungkol sa pag-aaral at ng pamilya',<?php echo $s22[0];?>],
          ['C. Humihingi na padalhan ng mga gamit at pera',<?php echo $s23[0];?>]
        ]);

        // Set chart options
        var options = {'title':'Question 5',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('Q5'));
        chart.draw(data, options);
      }

      function Q6() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['A. Walang trabaho sa Pilipinas', <?php echo $s24[0]; ?>],
          ['B. Maliit ang kita sa Pilipinas',<?php echo $s25[0];?>],
          ['C. Penitisyon ng kamag-anak',<?php echo $s26[0];?>]
        ]);

        // Set chart options
        var options = {'title':'Question 6',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('Q6'));
        chart.draw(data, options);
      }

      function Q7() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['A. Oo', <?php echo $s27[0]; ?>],
          ['B. Hindi',<?php echo $s28[0];?>],
          ['C. Di-tiyak',<?php echo $s29[0];?>]
        ]);

        // Set chart options
        var options = {'title':'Question 7',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('Q7'));
        chart.draw(data, options);
      }

      function Q8() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['A. Oo', <?php echo $s30[0]; ?>],
          ['B. Hindi',<?php echo $s31[0];?>],
          ['C. Di-tiyak',<?php echo $s32[0];?>]
        ]);

        // Set chart options
        var options = {'title':'Question 8',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('Q8'));
        chart.draw(data, options);
      }

      function Q9() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Data');
        data.addRows([
          ['A. Oo', <?php echo $s33[0]; ?>],
          ['B. Hindi',<?php echo $s34[0];?>],
          ['C. Di-tiyak',<?php echo $s35[0];?>]
        ]);

        // Set chart options
        var options = {'title':'Question 9',
                       'width':widthdata,
                       'height':heightdata,
                      'pieHole':0.3};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('Q9'));
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
                <a class="navbar-brand" href="school_main.php">School</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li>
                      <a href="school_main.php">Reports</a>
                  </li>
                  <li>
                      <a href="school_students.php">Students</a>
                  </li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li>
                  <p class="navbar-text" style="color: #f5f5f5;"><?php echo $scn[0]; ?></p>
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
          <br><br>
        </div>
      </div>


      <ul class="nav nav-pills" role="tablist">
        <li role="presentation" style="background-color: white; border-radius: 5px;" class="active"><a href="#div2" aria-controls="div2" role="tab" data-toggle="tab">Baseline Data Summary Results</a></li>
        <li role="presentation" style="background-color: white; border-radius: 5px;"><a href="#div3" aria-controls="div3" role="tab" data-toggle="tab">PAT Summary Results</a></li>
      </ul>

      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="div2">
          <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">
              <div class="well">
                <div class="row">
                  <div class="col-md-5" style="font-family: myFirstFont;">
                    <h3 align="left">Baseline Data Summary Results</h3>
                  </div>
                  <div class="col-md-offset-5 col-md-1">
                    <a href="printry1.php"><button class="btn btn-primary" id="btn-plcmnt"> Print <span class="glyphicon glyphicon-print"></span></button></a>
                  </div>
                </div>
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
                <div class="row">
                <div class="col-md-offset-5 col-md-2">
                  <button class="btn btn-primary btn-md" type="button" data-toggle="collapse" data-target="#sigfindbase" aria-expanded="false" aria-controls="sigfindbase">Significant Findings <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></button>
                </div>
              </div>
              </div>
              
              <div class="collapse" id="sigfindbase">
                <div class="well" style="height: 720px;">
                  <h3 align="center">Significant Findings</h3><hr>
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
                      <div class="col-md-3">
                      <div id="totg"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="div3">
          <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">
              <div class="well">
                <div class="row">
                  <div class="col-md-5" style="font-family: myFirstFont;">
                    <h3 align="left">Pre Awareness Test Summary Baseline</h3>
                  </div>
                  <div class="col-md-offset-6 col-md-1">
                    <a href="printry.php"><button class="btn btn-primary"> Print <span class="glyphicon glyphicon-print"></span></button></a>
                  </div>
                </div>
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
                      <th>GRADE 1</th>
                      <td><?php echo $h_1[0]; ?></td>
                      <td><?php echo $h_2[0]; ?></td>
                      <td><?php echo $h_3[0]; ?></td>
                      <td><?php echo $h_4[0]; ?></td>
                      <td><?php echo $h_5[0]; ?></td>
                      <td><?php echo $h_6[0]; ?></td>
                      <td><?php echo $h_7[0]; ?></td>
                      <td><?php echo $h_8[0]; ?></td>
                      <td><?php echo $h_9[0]; ?></td>
                      <td><?php echo $h_10[0]; ?></td>
                      <td><?php echo $h_11[0]; ?></td>
                      <td><?php echo $h_12[0]; ?></td>
                      <td><?php echo $h_13[0]; ?></td>
                      <td><?php echo $h_14[0]; ?></td>
                      <td><?php echo $h_15[0]; ?></td>
                      <td><?php echo $h_16[0]; ?></td>
                      <td><?php echo $h_17[0]; ?></td>
                      <td><?php echo $h_18[0]; ?></td>
                      <td><?php echo $h_19[0]; ?></td>
                      <td><?php echo $h_20[0]; ?></td>
                      <td><?php echo $h_21[0]; ?></td>
                      <td><?php echo $h_22[0]; ?></td>
                      <td><?php echo $h_23[0]; ?></td>
                      <td><?php echo $h_24[0]; ?></td>
                      <td><?php echo $h_25[0]; ?></td>
                      <td><?php echo $h_26[0]; ?></td>
                      <td><?php echo $h_27[0]; ?></td>
                      <td><?php echo $h_28[0]; ?></td>
                      <td><?php echo $h_29[0]; ?></td>
                      <td><?php echo $h_30[0]; ?></td>
                      <td><?php echo $h_31[0]; ?></td>
                      <td><?php echo $h_32[0]; ?></td>
                      <td><?php echo $h_33[0]; ?></td>
                      <td><?php echo $h_34[0]; ?></td>
                      <td><?php echo $h_35[0]; ?></td>
                    </tr>
                     <tr>
                      <th>GRADE 2</th>
                     <td><?php echo $i_1[0]; ?></td>
                      <td><?php echo $i_2[0]; ?></td>
                      <td><?php echo $i_3[0]; ?></td>
                      <td><?php echo $i_4[0]; ?></td>
                      <td><?php echo $i_5[0]; ?></td>
                      <td><?php echo $i_6[0]; ?></td>
                      <td><?php echo $i_7[0]; ?></td>
                      <td><?php echo $i_8[0]; ?></td>
                      <td><?php echo $i_9[0]; ?></td>
                      <td><?php echo $i_10[0]; ?></td>
                      <td><?php echo $i_11[0]; ?></td>
                      <td><?php echo $i_12[0]; ?></td>
                      <td><?php echo $i_13[0]; ?></td>
                      <td><?php echo $i_14[0]; ?></td>
                      <td><?php echo $i_15[0]; ?></td>
                      <td><?php echo $i_16[0]; ?></td>
                      <td><?php echo $i_17[0]; ?></td>
                      <td><?php echo $i_18[0]; ?></td>
                      <td><?php echo $i_19[0]; ?></td>
                      <td><?php echo $i_20[0]; ?></td>
                      <td><?php echo $i_21[0]; ?></td>
                      <td><?php echo $i_22[0]; ?></td>
                      <td><?php echo $i_23[0]; ?></td>
                      <td><?php echo $i_24[0]; ?></td>
                      <td><?php echo $i_25[0]; ?></td>
                      <td><?php echo $i_26[0]; ?></td>
                      <td><?php echo $i_27[0]; ?></td>
                      <td><?php echo $i_28[0]; ?></td>
                      <td><?php echo $i_29[0]; ?></td>
                      <td><?php echo $i_30[0]; ?></td>
                      <td><?php echo $i_31[0]; ?></td>
                      <td><?php echo $i_32[0]; ?></td>
                      <td><?php echo $i_33[0]; ?></td>
                      <td><?php echo $i_34[0]; ?></td>
                      <td><?php echo $i_35[0]; ?></td>
                    </tr>
                     <tr>
                      <th>GRADE 3</th>
                     <td><?php echo $j_1[0]; ?></td>
                      <td><?php echo $j_2[0]; ?></td>
                      <td><?php echo $j_3[0]; ?></td>
                      <td><?php echo $j_4[0]; ?></td>
                      <td><?php echo $j_5[0]; ?></td>
                      <td><?php echo $j_6[0]; ?></td>
                      <td><?php echo $j_7[0]; ?></td>
                      <td><?php echo $j_8[0]; ?></td>
                      <td><?php echo $j_9[0]; ?></td>
                      <td><?php echo $j_10[0]; ?></td>
                      <td><?php echo $j_11[0]; ?></td>
                      <td><?php echo $j_12[0]; ?></td>
                      <td><?php echo $j_13[0]; ?></td>
                      <td><?php echo $j_14[0]; ?></td>
                      <td><?php echo $j_15[0]; ?></td>
                      <td><?php echo $j_16[0]; ?></td>
                      <td><?php echo $j_17[0]; ?></td>
                      <td><?php echo $j_18[0]; ?></td>
                      <td><?php echo $j_19[0]; ?></td>
                      <td><?php echo $j_20[0]; ?></td>
                      <td><?php echo $j_21[0]; ?></td>
                      <td><?php echo $j_22[0]; ?></td>
                      <td><?php echo $j_23[0]; ?></td>
                      <td><?php echo $j_24[0]; ?></td>
                      <td><?php echo $j_25[0]; ?></td>
                      <td><?php echo $j_26[0]; ?></td>
                      <td><?php echo $j_27[0]; ?></td>
                      <td><?php echo $j_28[0]; ?></td>
                      <td><?php echo $j_29[0]; ?></td>
                      <td><?php echo $j_30[0]; ?></td>
                      <td><?php echo $j_31[0]; ?></td>
                      <td><?php echo $j_32[0]; ?></td>
                      <td><?php echo $j_33[0]; ?></td>
                      <td><?php echo $j_34[0]; ?></td>
                      <td><?php echo $j_35[0]; ?></td>  </tr>
                    <tr>
                      <th>GRADE 4</th>
                     <td><?php echo $a_1[0]; ?></td>
                      <td><?php echo $a_2[0]; ?></td>
                      <td><?php echo $a_3[0]; ?></td>
                      <td><?php echo $a_4[0]; ?></td>
                      <td><?php echo $a_5[0]; ?></td>
                      <td><?php echo $a_6[0]; ?></td>
                      <td><?php echo $a_7[0]; ?></td>
                      <td><?php echo $a_8[0]; ?></td>
                      <td><?php echo $a_9[0]; ?></td>
                      <td><?php echo $a_10[0]; ?></td>
                      <td><?php echo $a_11[0]; ?></td>
                      <td><?php echo $a_12[0]; ?></td>
                      <td><?php echo $a_13[0]; ?></td>
                      <td><?php echo $a_14[0]; ?></td>
                      <td><?php echo $a_15[0]; ?></td>
                      <td><?php echo $a_16[0]; ?></td>
                      <td><?php echo $a_17[0]; ?></td>
                      <td><?php echo $a_18[0]; ?></td>
                      <td><?php echo $a_19[0]; ?></td>
                      <td><?php echo $a_20[0]; ?></td>
                      <td><?php echo $a_21[0]; ?></td>
                      <td><?php echo $a_22[0]; ?></td>
                      <td><?php echo $a_23[0]; ?></td>
                      <td><?php echo $a_24[0]; ?></td>
                      <td><?php echo $a_25[0]; ?></td>
                      <td><?php echo $a_26[0]; ?></td>
                      <td><?php echo $a_27[0]; ?></td>
                      <td><?php echo $a_28[0]; ?></td>
                      <td><?php echo $a_29[0]; ?></td>
                      <td><?php echo $a_30[0]; ?></td>
                      <td><?php echo $a_31[0]; ?></td>
                      <td><?php echo $a_32[0]; ?></td>
                      <td><?php echo $a_33[0]; ?></td>
                      <td><?php echo $a_34[0]; ?></td>
                      <td><?php echo $a_35[0]; ?></td>
                    </tr>
                    <tr>
                      <th>GRADE 5</th>
                      <td><?php echo $b_1[0]; ?></td>
                      <td><?php echo $b_2[0]; ?></td>
                      <td><?php echo $b_3[0]; ?></td>
                      <td><?php echo $b_4[0]; ?></td>
                      <td><?php echo $b_5[0]; ?></td>
                      <td><?php echo $b_6[0]; ?></td>
                      <td><?php echo $b_7[0]; ?></td>
                      <td><?php echo $b_8[0]; ?></td>
                      <td><?php echo $b_9[0]; ?></td>
                      <td><?php echo $b_10[0]; ?></td>
                      <td><?php echo $b_11[0]; ?></td>
                      <td><?php echo $b_12[0]; ?></td>
                      <td><?php echo $b_13[0]; ?></td>
                      <td><?php echo $b_14[0]; ?></td>
                      <td><?php echo $b_15[0]; ?></td>
                      <td><?php echo $b_16[0]; ?></td>
                      <td><?php echo $b_17[0]; ?></td>
                      <td><?php echo $b_18[0]; ?></td>
                      <td><?php echo $b_19[0]; ?></td>
                      <td><?php echo $b_20[0]; ?></td>
                      <td><?php echo $b_21[0]; ?></td>
                      <td><?php echo $b_22[0]; ?></td>
                      <td><?php echo $b_23[0]; ?></td>
                      <td><?php echo $b_24[0]; ?></td>
                      <td><?php echo $b_25[0]; ?></td>
                      <td><?php echo $b_26[0]; ?></td>
                      <td><?php echo $b_27[0]; ?></td>
                      <td><?php echo $b_28[0]; ?></td>
                      <td><?php echo $b_29[0]; ?></td>
                      <td><?php echo $b_30[0]; ?></td>
                      <td><?php echo $b_31[0]; ?></td>
                      <td><?php echo $b_32[0]; ?></td>
                      <td><?php echo $b_33[0]; ?></td>
                      <td><?php echo $b_34[0]; ?></td>
                      <td><?php echo $b_35[0]; ?></td>
                    </tr>
                    <tr>
                      <th>GRADE 6</th>
                      <td><?php echo $c_1[0]; ?></td>
                      <td><?php echo $c_2[0]; ?></td>
                      <td><?php echo $c_3[0]; ?></td>
                      <td><?php echo $c_4[0]; ?></td>
                      <td><?php echo $c_5[0]; ?></td>
                      <td><?php echo $c_6[0]; ?></td>
                      <td><?php echo $c_7[0]; ?></td>
                      <td><?php echo $c_8[0]; ?></td>
                      <td><?php echo $c_9[0]; ?></td>
                      <td><?php echo $c_10[0]; ?></td>
                      <td><?php echo $c_11[0]; ?></td>
                      <td><?php echo $c_12[0]; ?></td>
                      <td><?php echo $c_13[0]; ?></td>
                      <td><?php echo $c_14[0]; ?></td>
                      <td><?php echo $c_15[0]; ?></td>
                      <td><?php echo $c_16[0]; ?></td>
                      <td><?php echo $c_17[0]; ?></td>
                      <td><?php echo $c_18[0]; ?></td>
                      <td><?php echo $c_19[0]; ?></td>
                      <td><?php echo $c_20[0]; ?></td>
                      <td><?php echo $c_21[0]; ?></td>
                      <td><?php echo $c_22[0]; ?></td>
                      <td><?php echo $c_23[0]; ?></td>
                      <td><?php echo $c_24[0]; ?></td>
                      <td><?php echo $c_25[0]; ?></td>
                      <td><?php echo $c_26[0]; ?></td>
                      <td><?php echo $c_27[0]; ?></td>
                      <td><?php echo $c_28[0]; ?></td>
                      <td><?php echo $c_29[0]; ?></td>
                      <td><?php echo $c_30[0]; ?></td>
                      <td><?php echo $c_31[0]; ?></td>
                      <td><?php echo $c_32[0]; ?></td>
                      <td><?php echo $c_33[0]; ?></td>
                      <td><?php echo $c_34[0]; ?></td>
                      <td><?php echo $c_35[0]; ?></td>  
                      </tr>
                    <tr>
                      <th>GRADE 7</th>
                      <td><?php echo $d_1[0]; ?></td>
                      <td><?php echo $d_2[0]; ?></td>
                      <td><?php echo $d_3[0]; ?></td>
                      <td><?php echo $d_4[0]; ?></td>
                      <td><?php echo $d_5[0]; ?></td>
                      <td><?php echo $d_6[0]; ?></td>
                      <td><?php echo $d_7[0]; ?></td>
                      <td><?php echo $d_8[0]; ?></td>
                      <td><?php echo $d_9[0]; ?></td>
                      <td><?php echo $d_10[0]; ?></td>
                      <td><?php echo $d_11[0]; ?></td>
                      <td><?php echo $d_12[0]; ?></td>
                      <td><?php echo $d_13[0]; ?></td>
                      <td><?php echo $d_14[0]; ?></td>
                      <td><?php echo $d_15[0]; ?></td>
                      <td><?php echo $d_16[0]; ?></td>
                      <td><?php echo $d_17[0]; ?></td>
                      <td><?php echo $d_18[0]; ?></td>
                      <td><?php echo $d_19[0]; ?></td>
                      <td><?php echo $d_20[0]; ?></td>
                      <td><?php echo $d_21[0]; ?></td>
                      <td><?php echo $d_22[0]; ?></td>
                      <td><?php echo $d_23[0]; ?></td>
                      <td><?php echo $d_24[0]; ?></td>
                      <td><?php echo $d_25[0]; ?></td>
                      <td><?php echo $d_26[0]; ?></td>
                      <td><?php echo $d_27[0]; ?></td>
                      <td><?php echo $d_28[0]; ?></td>
                      <td><?php echo $d_29[0]; ?></td>
                      <td><?php echo $d_30[0]; ?></td>
                      <td><?php echo $d_31[0]; ?></td>
                      <td><?php echo $d_32[0]; ?></td>
                      <td><?php echo $d_33[0]; ?></td>
                      <td><?php echo $d_34[0]; ?></td>
                      <td><?php echo $d_35[0]; ?></td>
                    </tr>
                    <tr>
                      <th>GRADE 8</th>
                      <td><?php echo $e_1[0]; ?></td>
                      <td><?php echo $e_2[0]; ?></td>
                      <td><?php echo $e_3[0]; ?></td>
                      <td><?php echo $e_4[0]; ?></td>
                      <td><?php echo $e_5[0]; ?></td>
                      <td><?php echo $e_6[0]; ?></td>
                      <td><?php echo $e_7[0]; ?></td>
                      <td><?php echo $e_8[0]; ?></td>
                      <td><?php echo $e_9[0]; ?></td>
                      <td><?php echo $e_10[0]; ?></td>
                      <td><?php echo $e_11[0]; ?></td>
                      <td><?php echo $e_12[0]; ?></td>
                      <td><?php echo $e_13[0]; ?></td>
                      <td><?php echo $e_14[0]; ?></td>
                      <td><?php echo $e_15[0]; ?></td>
                      <td><?php echo $e_16[0]; ?></td>
                      <td><?php echo $e_17[0]; ?></td>
                      <td><?php echo $e_18[0]; ?></td>
                      <td><?php echo $e_19[0]; ?></td>
                      <td><?php echo $e_20[0]; ?></td>
                      <td><?php echo $e_21[0]; ?></td>
                      <td><?php echo $e_22[0]; ?></td>
                      <td><?php echo $e_23[0]; ?></td>
                      <td><?php echo $e_24[0]; ?></td>
                      <td><?php echo $e_25[0]; ?></td>
                      <td><?php echo $e_26[0]; ?></td>
                      <td><?php echo $e_27[0]; ?></td>
                      <td><?php echo $e_28[0]; ?></td>
                      <td><?php echo $e_29[0]; ?></td>
                      <td><?php echo $e_30[0]; ?></td>
                      <td><?php echo $e_31[0]; ?></td>
                      <td><?php echo $e_32[0]; ?></td>
                      <td><?php echo $e_33[0]; ?></td>
                      <td><?php echo $e_34[0]; ?></td>
                      <td><?php echo $e_35[0]; ?></td>
                    </tr>
                    <tr>
                      <th>GRADE 9</th>
                      <td><?php echo $f_1[0]; ?></td>
                      <td><?php echo $f_2[0]; ?></td>
                      <td><?php echo $f_3[0]; ?></td>
                      <td><?php echo $f_4[0]; ?></td>
                      <td><?php echo $f_5[0]; ?></td>
                      <td><?php echo $f_6[0]; ?></td>
                      <td><?php echo $f_7[0]; ?></td>
                      <td><?php echo $f_8[0]; ?></td>
                      <td><?php echo $f_9[0]; ?></td>
                      <td><?php echo $f_10[0]; ?></td>
                      <td><?php echo $f_11[0]; ?></td>
                      <td><?php echo $f_12[0]; ?></td>
                      <td><?php echo $f_13[0]; ?></td>
                      <td><?php echo $f_14[0]; ?></td>
                      <td><?php echo $f_15[0]; ?></td>
                      <td><?php echo $f_16[0]; ?></td>
                      <td><?php echo $f_17[0]; ?></td>
                      <td><?php echo $f_18[0]; ?></td>
                      <td><?php echo $f_19[0]; ?></td>
                      <td><?php echo $f_20[0]; ?></td>
                      <td><?php echo $f_21[0]; ?></td>
                      <td><?php echo $f_22[0]; ?></td>
                      <td><?php echo $f_23[0]; ?></td>
                      <td><?php echo $f_24[0]; ?></td>
                      <td><?php echo $f_25[0]; ?></td>
                      <td><?php echo $f_26[0]; ?></td>
                      <td><?php echo $f_27[0]; ?></td>
                      <td><?php echo $f_28[0]; ?></td>
                      <td><?php echo $f_29[0]; ?></td>
                      <td><?php echo $f_30[0]; ?></td>
                      <td><?php echo $f_31[0]; ?></td>
                      <td><?php echo $f_32[0]; ?></td>
                      <td><?php echo $f_33[0]; ?></td>
                      <td><?php echo $f_34[0]; ?></td>
                      <td><?php echo $f_35[0]; ?></td>
                    </tr>
                    <tr>
                      <th>GRADE 10</th>
                      <td><?php echo $g_1[0]; ?></td>
                      <td><?php echo $g_2[0]; ?></td>
                      <td><?php echo $g_3[0]; ?></td>
                      <td><?php echo $g_4[0]; ?></td>
                      <td><?php echo $g_5[0]; ?></td>
                      <td><?php echo $g_6[0]; ?></td>
                      <td><?php echo $g_7[0]; ?></td>
                      <td><?php echo $g_8[0]; ?></td>
                      <td><?php echo $g_9[0]; ?></td>
                      <td><?php echo $g_10[0]; ?></td>
                      <td><?php echo $g_11[0]; ?></td>
                      <td><?php echo $g_12[0]; ?></td>
                      <td><?php echo $g_13[0]; ?></td>
                      <td><?php echo $g_14[0]; ?></td>
                      <td><?php echo $g_15[0]; ?></td>
                      <td><?php echo $g_16[0]; ?></td>
                      <td><?php echo $g_17[0]; ?></td>
                      <td><?php echo $g_18[0]; ?></td>
                      <td><?php echo $g_19[0]; ?></td>
                      <td><?php echo $g_20[0]; ?></td>
                      <td><?php echo $g_21[0]; ?></td>
                      <td><?php echo $g_22[0]; ?></td>
                      <td><?php echo $g_23[0]; ?></td>
                      <td><?php echo $g_24[0]; ?></td>
                      <td><?php echo $g_25[0]; ?></td>
                      <td><?php echo $g_26[0]; ?></td>
                      <td><?php echo $g_27[0]; ?></td>
                      <td><?php echo $g_28[0]; ?></td>
                      <td><?php echo $g_29[0]; ?></td>
                      <td><?php echo $g_30[0]; ?></td>
                      <td><?php echo $g_31[0]; ?></td>
                      <td><?php echo $g_32[0]; ?></td>
                      <td><?php echo $g_33[0]; ?></td>
                      <td><?php echo $g_34[0]; ?></td>
                      <td><?php echo $g_35[0]; ?></td>
                    </tr>
                    <tr style="font-weight: bold;">
                      <th>Grand Total:</th>
                      <td><?php echo $s1[0]; ?></td>
                      <td><?php echo $s2[0]; ?></td>
                      <td><?php echo $s3[0]; ?></td>
                      <td><?php echo $s4[0]; ?></td>
                      <td><?php echo $s5[0]; ?></td>
                      <td><?php echo $s6[0]; ?></td>
                      <td><?php echo $s7[0]; ?></td>
                      <td><?php echo $s8[0]; ?></td>
                      <td><?php echo $s9[0]; ?></td>
                      <td><?php echo $s10[0]; ?></td>
                      <td><?php echo $s11[0]; ?></td>
                      <td><?php echo $s12[0]; ?></td>
                      <td><?php echo $s13[0]; ?></td>
                      <td><?php echo $s14[0]; ?></td>
                      <td><?php echo $s15[0]; ?></td>
                      <td><?php echo $s16[0]; ?></td>
                      <td><?php echo $s17[0]; ?></td>
                      <td><?php echo $s18[0]; ?></td>
                      <td><?php echo $s19[0]; ?></td>
                      <td><?php echo $s20[0]; ?></td>
                      <td><?php echo $s21[0]; ?></td>
                      <td><?php echo $s22[0]; ?></td>
                      <td><?php echo $s23[0]; ?></td>
                      <td><?php echo $s24[0]; ?></td>
                      <td><?php echo $s25[0]; ?></td>
                      <td><?php echo $s26[0]; ?></td>
                      <td><?php echo $s27[0]; ?></td>
                      <td><?php echo $s28[0]; ?></td>
                      <td><?php echo $s29[0]; ?></td>
                      <td><?php echo $s30[0]; ?></td>
                      <td><?php echo $s31[0]; ?></td>
                      <td><?php echo $s32[0]; ?></td>
                      <td><?php echo $s33[0]; ?></td>
                      <td><?php echo $s34[0]; ?></td>
                      <td><?php echo $s35[0]; ?></td>
                      
                    </tr>
                  </table>
                </div>
                <div class="row">
                <div class="col-md-offset-5 col-md-2">
                  <button class="btn btn-primary btn-md" type="button" data-toggle="collapse" data-target="#sigfindpat" aria-expanded="false" aria-controls="sigfindpat">Significant Findings <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></button>
                </div>
              </div>
              </div>
              
              <div class="collapse" id="sigfindpat">
                <div class="well">
                  <h3 align="center">Significant Findings</h3><hr>
                  <div class="row">
                    <div class="col-md-4">
                      <div id="Q1"></div>
                    </div>
                    <div class="col-md-4">
                      <div id="Q2"></div>
                    </div>
                    <div class="col-md-4">
                      <div id="Q3"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div id="Q4"></div>
                    </div>
                    <div class="col-md-4">
                      <div id="Q5"></div>
                    </div>
                    <div class="col-md-4">
                      <div id="Q6"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div id="Q7"></div>
                    </div>
                    <div class="col-md-4">
                      <div id="Q8"></div>
                    </div>
                    <div class="col-md-4">
                      <div id="Q9"></div>
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
   
<h4 align="center">SUMMARY REPORT</h4>
<p align="center">



<?php

$resm=($totm1[0]/$cu1[0])*100;
$resf=($totf1[0]/$cu1[0]) *100;

$g1_c_galit=$s1[0];
$g1_c_masaya=$s2[0];
$g1_c_malungkot=$s3[0];
$g1_c_walangn=$s4[0];

$g2_c_walang_trabaho=$s24[0];
$g2_c_maliit_kita=$s25[0];
$g2_c_penitisyon=$s26[0];


$g3_c_asia=$cnr1[0];
$g3_c_eur=$eur1[0];
$g3_c_nar=$nar1[0];
$g3_c_ocr=$ocr1[0];
$g3_c_otr=$otr1[0];


$g4_c_ytr=$ytr1[0];
$g4_c_yrr=$yrr1[0];
$g4_c_yer=$yer1[0];
$g4_c_yqr=$yqr1[0];
$g4_c_ywr=$ywr1[0];


$g5_c_video_chat=$s16[0];
$g5_c_sulat=$s17[0];
$g5_c_telepono=$s18[0];
$g5_c_cellphone=$s19[0];

$g6_c_maganda=$s21[0];
$g6_c_dimaganda=$s22[0];
$g6_c_padala=$s23[0];
$g6_c_umuwi=$s24[0];

$g7_c_oo=$s30[0];
$g7_c_hindi=$s31[0];
$g7_c_di_tiyak=$s32[0];

$g8_c_galit=$s6[0];
$g8_c_masaya=$s7[0];
$g8_c_malungkot=$s8[0];
$g8_c_walangn=$s9[0];

$g9_c_oo=$s33[0];
$g9_c_hindi=$s34[0];
$g9_c_di_tiyak=$s35[0];


$g_1_sort= array($s1[0],$s2[0],$s3[0],$s4[0]);
sort($g_1_sort,  SORT_NUMERIC);

$g_2_sort= array($s24[0],$s25[0],$s26[0]);
sort($g_2_sort,  SORT_NUMERIC);

$g_3_sort= array($cnr1[0],$eur1[0],$nar1[0],$ocr1[0],$otr1[0]);
sort($g_3_sort,  SORT_NUMERIC);

$g_4_sort= array($ytr1[0],$yrr1[0],$yer1[0],$yqr1[0],$ywr1[0]);
sort($g_4_sort,  SORT_NUMERIC); 

$g_5_sort= array($s16[0],$s17[0],$s18[0],$s19[0]);
sort($g_5_sort,  SORT_NUMERIC); 

$g_6_sort= array($s21[0],$s22[0],$s23[0],$s24[0]);
sort($g_6_sort,  SORT_NUMERIC); 

$g_7_sort= array($s30[0],$s31[0],$s32[0]);
sort($g_7_sort,  SORT_NUMERIC); 

$g_8_sort= array($s6[0],$s7[0],$s8[0],$s9[0]);
sort($g_8_sort,  SORT_NUMERIC);

$g_9_sort= array($s33[0],$s34[0],$s35[0]);
sort($g_9_sort,  SORT_NUMERIC); 




echo "Most of the respondents are ";
if ($resm > $resf)
{


 echo "MALE students. They answered that they ";


}

else{ 

 echo "FEMALE students.They answered that they ";

}


if($g_1_sort[3] == $g1_c_galit )
{

echo "are mad when their parents ";

} 

else if($g_1_sort[3] == $g1_c_masaya )
{

echo "are happy when their parents ";

}

else if($g_1_sort[3] == $g1_c_malungkot )
{

echo "are sad when their parents ";

}

else if($g_1_sort[3] == $g1_c_walangn )
{

echo "they dont feel anything when their parents ";

}



if($g_2_sort[2] ==$g2_c_walang_trabaho)
  {

      echo "dont have a job offer here in the philippines and decided to leave the country and work to a country belongs to the continent of ";


  }

  else if($g_2_sort[2] ==$g2_c_maliit_kita)
  {

    echo "do not earned much here in the philippines and decided to leave the country and work to a country belongs to the continent of ";


  }

 else if($g_2_sort[2] ==$g2_c_penitisyon)
  {

      echo "relatives petitioned them and decided to leave the country and work to a country belongs to the continent of ";


  }


  if($g_3_sort[4] ==$g3_c_asia)
{



echo "Asia. ";

}

else if($g_3_sort[4] ==$g3_c_eur)
{



echo "Europe for ";

}


 else if($g_3_sort[4] ==$g3_c_nar)
{



echo "North America for ";

}

 else if($g_3_sort[4] ==$g3_c_ocr)
{



echo "Oceania for ";

}


 else if($g_3_sort[4] ==$g3_c_otr)
{



echo "Antartica for ";

}


if($g_4_sort[4] == $g4_c_ytr)
{


 echo "one to three years. ";

}
else if($g_4_sort[4] == $g4_c_yrr)
{


 echo "four to six years. ";

}
else if($g_4_sort[4] == $g4_c_yer)
{


 echo "seven to ten years. ";

}
else if($g_4_sort[4] == $g4_c_yqr)
{


 echo "eleven to fifteen years. ";

}

else if($g_4_sort[4] == $g4_c_ywr)
{


 echo "sixteen years and above. ";

}





if ($g_5_sort[3]==$g5_c_video_chat)
{


  echo "The top means of their communication is through video chatting ";


}

else if ($g_5_sort[3]==$g5_c_sulat)
{


  echo "The top means of their communication is through snail mail ";


}

else if ($g_5_sort[3]==$g5_c_telepono)
{


  echo "The top means of their communication is through a telephone call ";


}


else if ($g_5_sort[3]==$g5_c_cellphone)
{


  echo "The top means of their communication is through mobile phone call.";


}


if ($g_6_sort[3] == $g6_c_maganda)
{


echo"and they tell their parent a good news about their family status and studies.";


}


else if ($g_6_sort[3] == $g6_c_dimaganda)
{


echo"and they tell their parent a not so good news about their family status and studies.";


}


else if ($g_6_sort[3] == $g6_c_padala)
{


echo"and they tell their parents all that they need aditional financial support for them.";


}

else if ($g_6_sort[3] == $g6_c_umuwi)
{


echo"and they tell their parent that they want him/her to go back here in the philippines.";


}


if($g_7_sort[2] == $g7_c_oo)
{


echo " They are aware of what is the status of their parents abroad and when their parents get back here in the philippines ";

}
if($g_7_sort[2] == $g7_c_hindi)
{


echo " They are not aware of what is the status of their parents abroad and when their parents get back here in the philippines ";

}
if($g_7_sort[2] == $g7_c_di_tiyak)
{


echo " They are unsure of what is the status of their parents abroad and when their parents get back here in the philippines ";

}





if ($g_8_sort[3] == $g8_c_galit )
{


echo "they are not glad about it.";

}

if ($g_8_sort[3] == $g8_c_masaya )
{


echo "they are glad about it.";

}

if ($g_8_sort[3] == $g8_c_malungkot )
{


echo "they are sad about it.";

}

if ($g_8_sort[3] == $g8_c_walangn )
{


echo "they dont have any feelings about it.";

}


if($g_9_sort[2] == $g9_c_oo)
{


  echo " And laslty if they are given a chance to work abroad they will definitely accept it.";
}

if($g_9_sort[2] == $g9_c_hindi)
{


  echo " And laslty if they are given a chance to work abroad they will not accept it.";
}

if($g_9_sort[2] == $g9_c_di_tiyak)
{


  echo " And laslty if they are given a chance to work abroad they are unsure if they will accept it.";
}









?>



   </div>
  </div>
  </div>












       </div>



<!--End of Container-Fluid-->
    </div>
    
    





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/footable.min.js"></script>
    <script type="text/javascript">
      $("#table1").footable();
    </script>
  </body>
</html>