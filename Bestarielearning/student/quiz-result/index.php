 <?php
 session_start();
include('../../login/dbconnect.php');


  if (isset($_SESSION['student']))
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
<style>
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

.table2 {
  font-size: 16px;
  font-family: Arial, Helvetica, sans-serif;
}
</style>


</head>
<body id="top">
<div class="wrapper row1">

<div id="topnav">
    <ul>
      <li><a href="../../index.php"><strong>Home</strong></a></li>
      <li ><a href="../../subjectlist/"><strong>Subject Notes</strong></a></li>
      <li ><a href="../../take-quiz/"><strong>Take A Quiz</strong></a></li>
      <li class="active"><a href="../../student/quiz-result/index.php"><strong>View Quiz Result</strong></a></li>
	  <li><a href="../../userinfo/index.php"><strong>Account Information</strong></a></li>
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
  <div id="quicknav" class="clear"><a href="../../index.php" ><img src="../../images/back.png" width="110" height="34"  /> </a>|&nbsp;&nbsp; QUIZ RESULT </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
  <form method="post" action="">

  
   <input name="englishlist" class="button" type="submit" value="English"/>&nbsp;&nbsp;
   <input name="mathematicslist" class="button" type="submit" value="Mathematics"/>&nbsp;&nbsp;
   <input name="sciencelist" class="button" type="submit" value="Science"/>&nbsp;&nbsp;   <input name="bahasalist" class="button" type="submit" value="Bahasa Melayu"/>&nbsp;&nbsp;
   <input name="showall" class="button" type="submit" value="Show All"/>&nbsp;&nbsp;
  </form>
  
  <br />
<h1></h1>
  
  
 
    <!-- ####################################################################################################### --> 
  </div>
   <table width="70%" align="center" class="table2" border="1"  cellpadding="0" cellspacing="0" summary="Summary Here">
        <thead>
          <tr>
            <th width="3%">No</th>
            <th width="18%">Name</th>
            <th width="14%">IC</th>
            <th width="11%">Subject</th>
            <th width="7%">Chapter</th>
            <th width="8%">Total Question</th>
            <th width="8%">Correct Answer</th>
            <th width="8%">Wrong Answer</th>
            <th width="10%">Percentage</th>
            <th width="20%">Date/time quiz taker</th>
 
          </tr>
        </thead>
        <tbody>
        
        <?php
		  //=========================================================
  $ic =  $_SESSION['icnum'];
  
   if(isset($_POST['englishlist']))
  {
  $sql = "SELECT * FROM quizscore WHERE useric = '$ic' AND subject ='English'" ;
  $rs_result = mysql_query($sql);

  }
 //=========================================================
 //=========================================================
  else if(isset($_POST['mathematicslist']))
  {

  $sql = "SELECT * FROM quizscore WHERE useric = '$ic' AND subject ='Mathematics'";
  $rs_result = mysql_query($sql);
  }
//========================================================= 
  
 //=========================================================
   else if(isset($_POST['sciencelist']))
  {

 
  $sql = "SELECT * FROM quizscore WHERE useric = '$ic' AND subject ='Science'";
  $rs_result = mysql_query($sql);
  
  }
 //=========================================================
	 //=========================================================
   else if(isset($_POST['bahasalist']))
  {

 
  $sql = "SELECT * FROM quizscore WHERE useric = '$ic' AND subject ='Bahasa Melayu'";
  $rs_result = mysql_query($sql);
  
  }
 //=========================================================
 //=========================================================
     else if(isset($_POST['showall']))
  {

 
  $sql = "SELECT * FROM quizscore  WHERE useric = '$ic' ";
  $rs_result = mysql_query($sql);
  
  }
  
 //=========================================================
  


 else{
	  
  
  $sql = "SELECT * FROM quizscore  WHERE useric = '$ic' ";
  $rs_result = mysql_query($sql);
 }
 
 
 
  $i = 0;
  while ($rows = mysql_fetch_assoc ($rs_result))
  {
  $i++;
  
  ?>
		
		
        
        
        
        
        
       
        
          <tr class="light">
            <td height="26"><?php echo $i; ?></td>
            <td><?php echo $rows['user']; ?></td>
            
            <td><?php echo $rows['useric']; ?></td>
            <td><?php echo $rows['subject']; ?></td>
            <td><div align="center"><?php echo $rows['chapter']; ?></div></td>
            <td><div align="center"><?php echo $rows['totalquestion']; ?></div></td>
            <td><div align="center"><?php echo $rows['rightanswer']; ?></div></td>
            <td><div align="center"><?php echo $rows['wronganswer']; ?></div></td>
            <td><div align="center"><?php echo $rows['score']; ?>%</div></td>
            <td><?php echo $rows['time']; ?>&nbsp;</td>

        
        
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