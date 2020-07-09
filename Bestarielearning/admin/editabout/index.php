
<?php
session_start();
include('../../login/dbconnect.php');
  if (isset($_SESSION['admin']))
  {

 ?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


</style>

</head>
<body id="top">
<div class="wrapper row1">

<div id="topnav">
    <ul>
      <li><a href="../../index.php"><strong>Home</strong></a></li>
      <li><a href="../../subjectlist/"><strong>Subject Notes</strong></a></li>
	  <li><a href="../../admin/userlist/"><strong>User List</strong></a></li>
	  <li><a href="../../admin/newusers/index.php"><strong>Register New Users</strong></a></li>
	  <li><a href="../../userinfo/index.php"><strong>Account Information</strong></a></li>
      <li  class="active"><a href="../../admin/editabout/index.php"><strong>Edit About</strong></a></li>
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
  <div id="quicknav" class="clear">
   <a href="../../index.php" ><img src="../../images/back.png" width="110" height="34"  /> </a>|&nbsp; EDIT ABOUT</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
  
     <?php
   $target = "../../images/RoomImgFolder/";
   $sql="SELECT * FROM aboutus";
   $rs_result=mysql_query($sql);
   $rows = mysql_fetch_assoc ($rs_result);
   
   ?>
  
  
  
   <form action="edit.php" method="post"  enctype="multipart/form-data" >
     
     <table class="table2" width="501" height="146" border="1">
     <thead>
  <tr>
    <th width="216" height="32"><div align="center">Current Banner:</div></th>
    <th width="269"><div align="center">Change Banner</div></th>
  </tr>
  </thead>
  
  
  <tr>
    <td height="68"><input type="image" name="imageField" id="imageField" src="<?php echo $target.$rows["imgpath"]; ?>" height="80" width="210" disabled="disabled"></td>
    <th><div align="center">
      <input type="file" name="photo" id="fileField" />
    </div></th>
  </tr>
  <tr>
    <td height="24">&nbsp;</td>
    <td><div align="center">
      <input type="submit" class="button" name="submit1" id="button" value="Submit" />
    </div></td>
  </tr>
</table><br /><br />
<br />
<br />

<table class="table2" width="523" height="267" border="1">
<thead>
  <tr>
    <th width="513" height="24"><div align="center">Content</div></th>
  </tr>
  </thead>
  
  <tr>
    <td height="203"><label for="textarea"></label>
      <textarea name="contentbox" id="textarea" cols="100" rows="15"><?php echo $rows["content"]; ?></textarea></td>
  </tr>
  <tr>
    <td height="30"><div align="center">
      <input type="submit" class="button" name="submit2" id="button2" value="Update!" />
    </div></td>
  </tr>
</table>
<br />


     
     
     
     
     
     
     
     
   </form>
   
  
   
   
   
   

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
			window.location=("../../index.php");
			</script>';
	  
  }
  ?>