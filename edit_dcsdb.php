<?php 
require 'connect.php';
$username=$_SESSION['username'];
$sch=mysqli_query($db,"SELECT school.school_id,school.school_name,diocese.diocese_name
	FROM school
	INNER JOIN diocese
	ON school.diocese_id=diocese.diocese_id
	INNER JOIN coordinator
	ON school.school_id=coordinator.school_id
	INNER JOIN account
	ON coordinator.account_id=account.account_id
	WHERE account.username='$username'");
$id=$_GET['id'];
if(isset($_POST['submitdcs']))
{
	$d0 = $_POST['ndcs'];
	mysqli_query($db,"UPDATE diocese
		SET diocese_name='$d0'
		WHERE diocese_id=$id");
	echo "<script>
	alert('Successfully Updated.');
	window.location.href='admin_diocese_list.php';
	</script>";
}


$di=mysqli_query($db,"SELECT * FROM diocese WHERE diocese_id=$id");
while($din=mysqli_fetch_row($di))
{
	$dinum=$din[0];
	$dim=$din[1];
}

?>