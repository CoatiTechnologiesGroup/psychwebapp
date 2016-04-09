<?php 
 error_reporting(E_ALL ^ E_NOTICE);
require("connection.php");

session_start();
$emailss = $_SESSION['email'];


//admin 
$aa = mysqli_real_escape_string($con,nl2br(htmlspecialchars( ($_POST['a']))));
$pa = mysqli_query($con,"select * from admin_pass where email ='$aa'");

$numma = mysqli_num_rows($pa);
if($numma>0){

 mysqli_query($con,"DELETE FROM admin_pass WHERE email = '$aa' ");
mysqli_query($con,"DELETE FROM client WHERE email = '$aa' ");
 echo "account deleted";
}

?>