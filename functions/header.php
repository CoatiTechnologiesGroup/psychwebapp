<?php 
include"error.php";
session_start();




$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];

//if email exist direct
if($emailss){
		//header("location: ./main/main.php");
		}else 	header("location: ../index.php");
?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php $i = 1;?>
<link type="text/css" href="../css/main.css" rel="stylesheet"/>
</head>
<body>
<div id="top">
<span id="logout"><a  href="../functions/logout.php" >logout</a></span> 
<span style="color:black;float:left;font-size:25px; ">|</span>
<span id="setting" > 
<a style="" href="./profilec.php">settings</a></span>
<span id= "welcome"><?php echo "welcome $first $last "; ?></span>

</div>


