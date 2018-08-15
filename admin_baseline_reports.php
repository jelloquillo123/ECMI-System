<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'connect.php';
require 'admin_schoolsdb.php';
require 'admin_reportdb.php';
require 'admin_maindb.php';

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
                <a class="navbar-brand" style="color: #76ff03;">Administrator</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li style="padding-bottom: 5px;">
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Change Password</a>
                        </li>
                        <li>
                            <a href="admin_create.php"><i class="fa fa-plus"></i> Create Administrator</a>
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
                        <a href="admin_schools_list.php"><i class="fa fa-graduation-cap"></i> Schools </a>
                    </li>
                    <li>
                        <a href="admin_diocese_list.php"><i class="fa fa-table"></i> Diocese</a>
                    </li>
                    <li>
                        <a href="admin_students.php"><i class="glyphicon glyphicon-user"></i> Students</a>
                    </li>
                    <li>
                        <a href="admin_questions.php"><i class="fa fa-list"></i> Questions</a>
                    </li>
                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#reports"><i class="fa fa-fw fa-bar-chart-o"></i>  Reports <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="reports" class="collapse">
                            <li>
                                <a href="admin_baseline_reports.php">Baseline Data Summary Results</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>



        <div id="main-body" >

            <div class="container-fluid" >


                <!-- /.row -->

                <div class="row" id="body-content" style="height: 100%; min-height: 600px;">
                    <div class="col-lg-12">
                        <div class="well">
                            <h2 style="padding-bottom: 20px;">Baseline Data Summary Results</h2>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-inline">
                                        <div class="form-group">
                                            <select name="diocese" id="diocese" class="form-control input-md">
                                              <?php
                                              $dd=mysqli_query($db,"SELECT diocese.diocese_name
                                                FROM diocese
                                                WHERE diocese_id='$_POST[diocese]'");
                                              while($dd1=mysqli_fetch_row($dd)){
                                                ?>
                                                <option value=<?php echo $_POST['diocese']; ?>><?php echo 'Diocese of'." ".$dd1[0];?></option>
                                                <?php
                                              }
                                              
                                              $i=1;
                                              while($dion=mysqli_fetch_row($dio)){
                                                $i=$i+1;
                                                echo '
                                                <option value="'.$dion[0].'">Diocese of '.$dion[1].'</option>
                                                ';
                                              }
                                              ?>
                                            </select> 
                                        </div>                                        
                                    
                                        <input type="submit" class="btn btn-primary btn-md" name="medsubmit" value = "Select Diocese">
                                        
                                    </form>
                                </div>
                            </div>
<?php
if(!isset($_POST['medsubmit'])):
?>
                          <div class="row">
                            <div class="col-lg-12">
                              <h3 style="padding-top: 30px; padding-bottom: 30px;" align="center">Please select a diocese to view...</h3>
                            </div>
                          </div>
<?php
else:
?>
        
                            <div class="row" style="padding-top: 20px;">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                      <h3 align="center" style="padding-bottom: 10px;">Diocese of <?php echo $dio_details[1]; ?></h3>
                                        <table class="table table-hover table-bordered" style="background-color: #fff;">
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
                                                (SELECT COUNT(*) FROM pre_test f INNER JOIN student d ON f.stud_id = d.stud_id WHERE d.school_id='$school[0]' AND d.gender='Male') as 'male',
                                                (SELECT COUNT(*) FROM pre_test f INNER JOIN student d ON f.stud_id = d.stud_id WHERE d.school_id='$school[0]' AND d.gender='Female') as 'female',
                                                (SELECT COUNT(*) FROM pre_test f INNER JOIN student d ON f.stud_id = d.stud_id WHERE d.school_id='$school[0]'),

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
                                                WHERE d.school_id='$school[0]'");
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
                                            <td>".$info1[18]."</td>
                                            </tr>";  
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
                                            <td><b>".$info[18]."</b></td>
                                            </tr>"; 
                                            ?>  
                                        </table>
                                        <h6><b>NOTE: <br> Recommended Paper size for printing is Legal(Landscape) <br> Only the students who already answered the PAT are listed</b></h6>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="text-align: center;">
                                    <a href="admin_report_print.php" class="btn btn-primary"> Print <span class="glyphicon glyphicon-print"></span></a>
                                </div> 
                            </div>
                            <?php
                            if($info[3]==0):
                            else:
                            ?>
                            <h3 align="center">Significant Findings</h3><hr>
                            <!-- Google Charts -->
                            <div id="charts">
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
<?php
endif;
endif;
?>
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
