<?php

include('../../../login/logon.php');
include('../../../login/dbconnect.php');

//---------------------------------------------------------------------	





$id = $_GET['qid'];

$sql = "SELECT * FROM quiz WHERE quizid ='$id'";
$result = mysql_query($sql);
$rows = mysql_fetch_array ($result);

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Bestari@E-Learning</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../../../layout/styles/layout.css" type="text/css" />



<style type="text/css">
.content{
	font-family:Arial, Helvetica, sans-serif;
	font-size: 16px;

	width: 500px;
	border: #333 1px solid;
	border-radius: 12px;
	-moz-border-radius: 12px;
	padding: 12px;
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

.tb4 {
	border: 1px solid #6297BC;
	font-size: 15px;
}

</style>





</head>
<body id="top">
<div class="wrapper row1">
<div id="topnav">
    <ul>
      <li><a href="../../../index.php"><strong>Home</strong></a></li>
      <li><a href="../../../subjectlist/"><strong>Subject Notes</strong></a></li>
	  <li  class="active"><a href="../../../teacher/quizlist/index.php"><strong>Quiz List</strong></a></li>
	  <li><a href="../../../teacher/studentlist"><strong>Student List</strong></a></li>
	  <li><a href="../../../teacher/uploadnotes/"><strong>Upload Notes</strong></a></li>
	  <li ><a href="../../../teacher/uploadquiz/index.php"><strong>Upload Quiz</strong></a></li>
	  <li><a href="../../../teacher/managequizresult/index.php"><strong>Manage Student Result</strong></a></li>
      <li><a href="../../../about-us/index.php"><strong>About Us</strong></a></li>
	  <li><a href="../../../userinfo/index.php"><strong>Account Information</strong></a></li>
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
    <a href="index.php" ><img src="../../../images/back.png" width="110" height="34"  /> </a>| EDIT QUESTION</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->


 <div class="content" >
  	<h3>Multiple Choice</h3>
    <form action=""  method="post" >
    
        <br />
       <strong>Upload by:</strong><br /><br />

        <?php echo $rows['uploadby']; ?>
        <input type="hidden" name="uploadby" id="hiddenField" value="<?php echo $rows['uploadby']; ?>" />
<br />
   
  
       <br />
       <strong>Chapter:</strong><br />
        <input type="text" class="tb4"  name="chapter" size="20" value="<?php echo $rows['chapter']; ?>">
       <br />
       
       
          <br />
       <strong>Subject:</strong><br /><br />
        <?php echo $rows['subject']; ?>
        <input type="hidden" name="subject" id="hiddenField" value="<?php echo $rows['subject']; ?>" />
       <br />

 <br />  
 <strong>Question:</strong><br />

        <textarea id="mcdesc" class="tb4" name="question" style="width:400px;height:95px;"><?php echo $rows['question']; ?></textarea>
        <br />
      <br />
    <strong> First answer for the question</strong>:
    	<br />
        <input  name="op1" class="tb4" type="text" id="op1" size="25"  value="<?php echo $rows['option1']; ?>"> &nbsp;
          <label style="cursor:pointer; color:#06F;" >
         
        </label>
        <br />
    <br />
    <strong>The second answer for the question:</strong><br />
        <input  name="op2" class="tb4" type="text" id="op2" size="25" value="<?php echo $rows['option2']; ?>">&nbsp;
          <label style="cursor:pointer; color:#06F;">
        
        </label>
      <br />
    <br />
    <strong> The third answer for the question</strong>
    :<br />
        <input  name="op3" class="tb4" type="text" id="op3" size="25" value="<?php echo $rows['option3']; ?>">&nbsp;
          <label style="cursor:pointer; color:#06F;">
          
        </label>
      <br />
    <br />
    <strong> The fourth answer for the question</strong>
    :<br />
        <input name="op4" class="tb4" type="text" id="op4" size="25" value="<?php echo $rows['option4']; ?>">&nbsp;
          <label style="cursor:pointer; color:#06F;">
         
        </label>
        
        <br />

             <br />
       <strong>Answer:</strong><br />
        <input name="answer" class="tb4" type="text" id="op4" size="1" value="<?php echo $rows['answer']; ?>">
       <br />      
      <br /> 
  

    <input type="submit" class="button" name="updatebtn" value="Update">
   &nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" class="button"  name="deletebtn" value="Delete Question">
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

if (isset($_POST['deletebtn']))
{
$sql1="DELETE FROM quiz WHERE quizid = '$id'";
$result1=mysql_query($sql1);

if($result1)

	{
	echo '<script type="text/javascript">
	alert("Delete Succesful.");
	window.location = "index.php";
	</script>';
	}
	
	else 
	{
		echo '<script type="text/javascript">
	alert("ERROR DELETE!");
	window.location = "index.php";
	</script>';
	}
}

?>

<?php

if (isset($_POST['updatebtn']))

{
	$quest = $_POST['question'];
	$chp = $_POST['chapter'];
	$sbj = $_POST['subject'];
	$quest_by = $_POST['uploadby'];
	$option1 = $_POST['op1'];
	$option2 = $_POST['op2'];
	$option3 = $_POST['op3'];
	$option4 = $_POST['op4'];
	$answer = $_POST['answer'];
	
	$sql2 = "UPDATE quiz SET subject='$sbj', question='$quest', chapter='$chp', uploadby='$quest_by', option1='$option1', option2='$option2', option3='$option3', option4='$option4', answer='$answer' WHERE quizid ='$id'" ;
	
	$result2 = mysql_query($sql2);
	
	if ($result2)
	{
		
		echo ('<script language="javascript">
		alert("Update Successful!");
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
