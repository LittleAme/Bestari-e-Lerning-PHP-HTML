<?php
session_start();

include('../../login/dbconnect.php"');

if(isset($_SESSION['teacher'])){

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
.content{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	margin-left: auto;
	margin-right: auto;
	width: 700px;
	border: #333 1px solid;
	border-radius: 12px;
	-moz-border-radius: 12px;
	padding: 12px;
}

</style>


</head>
<body id="top">
<div class="wrapper row1">

<div id="topnav">
    <ul>
      <li><a href="../../index.php"><strong>Home</strong></a></li>
      <li><a href="../../subjectlist/"><strong>Subject Notes</strong></a></li>
	  <li  class="active"><a href="../../teacher/quizlist/index.php"><strong>Quiz List</strong></a></li>
	  <li><a href="../../teacher/studentlist"><strong>Student List</strong></a></li>
	  <li><a href="../../teacher/uploadnotes/"><strong>Upload Notes</strong></a></li>
	  <li ><a href="../../teacher/uploadquiz/index.php"><strong>Upload Quiz</strong></a></li>
	  <li><a href="../../teacher/managequizresult/index.php"><strong>Manage Student Result</strong></a></li>
      <li><a href="../../about-us/index.php"><strong>About Us</strong></a></li>
	  <li><a href="../../userinfo/index.php"><strong>Account Information</strong></a></li>
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
  <div id="quicknav" class="clear" >
  <a href="../../index.php" ><img src="../../images/back.png" width="110" height="34"  /> </a>|&nbsp;&nbsp; QUIZ LIST</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
  <div class="content" >  <!-- ####################################################################################################### -->
    <a href="english/index.php"><img src="../../images/english.png" alt="" width="280" height="150"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mathematics/index.php"><img src="../../images/math.png" alt=""  width="280" height="150"/></a>
<br />
<!-- <br />
####################################################################################################### --> 
  <a href="science/index.php"><img src="../../images/science.png" alt=" "width="280" height="150" /></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <a href="bahasamelayu/index.php"><img src="../../images/bahasamelayu.png" alt=" "width="280" height="150" /></a></div>
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