<?php
include('../../login/dbconnect.php');

$id = $_GET['id'];

$sql="DELETE FROM users WHERE id = '$id'";
$result=mysql_query($sql);

if($result)

	{
	echo '<script type="text/javascript">
	alert("Delete Succesful.");
	window.location = "index.php";
	</script>';
	}
	
	else 
	{
		echo "ERROR";
	}
	
	mysql_close();
	?>
