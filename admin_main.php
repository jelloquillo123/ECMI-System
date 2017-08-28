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
                      <a href="admin_schools.php">Schools</a>
                    </li>
                    <li>
                      <a href="admin_students.php">Students</a>
                    </li>
                    <li>
                      <a href="admin_questions.php">Questions</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="#div2">About Us</a>
                  </li>
                  <li>
                      <a href="#div3">Contact</a>
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

  <div class="container-fluid green">
    <h1 align="center" style="font-family:roboto; color:white;">Picture Gallery</h1>
    <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="pictures/a.jpg">
          <img src="pictures/a.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Sample Pictures</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="pictures/b.jpg">
          <img src="pictures/b.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Sample Pictures</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="pictures/c.jpg">
          <img src="pictures/c.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Sample Pictures</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="pictures/d.jpg">
          <img src="pictures/d.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Sample Pictures</p>
          </div>
        </a>
      </div>
    </div>
  </div>

    <div class="container-fluid green">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 col-md-offset-2">
        <div class="card-panel hoverable" id="div2">
          <h2 style="color:#000">ABOUT US</h2>
          <br />
          <p class="flow-text" style="font-family:roboto; font-size:17px;">
            The beginnings of the Catholic Bishops’ Conference of the Philippines may be traced back to 15 February 1945 , when the Catholic Welfare Organization (CWO) was created. Back then, it had 17 members.

            The beginnings of the Episcopal Commission for the Pastoral Care of Migrants and Itinerant People (ECMI) may be traced back to the year 1955, when the Episcopal Commission-Committee on Emigration reported to the CWO the situation of Filipinos in USA, Hawaii, and Guam, and the corresponding actions taken by the church.

            In the early 60’s the Body of Bishops established the Apostleship of the Sea to meet the needs of the seafarers nationwide.

            In January 1967, two Episcopal Commissions were created under the Article XXV of the CBCP Constitutions: Commission on Immigration and Tourism and, Commission on the Apostolates of the Sea and Air.

            In 1972, the Bishops merged these two Commissions into one body called Episcopal Commission on Migration and Tourism (ECMT), in order to answer the growing spiritual, pastoral and social needs of people on the move.

            In 1984, the actual office was opened and blessed by Bishop Gabriel V. Reyes D.D., then Chairman.

            Since then, ECMI has been headed by a Scalabrinian Missionary with the task of coordinating and promoting ECMI’s apostolates and services for people on the move.

            On February 21, 1988 , CBCP issued the first ever “Pastoral Letter of the Catholic Bishops’ Conference of the Philippines on the occasion of the National Migration Day.”

            In the year 1995, 3 major events occurred:

            First the 70th Bishops’ Plenary Assembly approved the change of name of Episcopal Commission on Migration and Tourism (ECMT) to Episcopal Commission for the Pastoral Care of Migrants and Itinerant People (ECMI).

            Second, the 71st Bishops’ Plenary Assembly issued a second pastoral letter called “Comfort My People, Comfort Them” (Is 40,1) - Pastoral Letter on Filipino Migrant Workers.

            Third, ECMI opened three Regional Migration Desks (RMD): RMD Luzon; RMD Visayas; and, RMD Mindanao to better cater to the needs of people on the move.

            The year 1997 (February 3) marked the opening of the Asian Migration Desk, tasked to coordinate the ministry for migrants in Asia. The year 2000 marks the consolidation of the Filipino ministry overseas.
          </p>
        </div>
      </div>
      </div>
    </div>
  <div class="container-fluid green">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 col-md-offset-2">
        <div class="card-panel hoverable" id="div3">
          <h2 style="color:#000">Contact Us</h2>
          <br/>
          <div class="row">
            <div class="col-md-offset-4 col-md-4 col-md-offset-4"
            <div class="well well-sm" style="background-color:#fff">
              <p align="center">
                <h3>Luzon Regional Coordinator</h3>
                MR. EDMUNDO H. RUGA – Coordinator

                C/o CBCP Bldg., 470 Gen. Luna Street
                1002 Intramuros, Manila
                Tel #: 527-4135 / 527-4142
                Fax #: 527-9568

                E-Mail: ecmiluzon97@yahoo.com
              </p>
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


</body>

</html>
