<?php

include('dbconnect.php');




if(isset($_POST['signupbtn'])) 
{
$name = $_POST['namesignup']; 
$ic = $_POST['icsignup']; 
$userName = $_POST['usernamesignup']; 
$email = $_POST['emailsignup'];
$password = $_POST['passwordsignup'];

$query = "INSERT INTO users (IC,Name,Username,Password,Email,Level) VALUES ('$ic', '$name','$userName','$password','$email','student')";

 $data = mysql_query ($query)or die(mysql_error()); 

if($data)
 {
	echo'<script>window.alert("Your Registration is Complete!");
			window.location=("../login/index.php");
			</script>';
}
}



?>
