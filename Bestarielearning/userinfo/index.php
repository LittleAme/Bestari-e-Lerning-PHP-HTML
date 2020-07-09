
<?php
session_start();
include('../login/dbconnect.php');

if (isset($_SESSION['icnum']))
  {


$icno = $_SESSION['icnum'];
//retreive data from databasee
$sql = "SELECT * FROM users WHERE IC = '$icno' ";
$result = mysql_query($sql);
$rows = mysql_fetch_array ($result);

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Bestari@E-Learning</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />

<style type="text/css">
.content{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	width: 450px;
	border: #333 1px solid;
	border-radius: 12px;
	-moz-border-radius: 12px;
	padding: 12px;
}


.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

select {
  font-size: 15px;
}

.tb4 {
	font-size: 15px;
}
</style>


</head>
<body id="top">
<div class="wrapper row1">
<?php
include('navbar.php');
?>

</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1>BESTARI@E-LEARNING</h1>
      <p>FAST-EASY-ANYWHERE</p>
    </div>
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="quicknav" class="clear">
     <a href="../index.php" ><img src="../images/back.png" width="110" height="34"  /> </a>|&nbsp;&nbsp;ACCOUNT INFORMATION</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div class="content" >
   <form action="" method="post" >
<strong>Username:</strong>

    <?php echo $rows['Username']; ?> 
         &nbsp;&nbsp;&nbsp;&nbsp;*Username unable to change!<br /><br />
         <strong>Password:</strong>
         <input name="passwordbox" class="tb4" type="password" id="textfield4" value="<?php echo $rows['Password']; ?>" size="10" />
         <br /><br />

<br />

<strong>Name:</strong><br />

          <input name="namebox" class="tb4" type="text" id="textfield" value="<?php echo $rows['Name']; ?>" size="25" />
       
         
         <br />
         <br />
         <br />
         
         <strong>IC Number:</strong><br />

        <input name="icbox" class="tb4" type="text" id="textfield" value="<?php echo $rows['IC']; ?>" size="15" />
       
         
         Eg : Format: 123456-78-1524<br />
         <br />

        <br /><strong>Address:</strong>
        <br />

          <textarea name="addressbox" class="tb4" id="textarea" style="resize:none" cols="45" rows="6"><?php echo $rows['Address']; ?></textarea>           <label for="textfield2"></label>
     
     
     <br />
     <br />
     <br /><strong>Phone Number:</strong>
     <br />

           <input name="phonebox" class="tb4" type="text" id="textfield2" value="<?php echo $rows['PhoneNo']; ?>" size="10" />
         </label>
         Eg : Format: 0123456789<br />
         <br />
        
        <br /><strong>Email:</strong>
        <br />

       <input name="emailbox" class="tb4" type="text" id="textfield3" value="<?php echo $rows['Email']; ?>" size="20" />
      <br />
      <br />
      <br />

         <input name="Submit" class="button" type="submit" value="Update Info"/> &nbsp;&nbsp;&nbsp;&nbsp;
     <input  class="button" type="reset" value="Reset All"/>
   </form>
   </div>
   <?php
if (isset($_POST['Submit']))
{
$icdia = $_SESSION['icnum'];
$usr = $_SESSION['txtfieldUsername'];
//Get values from form
$pass=$_POST ['passwordbox'];
$ic=$_POST ['icbox'];
$name=$_POST ['namebox'];
$address=$_POST['addressbox'];
$nophone=$_POST['phonebox'];
$email=$_POST['emailbox'];

//Update data into mysql
$sql1="UPDATE users SET IC = '$ic', Name = '$name', Address='$address', PhoneNo='$nophone' , Email='$email' , Password ='$pass' WHERE IC = '$icdia' ";
$result1=mysql_query($sql1);


$sql1="UPDATE quizscore SET user = '$name' WHERE useric = '$icdia' ";
$result1=mysql_query($sql1);



//if succcessfully update data into database, display message "Successful".

if($result1)
{
	echo '<script type="text/javascript">
	alert("Account Information updated.");
	window.location = "index.php";
	</script>';	
}

else{
	echo "ERROR";
}
}
mysql_close();

?>
   
   
   
   

    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="academiclinks" class="clear"></div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="copyright" class="clear">
      <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - >Bestari@e-Learning</p>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
</body>
</html>

<?php
  }
  else
  {
	    echo '<script>
			window.location=("../index.php");
			</script>';  
  }
  ?>