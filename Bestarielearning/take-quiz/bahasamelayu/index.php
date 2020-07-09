
<?php
include('../../login/dbconnect.php');

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
<link rel="stylesheet" href="../../layout/styles/layout.css" type="text/css" />


<style>
.content{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;

	width: 750px;
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

</style>








</head>
<body id="top">
<div class="wrapper row1">

<div id="topnav">
    <ul>
      <li><a href="../../index.php"><strong>Home</strong></a></li>
      <li ><a href="../../subjectlist/"><strong>Subject Notes</strong></a></li>
      <li class="active"><a href="../../take-quiz/"><strong>Take A Quiz</strong></a></li>
      <li><a href="../../student/quiz-result/index.php"><strong>View Quiz Result</strong></a></li>
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
<?php
$chapterrr=$_POST['chapterr'];
?>


<div class="wrapper row4">
  <div id="quicknav" class="clear"> <a href="../index.php" ><img src="../../images/back.png" width="110" height="34"  /> </a>|&nbsp;BAHASA MELAYU QUIZ CHAPTER <?php echo $chapterrr;?><input name="cate" type="hidden" value="<?php echo $chapterrr;?>" /></div>
</div>
<!-- ####################################################################################################### -->




<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
<div class="content" >
<form method="post" action="result.php">



<?php 


$chapterrr=$_POST['chapterr'];
$questionNumber = 1;
$query = mysql_query("SELECT * FROM quiz WHERE chapter = '$chapterrr' AND subject ='Bahasa Melayu' ORDER BY RAND()");

while ($result = mysql_fetch_array($query)) { ?>

    
     <p>
 
	 <b><?php echo $questionNumber . ") " . $result['question'] . "<br>"; ?></b><br />

	 a)	&nbsp;<input type="radio" value="A"  id='radio1_<?php echo $result['quizid'];?>' name="answer[<?php echo $result['quizid'] ?>]"  /> <?php echo $result['option1']; ?> <br>
	 b)	&nbsp;<input type="radio" value="B"  id='radio1_<?php echo $result['quizid'];?>' name="answer[<?php echo $result['quizid']  ?>]" />  <?php echo $result['option2']; ?> <br>
	 c)	&nbsp;<input type="radio" value="C"  id='radio1_<?php echo $result['quizid'];?>' name="answer[<?php echo $result['quizid'] ?>]"  /> <?php echo $result['option3']; ?> <br>
	 d) &nbsp;<input type="radio" value="D"  id='radio1_<?php echo $result['quizid'];?>' name="answer[<?php echo $result['quizid'] ?>]"  /> <?php echo $result['option4']; ?> <br />
     
     <input type="radio" checked="checked" style="display:none" value="no_attempt" name="answer[<?php echo $result['quizid']; ?>]" />

     
     
	 <h1></h1>
	 </p>
<?php
$questionNumber +=1;
}
?>
<input type="submit" class="button" name="checkQuiz" value="Submit Quiz">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" class="button"  value="Reset All Answer">

<input name="chp" type="hidden" value="<?php echo $chapterrr;?>" />


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
	    echo '<script>
			window.location=("../index.php");
			</script>';
	  
  }
  ?>