<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'connect.php';
require 'admin_dsc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body onload="prints();">

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-offset-2 col-lg-8">
		<h2>List of Diocese</h2>
        <h4>Total number of Diocese participated: <?php echo $dio_count[0]; ?></h4>

	        <div style="padding-top: 15px;">
	          <table class="table table-hover table-bordered" data-sorting="true" data-filtering="true" data-paging="true" id="diocesetb" style="background-color:#fff; text-align: center;">
	            <thead>
	              <tr>
	                <th data-breakpoints="xs sm md lg">Diocese ID</th>
	                <th>Diocese Name</th>
	                <th data-breakpoints="xs"># of Schools Included</th>
	              </tr> 
	            </thead>
	            <?php 
	            $dios=mysqli_query($db,"SELECT * FROM diocese ORDER BY diocese_id");
	            $cnt=mysqli_query($db,"SELECT ");
	            while($dioo=mysqli_fetch_row($dios)){

	             $num_school_sql=mysqli_query($db,"SELECT COUNT(*) from school WHERE diocese_id='$dioo[0]'");
	             $num_school=mysqli_fetch_row($num_school_sql);

	             ?>
	             <tr>


	              <th><?php echo $dioo[0]?></th>
	              <td><?php echo $dioo[1]?></td>
	              <td><?php echo $num_school[0]?></td>
	              </tr>
	              <?php
	            }
	            ?>
	          </table>
	        </div>			
		</div>
	</div>
</div>

<script>
function prints(){
  window.print();

}
</script>

</body>
</html>