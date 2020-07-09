
<?php
session_start();
include('../login/dbconnect.php');

?>
<?php
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
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<link rel="stylesheet" href="../layout/styles/3_column.css" type="text/css" />

<style>

.content{
	margin-top:48px;
	margin-left:auto;
	margin-right:auto;
	width:780px;
	border:#333 1px solid;
	border-radius:12px;
	-moz-border-radius:12px;
	padding:12px;
	display:none;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 25px;
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
  font-family:Arial, Helvetica, sans-serif;
  size:20;
}
.table2{
	  font-size: 25px;
}


</style>









</head>
<body id="top">
<div class="wrapper row1">
<div id="topnav">
    <ul>
      <li><a href="../index.php"><strong>Home</strong></a></li>
      <li><a href="../subjectlist/"><strong>Subject Notes</strong></a></li>
      <li class="active"><a href="../take-quiz/"><strong>Take A Quiz</strong></a></li>
      <li><a href="../student/quiz-result/index.php"><strong>View Quiz Result</strong></a></li>
	  <li><a href="../userinfo/index.php"><strong>Account Information</strong></a></li>
	  <li><a href="../about-us/index.php"><strong>About Us</strong></a></li>
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
  <div id="quicknav" class="clear"> <a href="../index.php" ><img src="../images/back.png" width="110" height="34"  /> </a>|&nbsp;QUIZ LIST</div>
</div>
<!-- ####################################################################################################### -->


<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->

<div id="content2">

<?php
$get=mysql_query("SELECT DISTINCT chapter FROM quiz WHERE subject ='Science'");
    $option = '';
	
	 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['chapter'].'">'.'Chapter '.$row['chapter'].'</option>';
}
?>
<form action="science/index.php" method="post">
<table width="400" class="table2" height="272" border="0" align="left">
  
  <thead><tr>
    <th width="237" height="24" scope="col"><div align="center">SCIENCE</div></th>
  </tr></thead>
  
  <th width="237" height="24" scope="col"><h1><div align="center"><img src="../images/science.png" width="250" height="100" /></div></h1></th>
  
  <tr>
    <th height="54">
      <div align="center">
       <h1>Chapter : <select name="chapterr">
          <?php echo $option; ?>
        </select></h1>
      </div>

    </tr>
  <tr>
    <tH height="46">
      <div align="center">
        <input class="button"  name="Submit" type="submit" value="Take Quiz!" />
        </td>
      </div>
    
  </tr>
</table>
</form>


<?php
$get2=mysql_query("SELECT DISTINCT chapter FROM quiz WHERE subject ='English'");
    $option2 = '';
	
	 while($row2 = mysql_fetch_assoc($get2))
{
  $option2 .= '<option value = "'.$row2['chapter'].'">'.'Chapter '.$row2['chapter'].'</option>';
}
?>




<form action="english/index.php" method="post">
<table width="400" class="table2" height="272" border="0" align="left">
  
  <thead><tr>
    <th width="237" height="24" scope="col"><div align="center">ENGLISH</div></th>
  </tr></thead>
  
  <th width="237" height="24" scope="col"><h1><div align="center"><img src="../images/english.png" width="250" height="100" /></div></h1></th>
  
  <tr>
    <th height="54">
      <div align="center">
       <h1>Chapter : <select name="chapterr">
          <?php echo $option2; ?>
        </select></h1>
      </div>

    </tr>
  <tr>
    <tH height="46">
      <div align="center">
        <input class="button"  name="Submit" type="submit" value="Take Quiz!" />
        </td>
      </div>
    
  </tr>
</table>
</form>

</div>
  
  
  <?php
$get3=mysql_query("SELECT DISTINCT chapter FROM quiz WHERE subject ='Mathematics'");
    $option3 = '';
	
	 while($row3 = mysql_fetch_assoc($get3))
{
  $option3 .= '<option value = "'.$row3['chapter'].'">'.'Chapter '.$row3['chapter'].'</option>';
}
?>
  
<div id="right_column2">
<form action="mathematics/index.php" method="post">
 <table width="400" class="table2" height="272" border="0" align="left">
  
  <thead><tr>
    <th width="237" height="24" scope="col"><div align="center">MATHEMATICS</div></th>
  </tr></thead>
  
  <th width="237" height="24" scope="col"><h1><div align="center"><img src="../images/math.png" width="250" height="100" /></div></h1></th>
  
  <tr>
    <th height="54">
      <div align="center">
       <h1>Chapter : <select name="chapterr">
          <?php echo $option3; ?>
        </select></h1>
      </div>

    </tr>
  <tr>
    <tH height="46">
      <div align="center">
        <input class="button"  name="Submit" type="submit" value="Take Quiz!" />
        </td>
      </div>
    
  </tr>
</table></form>

      <?php
$get4=mysql_query("SELECT DISTINCT chapter FROM quiz WHERE subject ='Bahasa Melayu'");
    $option4 = '';
	
	 while($row4 = mysql_fetch_assoc($get4))
{
  $option4 .= '<option value = "'.$row4['chapter'].'">'.'Chapter '.$row4['chapter'].'</option>';
}
?>
    
    
 <form action="bahasamelayu/index.php" method="post">   
    <table width="400" class="table2" height="272" border="0" align="left">
  
  <thead><tr>
    <th width="237" height="24" scope="col"><div align="center">BAHASA MELAYU</div></th>
  </tr></thead>
  
  <th width="237" height="24" scope="col"><h1><div align="center"><img src="../images/bahasamelayu.png" width="250" height="100" /></div></h1></th>
  
  <tr>
    <th height="54">
      <div align="center">
       <h1>Chapter : <select name="chapterr">
          <?php echo $option4; ?>
        </select></h1>
      </div>

    </tr>
  <tr>
    <tH height="46">
      <div align="center">
        <input class="button"  name="Submit" type="submit" value="Take Quiz!" />
        </td>
      </div>
    
  </tr>
</table>
</form>
</div>
  
  
  
  
  
  
  
  
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
    echo '<script language="javascript">
		alert("You need to login first before access this page");
			window.location=("../index.php");
			</script>';
	  
  }
  ?>

