<?php
include('../db/Login.php'); // Includes Login Script
 
if(isset($_SESSION['login_user_sys'])){
echo "Hola";
}
?>
<?php include('admin.php'); ?>
<?php include('nav-su.php'); ?>