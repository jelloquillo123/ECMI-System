<?php
require 'school_authentication.php';
require 'connect.php';
$id=$_GET['id'];
$default_pass="sdofp-ecmi";

$hash_pass=password_hash($default_pass,PASSWORD_DEFAULT);

$update_query= "UPDATE account 
    SET pword='$hash_pass'
    WHERE account_id='$id'";

if (mysqli_query($db,$update_query)){
?>
    <script>
    alert('Successfully Updated.');
    window.location.href='school_students.php';
    </script>

<?php
}
else {
?>
        <script>
        alert('Error Updating Record. <?php echo mysqli_error($conn); ?>');
        window.location.href='school_students.php';
        </script> 
<?php
}

?>




