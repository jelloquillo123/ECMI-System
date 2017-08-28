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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ECMI-SDOFP</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="styles(sdofp).css">

    <style type="text/css">
      #login{
        padding-top: 20px;
      }
      .well{
        background-color: white;
      }
    </style>
    
  </head>
  <body data-spy="scroll">
    <div class="container-fluid" style="background-color: #00c853; ">
      <div class="row-3">


        <!--Banner Main-->
        <div class="col-md-9">
          <div class="row">
          <div class="col-md-12" style="font-family:myFirstFont;">
              <br />
                <div class="well" style="background-color: white;">
                <div class="row">
                  <div class="col-lg-4" style="padding-top:15px;">
                    <a href="index.php"><img src="pictures/logo.jpg" class="img-responsive logo" alt="ECMI LOGO" /></a>
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
          <!--Image Carousel-->
          <div class="well" style="background-color: white;">
          <h2 align="center" style="font-family: myFirstFont;">Image Slideshow</h2> <br>
          <div id="images" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#images" data-slide-to="0" class="active"></li>
              <li data-target="#images" data-slide-to="1"></li>
              <li data-target="#images" data-slide-to="2"></li>
              <li data-target="#images" data-slide-to="3"></li>
            </ol>

          <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="pictures/a.jpg" style="width: 100%; height:570px;">
                <div class="carousel-caption">
                  <h3>Sample Pics</h3>
                </div>
              </div>
              <div class="item">
                <img src="pictures/b.jpg" style="width: 100%; height:570px;">
                <div class="carousel-caption">
                  <h3>Sample Pics</h3>
                </div>
              </div>
              <div class="item">
                <img src="pictures/c.jpg" style="width: 100%; height:570px;">
                <div class="carousel-caption">
                  <h3>Sample Pics</h3>
                </div>
              </div>
              <div class="item">
                <img src="pictures/d.jpg" style="width: 100%; height:570px;">
                <div class="carousel-caption">
                  <h3>Sample Pics</h3>
                </div>
              </div>
            </div>

            <a class="left carousel-control" href="#images" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#images" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        </div>


          <br><br><br><br>
          </div>
        </div>


        <!--Log-In Panel -->
        <div class="col-md-3" id="login">
          <div class="well">
            <h3 align="center">Log-In</h3><hr>
            <form align="center" action="login.php" method="post" class="form" role="form">
            <div class="form-group">
              <h4 align="left">Username</h4>
              <input type="text" class="form-control input-sm" name="username" placeholder="Username" align="center" style="border-radius: 20px;" required><br>
              <h4 align="left">Password</h4>
              <input type="password" class="form-control input-sm" name="password" placeholder="Password" align="center" style="border-radius: 20px;" required><br>
              <button type="submit" name="submit" class="btn btn-primary">Log-In</button>
            </div>
            </form>
          </div>

        <div class="well">
          <h2>Contact Us</h2>
          <p>
          MR. EDMUNDO H. RUGA – Regional Coordinator <br>C/o CBCP Bldg., 470 Gen. Luna Street 1002 Intramuros, Manila <br>Tel #: 527-4135 / 527-4142 Fax #: 527-9568 <br>E-Mail: ecmiluzon97@yahoo.com
          </p>
          <br><br>
          <a align="left" href="about.php" class="btn btn-primary btn-sm" role="button">About the Program!</a>
        </div>
      </div>

        

<!--End of Container-Fluid-->
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>