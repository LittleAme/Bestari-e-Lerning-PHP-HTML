 <?php
 session_start();
include('../../login/dbconnect.php');


  if (isset($_SESSION['admin']))
  {

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Educational Theory
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<title>Bestari@E-Learning</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../../layout/styles/layout.css" type="text/css" />

<style type="text/css">
.table2 {
  font-size: 16px;
  font-family: Arial, Helvetica, sans-serif;
}

h1.uppercase {
    
	 font-size: 18px;
	 font-family: Arial, Helvetica, sans-serif;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 5px;
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
  font-size: 18px;
}





</style>





</head>
<body id="top">
<div class="wrapper row1">

<div id="topnav">
    <ul>
      <li><a href="../../index.php"><strong>Home</strong></a></li>
      <li><a href="../../subjectlist/"><strong>Subject Notes</strong></a></li>
	  <li class="active"><a href="../../admin/userlist/"><strong>User List</strong></a></li>
	  <li><a href="../../admin/newusers/index.php"><strong>Register New Users</strong></a></li>
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
    <div class="fl_right">
 
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="quicknav" class="clear"><a href="../../index.php" ><img src="../../images/back.png" width="110" height="34"  /> </a>|&nbsp;&nbsp;USER LIST
    
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
  <form method="post" action="">
   <h1>Search : <input name="searchtxtbox" type="text"  size="35"/> <input name="srch" type="submit" class="button"  value="Search"/></h1>
  
   <input name="studentlist" class="button" type="submit" value="Student List"/>&nbsp;&nbsp;
   <input name="teacherlist" class="button"  type="submit" value="Teacher List"/>&nbsp;&nbsp;
   <input name="adminlist" class="button"  type="submit" value="Admin List"/>&nbsp;&nbsp;
   <input name="showall" class="button"  type="submit" value="Show All"/>&nbsp;&nbsp;
  </form>
  
  <br />
<br />

  
    <!-- ####################################################################################################### --> 
  </div>
  
  
  <table width="95%" align="center" cellpadding="0" cellspacing="0" class="table2" summary="Summary Here">
        <thead>
          <tr>
            <th width="3%">No</th>
            <th width="7%">IC Number</th>
            <th width="5%">Username</th>
            <th width="16%">Name</th>
            <th width="22%">Address</th>
            <th width="7%">Phone No</th>
            <th width="14%">Email</th>
            <th width="5%">Level</th>
            <th width="4%">Delete</th>
            <th width="4%">Update</th>
          </tr>
        </thead>
        <tbody>
        
        
          <?php
  
  include ('../../login/dbconnect.php');
  
  
  //=========================================================
   if(isset($_POST['studentlist']))
  {

 
  $sql = "SELECT * FROM users WHERE Level = 'student'";
  $rs_result = mysql_query($sql);
  
  }
 //=========================================================
 //=========================================================
  else if(isset($_POST['adminlist']))
  {

 
  $sql = "SELECT * FROM users WHERE Level = 'admin'";
  $rs_result = mysql_query($sql);
  
  }
//========================================================= 
  
 //=========================================================
   else if(isset($_POST['teacherlist']))
  {

 
  $sql = "SELECT * FROM users WHERE Level = 'teacher'";
  $rs_result = mysql_query($sql);
  
  }
 //=========================================================
	
 //=========================================================
     else if(isset($_POST['showall']))
  {

 
  $sql = "SELECT * FROM users";
  $rs_result = mysql_query($sql);
  
  }
  
 //=========================================================
  
     else if(isset($_POST['srch']))
  {

  $usrname = $_POST['searchtxtbox'];
  $sql = "SELECT * FROM users WHERE Name LIKE '%$usrname%'";
  $rs_result = mysql_query($sql);
  
  }
  
 //=========================================================  
  

 else{
	  
  
  $sql = "SELECT * FROM users";
  $rs_result = mysql_query($sql);
 }
 
 
 
  $i = 0;
  while ($rows = mysql_fetch_assoc ($rs_result))
  {
  $i++;
  
  ?>
        
          <tr class="light">
            <td height="26"><?php echo $i; ?></td>
            <td><?php echo $rows['IC']; ?></td>
            <td><?php echo $rows['Username']; ?></td>
            <td><?php echo $rows['Name']; ?></td>
            <td><?php echo $rows['Address']; ?></td>
            <td><?php echo $rows['PhoneNo']; ?></td>
            <td><?php echo $rows['Email']; ?></td>
             <td><?php echo $rows['Level']; ?></td>
            <td><a href="delete.php?id=<?php echo $rows['IC']; ?>">DELETE</a></td>
            <td><a href="update.php?updt=<?php echo $rows['IC']; ?>">UPDATE</a></td>
          </tr>
        
        </tbody>
        
        <?php
  }
  ?>
        
      </table>
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
			window.location=("../../index.php");
			</script>';
	  
  }
  ?>