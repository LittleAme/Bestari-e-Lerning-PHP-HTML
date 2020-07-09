 <?php
 session_start();
include('../../../login/dbconnect.php');

 if (isset($_SESSION['teacher']))
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
<link rel="stylesheet" href="../../../layout/styles/layout.css" type="text/css" />

<style type="text/css">
.table2 {
  font-size: 16px;
  font-family: Arial, Helvetica, sans-serif;
}

h1.uppercase {
    
	 font-size: 18px;
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

select {
  font-size: 18px;
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
    <div class="fl_right">
 
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="quicknav" class="clear"><a href="../index.php" ><img src="../../../images/back.png" width="110" height="34"  /> </a>|&nbsp;&nbsp;BAHASA MELAYU QUIZ  
    
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
<!--==============================================================-->   
  <?php
   $get=mysql_query("SELECT DISTINCT chapter FROM quiz WHERE subject ='Bahasa Melayu'");
    $option = '';
	
	 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['chapter'].'">'.$row['chapter'].'</option>';
}
?>
    
  <form method="post" action="">
   <h1 class="uppercase">Search by Chapter : 
      <label for="srchchp"></label>
      <select name="srchchp" id="srchchp">
     <?php echo $option; ?>
      </select>
      <input name="srch" type="submit" class="button" value="Search"/>
   

   <input name="showall" type="submit" class="button" value="Show All Chapter"/> </h1>
  </form>
  


  
  
  
    <!-- ####################################################################################################### --> 
  </div>
  
  
  <table width="95%" align="center"  cellpadding="0" cellspacing="0" summary="Summary Here" class="table2" border="1">
        <thead>
          <tr>
            <th width="3%">No</th>
            <th width="5%">Chapter</th>
           
            <th width="19%">Question</th>
            <th width="13%">First Option (A)</th>
            <th width="13%">Second Option(B)</th>
            <th width="13%">Third Option(C)</th>
            <th width="13%">Fourth Option(D)</th>
            <th width="5%">Answer</th>
            <th width="11%">Uploaded by</th>
 <th width="5%">Edit/Delete</th>
 
          </tr>
        </thead>
        <tbody>
 
                <?php
  
  include ('../../../login/dbconnect.php');
  
  
  if(isset($_POST['showall']))
  {
  $sql = "SELECT * FROM quiz WHERE subject = 'Bahasa Melayu'";
  $rs_result = mysql_query($sql);
  }
  
  
  
   if(isset($_POST['srch']))
  {
  $chpter = $_POST['srchchp'];
  
 
   if($chpter==$_POST['srchchp']){
  $sql = "SELECT * FROM quiz WHERE chapter = '$chpter' AND subject ='Bahasa Melayu'";
  $rs_result = mysql_query($sql);
  }
  }
  
  
  else{
  
  $sql = "SELECT * FROM quiz WHERE subject = 'Bahasa Melayu'";
  $rs_result = mysql_query($sql);
  }
  
  $i = 0;
  while ($rows = mysql_fetch_assoc ($rs_result))
  {
  $i++;
  
  ?>
       
       
       
       
        
          <tr class="light">
            <td height="26"><?php echo $i; ?></td>
            <td><div align="center"><?php echo $rows['chapter']; ?></div></td>
            <td><?php echo $rows['question']; ?></td>
            <td><?php echo $rows['option1']; ?></td>
            <td><?php echo $rows['option2']; ?></td>
			<td><?php echo $rows['option3']; ?></td>
            <td><?php echo $rows['option4']; ?></td>
            <td><div align="center"><?php echo $rows['answer']; ?></div></td>
        	<td><?php echo $rows['uploadby']; ?></td>
        <td><a href="deleteupdate.php?qid=<?php echo $rows['quizid']; ?>">Edit/Delete</a></td>
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