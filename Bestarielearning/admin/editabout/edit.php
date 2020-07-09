<?php
include ('../../login/dbconnect.php');



if(isset($_POST['submit1']))
{
	$target = "../../images/RoomImgFolder/";
$target = $target.basename($_FILES['photo']['name']);
	

	$pic = ($_FILES['photo']['name']);
	
	$sql2="UPDATE aboutus SET imgpath ='$pic'";
	$result2= mysql_query($sql2);
	move_uploaded_file($_FILES['photo']['tmp_name'], $target);
	
if ($result2)
{

	
echo '<script type="text/javascript">	
	alert("Banner updated.");
	window.location = "index.php";
	</script>';
}

else
{
	echo '<script type="text/javascript">	
	alert("ERROR upload new banner.");
	window.location = "index.php";
	</script>';
}
}




if(isset($_POST['submit2']))
{

	$msg = $_POST['contentbox'];
	
	$sql1="UPDATE aboutus SET content='$msg'";
	$result1 = mysql_query($sql1);
	
	if($result1){

echo '<script type="text/javascript">	
	alert("Content updated!.");
	window.location = "index.php";
	</script>';
	}
	
	

else
{echo '<script type="text/javascript">	
	alert("ERROR.");
	window.location = "index.php";
	</script>';
}
}

mysql_close();

?>