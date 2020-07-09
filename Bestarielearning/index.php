<?php
include('login/dbconnect.php');
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
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- Featured Slider  -->
<script type="text/javascript" src="layout/scripts/jquery-s3slider.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#featured_slide_").s3Slider({
		timeOut:10000 
	});
});
</script>
<!-- / Featured Slider -->
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
<div class="wrapper row3">
  <div id="featured_slide_">
    <ul id="featured_slide_Content">
      <li class="featured_slide_Image"><a href="#"><img src="images/banner1.png" alt="" /></a>
          <div class="introtext">
          <h2>Bestari Private School@e-Learning</h2>
          
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="images/banner2.png" alt="" /></a>
         <div class="introtext">
          <h2>Simple and Easy</h2>
          
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="images/banner3.png" alt="" /></a>
      <div class="introtext">
          <h2>Share your knowledge with others!</h2>
      
        </div>
      </li>
      <li class="clear featured_slide_Image"><!-- Important - Leave This Empty --></li>
    </ul>
  </div>
  <div id="hpage_featured_info" class="clear">
    <ul>
      <li><a href="subjectlist/"><img src="images/subjecticon.png" alt="" width="140" height="120"  /> <strong>      Subject <br />
      list</strong></a></li>
      <li><a href="take-quiz/"><img src="images/quizicon.png" alt="" width="140" height="120"/> <strong>Take a <br />
      quiz</strong></a></li>
      <li class="last"><a href="about-us/index.php"><img src="images/about.png" alt="" /> <strong>About <br />
      US</strong></a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="quicknav" class="clear">
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### --><!-- ####################################################################################################### --> 
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