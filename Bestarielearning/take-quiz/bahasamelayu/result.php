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
<script>
function showDiv(el1,el2){
	document.getElementById(el1).style.display = 'block';
	document.getElementById(el2).style.display = 'none';
}
</script>

<style>
.table2 {
  font-size: 16px;
  font-family: Arial, Helvetica, sans-serif;
}

h1.uppercase {
    
	 font-size: 25px;
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

.content{
	margin-top:48px;
	margin-left:auto;
	margin-right:auto;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	width:600px;
	border:#333 1px solid;
	border-radius:12px;
	-moz-border-radius:12px;
	padding:12px;
	display:none;
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
<div class="wrapper row4">
  <div id="quicknav" class="clear">
    <div align="center">QUIZ RESULT</div>
  </div>
</div>
<!-- ####################################################################################################### -->


  <?php

if(isset($_POST['checkQuiz'])) 

{
$correctAnswers = 0;
$wrongAnswers = 0;
$questions = '';
$img = '';
$chp = $_POST['chp'];
$sub = 'Bahasa Melayu';
//$unanswered=0;

$idList = join (',', array_map('intval', array_keys($_POST['answer'])));
$sql = "SELECT quizid,question,option1,option2,option3 ,option4 ,answer FROM quiz WHERE quizid IN ($idList) ";
$result = mysql_query($sql) ;
$qno =0;
while (list($id,$q,$op1,$op2,$op3,$op4, $correct) = mysql_fetch_row($result)) 
{
	$qno+=1;
if ($correct == $_POST['answer'][$id]){
		 $correctAnswers +=1;
		 $img = 'true.png';
     }
	//ni kalau nk buat jawapan tak jwp 
//else if	 ($_POST['answer'][$id] =="no_attempt"){
	
	// $unanswered +=1;
	//}
	 
else {
		 $wrongAnswers +=1;
		 $img = 'wrong.png';
     }
	 
	     $questions .= "<tr valign='top'>
		    <td width='1%'>$qno</td>
		    <td width='4%'><div align='left'>$q
			<ul>
			<li>A)&nbsp; $op1</li>
			<li>B)&nbsp; $op2</li>
			<li>C)&nbsp; $op3</li>
			<li>D)&nbsp; $op4</li>
			<br>
			<li>Answer:&nbsp; $correct</li>
			
			</ul></div></td>
		    <td width='1%'><img src='$img'></td>
		    </tr>\n";
	 
	 
}

}
	 $numberOfQs = $correctAnswers + $wrongAnswers;
$score = round(($correctAnswers / $numberOfQs) * 100);


?>




<div class="wrapper row5">
  <div id="container" class="clear">

  <table class="table2" width="500" border="1" align="center">
  <thead> <tr>
    <th scope="col">Users</th>
    <th scope="col">Subject</th>
    <th scope="col">Chapter</th>
  </tr> </thead>
  <tr>
    <td height="23"><div align="center"><?php echo $_SESSION['student'];?>
    <input name="nama" type="hidden" value="<?php echo $_SESSION['student'];?>" />
    
    
    </div></td>
    <td><div align="center"><?php echo $sub;?></div></td>
    <td><div align="center"><?php echo $chp; ?></div></td>
  </tr>
</table>

  
  
  <br />
<br />

  
  <h1 align="center" class="uppercase">&nbsp;</h1>
    <table class="table2" width="505" height="136" border="1" align="center">
      <thead> <tr> 
    <th width="290" height="31" scope="row"><div align="left">Total number of Questions </div></th>
    <td width="199"><div align="center"><?php echo $numberOfQs; ?></div></td>
     </thead>
  
  
  <thead> <tr>
    <th height="31" scope="row"><div align="left">Right answer </div></th>
    <td><div align="center"><?php echo $correctAnswers; ?></div></td>
  </tr> </thead>
  
 <thead> <tr>
    <th height="31" scope="row"><div align="left">Wrong answer</div></th>
    <td><div align="center"><?php echo $wrongAnswers; ?></div></td>
  </tr></thead>
  
  <thead><tr>
    <th height="31" scope="row"><div align="left">Your result</div></th>
    <td><div align="center"><?php echo $score; ?>%</div></td>
  </tr></thead>
</table>

    <br />
  <br />
      
      <div style="width:700px;margin-left:auto;margin-right:auto;text-align:center;">
   <div align="center">   <button class="button" onClick="showDiv('tf', 'mc')">View Question</button>
   
  &nbsp;&nbsp;
    
    <button class="button" onClick="showDiv('mc', 'tf')">Hide</button> 
   
   
   </div>


 <div class="content" id="tf">
 <table border="1" class="table2">
    <?php echo $questions?>
</table>
</div>

 <div  id="mc">
</div>

 </div>
<!--No Answers: //<?php echo $unanswered; ?> <br>-->

   
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
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
</body>
</html>

<?php

$nama =$_SESSION['student'];
$ic =$_SESSION['icnum'];

$sql2 = "INSERT INTO quizscore (user , useric , subject , chapter , totalquestion , rightanswer, wronganswer, score, time ) VALUES ('$nama','$ic', '$sub', '$chp', '$numberOfQs', '$correctAnswers', '$wrongAnswers', '$score', now())";
$result2 = mysql_query($sql2) ;

?>


<?php
  }
  
  else
  {
	    echo '<script language="javascript">
		window.location=("../index.php");
			</script>';
	  
  }
  ?>