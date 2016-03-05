<?php 
include"../functions/connection.php";
include"../functions/error.php";

$query = mysqli_query($con,"SELECT * FROM feedbackq JOIN feedbacka ON feedbackq.unique = feedbacka.qid  where feedbackq.shows ='1'  ORDER BY feedbackq.id DESC");

$cc=0;
while(($row=mysqli_fetch_array($query))){
	$cc++;
	$q=$row['question'];
	$a=$row['a'];
	$b=$row['b'];
	$c=$row['c'];
	$d=$row['d'];
	$e=$row['e'];
	$ida=$row['id'];
	
	
echo " $cc . $q <br/> <span style=' padding:0 5px 0 5px; border-radius:100px; background-color:white;'>a</span>
<input type=\"radio\" name='ans$ida' id='ans$ida'>
 $a </br/> <span style=' padding:0 5px 0 5px; border-radius:100px; background-color:white;'>b</span>
 <input type=\"radio\" name='ans$ida' id='ans$ida'>$b </br/><span style=' padding:0 5px 0 5px; border-radius:100px; background-color:white;'>c</span>
<input type=\"radio\" name='ans$ida' id='ans$ida'>$c</br/> <span style=' padding:0 5px 0 5px; border-radius:100px; background-color:white;'>d</span>
<input type=\"radio\" name='ans$ida' id='ans$ida'>$d</br/>Comment</br/> <textarea style=' padding:0 5px 0 5px; '></textarea>  </span><hr></hr> <br/><br/>


";
}
echo "<input onClick=\"feedad('ans$ida')\"  type=\"button\" value=\"Submit\">";

?>