<?php
require 'admin_authentication.php';
$id=$_GET['id'];
//selecting data associated with this particular 
$admin_name_query =mysqli_query($db,"SELECT admin.fname,admin.mname,admin.lname,admin.admin_id,account.username,account.account_id FROM admin JOIN account ON admin.account_id = account.account_id WHERE admin.admin_id='$id'");
while ($res=mysqli_fetch_row($admin_name_query)) {
  $a_fname=$res[0];
  $a_mname=$res[1];
  $a_lname=$res[2];
  $a_id=$res[3];
  $a_uname=$res[4];
  $a_accid=$res[5];
}



if(isset($_POST['submit']))
{


  $u1 = $_POST['lname'];
  $u2 = $_POST['fname'];
  $u3 = $_POST['mname'];
  $u4 = $_POST['uname'];

  mysqli_query($db,"UPDATE admin
    SET lname='$u1', fname='$u2', mname='$u3'
    WHERE admin_id='$id'");
  mysqli_query($db,"UPDATE account
    INNER JOIN admin
    ON account.account_id=admin.account_id
    SET username='$u4'
    WHERE admin_id='$id'");

        echo "<script>
        alert('Successfully Updated.');
        window.location.href='admin_list.php';
        </script>";
}
?>