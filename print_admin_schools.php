<?php

  require 'connect.php';
  require 'admin_schoolsdb.php';
?>


<script>
function prints(){
  window.print();

}

</script>

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
      #edit_header{
      margin-bottom: 50px;
    }
    #coor_header{
      margin-top: 50px;
      margin-bottom: 30px;
    }
    </style>
    
  </head>


<body onload = "prints();">

<div style="padding-bottom: 20px;">
  <h1>List of Schools</h1>
  <h4>Total number of participated schools: <?php echo $scount; ?></h4>
</div>

<div class="well">
  
                      <table class="table table-striped tablecenter" data-paging="true" id="schooltb" style="background-color:#fff;">
                        <thead>
                        <tr>
                          <th>School ID</th>
                          <th>School Name</th>
                          <th>Diocese</th>
                         
                        </tr>  
                        </thead>
                          <?php 
                          while($sc=mysqli_fetch_row($scool)){
                          ?>
                        <tr>
                          <th><?php echo $sc[0]?></th>
                          <td><?php echo $sc[1]?></td>
                          <td><?php echo $sc[2]?></td>
                          
                        <?php
                          }
                        ?>
                      </table>
</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
</body>