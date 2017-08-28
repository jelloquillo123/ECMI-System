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
    <link rel="stylesheet" href="css/materialize.css">
    <link href="css/dropdowns-enhancement.min.css" rel="stylesheet">

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
                        <a href="#div2">Questions</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="admin_students.php">Students</a>
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


    

  <div class="container-fluid green">
    <div class="row">
    <div class="col-md-offset-3 col-md-6 col-md-offset-3">
    <br><br>
      <div class="well" align="center">
        <div class="row">
        <div class="col-sm-7">
        <h3 align="left">Edit Question</h3>
        </div>
        <div class="col-sm-offset-2 col-sm-5">
        </div>
        </div>
        <div class="row">
        <div class="col-sm-5">
         <h4 align="left"> Question #</h4>   
        </div>
        </div>
    <br />
  <form class="form-horizontal" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-3" for="lname">Statement:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lname" name="ulname" value="<?php echo $lname ?>" required>
    </div>
  </div>
  <div class="row">
        <div class="col-sm-5">
         <h4 align="left"> Choices</h4>   
        </div>
        </div>
    <form class="form-horizontal" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-3" for="lname">a:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lname" name="ulname" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="lname">b:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lname" name="ulname" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="lname">c:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lname" name="ulname" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="lname">d:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="lname" name="ulname" value="" required>
    </div>
  </div>

  

    <div class="row">
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4" align="middle">
    <br/> 
    <input type="submit" class="btn btn-primary btn-lg" align="center" name="submit" align="center" value="Edit Question">
    </div>
    </div>
</div>
</form>
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