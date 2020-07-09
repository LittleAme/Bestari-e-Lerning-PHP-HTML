<?php
include('../login/dbconnect.php');
?>
<?php
 if(isset($_SESSION['student'])) { ?>
 
<div id="topnav">
    <ul>
      <li><a href="../index.php"><strong>Home</strong></a></li>
      <li><a href="../subjectlist/"><strong>Subject Notes</strong></a></li>
      <li><a href="../take-quiz/"><strong>Take A Quiz</strong></a></li>
      <li><a href="../student/quiz-result/index.php"><strong>View Quiz Result</strong></a></li>
	  <li><a href="../userinfo/index.php"><strong>Account Information</strong></a></li>
	  <li  class="active"><a href="../about-us/index.php"><strong>About Us</strong></a></li>
      <li class="last"><a href="index.php?logout=1"><strong>Logout</strong></a></li>
         <li style="float:right"> <b> Welcome </b>  <?php echo $_SESSION['user'] ?>  </li>
      
      
    </ul>
  </div>

 <?php } 
  //--------------------------------------------------------------------------
 else if (isset($_SESSION['admin'])) { ?>
 
 <div id="topnav">
    <ul>
      <li><a href="../index.php"><strong>Home</strong></a></li>
      <li><a href="../subjectlist/"><strong>Subject Notes</strong></a></li>
	  <li><a href="../admin/userlist/"><strong>User List</strong></a></li>
	  <li><a href="../admin/newusers/index.php"><strong>Register New Users</strong></a></li>
	  <li><a href="../userinfo/index.php"><strong>Account Information</strong></a></li>
      <li><a href="../admin/editabout/index.php"><strong>Edit About</strong></a></li>
	  <li  class="active"><a href="../about-us/index.php"><strong>About Us</strong></a></li>
      <li class="last"><a href="index.php?logout=1"><strong>Logout</strong></a></li>
      <li style="float:right"> <b> Welcome </b>  <?php echo $_SESSION['user'] ?>  </li>
	
    </ul>

  </div>


 
 <?php }
 
 //--------------------------------------------------------------------------
 
 else if (isset($_SESSION['teacher'])) { ?>
 
 <div id="topnav">
    <ul>
      <li><a href="../index.php"><strong>Home</strong></a></li>
      <li><a href="../subjectlist/"><strong>Subject Notes</strong></a></li>
	  <li><a href="../teacher/quizlist/index.php"><strong>Quiz List</strong></a></li>
	  <li><a href="../teacher/studentlist"><strong>Student List</strong></a></li>
	  <li><a href="../teacher/uploadnotes/"><strong>Upload Notes</strong></a></li>
	  <li><a href="../teacher/uploadquiz/index.php"><strong>Upload Quiz</strong></a></li>
	  <li><a href="../teacher/managequizresult/index.php"><strong>Manage Student Result</strong></a></li>
      <li  class="active"><a href="../about-us/index.php"><strong>About Us</strong></a></li>
	  <li><a href="../userinfo/index.php"><strong>Account Information</strong></a></li>
      <li class="last"><a href="index.php?logout=1"><strong>Logout</strong></a></li>
         <li style="float:right"> <b> Welcome </b>  <?php echo $_SESSION['user'] ?>  </li>
      
    </ul>
  </div>
 
 
 <?php }
 
 //--------------------------------------------------------------------------
 
 else { ?>
     <div id="topnav">
    <ul>
 <li><a href="../index.php"><strong>Home</strong></a></li>
      <li><a href="../subjectlist/"><strong>Subject Notes</strong></a></li>
      <li><a href="../take-quiz/"><strong>Take A Quiz</strong></a></li>
      <li class="active" ><a href="../about-us/index.php"><strong>About Us</strong></a></li>
      <li ><a href="../login/index.php#toregister"><strong>Register New Student</strong></a></li>
        <li class="last" ><a href="../login/index.php"><strong>Login</strong></a></li>
    </ul>
  </div>
  
    <?php } ?>
	
   