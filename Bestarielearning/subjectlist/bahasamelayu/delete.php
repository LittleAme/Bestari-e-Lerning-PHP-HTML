<?php

include('../../login/logon.php');
include('../../login/dbconnect.php');

$id = $_GET['id'];

$sql="DELETE FROM notes WHERE noteid = '$id'";
$result=mysql_query($sql);

if($result)

	{
			echo '<script type="text/javascript">
	alert("Delete Successful!");
	window.location = "index.php";
	</script>';	
		
	}
	
	else 
	{
		echo "ERROR";
	}
	
	mysql_close();
	?>




