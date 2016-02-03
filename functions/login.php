<?php 


include"../functions/connection.php";
include"../functions/error.php";

session_start();

$emailss = $_SESSION['email'];
$last	= $_SESSION['lastname'];
$first = $_SESSION['firstname'];
$idd = $_SESSION['id'];


$iemail = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['ee'])));
$ipassword = mysqli_real_escape_string($con,nl2br(htmlspecialchars($_POST['piy'])));
//$login = $_POST['ilogin'];


	if($iemail){
		
		if($ipassword){
			$hipass = md5($ipassword);
			$query = mysqli_query($con,"SELECT * FROM client WHERE email = '$iemail' AND password ='$hipass'");
$numrows = mysqli_num_rows($query);

if($numrows ==1){
	echo ".";
while($row = mysqli_fetch_assoc($query)){
			
			
			$dbemail = $row['email'];
			$dbfirstname = $row['firstname'];
			$dblastname = $row['lastname'];
			$dbid = $row['id'];
			
			
			$_SESSION['email']= $dbemail;
			$_SESSION['lastname']= $dblastname;
			$_SESSION['firstname']= $dbfirstname;
			$_SESSION['id']= $dbid;
			}
			
			//if session exist 
			
}else echo "Email or Password don't exist!!";

}else echo  " Input password";
}else echo "Input email";








?>