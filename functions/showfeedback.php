<?php 
include"../functions/connection.php";
include"../functions/error.php";

$query = mysqli_query($con,"SELECT * FROM feedbackq JOIN feedbacka ON feedbackq.unique = feedbacka.qid   ORDER BY feedbackq.id DESC");
$cc =0;
while(($row=mysqli_fetch_array($query))){
	
	$q=$row['question'];
	$id=$row['id'];
	$a=$row['a'];
	$b=$row['b'];
	$c=$row['c'];
	$d=$row['d'];
	$e=$row['e'];
	$show=$row['shows'];
	
	
	if($show==1){
		
		$showc ="Checked";
		}else { 
		$showc ="";}
	$cc++;
echo " $cc . $q <br/> <span style=' padding:0 5px 0 5px; border-radius:100px; background-color:white;'>a</span> $a </br/> <span style=' padding:0 5px 0 5px; border-radius:100px; background-color:white;'>b</span> $b </br/><span style=' padding:0 5px 0 5px; border-radius:100px; background-color:white;'>c</span> $c </br/> <span style=' padding:0 5px 0 5px; border-radius:100px; background-color:white;'>d</span> $d </br/>Comment</br/> <textarea style=' padding:0 5px 0 5px; '></textarea>  <span style='border:thin solid white;'><span style='color:white; background-color:red; cursor:pointer; '>delete</span>.<span style='color:white; background-color:orange;'>show <input  onclick=\"showclient('$show','$id')\"  $showc id='show$id'type='checkbox' ></span></span><hr></hr> ";
}


?>