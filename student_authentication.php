<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if (!isset($_SESSION['username'])){
    header("Location: index.php");  
}

if ($_SESSION['access']!="stud_level"){
	if ($_SESSION['access']=="admin_level"){
  header("Location: admin_schools_list.php");
	}
	elseif($_SESSION['access']=="school_level"){
	  header("Location: school_students.php");
	}
}
?>