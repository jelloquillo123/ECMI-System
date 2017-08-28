<?php
    session_start();
    require 'connect.php';
    require 'school_maindb.php'
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

    <link rel="stylesheet" href="styles(sdofp).css">

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
                  <div class="col-md-offset-6 col-md-1">
                    <a href="printry1.php"><button class="btn btn-primary"> Print</button></a>
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
                      <th>16-20</th>
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
                    <a href="printry.php"><button class="btn btn-primary"> Print</button></a>
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
              </div>
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