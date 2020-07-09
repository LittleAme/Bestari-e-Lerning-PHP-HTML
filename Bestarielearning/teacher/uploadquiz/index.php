<?php
session_start();
include('../../login/logon.php"');
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

	width: 600px;
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
</style>






</head>
<body id="top">
<div class="wrapper row1">

<div id="topnav">
    <ul>
      <li><a href="../../index.php"><strong>Home</strong></a></li>
      <li><a href="../../subjectlist/"><strong>Subject Notes</strong></a></li>
	  <li><a href="../../teacher/quizlist/index.php"><strong>Quiz List</strong></a></li>
	  <li><a href="../../teacher/studentlist"><strong>Student List</strong></a></li>
	  <li><a href="../../teacher/uploadnotes/"><strong>Upload Notes</strong></a></li>
	  <li  class="active"><a href="../../teacher/uploadquiz/index.php"><strong>Upload Quiz</strong></a></li>
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
   <a href="../../index.php" ><img src="../../images/back.png" width="110" height="34"  /> </a>|&nbsp;&nbsp;UPLOAD QUIZ 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    
    <div class="content" >
  	<h3>Multiple Choice</h3>
    <form action=""  method="post" enctype="multipart/form-data">
    
        
       <strong>Upload by:</strong><br /><br />

        <?php echo $_SESSION['teacher'] ?>
        <input type="hidden" name="uploadby" id="hiddenField" value="<?php echo $_SESSION['teacher'] ?>"/>
        <br />
        <br />
   
  
      <!--==============================================================-->   
  <?php
   $get=mysql_query("SELECT DISTINCT subname FROM subject");
$option = '';
 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['subname'].'">'.$row['subname'].'</option>';
}

?>

       
       <strong>Subject:</strong><br />
        <select name="subjectlist" class="styled-select">
		<?php echo $option; ?>						
		</select>
      
<br />
<br />
       <strong>Chapter:</strong><br />
<input  name="chapterlist" type="text" id="op1" size="28">
<!--==============================================================-->
<br />
<br />  <strong>Please type your new question here</strong><br />

        <textarea id="mcdesc" name="question" style="width:400px;height:95px;"></textarea>
        <br />
      <br />
    <strong>Please create the first answer for the question</strong>
    	<br />
        <input  name="op1" type="text" id="op1" size="25">&nbsp;
          <label style="cursor:pointer; color:#06F;" >
          <input type="radio" name="iscorrect" value="A">(A) Correct Answer?
        </label>
      <br />
    <br />
    <strong>Please create the second answer for the question</strong>
    <br />
        <input  name="op2" type="text" id="op2" size="25">&nbsp;
          <label style="cursor:pointer; color:#06F;">
          <input type="radio" name="iscorrect" value="B">
          (B) Correct Answer?
        </label>
      <br />
    <br />
    <strong>Please create the third answer for the question</strong>
    <br />
        <input  name="op3" type="text" id="op3" size="25">&nbsp;
          <label style="cursor:pointer; color:#06F;">
          <input type="radio" name="iscorrect" value="C">
          (C) Correct Answer?
        </label>
      <br />
    <br />
    <strong>Please create the fourth answer for the question</strong>
    <br />
        <input name="op4" type="text" id="op4" size="25">&nbsp;
          <label style="cursor:pointer; color:#06F;">
          <input type="radio" name="iscorrect" value="D">
          (D) Correct Answer
        </label>
      <br />
    <br />

    <input type="submit" class="button" name="submitquestion" value="Add To Quiz">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset"  class="button" value="Reset All">
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
    <!-- ####################################################################################################### --> 
  </div>
</div>
</body>
</html>

<?php
if (isset($_POST['submitquestion']))


{
	$quest = $_POST['question'];
	$sub = $_POST['subjectlist'];
	$chp = $_POST['chapterlist'];
	$quest_by = $_POST['uploadby'];
	$option1 = $_POST['op1'];
	$option2 = $_POST['op2'];
	$option3 = $_POST['op3'];
	$option4 = $_POST['op4'];
	$answer = $_POST['iscorrect'];


	$sql = "INSERT INTO quiz (question , subject , chapter , uploadby , option1, option2, option3, option4, answer ) VALUES ('$quest', '$sub', '$chp', '$quest_by', '$option1', '$option2', '$option3', '$option4', '$answer')";
$result = mysql_query($sql);
	
	if ($result)
	{
		echo ('<script language="javascript">
		alert("Upload quiz successful");
        window.location=("index.php");
		</script>');
	}
	
	else
	{
		echo ('<script language="javascript">
		alert("ERROR!");
        window.location=("index.php");
		</script>');	
	}
	
}

?>






<?php

}

else
{
	
 echo '<script>
        window.location=("../../index.php");
	   </script>';
	
	}
?>