<?php
include('../login/dbconnect.php');
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
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
    <?php
  require('navbar.php');
  ?>
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
  <div id="quicknav" class="clear">
 <a href="../index.php" ><img src="../images/back.png" width="110" height="34"  /> </a>|&nbsp;ABOUT US</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
   <?php
   $target = "../images/RoomImgFolder/";
   $sql="SELECT * FROM aboutus";
   $rs_result=mysql_query($sql);
   $rows = mysql_fetch_assoc ($rs_result);
   
   ?>
   
   
   
   
   
   
   
    <div id="portfolio">
      <ul>
        <li class="clear">
          <div class="fl_left2">
          <input type="image" name="imageField" id="imageField" src="<?php echo $target.$rows["imgpath"]; ?>" height="300" width="900"><br />
<br />
<br />
<?php echo $rows['content']; ?>
       
          </div>
        </li>
        <li class="clear"></li>
      </ul>
    </div>
    <!-- ####################################################################################################### --><!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper"></div>
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