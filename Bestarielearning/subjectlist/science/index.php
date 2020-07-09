<?php
session_start();
include('../../login/dbconnect.php');
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
<!-- 3 Column Stylesheet Added To The Page And Not To The Layout.css -->
<link rel="stylesheet" href="../../layout/styles/3_column.css" type="text/css" />

<style type="text/css">
.table2 {
  font-size: 14px;
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
  font-size: 15px;
}





</style>



</head>
<body id="top">
<div class="wrapper row1">
<?php
include('navbar.php');
?>
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
    <a href="../index.php" ><img src="../../images/back.png" width="110" height="34"  /> </a>|&nbsp;&nbsp;SCIENCE</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### --><!-- ############ -->
    <div id="content">
      <div class="imgholder"><img src="../../images/sciencelogo.jpg" alt=""  height="215" width="645"/></div>
     <br />
    

     
       <?php
   $get=mysql_query("SELECT DISTINCT chapter FROM notes WHERE subject ='Science'");
    $option = '';
	
	 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option value = "'.$row['chapter'].'">'.'Chapter : '.$row['chapter'].'</option>';
}
?>
     
     
     
     
     
     
<form action="" method="post">
      <h1 class="uppercase">Search by chapter:
        <select name="srchchp" id="srchchp">
          <?php echo $option; ?>
        </select>
<input name="srch" type="submit" class="button" value="Search"/>&nbsp;&nbsp;&nbsp;<input name="showall" type="submit" class="button" value="Show All Chapter"/></h1>
</form>

<br />

   <?php
  
 if(isset($_SESSION['admin'] ) || isset($_SESSION['teacher'] ) )
 { 
?>

<table width="100%" class="table2" summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
          <th width="8%">No. </th>
            <th width="9%">Chapter </th>
            <th width="28%">Title</th>
            <th width="15%">Download</th>
            <th width="28%">Upload by</th>
			<th width="12%">Delete</th>
          </tr>
        </thead>
        <tbody>
        
        
<?php

if(isset($_POST['showall']))
  {
  $sql = "SELECT * FROM notes WHERE subject = 'Science'";
  $rs_result = mysql_query($sql);
  }
  
   if(isset($_POST['srch']))
{
  $chpter = $_POST['srchchp'];
  
  if($chpter==$_POST['srchchp'])
  {
  $sql = "SELECT * FROM notes WHERE chapter = '$chpter' AND subject ='Science'";
  $rs_result = mysql_query($sql);
  }
}

  else{
$sql = "SELECT * FROM notes WHERE subject = 'Science'";
  $rs_result = mysql_query($sql);
  }



$i = 0;
while ($row = mysql_fetch_assoc ($rs_result))
{
$i++;
?>

          <tr class="light">
          <td><div align="center"><?php echo $i; ?></div></td>
            <td><div align="center"><?php echo $row['chapter'] ?></div></td>
            <td><?php echo $row['title'] ?></td>
            <td><a href="download.php?down=../../teacher/uploadnotes/<?php echo $row['file']; ?>">Download</a></td>
            <td><?php echo $row['uploadby'] ?></td>
			<td><a href="delete.php?id=<?php echo $row['noteid']; ?>">Delete</a></td>
          </tr>
        
        </tbody>
        <?php
		}
		?>
        
        
    </table>


 <?php 
 } 
 
 //*****************************************************************************************************
 
  else { 

  ?>
 

<table width="100%" class="table2" summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
          <th width="9%">No. </th>
            <th width="9%">Chapter </th>
            <th width="35%">Title</th>
            <th width="16%">Download</th>
            <th width="31%">Upload by</th>
          </tr>
        </thead>
        <tbody>
        
 <?php

if(isset($_POST['showall']))
  {
  $sql = "SELECT * FROM notes WHERE subject = 'Science'";
  $rs_result = mysql_query($sql);
  }
  
if(isset($_POST['srch']))
{
  $chpter = $_POST['srchchp'];
  
  if($chpter==$_POST['srchchp'])
  {
  $sql = "SELECT * FROM notes WHERE chapter = '$chpter' AND subject ='Science'";
  $rs_result = mysql_query($sql);
  }
}



  else{
$sql = "SELECT * FROM notes WHERE subject = 'Science'";
  $rs_result = mysql_query($sql);
  }
	 
	 
 $i = 0;
  while ($row = mysql_fetch_assoc ($rs_result))
  {
  $i++;
        ?>

          <tr class="light">
         <td> <div align="center"><?php echo $i; ?></div></td>
            <td><div align="center"><?php echo $row['chapter'] ?></div></td>
            <td><?php echo $row['title'] ?></td>
            <td><a href="download.php?down=../../teacher/uploadnotes/<?php echo $row['file']; ?>">Download</a></td>
            <td><?php echo $row['uploadby'] ?></td>
          </tr>
        
        </tbody>
      
   <?php } 
  } //**********************************************************************************************
   ?>

   </table>
  
   
      
      
      
    </div>
    <div id="right_column">
      <div class="holder">
        <h2 class="title">Other Subject :</h2>
        
        <div class="imgholder"><a href="../english/index.php"><img src="../../images/englishlogo.jpg" alt="" height="90" width="240" /></a></div>
        
          <div class="imgholder"><a href="../bahasamelayu/index.php"><img src="../../images/bahsamelayulogo.png" alt="gmba bm" height="90" width="240" /></a></div>
        
        
        <div class="imgholder last"><a href="../mathematics/index.php"><img src="../../images/mathematicslogo.jpg" height="90" width="240" alt="" /></a></div>
      </div>
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