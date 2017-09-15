<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>About Us</title>

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
        <div class="col-md-9" style="background-color: ;">
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
          <h2 align="center" style="font-family: myFirstFont;">About Us</h2> <br>
          <p style="font-family: mySecondFont; font-size: 15px;">
          The beginnings of the Catholic Bishops’ Conference of the Philippines may be traced back to 15 February 1945 , when the Catholic Welfare Organization (CWO) was created. Back then, it had 17 members. The beginnings of the Episcopal Commission for the Pastoral Care of Migrants and Itinerant People (ECMI) may be traced back to the year 1955, when the Episcopal Commission-Committee on Emigration reported to the CWO the situation of Filipinos in USA, Hawaii, and Guam, and the corresponding actions taken by the church. In the early 60’s the Body of Bishops established the Apostleship of the Sea to meet the needs of the seafarers nationwide. In January 1967, two Episcopal Commissions were created under the Article XXV of the CBCP Constitutions: Commission on Immigration and Tourism and, Commission on the Apostolates of the Sea and Air. In 1972, the Bishops merged these two Commissions into one body called Episcopal Commission on Migration and Tourism (ECMT), in order to answer the growing spiritual, pastoral and social needs of people on the move. In 1984, the actual office was opened and blessed by Bishop Gabriel V. Reyes D.D., then Chairman. Since then, ECMI has been headed by a Scalabrinian Missionary with the task of coordinating and promoting ECMI’s apostolates and services for people on the move. On February 21, 1988 , CBCP issued the first ever “Pastoral Letter of the Catholic Bishops’ Conference of the Philippines on the occasion of the National Migration Day.” In the year 1995, 3 major events occurred: First the 70th Bishops’ Plenary Assembly approved the change of name of Episcopal Commission on Migration and Tourism (ECMT) to Episcopal Commission for the Pastoral Care of Migrants and Itinerant People (ECMI). Second, the 71st Bishops’ Plenary Assembly issued a second pastoral letter called “Comfort My People, Comfort Them” (Is 40,1) - Pastoral Letter on Filipino Migrant Workers. Third, ECMI opened three Regional Migration Desks (RMD): RMD Luzon; RMD Visayas; and, RMD Mindanao to better cater to the needs of people on the move. The year 1997 (February 3) marked the opening of the Asian Migration Desk, tasked to coordinate the ministry for migrants in Asia. The year 2000 marks the consolidation of the Filipino ministry overseas.
          </p>
        </div>


          <br><br><br><br>
      </div>
    </div>


        <!--Log-In Panel -->
        <div class="col-md-3" id="login" style="font-family: mySecondFont;">
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
          <p style="font-family: mySecondFont;">
          MR. EDMUNDO H. RUGA – Regional Coordinator <br>C/o CBCP Bldg., 470 Gen. Luna Street 1002 Intramuros, Manila <br>Tel #: 527-4135 / 527-4142 Fax #: 527-9568 <br>E-Mail: ecmiluzon97@yahoo.com
          </p>
          <br><br>
          
        </div>
      </div>

        

<!--End of Container-Fluid-->
    </div>
    
    </script>
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