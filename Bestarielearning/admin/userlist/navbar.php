<?php

include('../../login/logon.php');
?>
<?php
 if(isset($_SESSION['student'])) { ?>
 
<div id="topnav">
    <ul>
      <li class="active"><a href="index.php"><strong>Home</strong></a></li>
      <li><a href="subjectlist/"><strong>Subject List</strong></a></li>
      <li><a href="repair.php"><strong>Take A Quiz</strong></a></li>
      <li><a href="about-us/index.php"><strong>About Us</strong></a></li>
      <li><a href="userinfo/index.php"><strong>Account Information</strong></a></li>
      <li class="last"><a href="index.php?logout=1"><strong>Logout</strong></a></li>
         <li style="float:right"> <b> Welcome </b>  <?php echo $_SESSION['txtfieldUsername'] ?>  </li>
      
      
    </ul>
  </div>

 <?php } 
  //--------------------------------------------------------------------------
 else if (isset($_SESSION['admin'])) { ?>
 
 <div id="topnav">
    <ul>
      <li ><a href="../../index.php"><strong>Home</strong></a></li>
      <li><a href="../../subjectlist/"><strong>Subject List</strong></a></li>
	  <li class="active"><a href="../../admin/userlist/"><strong>User List</strong></a></li>
	  <li><a href="../../admin/newusers/index.php"><strong>Register New Users</strong></a></li>
      <li><a href="../../admin/editabout/index.php"><strong>Edit About</strong></a></li>
	  <li><a href="../../userinfo/index.php"><strong>Account Information</strong></a></li>
	  <li><a href="../../about-us/index.php"><strong>About Us</strong></a></li>
      <li class="last"><a href="index.php?logout=1"><strong>Logout</strong></a></li>
      <li style="float:right"> <b> Welcome </b>  <?php echo $_SESSION['txtfieldUsername'] ?>  </li>
	
    </ul>

  </div>


 
 <?php }
 
 //--------------------------------------------------------------------------
 
 else if (isset($_SESSION['teacher'])) { ?>
 
 <div id="topnav">
    <ul>
      <li class="active"><a href="index.php"><strong>Home</strong></a></li>
      <li><a href="subjectlist/"><strong>Subject List</strong></a></li>
	  <li><a href="repair.php"><strong>Quiz List</strong></a></li>
	  <li><a href="teacher/studentlist"><strong>Student List</strong></a></li>
	  <li><a href="teacher/uploadsubject/"><strong>Upload New Topic</strong></a></li>
	  <li><a href="teacher/uploadquiz/index.php"><strong>Upload New Quiz</strong></a></li>
	  <li><a href="repair.php"><strong>Manage Student Result</strong></a></li>
      <li><a href="about-us/index.php"><strong>About Us</strong></a></li>
	  <li><a href="userinfo/index.php"><strong>Account Information</strong></a></li>
      <li class="last"><a href="index.php?logout=1"><strong>Logout</strong></a></li>
         <li style="float:right"> <b> Welcome </b>  <?php echo $_SESSION['txtfieldUsername'] ?>  </li>
      
    </ul>
  </div>
 
 
 <?php }
 
 //--------------------------------------------------------------------------
 
 else { ?>
     <div id="topnav">
    <ul>
 <li class="active"><a href="index.php"><strong>Home</strong></a></li>
      <li><a href="subjectlist/"><strong>Subject List</strong></a></li>
      <li><a href="take-quiz/"><strong>Take A Quiz</strong></a></li>
      <li ><a href="about-us/index.php"><strong>About Us</strong></a></li>
      <li ><a href="login/index.php"><strong>Login</strong></a></li>
      <li class="last"><a href="login/index.php#toregister"><strong>Register</strong></a></li>
    </ul>
  </div>
  
    <?php } ?>
	
   