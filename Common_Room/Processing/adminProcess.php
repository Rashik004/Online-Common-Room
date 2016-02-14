<?php
	ob_start();
	session_start();
	include 'db_constant.php';
	include 'functions.php';
	$id=$_GET['id'];
	if($_GET['accept']=='no')
	{
		$sql="DELETE FROM login WHERE id='$id' AND enabled=0";
	}
	else
		$sql="UPDATE login SET enabled=1 WHERE id='$id'";
	mysql_query($sql);
	header('Location:../admin.php');

?>