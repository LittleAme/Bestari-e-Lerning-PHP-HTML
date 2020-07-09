<?php
include('../../login/dbconnect.php');
include('../../login/logon.php');

if (isset($_GET['down']))
{
	$path = $_GET['down'];
	
	$res = mysql_query("SELECT * FROM notes WHERE file='$path'");
	
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($path).'"');
	header('Content-Length: ' . filesize($path));
	readfile($path);
	
	
}


?>