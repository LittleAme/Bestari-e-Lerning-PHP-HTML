
<?php
include('../../login/dbconnect.php');
include('../../login/logon.php');

if (isset($_SESSION['admin']))
  {


$usr = $_SESSION['txtfieldUsername'];
//retreive data from databasee
$sql = "SELECT * FROM users WHERE Username = '$usr' ";
$result = mysql_query($sql);
$rows = mysql_fetch_array ($result);

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Bestari@E-Learning</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../../layout/styles/layout.css" type="text/css" />


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

<div id="topnav">
    <ul>
      <li><a href="../../index.php"><strong>Home</strong></a></li>
      <li><a href="../../subjectlist/"><strong>Subject Notes</strong></a></li>
	  <li><a href="../../admin/userlist/"><strong>User List</strong></a></li>
	  <li class="active"><a href="../../admin/newusers/index.php"><strong>Register New Users</strong></a></li>
	  <li><a href="../../userinfo/index.php"><strong>Account Information</strong></a></li>
      <li><a href="../../admin/editabout/index.php"><strong>Edit About</strong></a></li>
	  <li><a href="../../about-us/index.php"><strong>About Us</strong></a></li>
      <li class="last"><a href="index.php?logout=1"><strong>Logout</strong></a></li>
      <li style="float:right"> <b> Welcome </b>  <?php echo $_SESSION['user'] ?>  </li>
	
    </ul>

  </div>

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
  <div id="quicknav" class="clear"> <a href="../../index.php" ><img src="../../images/back.png" width="110" height="34"  /> </a>|&nbsp;&nbsp;REGISTRATION FOR NEW USERS</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->

    
    <div class="content" >
   <form action="" method="post" >
<strong>Username:</strong>
<br />

    <input name="usernamebox" class="tb4" type="text" id="textfield4"  size="15" /><br /><br />
         <strong>Password:</strong><br />

      <input name="passwordbox" class="tb4" type="password" id="textfield4"  size="15" />
         <br />
         <h1></h1>
         
   

<strong>Name:</strong><br />

      <input name="namebox" class="tb4" type="text" id="textfield" size="25" />
       
         
         <br />
         <br />
         <br />
         
         <strong>IC Number:</strong><br />

      <input name="icbox" class="tb4" type="text" id="textfield" size="15" />
       
         
         Eg : Format: 123456-78-1524<br />
         <br />

        <br /><strong>Address:</strong>
        <br />

      <textarea name="addressbox" class="tb4" id="textarea" style="resize:none" cols="45" rows="6"></textarea>           <label for="textfield2"></label>
     
     
     <br />
     <br />
     <br /><strong>Phone Number:</strong>
     <br />

      <input name="phonebox" class="tb4" type="text" id="textfield2" size="10" />
         </label>
         Eg : Format: 0123456789<br />
         <br />
        
        <br /><strong>Email:</strong>
        <br />

      <input name="emailbox" class="tb4" type="text" id="textfield3"  size="20" />
      <br />
      
       <br />
       <br />
       <strong>Level</strong>:<br />

      
      <label for="select"></label>
      <select name="levelbox" id="select">
      <option>teacher
      <option>student
      <option>admin
      </select>
<br />
      <br />
      <br />
    

      <input name="add" class="button" type="submit" value="Register!"/> &nbsp;&nbsp;&nbsp;&nbsp;
     <input  class="button" type="reset" value="Reset All"/>
   </form>
  </div>
    
    
    
    
    
    
    
  
   
   
   
   
   
   
   
   
   
   <?php
if (isset($_POST['add']))
{
	
$username=$_POST ['usernamebox'];
$password=$_POST['passwordbox'];
$name=$_POST['namebox'];
$ic=$_POST['icbox'];
$address=$_POST['addressbox'];
$phoneno=$_POST['phonebox'];
$email=$_POST['emailbox'];
$level=$_POST['levelbox'];


//Update data into mysql
$sql1="INSERT INTO users (IC, Name, Address, PhoneNo, Email, Username, Password,Level) VALUES('$ic', '$name', '$address', '$phoneno', '$email', '$username' , '$password' , '$level')";

$result1=mysql_query($sql1);

//if succcessfully update data into database, display message "Successful".

if($result1)
{
	echo '<script type="text/javascript">
	alert("New Account Added!");
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