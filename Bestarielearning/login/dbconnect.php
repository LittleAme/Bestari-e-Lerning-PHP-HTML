<?php

$host ="localhost"; //Host name
$username = "root"; //Mysql username
$password = ""; //Mysql password
$db_name ="bestaridb"; // Database name

// Connect to server and select database.

mysql_connect ("$host", "$username", "$password") or die ("Database Connection Failed");

mysql_select_db("$db_name") or die("Database Connection Failed");


?>


 <?php
 if(!session_id())session_start();
 
 if(isset($_POST['loginbtn']))
{
$usr = $_POST['txtfieldUsername'];
$pass = $_POST ['txtfieldPassowrd'];
 

$sql="SELECT * FROM users WHERE Username='$usr' and Password='$pass'";
$result = mysql_query($sql);

$data = mysql_fetch_array($result);
$count = mysql_num_rows($result);
if ($count ==1)
 {
//======================================================================	 
	 if ($data['Level']=="admin"){
		 
     $_SESSION['icnum'] = $data['IC'];
	 $_SESSION['admin'] = $data['Name'];
	 $_SESSION['user'] = $data['Username'];  
	 // set kan 'session[user]' utk dia ambil data 'username' dari table database
	 $_SESSION['txtfieldUsername']=$usr;
	 
    echo '<script>
			window.alert("You have successfully login as administration");
			window.location=("../index.php");
			</script>';
	 }
//======================================================================			
	 
//======================================================================	
	 else if ($data['Level']=="student"){
		 
	 $_SESSION['student'] = $data['Name'];
	  $_SESSION['icnum'] = $data['IC'];
	 $_SESSION['user'] = $data['Username'];   // set kan 'session[user]' utk dia ambil data 'username' dari table database
     $_SESSION['txtfieldUsername']=$usr;
 
	 echo '<script>
			window.alert("You have successfully login as student");
			window.location=("../index.php");
			</script>';		
	 }
//======================================================================			
//======================================================================		
	else if ($data['Level']=="teacher")
	{	 
	
	 $_SESSION['icnum'] = $data['IC'];
	$_SESSION['teacher'] = $data['Name'];
	$_SESSION['user'] = $data['Username'];     // set kan 'session[user]' utk dia ambil data 'username' dari table database
    $_SESSION['txtfieldUsername']=$usr;

 
	 echo '<script>
			window.alert("You have successfully login as teacher");
			window.location=("../index.php");
			</script>';
	 }
//======================================================================	 
 }
 else

 echo '<script>
			window.alert("Wrong username or password!");
			window.location=("index.php");
			</script>';
	
	
}


 if(isset($_GET['logout']))
{
	unset($_SESSION['user']);
   session_destroy();
   
    echo '<script>window.alert("You have successfully logged out!");
			window.location=("index.php");
			</script>';
}

?>