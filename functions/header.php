<?php 
session_start();


$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];

?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css" href="../css/main.css" rel="stylesheet"/>
</head>
<body>
<div id="div">sdfsdf || home || profile|| <a  href="../functions/logout.php" >logout</a></div>

<?php echo "welcome $first $last "; ?>