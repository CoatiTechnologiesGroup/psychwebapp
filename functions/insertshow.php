<?php
include"../functions/connection.php";
include"../functions/error.php";
include"../functions/drop.php";

$age = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['age'])));
$stage = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['stage'])));
$Symptoms = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['symptoms'])));
$Psychological =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['psychological'])));
$Evidence =mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['evidence'])));
$Basis = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['basis'])));

$empty= "Input all fields or put N/A";

if($age){
if($stage){
if($Symptoms){
if($Psychological){
if($Evidence){
	if($Basis){
		
		
		$query = mysqli_query($con,"insert into groupp values('id','$age','$stage','$Symptoms','$Psychological','$Evidence','$Basis')");
		
		
	 dropbox($con,$age,$stage,$Symptoms,$Psychological,$Evidence,$Basis);
		echo "Inserted successfully :)";
		}else echo $empty;
	
	
	}else  echo $empty;
	
	}else  echo $empty;
	
	}else  echo $empty ;
	
	}else echo $empty;
	
	}else echo $empty;



 ?>