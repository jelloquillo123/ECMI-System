<?php
  session_start();
  require 'connect.php';
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


                      <table class="table table-striped tablecenter" data-paging="true" id="schooltb" style="background-color:#fff;">
                        <thead>
                        <tr>
                          <th>School ID</th>
                          <th>School Name</th>
                          <th>Diocese</th>
                         
                        </tr>  
                        </thead>
                          <?php 
                          $scool=mysqli_query($db,"SELECT school.school_id,school.school_name,diocese.diocese_name 
                                              FROM school
                                              JOIN diocese
                                                ON school.diocese_id=diocese.diocese_id");
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
</body>