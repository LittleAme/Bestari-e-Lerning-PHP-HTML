<?php
session_start();
include('../../login/logon.php"');
include('../../login/dbconnect.php"');

if(isset($_SESSION['teacher']))
{




	
if(isset($_POST['submitquestion']))
{
	$sub = $_POST['subjectlist'];
	$sub_chap = $_POST['chapterlist'];
	$sub_title = $_POST['subjecttitle'];
	$quest_by = $_POST['uploadby'];
	$name = $_FILES['myfile']['name'];
	$tmp_name = $_FILES['myfile']['tmp_name'];
	
	
		if($sub=='Mathematics')
{
	$location = "mathematics/files/$name";
}
	
else if ($sub=='Science')
{
	$location = "science/files/$name";
}

else if ($sub=='English')
{
	$location = "english/files/$name";
}


else if ($sub=='Bahasa Melayu')
{
	$location = "bahasamelayu/files/$name";
}

if($name)
{
	

	
	
	move_uploaded_file($tmp_name,$location);
	 mysql_query ("INSERT INTO notes (subject,title,chapter,uploadby,file) VALUES ('$sub', '$sub_title','$sub_chap','$quest_by','$location')");
	


echo ('<script language="javascript">
		alert("Upload Successful!");
		window.location=("index.php");
		</script>'
	  );


}
else
die("Please select a file!");
}

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
	width: 350px;
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
	  <li   class="active"><a href="../../teacher/uploadnotes/"><strong>Upload Notes</strong></a></li>
	  <li><a href="../../teacher/uploadquiz/index.php"><strong>Upload Quiz</strong></a></li>
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
   <a href="../../index.php" ><img src="../../images/back.png" width="110" height="34"  /> </a>|&nbsp;&nbsp;UPLOAD NOTES</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->



<div class="content" >
  	
    <form action="index.php"  method="post" enctype="multipart/form-data">
    
        <br />
       <strong>Upload by:</strong><br />
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
<input name="chapterlist" type="text" size="25" />
<!--==============================================================-->


<br />




 <br />  
 <strong>Subject title:</strong><br />
<input name="subjecttitle" type="text" size="40" />
        <br />
      <br />
    <strong>File attachment:</strong>
    	<br />
    	<input type="file" name="myfile" id="fileField" size="30" />
    	&nbsp;<br />
        <br />
        <br />
   

    <input type="submit" name="submitquestion" class= "button"value="Upload!">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" class= "button" value="Reset All!">
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
        window.location=("../../index.php");
	   </script>';
	
	}
?>